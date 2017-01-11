<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
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
      $projects = $this->getDoctrine()
        ->getRepository('AppBundle:Project')
        ->findAllProjects();

      $arrayCollection = array();

      foreach($projects as $project){
        
        $budget = $project->getProjectBudget();
        $budget_min = $budget->getBudgetMin();
        $budget_max = $budget->getBudgetMax();

        $skills = $this->getDoctrine()
          ->getRepository('AppBundle:ProjectSkills')
          ->findByProjectId($project->getProjectId());
        
        $skill_array = array();

        foreach($skills as $skill){
          array_push($skill_array, $skill->getSkill());
        } 

        $arrayCollection[] = array(
              'id' => $project->getProjectId(),
              'name' => $project->getName(),
              'description'=> $project->getDescription(),
              'type' => $project->getType(),
              'budget_min' => $budget_min,
              'budget_max' => $budget_max,
              'skills' => $skill_array
          );
      }
      return new Response(json_encode($arrayCollection));
    }

    /**
     * @Route("/bid/{id}", name="bid")
     */
    public function bidProjects(Request $request, $id)
    {
      $project = $this->getDoctrine()
        ->getRepository('AppBundle:Project')
        ->find($id);

      $budget = $project->getProjectBudget();
        $budget_min = $budget->getBudgetMin();
        $budget_max = $budget->getBudgetMax();

        $skills = $this->getDoctrine()
          ->getRepository('AppBundle:ProjectSkills')
          ->findByProjectId($project->getProjectId());
        
        $skill_array = array();

        foreach($skills as $skill){
          array_push($skill_array, $skill->getSkill());
        } 

        $obj = $this->getDoctrine()
        ->getRepository('AppBundle:ProjectBid');
        $avg_bid = $obj->getAverageBid($id);
        $count = $obj->getBidCount($id);

        $arrayCollection[] = array(
              'id' => $project->getProjectId(),
              'name' => $project->getName(),
              'description'=> $project->getDescription(),
              'type' => $project->getType(),
              'budget_avg' => "$$budget_min - $$budget_max",
              "average_bid" => (int)$avg_bid,
              "count" => $count,
              'skills' => $skill_array
          );
      //print_r($arrayCollection);
      return $this->render('default/addBid.html.twig', $arrayCollection[0]);
    }
}
