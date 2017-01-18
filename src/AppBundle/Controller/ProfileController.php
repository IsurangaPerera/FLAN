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
use AppBundle\Entity\UserInfo;
use Symfony\Component\HttpFoundation\RedirectResponse;

class ProfileController extends Controller
{
    /**
     * @Route("user_info/post", name="updateUser")
     */
    public function CreateProfile(Request $request)
    {

        $session = $request->getSession();
        $user_id = $session->get('user_id');

        $user = new UserInfo();

        $user->setId($user_id);

        $user->setFullName($request->get('display_name'));
        $user->setJobTitle($request->get('cs_job_title'));
        $user->setMinSalary($request->get('cs_minimum_salary'));
        $user->setAllowInSearch($request->get('cs_allow_search'));
        $user->setSpecialism($request->get('cs_specialisms'));
        
        $user->setFacebook($request->get('cs_facebook'));
        $user->setTwitter($request->get('cs_twitter'));
        $user->setGplus($request->get('cs_google_plus'));

        $user->setLinkedin($request->get('cs_linkedin'));
        $user->setPhone($request->get('cs_phone_number'));
        $user->setEmail($request->get('user_email'));

        $user->setWeb($request->get('user_url'));
        $user->setCountry($request->get('cs_post_loc_country'));
        $user->setCity($request->get('cs_post_loc_city'));

        $user->setAddress($request->get('cs_post_comp_address'));
        $user->setExperience($request->get('cs_cus_field_experience'));
        $user->setAge($request->get('cs_cus_field_age'));

        $user->setCurrentSalary($request->get('cs_cus_field_current'));
        $user->setExpectedSalary($request->get('cs_cus_field_expected'));
        $user->setLanguage($request->get('cs_cus_field_language'));
        $user->setEducation($request->get('cs_cus_field_education'));

        $em = $this->getDoctrine()->getManager();
        $em->persist($user);
        $em->flush();

        return new RedirectResponse($this->generateUrl('dashboard'));
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
