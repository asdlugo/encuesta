<?php

namespace MAT\EncuestaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use MAT\EncuestaBundle\Entity\Productor;
use MAT\EncuestaBundle\Form\ProductorType;

/**
 * Productor controller.
 *
 * @Route("/productor")
 */
class ProductorController extends Controller
{
    /**
     * Lists all Productor entities.
     *
     * @Route("/", name="productor_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $productors = $em->getRepository('EncuestaBundle:Productor')->findAll();

        return $this->render('productor/index.html.twig', array(
            'productors' => $productors,
        ));
    }

    /**
     * Creates a new Productor entity.
     *
     * @Route("/new", name="productor_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $productor = new Productor();
        $form = $this->createForm('MAT\EncuestaBundle\Form\ProductorType', $productor);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($productor);
            $em->flush();

            return $this->redirectToRoute('productor_show', array('id' => $productor->getId()));
        }

        return $this->render('productor/new.html.twig', array(
            'productor' => $productor,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Productor entity.
     *
     * @Route("/{id}", name="productor_show")
     * @Method("GET")
     */
    public function showAction(Productor $productor)
    {
        $deleteForm = $this->createDeleteForm($productor);

        return $this->render('productor/show.html.twig', array(
            'productor' => $productor,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Productor entity.
     *
     * @Route("/{id}/edit", name="productor_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Productor $productor)
    {
        $deleteForm = $this->createDeleteForm($productor);
        $editForm = $this->createForm('MAT\EncuestaBundle\Form\ProductorType', $productor);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($productor);
            $em->flush();

            return $this->redirectToRoute('productor_edit', array('id' => $productor->getId()));
        }

        return $this->render('productor/edit.html.twig', array(
            'productor' => $productor,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Productor entity.
     *
     * @Route("/{id}", name="productor_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Productor $productor)
    {
        $form = $this->createDeleteForm($productor);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($productor);
            $em->flush();
        }

        return $this->redirectToRoute('productor_index');
    }

    /**
     * Creates a form to delete a Productor entity.
     *
     * @param Productor $productor The Productor entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Productor $productor)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('productor_delete', array('id' => $productor->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
