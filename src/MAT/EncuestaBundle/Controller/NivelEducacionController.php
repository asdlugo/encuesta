<?php

namespace MAT\EncuestaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use MAT\EncuestaBundle\Entity\NivelEducacion;
use MAT\EncuestaBundle\Form\NivelEducacionType;

/**
 * NivelEducacion controller.
 *
 * @Route("/niveleducacion")
 */
class NivelEducacionController extends Controller
{
    /**
     * Lists all NivelEducacion entities.
     *
     * @Route("/", name="niveleducacion_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $nivelEducacions = $em->getRepository('EncuestaBundle:NivelEducacion')->findAll();

        return $this->render('niveleducacion/index.html.twig', array(
            'nivelEducacions' => $nivelEducacions,
        ));
    }

    /**
     * Creates a new NivelEducacion entity.
     *
     * @Route("/new", name="niveleducacion_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $nivelEducacion = new NivelEducacion();
        $form = $this->createForm('MAT\EncuestaBundle\Form\NivelEducacionType', $nivelEducacion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($nivelEducacion);
            $em->flush();

            return $this->redirectToRoute('niveleducacion_show', array('id' => $nivelEducacion->getId()));
        }

        return $this->render('niveleducacion/new.html.twig', array(
            'nivelEducacion' => $nivelEducacion,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a NivelEducacion entity.
     *
     * @Route("/{id}", name="niveleducacion_show")
     * @Method("GET")
     */
    public function showAction(NivelEducacion $nivelEducacion)
    {
        $deleteForm = $this->createDeleteForm($nivelEducacion);

        return $this->render('niveleducacion/show.html.twig', array(
            'nivelEducacion' => $nivelEducacion,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing NivelEducacion entity.
     *
     * @Route("/{id}/edit", name="niveleducacion_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, NivelEducacion $nivelEducacion)
    {
        $deleteForm = $this->createDeleteForm($nivelEducacion);
        $editForm = $this->createForm('MAT\EncuestaBundle\Form\NivelEducacionType', $nivelEducacion);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($nivelEducacion);
            $em->flush();

            return $this->redirectToRoute('niveleducacion_edit', array('id' => $nivelEducacion->getId()));
        }

        return $this->render('niveleducacion/edit.html.twig', array(
            'nivelEducacion' => $nivelEducacion,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a NivelEducacion entity.
     *
     * @Route("/{id}", name="niveleducacion_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, NivelEducacion $nivelEducacion)
    {
        $form = $this->createDeleteForm($nivelEducacion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($nivelEducacion);
            $em->flush();
        }

        return $this->redirectToRoute('niveleducacion_index');
    }

    /**
     * Creates a form to delete a NivelEducacion entity.
     *
     * @param NivelEducacion $nivelEducacion The NivelEducacion entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(NivelEducacion $nivelEducacion)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('niveleducacion_delete', array('id' => $nivelEducacion->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
