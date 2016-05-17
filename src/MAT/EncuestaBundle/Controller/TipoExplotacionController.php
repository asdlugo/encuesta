<?php

namespace MAT\EncuestaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use MAT\EncuestaBundle\Entity\TipoExplotacion;
use MAT\EncuestaBundle\Form\TipoExplotacionType;

/**
 * TipoExplotacion controller.
 *
 * @Route("/tipoexplotacion")
 */
class TipoExplotacionController extends Controller
{
    /**
     * Lists all TipoExplotacion entities.
     *
     * @Route("/", name="tipoexplotacion_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $tipoExplotacions = $em->getRepository('EncuestaBundle:TipoExplotacion')->findAll();

        return $this->render('tipoexplotacion/index.html.twig', array(
            'tipoExplotacions' => $tipoExplotacions,
        ));
    }

    /**
     * Creates a new TipoExplotacion entity.
     *
     * @Route("/new", name="tipoexplotacion_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $tipoExplotacion = new TipoExplotacion();
        $form = $this->createForm('MAT\EncuestaBundle\Form\TipoExplotacionType', $tipoExplotacion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tipoExplotacion);
            $em->flush();

            return $this->redirectToRoute('tipoexplotacion_show', array('id' => $tipoExplotacion->getId()));
        }

        return $this->render('tipoexplotacion/new.html.twig', array(
            'tipoExplotacion' => $tipoExplotacion,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a TipoExplotacion entity.
     *
     * @Route("/{id}", name="tipoexplotacion_show")
     * @Method("GET")
     */
    public function showAction(TipoExplotacion $tipoExplotacion)
    {
        $deleteForm = $this->createDeleteForm($tipoExplotacion);

        return $this->render('tipoexplotacion/show.html.twig', array(
            'tipoExplotacion' => $tipoExplotacion,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing TipoExplotacion entity.
     *
     * @Route("/{id}/edit", name="tipoexplotacion_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, TipoExplotacion $tipoExplotacion)
    {
        $deleteForm = $this->createDeleteForm($tipoExplotacion);
        $editForm = $this->createForm('MAT\EncuestaBundle\Form\TipoExplotacionType', $tipoExplotacion);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tipoExplotacion);
            $em->flush();

            return $this->redirectToRoute('tipoexplotacion_edit', array('id' => $tipoExplotacion->getId()));
        }

        return $this->render('tipoexplotacion/edit.html.twig', array(
            'tipoExplotacion' => $tipoExplotacion,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a TipoExplotacion entity.
     *
     * @Route("/{id}", name="tipoexplotacion_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, TipoExplotacion $tipoExplotacion)
    {
        $form = $this->createDeleteForm($tipoExplotacion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($tipoExplotacion);
            $em->flush();
        }

        return $this->redirectToRoute('tipoexplotacion_index');
    }

    /**
     * Creates a form to delete a TipoExplotacion entity.
     *
     * @param TipoExplotacion $tipoExplotacion The TipoExplotacion entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(TipoExplotacion $tipoExplotacion)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tipoexplotacion_delete', array('id' => $tipoExplotacion->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
