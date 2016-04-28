<?php

namespace MAT\EncuestaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use MAT\EncuestaBundle\Entity\Alimentacion;
use MAT\EncuestaBundle\Form\AlimentacionType;

/**
 * Alimentacion controller.
 *
 * @Route("/alimentacion")
 */
class AlimentacionController extends Controller
{
    /**
     * Lists all Alimentacion entities.
     *
     * @Route("/", name="alimentacion_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $alimentacions = $em->getRepository('EncuestaBundle:Alimentacion')->findAll();

        return $this->render('alimentacion/index.html.twig', array(
            'alimentacions' => $alimentacions,
        ));
    }

    /**
     * Creates a new Alimentacion entity.
     *
     * @Route("/new", name="alimentacion_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $alimentacion = new Alimentacion();
        $form = $this->createForm('MAT\EncuestaBundle\Form\AlimentacionType', $alimentacion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($alimentacion);
            $em->flush();

            return $this->redirectToRoute('alimentacion_show', array('id' => $alimentacion->getId()));
        }

        return $this->render('alimentacion/new.html.twig', array(
            'alimentacion' => $alimentacion,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Alimentacion entity.
     *
     * @Route("/{id}", name="alimentacion_show")
     * @Method("GET")
     */
    public function showAction(Alimentacion $alimentacion)
    {
        $deleteForm = $this->createDeleteForm($alimentacion);

        return $this->render('alimentacion/show.html.twig', array(
            'alimentacion' => $alimentacion,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Alimentacion entity.
     *
     * @Route("/{id}/edit", name="alimentacion_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Alimentacion $alimentacion)
    {
        $deleteForm = $this->createDeleteForm($alimentacion);
        $editForm = $this->createForm('MAT\EncuestaBundle\Form\AlimentacionType', $alimentacion);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($alimentacion);
            $em->flush();

            return $this->redirectToRoute('alimentacion_edit', array('id' => $alimentacion->getId()));
        }

        return $this->render('alimentacion/edit.html.twig', array(
            'alimentacion' => $alimentacion,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Alimentacion entity.
     *
     * @Route("/{id}", name="alimentacion_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Alimentacion $alimentacion)
    {
        $form = $this->createDeleteForm($alimentacion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($alimentacion);
            $em->flush();
        }

        return $this->redirectToRoute('alimentacion_index');
    }

    /**
     * Creates a form to delete a Alimentacion entity.
     *
     * @param Alimentacion $alimentacion The Alimentacion entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Alimentacion $alimentacion)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('alimentacion_delete', array('id' => $alimentacion->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
