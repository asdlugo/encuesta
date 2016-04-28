<?php

namespace MAT\EncuestaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use MAT\EncuestaBundle\Entity\RazaPredominante;
use MAT\EncuestaBundle\Form\RazaPredominanteType;

/**
 * RazaPredominante controller.
 *
 * @Route("/razapredominante")
 */
class RazaPredominanteController extends Controller
{
    /**
     * Lists all RazaPredominante entities.
     *
     * @Route("/", name="razapredominante_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $razaPredominantes = $em->getRepository('EncuestaBundle:RazaPredominante')->findAll();

        return $this->render('razapredominante/index.html.twig', array(
            'razaPredominantes' => $razaPredominantes,
        ));
    }

    /**
     * Creates a new RazaPredominante entity.
     *
     * @Route("/new", name="razapredominante_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $razaPredominante = new RazaPredominante();
        $form = $this->createForm('MAT\EncuestaBundle\Form\RazaPredominanteType', $razaPredominante);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($razaPredominante);
            $em->flush();

            return $this->redirectToRoute('razapredominante_show', array('id' => $razaPredominante->getId()));
        }

        return $this->render('razapredominante/new.html.twig', array(
            'razaPredominante' => $razaPredominante,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a RazaPredominante entity.
     *
     * @Route("/{id}", name="razapredominante_show")
     * @Method("GET")
     */
    public function showAction(RazaPredominante $razaPredominante)
    {
        $deleteForm = $this->createDeleteForm($razaPredominante);

        return $this->render('razapredominante/show.html.twig', array(
            'razaPredominante' => $razaPredominante,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing RazaPredominante entity.
     *
     * @Route("/{id}/edit", name="razapredominante_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, RazaPredominante $razaPredominante)
    {
        $deleteForm = $this->createDeleteForm($razaPredominante);
        $editForm = $this->createForm('MAT\EncuestaBundle\Form\RazaPredominanteType', $razaPredominante);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($razaPredominante);
            $em->flush();

            return $this->redirectToRoute('razapredominante_edit', array('id' => $razaPredominante->getId()));
        }

        return $this->render('razapredominante/edit.html.twig', array(
            'razaPredominante' => $razaPredominante,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a RazaPredominante entity.
     *
     * @Route("/{id}", name="razapredominante_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, RazaPredominante $razaPredominante)
    {
        $form = $this->createDeleteForm($razaPredominante);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($razaPredominante);
            $em->flush();
        }

        return $this->redirectToRoute('razapredominante_index');
    }

    /**
     * Creates a form to delete a RazaPredominante entity.
     *
     * @param RazaPredominante $razaPredominante The RazaPredominante entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(RazaPredominante $razaPredominante)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('razapredominante_delete', array('id' => $razaPredominante->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
