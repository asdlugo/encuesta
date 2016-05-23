<?php

namespace MAT\EncuestaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use MAT\EncuestaBundle\Entity\ManejoReproductivo;
use MAT\EncuestaBundle\Form\ManejoReproductivoType;

/**
 * ManejoReproductivo controller.
 *
 * @Route("/manejoreproductivo")
 */
class ManejoReproductivoController extends Controller
{
    /**
     * Lists all ManejoReproductivo entities.
     *
     * @Route("/", name="manejoreproductivo_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $manejoReproductivos = $em->getRepository('EncuestaBundle:ManejoReproductivo')->findAll();

        return $this->render('manejoreproductivo/index.html.twig', array(
            'manejoReproductivos' => $manejoReproductivos,
        ));
    }

    /**
     * Creates a new ManejoReproductivo entity.
     *
     * @Route("/new", name="manejoreproductivo_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $manejoReproductivo = new ManejoReproductivo();
        $form = $this->createForm('MAT\EncuestaBundle\Form\ManejoReproductivoType', $manejoReproductivo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($manejoReproductivo);
            $em->flush();

            return $this->redirectToRoute('manejoreproductivo_show', array('id' => $manejoReproductivo->getId()));
        }

        return $this->render('manejoreproductivo/new.html.twig', array(
            'manejoReproductivo' => $manejoReproductivo,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ManejoReproductivo entity.
     *
     * @Route("/{id}", name="manejoreproductivo_show")
     * @Method("GET")
     */
    public function showAction(ManejoReproductivo $manejoReproductivo)
    {
        $deleteForm = $this->createDeleteForm($manejoReproductivo);

        return $this->render('manejoreproductivo/show.html.twig', array(
            'manejoReproductivo' => $manejoReproductivo,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ManejoReproductivo entity.
     *
     * @Route("/{id}/edit", name="manejoreproductivo_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, ManejoReproductivo $manejoReproductivo)
    {
        $deleteForm = $this->createDeleteForm($manejoReproductivo);
        $editForm = $this->createForm('MAT\EncuestaBundle\Form\ManejoReproductivoType', $manejoReproductivo);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($manejoReproductivo);
            $em->flush();

            return $this->redirectToRoute('manejoreproductivo_edit', array('id' => $manejoReproductivo->getId()));
        }

        return $this->render('manejoreproductivo/edit.html.twig', array(
            'manejoReproductivo' => $manejoReproductivo,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a ManejoReproductivo entity.
     *
     * @Route("/{id}", name="manejoreproductivo_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, ManejoReproductivo $manejoReproductivo)
    {
        $form = $this->createDeleteForm($manejoReproductivo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($manejoReproductivo);
            $em->flush();
        }

        return $this->redirectToRoute('manejoreproductivo_index');
    }

    /**
     * Creates a form to delete a ManejoReproductivo entity.
     *
     * @param ManejoReproductivo $manejoReproductivo The ManejoReproductivo entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(ManejoReproductivo $manejoReproductivo)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('manejoreproductivo_delete', array('id' => $manejoReproductivo->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
