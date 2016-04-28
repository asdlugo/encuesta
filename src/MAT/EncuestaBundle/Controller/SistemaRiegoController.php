<?php

namespace MAT\EncuestaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use MAT\EncuestaBundle\Entity\SistemaRiego;
use MAT\EncuestaBundle\Form\SistemaRiegoType;

/**
 * SistemaRiego controller.
 *
 * @Route("/sistemariego")
 */
class SistemaRiegoController extends Controller
{
    /**
     * Lists all SistemaRiego entities.
     *
     * @Route("/", name="sistemariego_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $sistemaRiegos = $em->getRepository('EncuestaBundle:SistemaRiego')->findAll();

        return $this->render('sistemariego/index.html.twig', array(
            'sistemaRiegos' => $sistemaRiegos,
        ));
    }

    /**
     * Creates a new SistemaRiego entity.
     *
     * @Route("/new", name="sistemariego_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $sistemaRiego = new SistemaRiego();
        $form = $this->createForm('MAT\EncuestaBundle\Form\SistemaRiegoType', $sistemaRiego);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($sistemaRiego);
            $em->flush();

            return $this->redirectToRoute('sistemariego_show', array('id' => $sistemaRiego->getId()));
        }

        return $this->render('sistemariego/new.html.twig', array(
            'sistemaRiego' => $sistemaRiego,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a SistemaRiego entity.
     *
     * @Route("/{id}", name="sistemariego_show")
     * @Method("GET")
     */
    public function showAction(SistemaRiego $sistemaRiego)
    {
        $deleteForm = $this->createDeleteForm($sistemaRiego);

        return $this->render('sistemariego/show.html.twig', array(
            'sistemaRiego' => $sistemaRiego,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing SistemaRiego entity.
     *
     * @Route("/{id}/edit", name="sistemariego_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, SistemaRiego $sistemaRiego)
    {
        $deleteForm = $this->createDeleteForm($sistemaRiego);
        $editForm = $this->createForm('MAT\EncuestaBundle\Form\SistemaRiegoType', $sistemaRiego);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($sistemaRiego);
            $em->flush();

            return $this->redirectToRoute('sistemariego_edit', array('id' => $sistemaRiego->getId()));
        }

        return $this->render('sistemariego/edit.html.twig', array(
            'sistemaRiego' => $sistemaRiego,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a SistemaRiego entity.
     *
     * @Route("/{id}", name="sistemariego_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, SistemaRiego $sistemaRiego)
    {
        $form = $this->createDeleteForm($sistemaRiego);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($sistemaRiego);
            $em->flush();
        }

        return $this->redirectToRoute('sistemariego_index');
    }

    /**
     * Creates a form to delete a SistemaRiego entity.
     *
     * @param SistemaRiego $sistemaRiego The SistemaRiego entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(SistemaRiego $sistemaRiego)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('sistemariego_delete', array('id' => $sistemaRiego->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
