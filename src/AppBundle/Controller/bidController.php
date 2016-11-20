<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Project;

class bidController extends Controller
{
    /**
     * @Route("/bid", name="add-bid")
     */
    public function indexAction(Request $request)
    {
      $em = $this->getDoctrine()->getManager();


      $project = $em->getRepository('AppBundle:Project')->findAll();

      return $this->render('default/add-bid.html.twig', array(
          'myProject'=> $project,
      ));
    }

    /**
     * @Route("/bid/add")
     */
    public function postAction(Request $request)
    {
        $data = $request->getContent();
        $data =  json_decode($data, true);

        $project = new Project();
        $project->setUserId(567);
        $project->setType($data["project"][0]["type"]);
        $project->setName($data["project"][0]["name"]);
        $project->setDescription($data["project"][0]["description"]);

        $em = $this->getDoctrine()->getManager();

    	$em->persist($project);

    	$em->flush();
    	return new Response("os");

    }


}
