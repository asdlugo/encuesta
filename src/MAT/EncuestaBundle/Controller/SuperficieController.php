<?php

namespace MAT\EncuestaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use MAT\EncuestaBundle\Entity\Superficie;
use MAT\EncuestaBundle\Form\SuperficieType;

/**
 * Superficie controller.
 *
 * @Route("/superficie")
 */
class SuperficieController extends Controller
{
    /**
     * Lists all Superficie entities.
     *
     * @Route("/", name="superficie_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $superficies = $em->getRepository('EncuestaBundle:Superficie')->findAll();

        return $this->render('superficie/index.html.twig', array(
            'superficies' => $superficies,
        ));
    }

    /**
     * Creates a new Superficie entity.
     *
     * @Route("/new", name="superficie_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $superficie = new Superficie();
        $form = $this->createForm('MAT\EncuestaBundle\Form\SuperficieType', $superficie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($superficie);
            $em->flush();

            return $this->redirectToRoute('superficie_show', array('id' => $superficie->getId()));
        }

        return $this->render('superficie/new.html.twig', array(
            'superficie' => $superficie,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Superficie entity.
     *
     * @Route("/{id}", name="superficie_show")
     * @Method("GET")
     */
    public function showAction(Superficie $superficie)
    {
        $deleteForm = $this->createDeleteForm($superficie);

        return $this->render('superficie/show.html.twig', array(
            'superficie' => $superficie,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Superficie entity.
     *
     * @Route("/{id}/edit", name="superficie_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Superficie $superficie)
    {
        $deleteForm = $this->createDeleteForm($superficie);
        $editForm = $this->createForm('MAT\EncuestaBundle\Form\SuperficieType', $superficie);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($superficie);
            $em->flush();

            return $this->redirectToRoute('superficie_edit', array('id' => $superficie->getId()));
        }

        return $this->render('superficie/edit.html.twig', array(
            'superficie' => $superficie,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Superficie entity.
     *
     * @Route("/{id}", name="superficie_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Superficie $superficie)
    {
        $form = $this->createDeleteForm($superficie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($superficie);
            $em->flush();
        }

        return $this->redirectToRoute('superficie_index');
    }

    /**
     * Creates a form to delete a Superficie entity.
     *
     * @param Superficie $superficie The Superficie entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Superficie $superficie)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('superficie_delete', array('id' => $superficie->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
