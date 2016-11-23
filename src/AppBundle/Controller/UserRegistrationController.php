<?php

namespace AppBundle\Controller;

use AppBundle\Entity\UserRegistration;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Userregistration controller.
 *
 * @Route("userregistration")
 */
class UserRegistrationController extends Controller
{
    /**
     * Lists all userRegistration entities.
     *
     * @Route("/", name="userregistration_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $userRegistrations = $em->getRepository('AppBundle:UserRegistration')->findAll();

        return $this->render('userregistration/index.html.twig', array(
            'userRegistrations' => $userRegistrations,
        ));
    }

    /**
     * Creates a new userRegistration entity.
     *
     * @Route("/new", name="userregistration_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $userRegistration = new Userregistration();
        $form = $this->createForm('AppBundle\Form\UserRegistrationType', $userRegistration);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($userRegistration);
            $em->flush($userRegistration);

            return $this->redirectToRoute('userregistration_show', array('id' => $userRegistration->getId()));
        }

        return $this->render('userregistration/new.html.twig', array(
            'userRegistration' => $userRegistration,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a userRegistration entity.
     *
     * @Route("/{id}", name="userregistration_show")
     * @Method("GET")
     */
    public function showAction(UserRegistration $userRegistration)
    {
        $deleteForm = $this->createDeleteForm($userRegistration);

        return $this->render('userregistration/show.html.twig', array(
            'userRegistration' => $userRegistration,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing userRegistration entity.
     *
     * @Route("/{id}/edit", name="userregistration_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, UserRegistration $userRegistration)
    {
        $deleteForm = $this->createDeleteForm($userRegistration);
        $editForm = $this->createForm('AppBundle\Form\UserRegistrationType', $userRegistration);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('userregistration_edit', array('id' => $userRegistration->getId()));
        }

        return $this->render('userregistration/edit.html.twig', array(
            'userRegistration' => $userRegistration,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a userRegistration entity.
     *
     * @Route("/{id}", name="userregistration_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, UserRegistration $userRegistration)
    {
        $form = $this->createDeleteForm($userRegistration);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($userRegistration);
            $em->flush($userRegistration);
        }

        return $this->redirectToRoute('userregistration_index');
    }

    /**
     * Creates a form to delete a userRegistration entity.
     *
     * @param UserRegistration $userRegistration The userRegistration entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(UserRegistration $userRegistration)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('userregistration_delete', array('id' => $userRegistration->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
