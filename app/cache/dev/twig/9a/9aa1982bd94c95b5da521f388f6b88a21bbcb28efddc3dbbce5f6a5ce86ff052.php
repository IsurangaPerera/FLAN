<?php

/* default/postProject.html.twig */
class __TwigTemplate_1bc7197e97d46d72478a048d045a18fb816d7ebe01852a997c3e677e199f7c61 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a1809f00f44f5848b23982369116892b8d88f0492b55d9af1cbef4732a41703c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1809f00f44f5848b23982369116892b8d88f0492b55d9af1cbef4732a41703c->enter($__internal_a1809f00f44f5848b23982369116892b8d88f0492b55d9af1cbef4732a41703c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/postProject.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html class=\" is-responsive\" lang=\"en\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"/> 
    
    <meta name=\"viewport\" content=\"width=device-width\"/>

    <title>Post a Project | Freelancer</title>

    <!-- css section -->
    <link href=\"https://cdn5.f-cdn.com/build/css/js-plugins/jquery.fileupload-ui.css?v=cd7ec3a496ae786928f334b389815dd4&amp;m=6\" type=\"text/css\" rel=\"stylesheet\" />
    
    <link href=\"https://cdn2.f-cdn.com/build/css/flux/base.css?v=22d78e710e51c71919013de0d743d927&amp;m=6\" type=\"text/css\" rel=\"stylesheet\" />
    
    <link href=\"https://cdn6.f-cdn.com/build/css/abtests/20150907/post-project.css?v=a6a02fc08c66041f6818cddd64960bc4&amp;m=6\" type=\"text/css\" rel=\"stylesheet\" />

    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css\" rel=\"stylesheet\" />
    
    <!-- Prevent FOUC by hiding the body. This is similar to ng-cloak however not all layouts have angularjs-yet -->
    <style type=\"text/css\">
    .no-fouc { display: none;}
    </style>
    
    ";
        // line 25
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "3490027_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_3490027_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/3490027_jquery.min_1.js");
            // line 30
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "3490027_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_3490027_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/3490027_bootstrap.min_2.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "3490027_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_3490027_2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/3490027_jquery-migrate.min_3.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "3490027_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_3490027_3") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/3490027_font-awesome-icons_4.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "3490027_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_3490027_4") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/3490027_post-project_5.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "3490027"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_3490027") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/3490027.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 32
        echo "
    <script src=\"https://cdn6.f-cdn.com/build/js/pinky/utils/jquery-ui.custom.min.js?v=c96d46b5e81832f80c3d06b6de18fea4&amp;m=6\" type=\"text/javascript\"></script>

    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js\"></script>


