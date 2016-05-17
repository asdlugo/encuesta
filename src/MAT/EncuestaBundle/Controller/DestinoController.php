<?php

namespace MAT\EncuestaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use MAT\EncuestaBundle\Entity\Destino;
use MAT\EncuestaBundle\Form\DestinoType;

/**
 * Destino controller.
 *
 * @Route("/destino")
 */
class DestinoController extends Controller
{
    /**
     * Lists all Destino entities.
     *
     * @Route("/", name="destino_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $destinos = $em->getRepository('EncuestaBundle:Destino')->findAll();

        return $this->render('destino/index.html.twig', array(
            'destinos' => $destinos,
        ));
    }

    /**
     * Creates a new Destino entity.
     *
     * @Route("/new", name="destino_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $destino = new Destino();
        $form = $this->createForm('MAT\EncuestaBundle\Form\DestinoType', $destino);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($destino);
            $em->flush();

            return $this->redirectToRoute('destino_show', array('id' => $destino->getId()));
        }

        return $this->render('destino/new.html.twig', array(
            'destino' => $destino,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Destino entity.
     *
     * @Route("/{id}", name="destino_show")
     * @Method("GET")
     */
    public function showAction(Destino $destino)
    {
        $deleteForm = $this->createDeleteForm($destino);

        return $this->render('destino/show.html.twig', array(
            'destino' => $destino,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Destino entity.
     *
     * @Route("/{id}/edit", name="destino_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Destino $destino)
    {
        $deleteForm = $this->createDeleteForm($destino);
        $editForm = $this->createForm('MAT\EncuestaBundle\Form\DestinoType', $destino);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($destino);
            $em->flush();

            return $this->redirectToRoute('destino_edit', array('id' => $destino->getId()));
        }

        return $this->render('destino/edit.html.twig', array(
            'destino' => $destino,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Destino entity.
     *
     * @Route("/{id}", name="destino_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Destino $destino)
    {
        $form = $this->createDeleteForm($destino);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($destino);
            $em->flush();
        }

        return $this->redirectToRoute('destino_index');
    }

    /**
     * Creates a form to delete a Destino entity.
     *
     * @param Destino $destino The Destino entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Destino $destino)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('destino_delete', array('id' => $destino->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
