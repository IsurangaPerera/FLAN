<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Proposal;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Proposal controller.
 *
 * @Route("proposal")
 */
class ProposalController extends Controller
{
    /**
     * Lists all proposal entities.
     *
     * @Route("/", name="proposal_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $proposals = $em->getRepository('AppBundle:Proposal')->findAll();

        return $this->render('default/proposal.html.twig', array(
            'proposals' => $proposals,
        ));
    }

    /**
     * Creates a new proposal entity.
     *
     * @Route("/new", name="proposal_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $proposal = new Proposal();
        $form = $this->createForm('AppBundle\Form\ProposalType', $proposal);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($proposal);
            $em->flush($proposal);

            return $this->redirectToRoute('proposal_show', array('id' => $proposal->getId()));
        }

        return $this->render('proposal/new.html.twig', array(
            'proposal' => $proposal,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a proposal entity.
     *
     * @Route("/{id}", name="proposal_show")
     * @Method("GET")
     */
    public function showAction(Proposal $proposal)
    {
        $deleteForm = $this->createDeleteForm($proposal);

        return $this->render('proposal/show.html.twig', array(
            'proposal' => $proposal,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing proposal entity.
     *
     * @Route("/{id}/edit", name="proposal_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Proposal $proposal)
    {
        $deleteForm = $this->createDeleteForm($proposal);
        $editForm = $this->createForm('AppBundle\Form\ProposalType', $proposal);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('proposal_edit', array('id' => $proposal->getId()));
        }

        return $this->render('proposal/edit.html.twig', array(
            'proposal' => $proposal,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a proposal entity.
     *
     * @Route("/{id}", name="proposal_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Proposal $proposal)
    {
        $form = $this->createDeleteForm($proposal);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($proposal);
            $em->flush($proposal);
        }

        return $this->redirectToRoute('proposal_index');
    }

    /**
     * Creates a form to delete a proposal entity.
     *
     * @param Proposal $proposal The proposal entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Proposal $proposal)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('proposal_delete', array('id' => $proposal->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
