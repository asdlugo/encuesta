<?php

namespace MAT\EncuestaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use MAT\EncuestaBundle\Entity\CondicionVia;
use MAT\EncuestaBundle\Form\CondicionViaType;

/**
 * CondicionVia controller.
 *
 * @Route("/condicionvia")
 */
class CondicionViaController extends Controller
{
    /**
     * Lists all CondicionVia entities.
     *
     * @Route("/", name="condicionvia_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $condicionVias = $em->getRepository('EncuestaBundle:CondicionVia')->findAll();

        return $this->render('condicionvia/index.html.twig', array(
            'condicionVias' => $condicionVias,
        ));
    }

    /**
     * Creates a new CondicionVia entity.
     *
     * @Route("/new", name="condicionvia_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $condicionVium = new CondicionVia();
        $form = $this->createForm('MAT\EncuestaBundle\Form\CondicionViaType', $condicionVium);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($condicionVium);
            $em->flush();

            return $this->redirectToRoute('condicionvia_show', array('id' => $condicionVium->getId()));
        }

        return $this->render('condicionvia/new.html.twig', array(
            'condicionVium' => $condicionVium,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a CondicionVia entity.
     *
     * @Route("/{id}", name="condicionvia_show")
     * @Method("GET")
     */
    public function showAction(CondicionVia $condicionVium)
    {
        $deleteForm = $this->createDeleteForm($condicionVium);

        return $this->render('condicionvia/show.html.twig', array(
            'condicionVium' => $condicionVium,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing CondicionVia entity.
     *
     * @Route("/{id}/edit", name="condicionvia_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, CondicionVia $condicionVium)
    {
        $deleteForm = $this->createDeleteForm($condicionVium);
        $editForm = $this->createForm('MAT\EncuestaBundle\Form\CondicionViaType', $condicionVium);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($condicionVium);
            $em->flush();

            return $this->redirectToRoute('condicionvia_edit', array('id' => $condicionVium->getId()));
        }

        return $this->render('condicionvia/edit.html.twig', array(
            'condicionVium' => $condicionVium,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a CondicionVia entity.
     *
     * @Route("/{id}", name="condicionvia_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, CondicionVia $condicionVium)
    {
        $form = $this->createDeleteForm($condicionVium);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($condicionVium);
            $em->flush();
        }

        return $this->redirectToRoute('condicionvia_index');
    }

    /**
     * Creates a form to delete a CondicionVia entity.
     *
     * @param CondicionVia $condicionVium The CondicionVia entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(CondicionVia $condicionVium)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('condicionvia_delete', array('id' => $condicionVium->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
