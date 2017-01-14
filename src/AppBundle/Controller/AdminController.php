<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;


/**
 * Admin controller.
 *
 * @Route("admin")
 */
class AdminController extends Controller
{
  /**
   * @Route("/", name="admin-index")
   */
  public function indexAction(Request $request)
  {

      return $this->render('admin/dashboard.html.twig');

  }

}
