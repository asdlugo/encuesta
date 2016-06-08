<?php

namespace MAT\EncuestaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use MAT\EncuestaBundle\Entity\Finca;
use MAT\EncuestaBundle\Form\FincaType;

/**
 * Finca controller.
 *
 */
class FincaController extends Controller
{
    /**
     * Lists all Finca entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $fincas = $em->getRepository('EncuestaBundle:Finca')->findAll();

        return $this->render('finca/index.html.twig', array(
            'fincas' => $fincas,
        ));
    }

    /**
     * Creates a new Finca entity.
     *
     */
    public function newAction(Request $request)
    {
        $finca = new Finca();
        $form = $this->createForm('MAT\EncuestaBundle\Form\FincaType', $finca);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($finca);
            $em->flush();

            return $this->redirectToRoute('finca_show', array('id' => $finca->getId()));
        }

        return $this->render('finca/new.html.twig', array(
            'finca' => $finca,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Finca entity.
     *
     */
    public function showAction(Finca $finca)
    {
        $deleteForm = $this->createDeleteForm($finca);

        return $this->render('finca/show.html.twig', array(
            'finca' => $finca,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Finca entity.
     *
     */
    public function editAction(Request $request, Finca $finca)
    {
        $deleteForm = $this->createDeleteForm($finca);
        $editForm = $this->createForm('MAT\EncuestaBundle\Form\FincaType', $finca);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($finca);
            $em->flush();

            return $this->redirectToRoute('finca_edit', array('id' => $finca->getId()));
        }

        return $this->render('finca/edit.html.twig', array(
            'finca' => $finca,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Finca entity.
     *
     */
    public function deleteAction(Request $request, Finca $finca)
    {
        $form = $this->createDeleteForm($finca);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($finca);
            $em->flush();
        }

        return $this->redirectToRoute('finca_index');
    }

    /**
     * Creates a form to delete a Finca entity.
     *
     * @param Finca $finca The Finca entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Finca $finca)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('finca_delete', array('id' => $finca->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
