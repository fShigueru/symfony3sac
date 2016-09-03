<?php

namespace SacBundle\Controller;

use SacBundle\Entity\Cliente;
use SacBundle\Entity\Pedido;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use SacBundle\Entity\Chamado;
use SacBundle\Form\ChamadoType;

/**
 * Chamado controller.
 *
 * @Route("/chamado")
 */
class ChamadoController extends Controller
{
    /**
     * Lists all Chamado entities.
     *
     * @Route("/", name="chamado_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $chamados = $em->getRepository('SacBundle:Chamado')->findAll();

        return $this->render('chamado/index.html.twig', array(
            'chamados' => $chamados,
        ));
    }

    /**
     *
     * @Route("/new", name="chamado_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        dump($request);exit;
        $chamado = new Chamado();
        $pedido = new Pedido();
        $cliente = new Cliente();

        $pedido->setCliente($cliente);
        $chamado->setPedidos($pedido);

        $form = $this->createForm('SacBundle\Form\ChamadoType', $chamado);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($chamado);
            $em->flush();

            return $this->redirectToRoute('chamado_show', array('id' => $chamado->getId()));
        }

        return $this->render('chamado/new.html.twig', array(
            'chamado' => $chamado,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Chamado entity.
     *
     * @Route("/{id}", name="chamado_show")
     * @Method("GET")
     */
    public function showAction(Chamado $chamado)
    {
        $deleteForm = $this->createDeleteForm($chamado);

        return $this->render('chamado/show.html.twig', array(
            'chamado' => $chamado,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Chamado entity.
     *
     * @Route("/{id}/edit", name="chamado_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Chamado $chamado)
    {
        $deleteForm = $this->createDeleteForm($chamado);
        $editForm = $this->createForm('SacBundle\Form\ChamadoType', $chamado);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($chamado);
            $em->flush();

            return $this->redirectToRoute('chamado_edit', array('id' => $chamado->getId()));
        }

        return $this->render('chamado/edit.html.twig', array(
            'chamado' => $chamado,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Chamado entity.
     *
     * @Route("/{id}", name="chamado_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Chamado $chamado)
    {
        $form = $this->createDeleteForm($chamado);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($chamado);
            $em->flush();
        }

        return $this->redirectToRoute('chamado_index');
    }

    /**
     * Creates a form to delete a Chamado entity.
     *
     * @param Chamado $chamado The Chamado entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Chamado $chamado)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('chamado_delete', array('id' => $chamado->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
