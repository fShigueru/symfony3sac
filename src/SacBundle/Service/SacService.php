<?php
/**
 * Doc Blocks estão na interface ISacService
 */
namespace SacBundle\Service;


use Doctrine\ORM\EntityManagerInterface;
use SacBundle\Entity\IChamado;
use SacBundle\Entity\ICliente;
use SacBundle\Entity\IPedido;
use Symfony\Component\Translation\Translator;

class SacService implements ISacService
{

    private $em;
    private $translator;

    public function __construct(EntityManagerInterface $em, Translator $translator)
    {
        $this->em = $em;
        $this->translator = $translator;
    }

    public function save(IChamado $chamado)
    {
        $this->em->persist($chamado);
        $this->em->flush();
    }

    public function verificarNumPedido(IPedido $pedido)
    {
        $pedido = $this->em->getRepository('SacBundle:Pedido')->findOneByNumPedido($pedido->getNumPedido());
        $retorno = ['status' => true];
        if(!$pedido){
            $retorno['msg'] = $this->translator->transChoice('msg.error.pedido.existe',0,[],'messages');
            $retorno['status'] = false;
        }
        return $retorno;
    }

    public function verificarClienteEmail(ICliente $cliente)
    {
        $cliente = $this->em->getRepository('SacBundle:Cliente')->findOneByEmail($cliente->getEmail());
        if($cliente){
            $nome =  $cliente->getNome();
            $cliente = null;
            $cliente['nome'] = $nome;
        }
        return $cliente;
    }

    public function preparChamado(array $objetos, $params)
    {
        list($chamado, $cliente) = $objetos;

        $pedido = $this->em->getRepository('SacBundle:Pedido')->findOneByNumPedido($params['pedido']['numPedido']);
        if(!$pedido)
            throw new \Exception($this->translator->transChoice('msg.error.pedido.num.existe',0,[],'messages'));

        $chamado->setPedido($pedido);

        $clientePorEmail = $this->em->getRepository('SacBundle:Cliente')->findOneByEmail($params['cliente']['email']);
        if($clientePorEmail)
            $cliente = $clientePorEmail;

        $chamado->setCliente($cliente);
        $chamado->setPedido($pedido);

        return $chamado;
    }
}