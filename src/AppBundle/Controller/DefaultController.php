<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Session\Attribute\AttributeBag;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ));
    }

    /**
     * @Route("howitworks/", name="howitworks")
     */
    public function test(Request $request)
    {
        return $this->render('default/howItWorks.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ));
    }

    /**
<<<<<<< HEAD
     * @Route("dashboard/", name="dashboard")
     */
    public function dashboard(Request $request)
    {
        return $this->render('default/dashboard.html.twig');
    }



=======
     * Matches /login/*
     * @Route("login/{id}/", name="login")
     */
    public function login($id)
    {       
        $session = new Session();
        $session->set('user_id', $id);

        return new Response('200');
    }

    /**
     * @Route("checksession/", name="sessionCheck")
     */
    public function sessionCheck()
    {       
        $session = new Session();
        $user_id = $session->get('user_id');

        if($user_id != '')
            return new Response($user_id);
        return new Response();
    }
>>>>>>> refs/remotes/origin/master
}
