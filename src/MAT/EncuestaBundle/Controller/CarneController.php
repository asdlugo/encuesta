<?php

namespace MAT\EncuestaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use MAT\EncuestaBundle\Entity\Carne;
use MAT\EncuestaBundle\Form\CarneType;

/**
 * Carne controller.
 *
 * @Route("/carne")
 */
class CarneController extends Controller
{
    /**
     * Lists all Carne entities.
     *
     * @Route("/", name="carne_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $carnes = $em->getRepository('EncuestaBundle:Carne')->findAll();

        return $this->render('carne/index.html.twig', array(
            'carnes' => $carnes,
        ));
    }

    /**
     * Creates a new Carne entity.
     *
     * @Route("/new", name="carne_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $carne = new Carne();
        $form = $this->createForm('MAT\EncuestaBundle\Form\CarneType', $carne);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($carne);
            $em->flush();

            return $this->redirectToRoute('carne_show', array('id' => $carne->getId()));
        }

        return $this->render('carne/new.html.twig', array(
            'carne' => $carne,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Carne entity.
     *
     * @Route("/{id}", name="carne_show")
     * @Method("GET")
     */
    public function showAction(Carne $carne)
    {
        $deleteForm = $this->createDeleteForm($carne);

        return $this->render('carne/show.html.twig', array(
            'carne' => $carne,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Carne entity.
     *
     * @Route("/{id}/edit", name="carne_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Carne $carne)
    {
        $deleteForm = $this->createDeleteForm($carne);
        $editForm = $this->createForm('MAT\EncuestaBundle\Form\CarneType', $carne);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($carne);
            $em->flush();

            return $this->redirectToRoute('carne_edit', array('id' => $carne->getId()));
        }

        return $this->render('carne/edit.html.twig', array(
            'carne' => $carne,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Carne entity.
     *
     * @Route("/{id}", name="carne_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Carne $carne)
    {
        $form = $this->createDeleteForm($carne);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($carne);
            $em->flush();
        }

        return $this->redirectToRoute('carne_index');
    }

    /**
     * Creates a form to delete a Carne entity.
     *
     * @param Carne $carne The Carne entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Carne $carne)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('carne_delete', array('id' => $carne->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
