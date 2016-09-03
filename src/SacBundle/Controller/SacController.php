<?php

namespace SacBundle\Controller;

use Doctrine\Common\Collections\ArrayCollection;
use SacBundle\Entity\Cliente;
use SacBundle\Entity\Pedido;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use SacBundle\Entity\Chamado;
use SacBundle\Form\ChamadoType;
use Symfony\Component\HttpFoundation\Response;


class SacController extends Controller
{
    /**
     * @Route("/", name="sac")
     * @Template()
     */
    public function indexAction()
    {
        return [];
    }

    /**
     * Creates a new Chamado entity.
     *
     * @Route("/sac/chamado/new", name="sac_new")
     * @Method({"GET", "POST"})
     * @Template()
     */
    public function newAction(Request $request)
    {
        list($entity, $form) = $this->createCreateForm($request);
        $form->handleRequest($request);

        $translated = $this->get('translator');
        $session = $this->get('session');
        $retorno =  [
            'entity' => $entity,
            'form' => $form->createView()
        ];
        if ($form->isSubmitted() && $form->isValid()) {
            try{
                $this->get('sac.service.sac')->save($entity);
            }catch(\Exception $e){
                $session->getFlashBag()->add('error',
                    $translated->transChoice('msg.error.cadastro',0,array(),'messages')
                    //. ' ' . $e->getMessage()
                );
                return $retorno;
            }
            $session->getFlashBag()->add('sucesso',
                $translated->transChoice('msg.sucess.cadastro',0,array(),'messages')
            );
            $this->redirectToRoute('sac_new');
        }

        return $retorno;
    }

    /**
     * @return array
     */
    private function createCreateForm(Request $request)
    {
        $chamado = new Chamado();
        $pedido = new Pedido();
        $cliente = new Cliente();

        $translated = $this->get('translator');
        $session = $this->get('session');

        if($request->getMethod() == "POST"){
            $objetos = [$chamado,$cliente];
            try{
                $chamado = $this->get('sac.service.sac')->preparChamado($objetos,$request->request->get('chamado'));
            }catch(\Exception $e){
                $session->getFlashBag()->add('error',
                    $translated->transChoice('msg.error.cadastro',0,array(),'messages') . ' - ' .
                    $e->getMessage()
                );
                $this->redirectToRoute('sac_new');
            }
        }else{
            $chamado->setCliente($cliente);
            $chamado->setPedido($pedido);
        }

        $form = $this->createForm('SacBundle\Form\ChamadoType', $chamado, array(
            'action' => $this->generateUrl('sac_new'),
            'method' => 'POST'
        ));
        return array($chamado, $form);
    }

    /**
     * Verificar se o número do pedido existe
     *
     * @Route("/sac/ajax/verifica-num-pedido", name="verificar-pedido")
     * @Method("POST")
     */
    public function verificaPedido(Request $request)
    {
        $response = new Response();
        $response->headers->set('Content-Type', 'application/json');

        $post = json_decode($request->getContent());
        $pedido = new Pedido();
        $pedido->setNumPedido((int)$post->numPedido);

        $retorno = $this->get('sac.service.sac')->verificarNumPedido($pedido);

        return $response->setContent(json_encode($retorno));
    }

    /**
     * Verificar se o email do cliente existe
     *
     * @Route("/sac/ajax/verifica-cliente-email", name="verificar-cliente-email")
     * @Method("POST")
     */
    public function verificaClienteEmail(Request $request)
    {
        $response = new Response();
        $response->headers->set('Content-Type', 'application/json');

        $post = json_decode($request->getContent());
        $cliente = new Cliente();

        $cliente->setEmail((string)$post->cliente->email);
        $cliente = $this->get('sac.service.sac')->verificarClienteEmail($cliente);

        return $response->setContent(json_encode($cliente));
    }

}
