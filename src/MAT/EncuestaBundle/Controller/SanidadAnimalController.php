<?php

namespace MAT\EncuestaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use MAT\EncuestaBundle\Entity\SanidadAnimal;
use MAT\EncuestaBundle\Form\SanidadAnimalType;

/**
 * SanidadAnimal controller.
 *
 * @Route("/sanidadanimal")
 */
class SanidadAnimalController extends Controller
{
    /**
     * Lists all SanidadAnimal entities.
     *
     * @Route("/", name="sanidadanimal_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $sanidadAnimals = $em->getRepository('EncuestaBundle:SanidadAnimal')->findAll();

        return $this->render('sanidadanimal/index.html.twig', array(
            'sanidadAnimals' => $sanidadAnimals,
        ));
    }

    /**
     * Creates a new SanidadAnimal entity.
     *
     * @Route("/new", name="sanidadanimal_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $sanidadAnimal = new SanidadAnimal();
        $form = $this->createForm('MAT\EncuestaBundle\Form\SanidadAnimalType', $sanidadAnimal);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($sanidadAnimal);
            $em->flush();

            return $this->redirectToRoute('sanidadanimal_show', array('id' => $sanidadAnimal->getId()));
        }

        return $this->render('sanidadanimal/new.html.twig', array(
            'sanidadAnimal' => $sanidadAnimal,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a SanidadAnimal entity.
     *
     * @Route("/{id}", name="sanidadanimal_show")
     * @Method("GET")
     */
    public function showAction(SanidadAnimal $sanidadAnimal)
    {
        $deleteForm = $this->createDeleteForm($sanidadAnimal);

        return $this->render('sanidadanimal/show.html.twig', array(
            'sanidadAnimal' => $sanidadAnimal,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing SanidadAnimal entity.
     *
     * @Route("/{id}/edit", name="sanidadanimal_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, SanidadAnimal $sanidadAnimal)
    {
        $deleteForm = $this->createDeleteForm($sanidadAnimal);
        $editForm = $this->createForm('MAT\EncuestaBundle\Form\SanidadAnimalType', $sanidadAnimal);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($sanidadAnimal);
            $em->flush();

            return $this->redirectToRoute('sanidadanimal_edit', array('id' => $sanidadAnimal->getId()));
        }

        return $this->render('sanidadanimal/edit.html.twig', array(
            'sanidadAnimal' => $sanidadAnimal,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a SanidadAnimal entity.
     *
     * @Route("/{id}", name="sanidadanimal_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, SanidadAnimal $sanidadAnimal)
    {
        $form = $this->createDeleteForm($sanidadAnimal);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($sanidadAnimal);
            $em->flush();
        }

        return $this->redirectToRoute('sanidadanimal_index');
    }

    /**
     * Creates a form to delete a SanidadAnimal entity.
     *
     * @param SanidadAnimal $sanidadAnimal The SanidadAnimal entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(SanidadAnimal $sanidadAnimal)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('sanidadanimal_delete', array('id' => $sanidadAnimal->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
