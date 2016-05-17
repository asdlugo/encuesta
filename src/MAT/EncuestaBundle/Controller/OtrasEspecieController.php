<?php

namespace MAT\EncuestaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use MAT\EncuestaBundle\Entity\OtrasEspecie;
use MAT\EncuestaBundle\Form\OtrasEspecieType;

/**
 * OtrasEspecie controller.
 *
 * @Route("/otrasespecie")
 */
class OtrasEspecieController extends Controller
{
    /**
     * Lists all OtrasEspecie entities.
     *
     * @Route("/", name="otrasespecie_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $otrasEspecies = $em->getRepository('EncuestaBundle:OtrasEspecie')->findAll();

        return $this->render('otrasespecie/index.html.twig', array(
            'otrasEspecies' => $otrasEspecies,
        ));
    }

    /**
     * Creates a new OtrasEspecie entity.
     *
     * @Route("/new", name="otrasespecie_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $otrasEspecie = new OtrasEspecie();
        $form = $this->createForm('MAT\EncuestaBundle\Form\OtrasEspecieType', $otrasEspecie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($otrasEspecie);
            $em->flush();

            return $this->redirectToRoute('otrasespecie_show', array('id' => $otrasEspecie->getId()));
        }

        return $this->render('otrasespecie/new.html.twig', array(
            'otrasEspecie' => $otrasEspecie,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a OtrasEspecie entity.
     *
     * @Route("/{id}", name="otrasespecie_show")
     * @Method("GET")
     */
    public function showAction(OtrasEspecie $otrasEspecie)
    {
        $deleteForm = $this->createDeleteForm($otrasEspecie);

        return $this->render('otrasespecie/show.html.twig', array(
            'otrasEspecie' => $otrasEspecie,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing OtrasEspecie entity.
     *
     * @Route("/{id}/edit", name="otrasespecie_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, OtrasEspecie $otrasEspecie)
    {
        $deleteForm = $this->createDeleteForm($otrasEspecie);
        $editForm = $this->createForm('MAT\EncuestaBundle\Form\OtrasEspecieType', $otrasEspecie);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($otrasEspecie);
            $em->flush();

            return $this->redirectToRoute('otrasespecie_edit', array('id' => $otrasEspecie->getId()));
        }

        return $this->render('otrasespecie/edit.html.twig', array(
            'otrasEspecie' => $otrasEspecie,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a OtrasEspecie entity.
     *
     * @Route("/{id}", name="otrasespecie_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, OtrasEspecie $otrasEspecie)
    {
        $form = $this->createDeleteForm($otrasEspecie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($otrasEspecie);
            $em->flush();
        }

        return $this->redirectToRoute('otrasespecie_index');
    }

    /**
     * Creates a form to delete a OtrasEspecie entity.
     *
     * @param OtrasEspecie $otrasEspecie The OtrasEspecie entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(OtrasEspecie $otrasEspecie)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('otrasespecie_delete', array('id' => $otrasEspecie->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
