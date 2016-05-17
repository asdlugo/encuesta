<?php

namespace MAT\EncuestaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use MAT\EncuestaBundle\Entity\Ordeno;
use MAT\EncuestaBundle\Form\OrdenoType;

/**
 * Ordeno controller.
 *
 * @Route("/ordeno")
 */
class OrdenoController extends Controller
{
    /**
     * Lists all Ordeno entities.
     *
     * @Route("/", name="ordeno_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $ordenos = $em->getRepository('EncuestaBundle:Ordeno')->findAll();

        return $this->render('ordeno/index.html.twig', array(
            'ordenos' => $ordenos,
        ));
    }

    /**
     * Creates a new Ordeno entity.
     *
     * @Route("/new", name="ordeno_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $ordeno = new Ordeno();
        $form = $this->createForm('MAT\EncuestaBundle\Form\OrdenoType', $ordeno);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($ordeno);
            $em->flush();

            return $this->redirectToRoute('ordeno_show', array('id' => $ordeno->getId()));
        }

        return $this->render('ordeno/new.html.twig', array(
            'ordeno' => $ordeno,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Ordeno entity.
     *
     * @Route("/{id}", name="ordeno_show")
     * @Method("GET")
     */
    public function showAction(Ordeno $ordeno)
    {
        $deleteForm = $this->createDeleteForm($ordeno);

        return $this->render('ordeno/show.html.twig', array(
            'ordeno' => $ordeno,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Ordeno entity.
     *
     * @Route("/{id}/edit", name="ordeno_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Ordeno $ordeno)
    {
        $deleteForm = $this->createDeleteForm($ordeno);
        $editForm = $this->createForm('MAT\EncuestaBundle\Form\OrdenoType', $ordeno);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($ordeno);
            $em->flush();

            return $this->redirectToRoute('ordeno_edit', array('id' => $ordeno->getId()));
        }

        return $this->render('ordeno/edit.html.twig', array(
            'ordeno' => $ordeno,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Ordeno entity.
     *
     * @Route("/{id}", name="ordeno_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Ordeno $ordeno)
    {
        $form = $this->createDeleteForm($ordeno);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($ordeno);
            $em->flush();
        }

        return $this->redirectToRoute('ordeno_index');
    }

    /**
     * Creates a form to delete a Ordeno entity.
     *
     * @param Ordeno $ordeno The Ordeno entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Ordeno $ordeno)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('ordeno_delete', array('id' => $ordeno->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
