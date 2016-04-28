<?php

namespace MAT\EncuestaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use MAT\EncuestaBundle\Entity\FuenteAgua;
use MAT\EncuestaBundle\Form\FuenteAguaType;

/**
 * FuenteAgua controller.
 *
 * @Route("/fuenteagua")
 */
class FuenteAguaController extends Controller
{
    /**
     * Lists all FuenteAgua entities.
     *
     * @Route("/", name="fuenteagua_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $fuenteAguas = $em->getRepository('EncuestaBundle:FuenteAgua')->findAll();

        return $this->render('fuenteagua/index.html.twig', array(
            'fuenteAguas' => $fuenteAguas,
        ));
    }

    /**
     * Creates a new FuenteAgua entity.
     *
     * @Route("/new", name="fuenteagua_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $fuenteAgua = new FuenteAgua();
        $form = $this->createForm('MAT\EncuestaBundle\Form\FuenteAguaType', $fuenteAgua);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($fuenteAgua);
            $em->flush();

            return $this->redirectToRoute('fuenteagua_show', array('id' => $fuenteAgua->getId()));
        }

        return $this->render('fuenteagua/new.html.twig', array(
            'fuenteAgua' => $fuenteAgua,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a FuenteAgua entity.
     *
     * @Route("/{id}", name="fuenteagua_show")
     * @Method("GET")
     */
    public function showAction(FuenteAgua $fuenteAgua)
    {
        $deleteForm = $this->createDeleteForm($fuenteAgua);

        return $this->render('fuenteagua/show.html.twig', array(
            'fuenteAgua' => $fuenteAgua,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing FuenteAgua entity.
     *
     * @Route("/{id}/edit", name="fuenteagua_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, FuenteAgua $fuenteAgua)
    {
        $deleteForm = $this->createDeleteForm($fuenteAgua);
        $editForm = $this->createForm('MAT\EncuestaBundle\Form\FuenteAguaType', $fuenteAgua);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($fuenteAgua);
            $em->flush();

            return $this->redirectToRoute('fuenteagua_edit', array('id' => $fuenteAgua->getId()));
        }

        return $this->render('fuenteagua/edit.html.twig', array(
            'fuenteAgua' => $fuenteAgua,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a FuenteAgua entity.
     *
     * @Route("/{id}", name="fuenteagua_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, FuenteAgua $fuenteAgua)
    {
        $form = $this->createDeleteForm($fuenteAgua);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($fuenteAgua);
            $em->flush();
        }

        return $this->redirectToRoute('fuenteagua_index');
    }

    /**
     * Creates a form to delete a FuenteAgua entity.
     *
     * @param FuenteAgua $fuenteAgua The FuenteAgua entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(FuenteAgua $fuenteAgua)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('fuenteagua_delete', array('id' => $fuenteAgua->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
