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
use AppBundle\Entity\User;

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
    public function howItWorks(Request $request)
    {
        return $this->render('default/howItWorks.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ));
    }

    /**

     * @Route("dashboard/", name="dashboard")
     */
    public function dashboard(Request $request)
    {
        return $this->render('default/dashboard.html.twig');
    }


     /**

     * Matches /login/*


     * Matches login/*

     * @Route("login/{id}/", name="login")
     */
    public function login($id)
    {
        $session = new Session();
        $session->set('user_id', $id);
        try {
            $session->start();
            $session->save();
        } catch (Exception $e) {

        }

        return new Response('200');
    }

    /**
     * @Route("register/", name="registerUser")
     */
    public function registerUser(Request $request)
    {

        $data = $request->getContent();
        $data =  json_decode($data, true);

        $user = new User();

        $id = $data['user'][0]['user_name'];

        $user->setUserName($data['user'][0]['user_name']);
        $user->setPassword($data['user'][0]['password']);

        $em = $this->getDoctrine()->getManager();
        $em->persist($user);
        $em->flush();

        $session = $request->getSession();
        $session->set('user_id', $id);
        try {
            $session->start();
            $session->save();
        } catch (Exception $e) {

        }

        return new Response('200');
    }

    /**
     * @Route("checksession/", name="sessionCheck")
     */
    public function sessionCheck(Request $request)
    {
        $session = $request->getSession();
        $user_id = $session->get('user_id');

        if($user_id != '')
            return new Response($user_id);
        return new Response();
    }

}
