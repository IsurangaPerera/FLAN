<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;

use AppBundle\Entity\Project;

class PostProjectController extends Controller
{
    /**
     * @Route("/post", name="PostProject")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/postProject.html.twig');

    }

    /**
     * @Route("/project/post")
     */
    public function postAction(Request $request)
    {
        $session = new Session();

        $data = $request->getContent();
        $data =  json_decode($data, true);

        $project = new Project();
        
        $project->setUserId($session->get('user_id'));
        $project->setType($data["project"][0]["type"]);
        $project->setName($data["project"][0]["name"]);
        $project->setDescription($data["project"][0]["description"]);

        $em = $this->getDoctrine()->getManager();

    	$em->persist($project);

    	$em->flush();
<<<<<<< HEAD
    	return new Response("os");

    }


=======
    	return new Response();  
    }
>>>>>>> refs/remotes/origin/master
}