</head>
<body>

    <div id=\"fb_pixel\"></div>

    <div class=\"pinky-template\">
        <div id=\"main\" class=\"main-content\" aria-label=\"Content\">

            <section class=\"PostProject\">
                <header class=\"PostProject-header\">
                    <span class=\"PostProject-flLogo\" title=\"Freelancer.com\" data-qtsb-section=\"NavBar\" data-qtsb-label=\"FreelancerLogoClick\">


                    </span>
                </header>
                <div class=\"section-inner PostProject-body\">

                    <div class=\"AuthRemarks\" id=\"headerTopLoggedIn\">
                        <div class=\"AuthRemarks-imgWrapper profile-pic-wrapper\">
                            <figure class=\"profile-img\" id=\"loggedinLogo\"></figure>
                        </div>
                        <div class=\"AuthRemarks-content\">
                            <h2 class=\"AuthRemarks-title\">Welcome back <span id=\"loggedinFullname\"></span>!</h2>
                            <p class=\"AuthRemarks-msg\">Describe your project below. We have over 20.9 million professionals ready to complete your work!</p>
                        </div>
                    </div>

                    <form id=\"nonAuthForm\" class=\"fl-form large-form AuthForm\">
                        <nav class=\"RadioTabs\">
                            <ul class=\"RadioTabs-list\" data-qtsb-section=\"PPP_inline_login\">
                                <li class=\"RadioTabs-item authTypeBtn\">
                                    <input type=\"radio\" value=\"userTypeNew\" id=\"userTypeNew\" name=\"userType\"
                                    class=\"CustomRadio\" checked
                                    data-qtsb-label=\"click_To_Display_Signup\">
                                    <label for=\"userTypeNew\" class=\"CustomRadio\">
                                        <span class=\"CustomRadio-textLabel PostProject-stepLabel\">I am a new User</span>
                                    </label>
                                </li>
                                <li class=\"RadioTabs-item authTypeBtn\">
                                    <input type=\"radio\" value=\"userTypeReturning\" id=\"userTypeReturning\" name=\"userType\"
                                    class=\"CustomRadio\" 
                                    data-qtsb-label=\"click_To_Display_Login\">
                                    <label for=\"userTypeReturning\" class=\"CustomRadio\">
                                        <span class=\"CustomRadio-textLabel PostProject-stepLabel\">I am a returning User</span>
                                    </label>
                                </li>
                            </ul>
                        </nav>

                        <!-- Signup Fields -->
                        <fieldset id=\"projectLoginUserCreate\" class=\"AuthForm-fields \">
                            <ol class=\"AuthForm-group\">
                               <li class=\"form-step\">
                                <label for=\"new-email\" class=\"PostProject-stepLabel\">Email address:</label>
                                <input type=\"text\" id=\"new-email\" name=\"email\" value=\"\">
                                <div class=\"form-error\">
                                    <span class=\"fl-icon-warning-sign\"></span>
                                    <span class=\"fl-icon-close\"></span>
                                    <span class=\"error-text\"></span>
                                </div>
                            </li>
                            <li class=\"form-step\">
                                <label for=\"new-username\" class=\"PostProject-stepLabel\">New Username:</label>
                                <input type=\"text\" name=\"newusername\" maxlength=\"16\" id=\"new-username\" value=\"\">
                                <div class=\"form-error\">
                                    <span class=\"fl-icon-warning-sign\"></span>
                                    <span class=\"fl-icon-close\"></span>
                                    <span class=\"error-text\"></span>
                                </div>
                            </li>
                        </ol>
                        <ol class=\"AuthForm-group\">
                            <li class=\"form-step has-tip-popover\">
                                <label for=\"passwd\" class=\"PostProject-stepLabel\">Password:</label>
                                <input type=\"password\" name=\"newuserpasswd\" id=\"passwd\">
                                <div class=\"form-error\">
                                    <span class=\"fl-icon-warning-sign\"></span>
                                    <span class=\"fl-icon-close\"></span>
                                    <span class=\"error-text\"></span>
                                </div>
                            </li>
                            <li class=\"form-step\">
                                <label for=\"passwd1\" class=\"PostProject-stepLabel\">Re-enter Password:</label>
                                <input type=\"password\" name=\"newuserpasswd1\" id=\"passwd1\">
                                <div class=\"form-error\">
                                    <span class=\"fl-icon-warning-sign\"></span>
                                    <span class=\"fl-icon-close\"></span>
                                    <span class=\"error-text\"></span>
                                </div>
                            </li>
                        </ol>
                    </fieldset>

                    <!-- Login Fields -->
                    <fieldset id=\"userTypeReturningDiv\" class=\"AuthForm-fields is-AuthFieldHidden\">
                        <ol id=\"returningForm\">
                            <li class=\"form-step\">
                                <label for=\"username\" class=\"PostProject-stepLabel\">Username or Email:</label>
                                <input type=\"text\" id=\"post-proj-username\" value=\"\" size=\"45\" name=\"username\">
                                <div class=\"form-error\">
                                    <span class=\"error-text\"></span>
                                </div>
                            </li>
                            <li class=\"form-step\">
                                <label for=\"password\" class=\"PostProject-stepLabel\">Password:</label>
                                <input type=\"password\" id=\"post-proj-pwd\" name=\"passwd\" size=\"45\">
                                <div class=\"form-error\">
                                    <span class=\"error-text\"></span>
                                </div>
                            </li>
                        </ol>
                        <aside class=\"AuthForm-errorContainer\">
                            <span class=\"alert alert-warning auth-form-alert\"></span>
                            <aside class=\"alert alert-error auth-form-error\"></aside>
                        </aside>
                        <span id=\"returningAjax\" class=\"AuthForm-loader\">
                            <img alt=\"Freelancer Loading...\" src=\"https://cdn6.f-cdn.com/img/spinner-black.gif?v=9912924b0fc06df1b0b490d9823a931f&m=6\">
                        </span>
                    </fieldset>

                    <!-- Facebook Auth -->
                    <fieldset class=\"AuthForm-externalAuth\">
                        <p class=\"AuthForm-externalAuthDesc\">Save time and get the best experience by connecting your Facebook account.</p>
                        <a id=\"fb-connect-button\" class=\"btn btn-facebook gaf-fb-connected-button\" data-uitest-target=\"facebook-connect-button\">
                            <span class=\"fl-icon-facebook\"></span>Connect with Facebook
                        </a>
                    </fieldset>
                </form>


                <div class=\"ProjectUpsell\">
                    <h3 class=\"ProjectUpsell-heading\">It&#039;s free to Post a Project!</h3>
                    <p class=\"ProjectUpsell-subHeading\">Try it today!</p>
                    <ul class=\"ProjectUpsell-list\">
                        <li class=\"ProjectUpsell-item\">
                            <span class=\"ProjectUpsell-icon fl-icon-tick\"></span>
                            Get bids from skilled freelancers in minutes.
                        </li>
                        <li class=\"ProjectUpsell-item\">
                            <span class=\"ProjectUpsell-icon fl-icon-tick\"></span>
                            View freelancer profiles and feedback, then instantly chat with them!
                        </li>
                        <li class=\"ProjectUpsell-item\">
                            <span class=\"ProjectUpsell-icon fl-icon-tick\"></span>
                            With only a 3%* commission fee, your favorite freelancer can start working for you today!
                        </li>
                        <li class=\"ProjectUpsell-item\">
                            <span class=\"ProjectUpsell-icon fl-icon-tick\"></span>
                            Pay the freelancer once you&#039;re 100% satisfied. *Minimum fees may apply.
                        </li>
                    </ul>
                    <a href=\"../howitworks/\" class=\"ProjectUpsell-link\" target=\"_blank\"
                    data-qtsb-section=\"PPP_Form_Behaviour\" data-qtsb-label=\"Click_Learn_More_Link\">

                    Learn More
                </a>
            </div>

            <form id=\"project-form\" action=\"/buyers/onverifycreate.php\"
            method=\"POST\" enctype=\"multipart/form-data\" class=\"fl-form has-numbers large-form PostProject-form\">
            <input type=\"hidden\" id=\"thm_session\" name=\"thm_session\" value=\"82031db0eefbdbcf008f3b1e65479778544e7aa61099ff9287f3be7d6773728deffd88ee7976d038\">

            <input type=\"hidden\" name=\"id\" value=\"\">
            <input type=\"hidden\" name=\"submitAction\" value=\"publish project\">
            <input type=\"hidden\" name=\"action\" value=\"updatePublish\">
            <input type=\"hidden\" name=\"page_name\" value=\"PPP\">
            <input type=\"hidden\" name=\"csrf_token\"/>
            <ol>
                <li class=\"\">
                    <fieldset>
                        <legend>What type of work do you require?</legend>
                        <ol>
                            <li class=\"form-step primary-category\">
                                <select id=\"project-category\" name=\"skill_category\">

                                    <option value=\"1\">
                                        Websites IT &amp; Software
                                    </option>

                                    <option value=\"2\">
                                        Mobile
                                    </option>

                                    <option value=\"3\">
                                        Writing
                                    </option>

                                    <option value=\"4\">
                                        Design
                                    </option>

                                    <option value=\"5\">
                                        Data Entry
                                    </option>

                                    <option value=\"6\">
                                        Product Sourcing &amp; Manufacturing
                                    </option>

                                    <option value=\"7\">
                                        Sales &amp; Marketing
                                    </option>

                                    <option value=\"8\">
                                        Business, Accounting &amp; Legal
                                    </option>

                                    <option value=\"9\">
                                        Local Jobs &amp; Services
                                    </option>

                                    <option value=\"-1\" selected=\"selected\">Select a category of work (optional)</option>
                                </select>
                            </li>

                            <input id=\"project-sub-category\" type=\"text\" placeholder=\"Enter a category\" hidden>

                        </ol>
                    </fieldset>
                </li>
                <li>
                    <fieldset>
                        <legend>What is your project about?</legend>
                        <ol>
                            <li class=\"form-step\">
                                <label for=\"project-name\" class=\"PostProject-stepLabel\">Project Name:
                                </label>

                                <input type=\"text\"
                                placeholder=\"e.g. Build a website\"
                                id=\"project-name\"
                                name=\"project_name\"
                                value=\"\">

                                <div class=\"form-error\">
                                    <span class=\"fl-icon-warning-sign\"></span>
                                    <span class=\"fl-icon-close\"></span>
                                    <span class=\"error-text\"></span>
                                </div>
                            </li>
                            <li class=\"form-step PostProject-type\" data-qtsb-section=\"PPP_Form_Behaviour\"
                            <label for=\"online-project\" class=\"PostProject-stepLabel\">
                                Does your project require a local freelancer?
                            </label>
                            <input type=\"checkbox\" class=\"custom-checkbox\" id=\"online-project\" name=\"online-project\"
                            data-qtsb-label=\"click_Local_Job_Checkbox\" >
                            <label class=\"custom-checkbox\" for=\"online-project\"></label>
                            <div class=\"PostProject-localJob\" id=\"ppp-location-selector\">
                                <label for=\"project-location\" class=\"PostProject-stepLabel\">Where do you want this done?</label>
                                <div class=\"input-btn-combo\">
                                    <input type=\"hidden\" name=\"project_type\" value=\"online\">
                                    <input type=\"hidden\" id=\"project-geoInfo-administrative-area-level-1\" name='project_geoInfo_administrative_area_level_1'>
                                    <input type=\"hidden\" id=\"project-geoInfo-country\" name=\"project_geoInfo_country\">
                                    <input type=\"hidden\" id=\"project-geoInfo-formatted-address\" name=\"project_geoInfo_formatted_address\">
                                    <input type=\"hidden\" id=\"project-geoInfo-lat\" name=\"project_geoInfo_lat\">
                                    <input type=\"hidden\" id=\"project-geoInfo-lng\" name=\"project_geoInfo_lng\">
                                    <input type=\"hidden\" id=\"project-geoInfo-vicinity\" name=\"project_geoInfo_vicinity\">

                                    <input id=\"project-location\"
                                    type=\"text\"
                                    name=\"project_location\"
                                    placeholder=\"Enter a location (City, Suburb, Town or Address)\">
                                    <a href=\"#\" id=\"project-reverseGeocode-btn\" class=\"btn btn-info\" data-qtsb-label=\"click_Local_Detect_Location\">
                                        Detect My Location
                                    </a>
                                </div>
                            </div>
                        </li>
                    </ol>
                </fieldset>
            </li>

            <li>
                <fieldset>
                    <legend>Tell us more about your project.</legend>
                    <ol>
                        <li class=\"form-step select2-form-step\">
                            <label for=\"project-skills\" class=\"PostProject-stepLabel\">What skills are required?
                            </label>
                            
                            <select id=\"project-skills\" class=\"js-example-basic-multiple\" multiple=\"multiple\">
                                <option>Algorithm</option>
                                <option>Web design</option>
                            </select>
                             <script type=\"text/javascript\">
                            \$(\".js-example-basic-multiple\").select2();
                            </script>
                            
                            <div class=\"skill-suggestion-widget\">
                                <header class=\"skill-suggestion-head\">Skill Suggestions (add 5 more)</header>
                                <ul class=\"skill-suggestion-list\">
                                    <li class=\"skill-suggestion-item\"><a href=\"#\" class=\"skill-suggestion-link\">Graphic Design</a></li>
                                    <li>
                                        <a href=\"#\" class=\"skill-suggestion-link more\">
                                            <span class=\"fl-icon-plus\"></span> More
                                        </a>
                                        <span class=\"skill-suggestion-link full\">
                                            <span class=\"fl-icon-checkmark\"></span> You have selected your skills
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class=\"form-step\">
                            <label for=\"project-description\" class=\"PostProject-stepLabel\">Describe your project
                            </span>
                        </label>

                        <textarea id=\"project-description\"
                        resize=\"vertical\"
                        name=\"description\"
                        rows=\"3\"
                        value=\"\"
                        placeholder=\"Describe your project here...\"></textarea>
                        <div class=\"form-error\">
                            <span class=\"fl-icon-warning-sign\"></span>
                            <span class=\"fl-icon-close\"></span>
                            <span class=\"error-text\"></span>
                        </div>
                    </li>
                    <li class=\"form-step hide\" id=\"project-review-warning\">
                        <div class=\"alert alert-warning ReviewWarning\">
                            <h4 class=\"ReviewWarning-title\">Warning about &quot;Review&quot; projects.</h4>
                            <p class=\"ReviewWarning-desc\">
                                Projects to create fraudulent or fake reviews are strictly prohibited and are in violation of our Terms and Conditions. Posting such projects will result in your account being suspended or terminated.
                            </p>
                            <input type=\"checkbox\" class=\"custom-checkbox\" id=\"project-review-confirm\" name=\"review_confirm\">
                            <label class=\"custom-checkbox ReviewWarning-label\" for=\"project-review-confirm\">
                                I confirm that this project is not to create fraudulent or fake reviews
                            </label>
                            <div class=\"form-error\">
                                <span class=\"fl-icon-warning-sign\"></span>
                                <span class=\"fl-icon-close\"></span>
                                <span class=\"error-text\"></span>
                            </div>
                        </div>
                    </li>

                </ol>
            </fieldset>
        </li>
        <li>
            <fieldset class=\"RadioTabs-wrapper\">
                <legend>What budget do you have in mind?</legend>
                <nav class=\"RadioTabs\">
                    <ul class=\"RadioTabs-list\" data-qtsb-section=\"PPP_Form_Behaviour\">
                        <li class=\"RadioTabs-item\" data-qtsb-label=\"click_Fixed_Project\">
                            <input type=\"radio\" name=\"budget-type\" id=\"budget-fixed\" value=\"fixed\"
                            class=\"CustomRadio\" data-tab=\"fixed-budget\" checked>
                            <label for=\"budget-fixed\" class=\"CustomRadio\">
                                <span class=\"CustomRadio-textLabel PostProject-stepLabel\">Set Fixed Price</span>
                            </label>
                        </li>
                        <li class=\"RadioTabs-item\" data-qtsb-label=\"click_Hourly_Project\">
                            <input type=\"radio\" name=\"budget-type\" id=\"budget-hourly\" value=\"hourly\"
                            class=\"CustomRadio\" data-tab=\"hourly-budget\">
                            <label for=\"budget-hourly\" class=\"CustomRadio\">
                                <span class=\"CustomRadio-textLabel PostProject-stepLabel\">Set an Hourly Rate</span>
                            </label>
                        </li>
                    </ul>
                </nav>

                <!-- Fixed Budget -->
                <ol class=\"PostProject-budgetFields\" id=\"fixed-budget\">
                    <li class=\"form-step form-step--multiFields\">
                        <div class=\"form-step-fieldContainer\">
                            <select id=\"project-currency\" name=\"currency\">

                                <option value=\"1\" title=\"\$\"
                                selected >USD
                            </option>
                        </select>
                    </div>
                    <div class=\"form-step-fieldContainer\">
                        <select id=\"project-budget\" name='budget'>

                            <option value='188' >
                                Micro Project(\$10-30 USD)
                            </option>

                            <option value='5' >
                                Simple project(\$30-250 USD)
                            </option>

                            <option value='1' selected>
                                Very small project(\$250-750 USD)
                            </option>

                            <option value='2' >
                                Small project(\$750-1500 USD)
                            </option>

                            <option value='3' >
                                Medium project(\$1500-3000 USD)
                            </option>

                            <option value='4' >
                                Large project(\$3000-5000 USD)
                            </option>

                            <option value='6' >
                                Larger project(\$5000-10000 USD)
                            </option>

                            <option value='custom' >Customize budget</option>
                        </select>
                    </div>
                </li>
                <li id=\"project-duration-select-step\" class=\"form-step\" hidden>
                    <label for=\"project-duration\" class=\"PostProject-stepLabel\">Project Duration:</label>
                    <select id=\"project-duration\" name=\"duration\">

                        <option value='1' >
                            Less than 1 week
                        </option>

                        <option value='2' selected>
                            1 week - 4 weeks
                        </option>

                        <option value='3' >
                            1 month - 3 months
                        </option>

                        <option value='4' >
                            3 months - 6 months
                        </option>

                        <option value='5' >
                            Over 6 months / Ongoing
                        </option>

                        <option value='6' >
                            Not Sure
                        </option>

                    </select>
                </li>
                <li id=\"project-duration-hours-step\" class=\"form-step\" hidden>
                    <label for=\"project-commitment\" class=\"PostProject-stepLabel\">How many hours of work is required?</label>
                    <div class=\"form-step--multiFields\">
                        <div class=\"form-step-fieldContainer PostProject-commitment\">
                            <input type=\"text\" id=\"project-commitment\" name=\"commitment\" value=\"10\">
                        </div>
                        <div class=\"form-step-fieldContainer\">
                            <select name=\"commitmentInterval\" id=\"project-commitment-type\">
                                <option value=\"week\">Per Week</option>
                                <option value=\"month\">Per Month</option>
                            </select>
                        </div>
                        <div class=\"form-step-fieldContainer\">
                            <input type=\"checkbox\" class=\"custom-checkbox\" name=\"commitment_defined\"
                            id=\"commitment_undefined_option\" >
                            <label class=\"custom-checkbox\" for=\"commitment_undefined_option\">
                                <span class=\"PostProject-stepLabel\">I am not sure</span>
                            </label>
                            <input type=\"hidden\" name=\"commitment_undefined\" id=\"commitment_undefined\" value=\"false\">
                        </div>
                    </div>
                    <div class=\"form-error\">
                        <span class=\"fl-icon-warning-sign\"></span>
                        <span class=\"fl-icon-close\"></span>
                        <span class=\"error-text\"></span>
                    </div>
                </li>

                <!-- Custom Budget -->
                <li id=\"min_budget_group\" hidden>
                    <label for=\"project-custom-min-budget\" class=\"PostProject-stepLabel\">Minimum Budget</label>
                    <div class=\"input-group\">
                        <span class=\"add-on currency-sign\">\$</span>
                        <input id=\"project-custom-min-budget\" type=\"number\" name=\"min_sum\">
                        <span class=\"add-on currency-sign\">USD</span>
                    </div>
                </li>
                <li id=\"max_budget_group\" hidden>
                    <label for=\"project-custom-max-budget\" class=\"PostProject-stepLabel\">Maximum Budget</label>
                    <div class=\"input-group\">
                        <span class=\"add-on currency-sign\">\$</span>
                        <input id=\"project-custom-max-budget\" type=\"number\" name=\"max_sum\">
                        <span class=\"add-on currency-sign\">USD</span>
                    </div>
                </li>
            </ol>
        </fieldset>
    </li>

</ol>
</form>



<div id=\"PppSubmit\" class=\"PostProject-submit\">
    <button id=\"post-project-submit\" onclick=\"postProject()\" class=\"btn btn-info btn-xlarge PostProject-btn\" data-qtsb-section=\"PPP\" data-qtsb-label=\"Submit\">Post Project Now</button>

    <p class=\"PostProject-terms terms-text\">
        By clicking 'Post Project Now', you are indicating that you have read and agree to the <a id=\"term-and-condition\" href=\"#\">Terms &amp; Conditions</a> and <a id=\"privacy-policy\" href=\"#\">Privacy Policy</a>
    </p>

</div>
</div>
</section>

</div>
</div>

</div>
</body>
</html>



";
        
        $__internal_a1809f00f44f5848b23982369116892b8d88f0492b55d9af1cbef4732a41703c->leave($__internal_a1809f00f44f5848b23982369116892b8d88f0492b55d9af1cbef4732a41703c_prof);

    }

    public function getTemplateName()
    {
        return "default/postProject.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 32,  52 => 30,  48 => 25,  22 => 1,);
    }

    public function getSource()
    {
        return "
<!DOCTYPE html>
<html class=\" is-responsive\" lang=\"en\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"/> 
    
    <meta name=\"viewport\" content=\"width=device-width\"/>

    <title>Post a Project | Freelancer</title>

    <!-- css section -->
    <link href=\"https://cdn5.f-cdn.com/build/css/js-plugins/jquery.fileupload-ui.css?v=cd7ec3a496ae786928f334b389815dd4&amp;m=6\" type=\"text/css\" rel=\"stylesheet\" />
    
    <link href=\"https://cdn2.f-cdn.com/build/css/flux/base.css?v=22d78e710e51c71919013de0d743d927&amp;m=6\" type=\"text/css\" rel=\"stylesheet\" />
    
    <link href=\"https://cdn6.f-cdn.com/build/css/abtests/20150907/post-project.css?v=a6a02fc08c66041f6818cddd64960bc4&amp;m=6\" type=\"text/css\" rel=\"stylesheet\" />

    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css\" rel=\"stylesheet\" />
    
    <!-- Prevent FOUC by hiding the body. This is similar to ng-cloak however not all layouts have angularjs-yet -->
    <style type=\"text/css\">
    .no-fouc { display: none;}
    </style>
    
    {% javascripts 'bundles/app/js/jquery.min.js'
    'bundles/app/js/bootstrap.min.js'
    'bundles/app/js/jquery-migrate.min.js'
    'bundles/app/js/font-awesome-icons.js'
    'bundles/app/js/post-project.js'%}
    <script src=\"{{ asset_url }}\"></script>
    {% endjavascripts %}

    <script src=\"https://cdn6.f-cdn.com/build/js/pinky/utils/jquery-ui.custom.min.js?v=c96d46b5e81832f80c3d06b6de18fea4&amp;m=6\" type=\"text/javascript\"></script>

    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js\"></script>


</head>
<body>

    <div id=\"fb_pixel\"></div>

    <div class=\"pinky-template\">
        <div id=\"main\" class=\"main-content\" aria-label=\"Content\">

            <section class=\"PostProject\">
                <header class=\"PostProject-header\">
                    <span class=\"PostProject-flLogo\" title=\"Freelancer.com\" data-qtsb-section=\"NavBar\" data-qtsb-label=\"FreelancerLogoClick\">


                    </span>
                </header>
                <div class=\"section-inner PostProject-body\">

                    <div class=\"AuthRemarks\" id=\"headerTopLoggedIn\">
                        <div class=\"AuthRemarks-imgWrapper profile-pic-wrapper\">
                            <figure class=\"profile-img\" id=\"loggedinLogo\"></figure>
                        </div>
                        <div class=\"AuthRemarks-content\">
                            <h2 class=\"AuthRemarks-title\">Welcome back <span id=\"loggedinFullname\"></span>!</h2>
                            <p class=\"AuthRemarks-msg\">Describe your project below. We have over 20.9 million professionals ready to complete your work!</p>
                        </div>
                    </div>

                    <form id=\"nonAuthForm\" class=\"fl-form large-form AuthForm\">
                        <nav class=\"RadioTabs\">
                            <ul class=\"RadioTabs-list\" data-qtsb-section=\"PPP_inline_login\">
                                <li class=\"RadioTabs-item authTypeBtn\">
                                    <input type=\"radio\" value=\"userTypeNew\" id=\"userTypeNew\" name=\"userType\"
                                    class=\"CustomRadio\" checked
                                    data-qtsb-label=\"click_To_Display_Signup\">
                                    <label for=\"userTypeNew\" class=\"CustomRadio\">
                                        <span class=\"CustomRadio-textLabel PostProject-stepLabel\">I am a new User</span>
                                    </label>
                                </li>
                                <li class=\"RadioTabs-item authTypeBtn\">
                                    <input type=\"radio\" value=\"userTypeReturning\" id=\"userTypeReturning\" name=\"userType\"
                                    class=\"CustomRadio\" 
                                    data-qtsb-label=\"click_To_Display_Login\">
                                    <label for=\"userTypeReturning\" class=\"CustomRadio\">
                                        <span class=\"CustomRadio-textLabel PostProject-stepLabel\">I am a returning User</span>
                                    </label>
                                </li>
                            </ul>
                        </nav>

                        <!-- Signup Fields -->
                        <fieldset id=\"projectLoginUserCreate\" class=\"AuthForm-fields \">
                            <ol class=\"AuthForm-group\">
                               <li class=\"form-step\">
                                <label for=\"new-email\" class=\"PostProject-stepLabel\">Email address:</label>
                                <input type=\"text\" id=\"new-email\" name=\"email\" value=\"\">
                                <div class=\"form-error\">
                                    <span class=\"fl-icon-warning-sign\"></span>
                                    <span class=\"fl-icon-close\"></span>
                                    <span class=\"error-text\"></span>
                                </div>
                            </li>
                            <li class=\"form-step\">
                                <label for=\"new-username\" class=\"PostProject-stepLabel\">New Username:</label>
                                <input type=\"text\" name=\"newusername\" maxlength=\"16\" id=\"new-username\" value=\"\">
                                <div class=\"form-error\">
                                    <span class=\"fl-icon-warning-sign\"></span>
                                    <span class=\"fl-icon-close\"></span>
                                    <span class=\"error-text\"></span>
                                </div>
                            </li>
                        </ol>
                        <ol class=\"AuthForm-group\">
                            <li class=\"form-step has-tip-popover\">
                                <label for=\"passwd\" class=\"PostProject-stepLabel\">Password:</label>
                                <input type=\"password\" name=\"newuserpasswd\" id=\"passwd\">
                                <div class=\"form-error\">
                                    <span class=\"fl-icon-warning-sign\"></span>
                                    <span class=\"fl-icon-close\"></span>
                                    <span class=\"error-text\"></span>
                                </div>
                            </li>
                            <li class=\"form-step\">
                                <label for=\"passwd1\" class=\"PostProject-stepLabel\">Re-enter Password:</label>
                                <input type=\"password\" name=\"newuserpasswd1\" id=\"passwd1\">
                                <div class=\"form-error\">
                                    <span class=\"fl-icon-warning-sign\"></span>
                                    <span class=\"fl-icon-close\"></span>
                                    <span class=\"error-text\"></span>
                                </div>
                            </li>
                        </ol>
                    </fieldset>

                    <!-- Login Fields -->
                    <fieldset id=\"userTypeReturningDiv\" class=\"AuthForm-fields is-AuthFieldHidden\">
                        <ol id=\"returningForm\">
                            <li class=\"form-step\">
                                <label for=\"username\" class=\"PostProject-stepLabel\">Username or Email:</label>
                                <input type=\"text\" id=\"post-proj-username\" value=\"\" size=\"45\" name=\"username\">
                                <div class=\"form-error\">
                                    <span class=\"error-text\"></span>
                                </div>
                            </li>
                            <li class=\"form-step\">
                                <label for=\"password\" class=\"PostProject-stepLabel\">Password:</label>
                                <input type=\"password\" id=\"post-proj-pwd\" name=\"passwd\" size=\"45\">
                                <div class=\"form-error\">
                                    <span class=\"error-text\"></span>
                                </div>
                            </li>
                        </ol>
                        <aside class=\"AuthForm-errorContainer\">
                            <span class=\"alert alert-warning auth-form-alert\"></span>
                            <aside class=\"alert alert-error auth-form-error\"></aside>
                        </aside>
                        <span id=\"returningAjax\" class=\"AuthForm-loader\">
                            <img alt=\"Freelancer Loading...\" src=\"https://cdn6.f-cdn.com/img/spinner-black.gif?v=9912924b0fc06df1b0b490d9823a931f&m=6\">
                        </span>
                    </fieldset>

                    <!-- Facebook Auth -->
                    <fieldset class=\"AuthForm-externalAuth\">
                        <p class=\"AuthForm-externalAuthDesc\">Save time and get the best experience by connecting your Facebook account.</p>
                        <a id=\"fb-connect-button\" class=\"btn btn-facebook gaf-fb-connected-button\" data-uitest-target=\"facebook-connect-button\">
                            <span class=\"fl-icon-facebook\"></span>Connect with Facebook
                        </a>
                    </fieldset>
                </form>


                <div class=\"ProjectUpsell\">
                    <h3 class=\"ProjectUpsell-heading\">It&#039;s free to Post a Project!</h3>
                    <p class=\"ProjectUpsell-subHeading\">Try it today!</p>
                    <ul class=\"ProjectUpsell-list\">
                        <li class=\"ProjectUpsell-item\">
                            <span class=\"ProjectUpsell-icon fl-icon-tick\"></span>
                            Get bids from skilled freelancers in minutes.
                        </li>
                        <li class=\"ProjectUpsell-item\">
                            <span class=\"ProjectUpsell-icon fl-icon-tick\"></span>
                            View freelancer profiles and feedback, then instantly chat with them!
                        </li>
                        <li class=\"ProjectUpsell-item\">
                            <span class=\"ProjectUpsell-icon fl-icon-tick\"></span>
                            With only a 3%* commission fee, your favorite freelancer can start working for you today!
                        </li>
                        <li class=\"ProjectUpsell-item\">
                            <span class=\"ProjectUpsell-icon fl-icon-tick\"></span>
                            Pay the freelancer once you&#039;re 100% satisfied. *Minimum fees may apply.
                        </li>
                    </ul>
                    <a href=\"../howitworks/\" class=\"ProjectUpsell-link\" target=\"_blank\"
                    data-qtsb-section=\"PPP_Form_Behaviour\" data-qtsb-label=\"Click_Learn_More_Link\">

                    Learn More
                </a>
            </div>

            <form id=\"project-form\" action=\"/buyers/onverifycreate.php\"
            method=\"POST\" enctype=\"multipart/form-data\" class=\"fl-form has-numbers large-form PostProject-form\">
            <input type=\"hidden\" id=\"thm_session\" name=\"thm_session\" value=\"82031db0eefbdbcf008f3b1e65479778544e7aa61099ff9287f3be7d6773728deffd88ee7976d038\">

            <input type=\"hidden\" name=\"id\" value=\"\">
            <input type=\"hidden\" name=\"submitAction\" value=\"publish project\">
            <input type=\"hidden\" name=\"action\" value=\"updatePublish\">
            <input type=\"hidden\" name=\"page_name\" value=\"PPP\">
            <input type=\"hidden\" name=\"csrf_token\"/>
            <ol>
                <li class=\"\">
                    <fieldset>
                        <legend>What type of work do you require?</legend>
                        <ol>
                            <li class=\"form-step primary-category\">
                                <select id=\"project-category\" name=\"skill_category\">

                                    <option value=\"1\">
                                        Websites IT &amp; Software
                                    </option>

                                    <option value=\"2\">
                                        Mobile
                                    </option>

                                    <option value=\"3\">
                                        Writing
                                    </option>

                                    <option value=\"4\">
                                        Design
                                    </option>

                                    <option value=\"5\">
                                        Data Entry
                                    </option>

                                    <option value=\"6\">
                                        Product Sourcing &amp; Manufacturing
                                    </option>

                                    <option value=\"7\">
                                        Sales &amp; Marketing
                                    </option>

                                    <option value=\"8\">
                                        Business, Accounting &amp; Legal
                                    </option>

                                    <option value=\"9\">
                                        Local Jobs &amp; Services
                                    </option>

                                    <option value=\"-1\" selected=\"selected\">Select a category of work (optional)</option>
                                </select>
                            </li>

                            <input id=\"project-sub-category\" type=\"text\" placeholder=\"Enter a category\" hidden>

                        </ol>
                    </fieldset>
                </li>
                <li>
                    <fieldset>
                        <legend>What is your project about?</legend>
                        <ol>
                            <li class=\"form-step\">
                                <label for=\"project-name\" class=\"PostProject-stepLabel\">Project Name:
                                </label>

                                <input type=\"text\"
                                placeholder=\"e.g. Build a website\"
                                id=\"project-name\"
                                name=\"project_name\"
                                value=\"\">

                                <div class=\"form-error\">
                                    <span class=\"fl-icon-warning-sign\"></span>
                                    <span class=\"fl-icon-close\"></span>
                                    <span class=\"error-text\"></span>
                                </div>
                            </li>
                            <li class=\"form-step PostProject-type\" data-qtsb-section=\"PPP_Form_Behaviour\"
                            <label for=\"online-project\" class=\"PostProject-stepLabel\">
                                Does your project require a local freelancer?
                            </label>
                            <input type=\"checkbox\" class=\"custom-checkbox\" id=\"online-project\" name=\"online-project\"
                            data-qtsb-label=\"click_Local_Job_Checkbox\" >
                            <label class=\"custom-checkbox\" for=\"online-project\"></label>
                            <div class=\"PostProject-localJob\" id=\"ppp-location-selector\">
                                <label for=\"project-location\" class=\"PostProject-stepLabel\">Where do you want this done?</label>
                                <div class=\"input-btn-combo\">
                                    <input type=\"hidden\" name=\"project_type\" value=\"online\">
                                    <input type=\"hidden\" id=\"project-geoInfo-administrative-area-level-1\" name='project_geoInfo_administrative_area_level_1'>
                                    <input type=\"hidden\" id=\"project-geoInfo-country\" name=\"project_geoInfo_country\">
                                    <input type=\"hidden\" id=\"project-geoInfo-formatted-address\" name=\"project_geoInfo_formatted_address\">
                                    <input type=\"hidden\" id=\"project-geoInfo-lat\" name=\"project_geoInfo_lat\">
                                    <input type=\"hidden\" id=\"project-geoInfo-lng\" name=\"project_geoInfo_lng\">
                                    <input type=\"hidden\" id=\"project-geoInfo-vicinity\" name=\"project_geoInfo_vicinity\">

                                    <input id=\"project-location\"
                                    type=\"text\"
                                    name=\"project_location\"
                                    placeholder=\"Enter a location (City, Suburb, Town or Address)\">
                                    <a href=\"#\" id=\"project-reverseGeocode-btn\" class=\"btn btn-info\" data-qtsb-label=\"click_Local_Detect_Location\">
                                        Detect My Location
                                    </a>
                                </div>
                            </div>
                        </li>
                    </ol>
                </fieldset>
            </li>

            <li>
                <fieldset>
                    <legend>Tell us more about your project.</legend>
                    <ol>
                        <li class=\"form-step select2-form-step\">
                            <label for=\"project-skills\" class=\"PostProject-stepLabel\">What skills are required?
                            </label>
                            
                            <select id=\"project-skills\" class=\"js-example-basic-multiple\" multiple=\"multiple\">
                                <option>Algorithm</option>
                                <option>Web design</option>
                            </select>
                             <script type=\"text/javascript\">
                            \$(\".js-example-basic-multiple\").select2();
                            </script>
                            
                            <div class=\"skill-suggestion-widget\">
                                <header class=\"skill-suggestion-head\">Skill Suggestions (add 5 more)</header>
                                <ul class=\"skill-suggestion-list\">
                                    <li class=\"skill-suggestion-item\"><a href=\"#\" class=\"skill-suggestion-link\">Graphic Design</a></li>
                                    <li>
                                        <a href=\"#\" class=\"skill-suggestion-link more\">
                                            <span class=\"fl-icon-plus\"></span> More
                                        </a>
                                        <span class=\"skill-suggestion-link full\">
                                            <span class=\"fl-icon-checkmark\"></span> You have selected your skills
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class=\"form-step\">
                            <label for=\"project-description\" class=\"PostProject-stepLabel\">Describe your project
                            </span>
                        </label>

                        <textarea id=\"project-description\"
                        resize=\"vertical\"
                        name=\"description\"
                        rows=\"3\"
                        value=\"\"
                        placeholder=\"Describe your project here...\"></textarea>
                        <div class=\"form-error\">
                            <span class=\"fl-icon-warning-sign\"></span>
                            <span class=\"fl-icon-close\"></span>
                            <span class=\"error-text\"></span>
                        </div>
                    </li>
                    <li class=\"form-step hide\" id=\"project-review-warning\">
                        <div class=\"alert alert-warning ReviewWarning\">
                            <h4 class=\"ReviewWarning-title\">Warning about &quot;Review&quot; projects.</h4>
                            <p class=\"ReviewWarning-desc\">
                                Projects to create fraudulent or fake reviews are strictly prohibited and are in violation of our Terms and Conditions. Posting such projects will result in your account being suspended or terminated.
                            </p>
                            <input type=\"checkbox\" class=\"custom-checkbox\" id=\"project-review-confirm\" name=\"review_confirm\">
                            <label class=\"custom-checkbox ReviewWarning-label\" for=\"project-review-confirm\">
                                I confirm that this project is not to create fraudulent or fake reviews
                            </label>
                            <div class=\"form-error\">
                                <span class=\"fl-icon-warning-sign\"></span>
                                <span class=\"fl-icon-close\"></span>
                                <span class=\"error-text\"></span>
                            </div>
                        </div>
                    </li>

                </ol>
            </fieldset>
        </li>
        <li>
            <fieldset class=\"RadioTabs-wrapper\">
                <legend>What budget do you have in mind?</legend>
                <nav class=\"RadioTabs\">
                    <ul class=\"RadioTabs-list\" data-qtsb-section=\"PPP_Form_Behaviour\">
                        <li class=\"RadioTabs-item\" data-qtsb-label=\"click_Fixed_Project\">
                            <input type=\"radio\" name=\"budget-type\" id=\"budget-fixed\" value=\"fixed\"
                            class=\"CustomRadio\" data-tab=\"fixed-budget\" checked>
                            <label for=\"budget-fixed\" class=\"CustomRadio\">
                                <span class=\"CustomRadio-textLabel PostProject-stepLabel\">Set Fixed Price</span>
                            </label>
                        </li>
                        <li class=\"RadioTabs-item\" data-qtsb-label=\"click_Hourly_Project\">
                            <input type=\"radio\" name=\"budget-type\" id=\"budget-hourly\" value=\"hourly\"
                            class=\"CustomRadio\" data-tab=\"hourly-budget\">
                            <label for=\"budget-hourly\" class=\"CustomRadio\">
                                <span class=\"CustomRadio-textLabel PostProject-stepLabel\">Set an Hourly Rate</span>
                            </label>
                        </li>
                    </ul>
                </nav>

                <!-- Fixed Budget -->
                <ol class=\"PostProject-budgetFields\" id=\"fixed-budget\">
                    <li class=\"form-step form-step--multiFields\">
                        <div class=\"form-step-fieldContainer\">
                            <select id=\"project-currency\" name=\"currency\">

                                <option value=\"1\" title=\"\$\"
                                selected >USD
                            </option>
                        </select>
                    </div>
                    <div class=\"form-step-fieldContainer\">
                        <select id=\"project-budget\" name='budget'>

                            <option value='188' >
                                Micro Project(\$10-30 USD)
                            </option>

                            <option value='5' >
                                Simple project(\$30-250 USD)
                            </option>

                            <option value='1' selected>
                                Very small project(\$250-750 USD)
                            </option>

                            <option value='2' >
                                Small project(\$750-1500 USD)
                            </option>

                            <option value='3' >
                                Medium project(\$1500-3000 USD)
                            </option>

                            <option value='4' >
                                Large project(\$3000-5000 USD)
                            </option>

                            <option value='6' >
                                Larger project(\$5000-10000 USD)
                            </option>

                            <option value='custom' >Customize budget</option>
                        </select>
                    </div>
                </li>
                <li id=\"project-duration-select-step\" class=\"form-step\" hidden>
                    <label for=\"project-duration\" class=\"PostProject-stepLabel\">Project Duration:</label>
                    <select id=\"project-duration\" name=\"duration\">

                        <option value='1' >
                            Less than 1 week
                        </option>

                        <option value='2' selected>
                            1 week - 4 weeks
                        </option>

                        <option value='3' >
                            1 month - 3 months
                        </option>

                        <option value='4' >
                            3 months - 6 months
                        </option>

                        <option value='5' >
                            Over 6 months / Ongoing
                        </option>

                        <option value='6' >
                            Not Sure
                        </option>

                    </select>
                </li>
                <li id=\"project-duration-hours-step\" class=\"form-step\" hidden>
                    <label for=\"project-commitment\" class=\"PostProject-stepLabel\">How many hours of work is required?</label>
                    <div class=\"form-step--multiFields\">
                        <div class=\"form-step-fieldContainer PostProject-commitment\">
                            <input type=\"text\" id=\"project-commitment\" name=\"commitment\" value=\"10\">
                        </div>
                        <div class=\"form-step-fieldContainer\">
                            <select name=\"commitmentInterval\" id=\"project-commitment-type\">
                                <option value=\"week\">Per Week</option>
                                <option value=\"month\">Per Month</option>
                            </select>
                        </div>
                        <div class=\"form-step-fieldContainer\">
                            <input type=\"checkbox\" class=\"custom-checkbox\" name=\"commitment_defined\"
                            id=\"commitment_undefined_option\" >
                            <label class=\"custom-checkbox\" for=\"commitment_undefined_option\">
                                <span class=\"PostProject-stepLabel\">I am not sure</span>
                            </label>
                            <input type=\"hidden\" name=\"commitment_undefined\" id=\"commitment_undefined\" value=\"false\">
                        </div>
                    </div>
                    <div class=\"form-error\">
                        <span class=\"fl-icon-warning-sign\"></span>
                        <span class=\"fl-icon-close\"></span>
                        <span class=\"error-text\"></span>
                    </div>
                </li>

                <!-- Custom Budget -->
                <li id=\"min_budget_group\" hidden>
                    <label for=\"project-custom-min-budget\" class=\"PostProject-stepLabel\">Minimum Budget</label>
                    <div class=\"input-group\">
                        <span class=\"add-on currency-sign\">\$</span>
                        <input id=\"project-custom-min-budget\" type=\"number\" name=\"min_sum\">
                        <span class=\"add-on currency-sign\">USD</span>
                    </div>
                </li>
                <li id=\"max_budget_group\" hidden>
                    <label for=\"project-custom-max-budget\" class=\"PostProject-stepLabel\">Maximum Budget</label>
                    <div class=\"input-group\">
                        <span class=\"add-on currency-sign\">\$</span>
                        <input id=\"project-custom-max-budget\" type=\"number\" name=\"max_sum\">
                        <span class=\"add-on currency-sign\">USD</span>
                    </div>
                </li>
            </ol>
        </fieldset>
    </li>

</ol>
</form>



<div id=\"PppSubmit\" class=\"PostProject-submit\">
    <button id=\"post-project-submit\" onclick=\"postProject()\" class=\"btn btn-info btn-xlarge PostProject-btn\" data-qtsb-section=\"PPP\" data-qtsb-label=\"Submit\">Post Project Now</button>

    <p class=\"PostProject-terms terms-text\">
        By clicking 'Post Project Now', you are indicating that you have read and agree to the <a id=\"term-and-condition\" href=\"#\">Terms &amp; Conditions</a> and <a id=\"privacy-policy\" href=\"#\">Privacy Policy</a>
    </p>

</div>
</div>
</section>

</div>
</div>

</div>
</body>
</html>



";
    }
}
