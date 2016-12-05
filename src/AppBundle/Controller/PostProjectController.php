<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;

use AppBundle\Entity\Project;
use AppBundle\Entity\ProjectBudget;
use AppBundle\Entity\ProjectSkills;

class PostProjectController extends Controller
{
    /**
     * @Route("/post", name="PostProject")
     */
    public function indexAction(Request $request)
    {
        return $this->render('default/postProject.html.twig');

    }

    /**
     * @Route("/project/post")
     */
    public function postAction(Request $request)
    {
        $session = $request->getSession();

        $data = $request->getContent();
        $data =  json_decode($data, true);
        $id = uniqid();

        $project = new Project();


        $project->setProjectId($id);

        $project->setUserId($session->get('user_id'));
        $project->setType($data["project"][0]["type"]);
        $project->setName($data["project"][0]["name"]);
        $project->setDescription($data["project"][0]["description"]);

        $em = $this->getDoctrine()->getManager();

    	$em->persist($project);


    	$em->flush();

    	return new Response("os");

        $budget = new ProjectBudget();


        $budget->setProjectId($id);
        $budget->setType($data["budget"][0]["budget_type"]);
        $budget->setCurrency($data["budget"][0]["currency"]);
        $budget->setBudgetMin($data["budget"][0]["min_budget"]);
        $budget->setBudgetMax($data["budget"][0]["max_budget"]);
        $budget->setDuration($data["budget"][0]["duration"]);
        $budget->setWorkHours($data["budget"][0]["commitment"]);
        $budget->setCommitmentType($data["budget"][0]["commitment_type"]);

        $em->persist($budget);

        $skill = new ProjectSkills();
        $skill->setProjectId($id);

        foreach($data["skill"][0] as $x)
        {
            $skill->setSkill($x);
            $em->persist($skill);
        }

    	$em->flush();
    	return new Response("os");






    }

}
