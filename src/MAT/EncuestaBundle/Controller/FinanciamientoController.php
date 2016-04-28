<?php

namespace MAT\EncuestaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use MAT\EncuestaBundle\Entity\Financiamiento;
use MAT\EncuestaBundle\Form\FinanciamientoType;

/**
 * Financiamiento controller.
 *
 * @Route("/financiamiento")
 */
class FinanciamientoController extends Controller
{
    /**
     * Lists all Financiamiento entities.
     *
     * @Route("/", name="financiamiento_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $financiamientos = $em->getRepository('EncuestaBundle:Financiamiento')->findAll();

        return $this->render('financiamiento/index.html.twig', array(
            'financiamientos' => $financiamientos,
        ));
    }

    /**
     * Creates a new Financiamiento entity.
     *
     * @Route("/new", name="financiamiento_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $financiamiento = new Financiamiento();
        $form = $this->createForm('MAT\EncuestaBundle\Form\FinanciamientoType', $financiamiento);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($financiamiento);
            $em->flush();

            return $this->redirectToRoute('financiamiento_show', array('id' => $financiamiento->getId()));
        }

        return $this->render('financiamiento/new.html.twig', array(
            'financiamiento' => $financiamiento,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Financiamiento entity.
     *
     * @Route("/{id}", name="financiamiento_show")
     * @Method("GET")
     */
    public function showAction(Financiamiento $financiamiento)
    {
        $deleteForm = $this->createDeleteForm($financiamiento);

        return $this->render('financiamiento/show.html.twig', array(
            'financiamiento' => $financiamiento,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Financiamiento entity.
     *
     * @Route("/{id}/edit", name="financiamiento_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Financiamiento $financiamiento)
    {
        $deleteForm = $this->createDeleteForm($financiamiento);
        $editForm = $this->createForm('MAT\EncuestaBundle\Form\FinanciamientoType', $financiamiento);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($financiamiento);
            $em->flush();

            return $this->redirectToRoute('financiamiento_edit', array('id' => $financiamiento->getId()));
        }

        return $this->render('financiamiento/edit.html.twig', array(
            'financiamiento' => $financiamiento,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Financiamiento entity.
     *
     * @Route("/{id}", name="financiamiento_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Financiamiento $financiamiento)
    {
        $form = $this->createDeleteForm($financiamiento);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($financiamiento);
            $em->flush();
        }

        return $this->redirectToRoute('financiamiento_index');
    }

    /**
     * Creates a form to delete a Financiamiento entity.
     *
     * @param Financiamiento $financiamiento The Financiamiento entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Financiamiento $financiamiento)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('financiamiento_delete', array('id' => $financiamiento->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
