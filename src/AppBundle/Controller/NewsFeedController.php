<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Proposal;
use AppBundle\Entity\Project;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;


/**
 * NewsFeed controller.
 *
 * @Route("newsfeed")
 */
class NewsFeedController extends Controller
{


    /**
     * Lists all news feed entities.
     *
     * @Route("/show", name="show_news")
     * @Method("GET")
     */
    public function show(Request $request)
    {

      $news = $this->getDoctrine()
                    ->getManager()
                   ->getRepository('AppBundle:NewsFeed')
                   ->findAll();
      $arrayCollection = array();

      foreach($news as $item) {
          $arrayCollection[] = array(
              'id' => $item->getId(),
              'description'=> $item->getDescription(),

          );
      }

      return new JsonResponse($arrayCollection);

    }


}
