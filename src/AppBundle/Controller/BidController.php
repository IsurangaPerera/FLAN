<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Project;

/**
 * Bid controller.
 *
 * @Route("projects")
 */
class BidController extends Controller
{
    /**
     * @Route("/show", name="add-bid")
     */
    public function showProjects(Request $request)
    {
      return $this->render('biddings/searchproject.html.twig', array());
    }

    /**
     * @Route("/getalldata", name="getData")
     */
    public function getData(Request $request)
    {
      $product = $this->getDoctrine()
        ->getRepository('AppBundle:Project')
        ->findAllProjects();

      print_r($product);

      return new Response(123);
    }
}
