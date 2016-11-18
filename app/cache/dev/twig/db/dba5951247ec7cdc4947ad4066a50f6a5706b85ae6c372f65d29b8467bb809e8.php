<?php

/* default/postProject.html.twig */
class __TwigTemplate_76cc1dec13759902917d88adc882372d119c0b587bf8e0f44ac1c3c21862916a extends Twig_Template
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
        $__internal_3edc0aec508e2f66e2f2d6b67723a8f10759378d8badc70ff129f2f5c5f66a37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3edc0aec508e2f66e2f2d6b67723a8f10759378d8badc70ff129f2f5c5f66a37->enter($__internal_3edc0aec508e2f66e2f2d6b67723a8f10759378d8badc70ff129f2f5c5f66a37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/postProject.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html class=\" is-responsive\" lang=\"en\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"/> 
    
    <meta name=\"viewport\" content=\"width=device-width\"/>

    <title>Post a Project | Freelancer</title>
    
    <link href=\"https://cdn2.f-cdn.com/build/css/flux/base.css?v=22d78e710e51c71919013de0d743d927&amp;m=6\" type=\"text/css\" rel=\"stylesheet\" />
    
    <link href=\"https://cdn6.f-cdn.com/build/css/abtests/20150907/post-project.css?v=a6a02fc08c66041f6818cddd64960bc4&amp;m=6\" type=\"text/css\" rel=\"stylesheet\" />

    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css\" rel=\"stylesheet\" />
    
    ";
        // line 16
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "3490027_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_3490027_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/3490027_jquery.min_1.js");
            // line 21
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
        // line 23
        echo "
    <script src=\"https://cdn6.f-cdn.com/build/js/pinky/utils/jquery-ui.custom.min.js?v=c96d46b5e81832f80c3d06b6de18fea4&amp;m=6\" type=\"text/javascript\"></script>

    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js\"></script>
</head>

<body> 
    <div class=\"pinky-template\">
        <div id=\"main\" class=\"main-content\" aria-label=\"Content\">

            <section class=\"PostProject\">

                <div class=\"section-inner PostProject-body\">

                    <div class=\"PostProject-content\">
                        <form class=\"fl-form has-numbers large-form PostProject-form\">

                        <ol>
                            <li class=\"\">
                                <fieldset>
                                    <legend>What type of work do you require?</legend>
                                    <ol>
                                        <li class=\"form-step primary-category\">
                                            <select id=\"project-category\">

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

                                                <option value=\"-2\">Customized (Select skills manually)</option>
                                                <option value=\"-1\" selected=\"selected\">Select a category of work (optional)</option>
                                            </select>
                                        </li>
                                        <li class=\"form-step secondary-category is-hidden\">
                                            <select id=\"project-sub-category\" name=\"skill_subcategory\">
                                                <option>Select a job</option>
                                            </select>
                                        </li>
                                    </ol>
                                </fieldset>
                            </li>
                            <li>
                                <fieldset>
                                    <legend>What is your project about?</legend>
                                    <ol>
                                        <li class=\"form-step\">
                                            <label for=\"project-name\" class=\"PostProject-stepLabel\">Project Name:
                                                <span class=\"fl-icon-question-sign hoverable\"
                                                data-toggle=\"popover\"
                                                data-original-title=\"Project Name\"
                                                data-content=\"Your project name is important as it is what attracts freelancers to bid on your project.
                                                You should clearly describe what you need in as few words as possible.\">
                                            </span>
                                        </label>

                                        <input type=\"text\"
                                        placeholder=\"e.g. Build a website\"
                                        id=\"project-name\"
                                        name=\"project_name\"
                                        value=\"\">

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
                                <span class=\"fl-icon-question-sign hoverable\"
                                data-toggle=\"popover\"
                                data-original-title=\"Project Skills\"
                                data-content=\"We will notify all freelancers relevant to your project skills.
                                As you enter more skills, your project will reach out to more freelancers.\">
                                </span>
                            </label>
                        <select id=\"project-skills\" class=\"js-example-basic-multiple\" multiple=\"multiple\">
                            <option>Algorithm</option>
                            <option>Web design</option>
                        </select>
                        
                        <script type=\"text/javascript\">
                            \$(\".js-example-basic-multiple\").select2();
                        </script>
                    
                    </li>
                    <li class=\"form-step\">
                        <label for=\"project-description\" class=\"PostProject-stepLabel\">Describe your project
                            <span class=\"fl-icon-question-sign hoverable\"
                            data-toggle=\"popover\"
                            data-original-title=\"Project Description\"
                            data-placement=\"right\"
                            data-content=\"The more detail you provide, the better chance you have in getting exactly
                            what you are after in the shortest possible time period.\">
                        </span>
                    </label>

                    <textarea id=\"project-description\"
                    resize=\"vertical\"
                    name=\"description\"
                    rows=\"3\"
                    value=\"\"
                    placeholder=\"Describe your project here...\"></textarea>
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

                        <option value=\"1\" title=\"\$\"selected >USD</option>

                    <option value=\"3\" title=\"\$\">AUD</option>

                <option value=\"9\" title=\"\$\">CAD</option>

            <option value=\"8\" title=\"€\">EUR</option>

        <option value=\"4\" title=\"£\">GBP</option>

    <option value=\"21\" title=\"￥\">CNY</option>

<option value=\"5\" title=\"\$\">HKD</option>

<option value=\"11\" title=\"₹\">INR</option>

<option value=\"12\" title=\"\$\">JMD</option>

<option value=\"13\" title=\"\$\">CLP</option>

<option value=\"17\" title=\"kr\">SEK</option>

<option value=\"18\" title=\"¥\">JPY</option>

<option value=\"16\" title=\"RM\">MYR</option>

<option value=\"15\" title=\"Rp\">IDR</option>

</select>
</div>
<div class=\"form-step-fieldContainer\">
    <select id=\"project-budget\" name='budget'>

        <option value='188' >
            Micro Project (\$10-30 USD)
        </option>

        <option value='5' >
            Simple project (\$30-250 USD)
        </option>

        <option value='1' selected>
            Very small project (\$250-750 USD)
        </option>

        <option value='2' >
            Small project (\$750-1500 USD)
        </option>

        <option value='3' >
            Medium project (\$1500-3000 USD)
        </option>

        <option value='4' >
            Large project (\$3000-5000 USD)
        </option>

        <option value='6' >
            Larger project (\$5000-10000 USD)
        </option>

        <option value='custom' >Customize budget</option>
    </select>
</div>
</li>
<li id=\"project-duration-select-step\" class=\"form-step\">
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
        </div>
    </div>
</li>

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

</div>

<div class=\"PostProject-sidebar\">
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
        <a href=\"/howitworks\" class=\"ProjectUpsell-link\" target=\"_blank\"
        data-qtsb-section=\"PPP_Form_Behaviour\" data-qtsb-label=\"Click_Learn_More_Link\">

        Learn More
    </a>
</div>
</div>

<div id=\"PppSubmit\" class=\"PostProject-submit\">
    <button id=\"post-project-submit\" onclick=\"postProject()\" class=\"btn btn-info btn-xlarge PostProject-btn\" data-qtsb-section=\"PPP\" data-qtsb-label=\"Submit\">Post Project Now</button>

</div>
</div>
</section>

</div>
</div>

</body>
</html>
";
        
        $__internal_3edc0aec508e2f66e2f2d6b67723a8f10759378d8badc70ff129f2f5c5f66a37->leave($__internal_3edc0aec508e2f66e2f2d6b67723a8f10759378d8badc70ff129f2f5c5f66a37_prof);

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
        return array (  81 => 23,  43 => 21,  39 => 16,  22 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html class=\" is-responsive\" lang=\"en\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"/> 
    
    <meta name=\"viewport\" content=\"width=device-width\"/>

    <title>Post a Project | Freelancer</title>
    
    <link href=\"https://cdn2.f-cdn.com/build/css/flux/base.css?v=22d78e710e51c71919013de0d743d927&amp;m=6\" type=\"text/css\" rel=\"stylesheet\" />
    
    <link href=\"https://cdn6.f-cdn.com/build/css/abtests/20150907/post-project.css?v=a6a02fc08c66041f6818cddd64960bc4&amp;m=6\" type=\"text/css\" rel=\"stylesheet\" />

    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css\" rel=\"stylesheet\" />
    
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
    <div class=\"pinky-template\">
        <div id=\"main\" class=\"main-content\" aria-label=\"Content\">

            <section class=\"PostProject\">

                <div class=\"section-inner PostProject-body\">

                    <div class=\"PostProject-content\">
                        <form class=\"fl-form has-numbers large-form PostProject-form\">

                        <ol>
                            <li class=\"\">
                                <fieldset>
                                    <legend>What type of work do you require?</legend>
                                    <ol>
                                        <li class=\"form-step primary-category\">
                                            <select id=\"project-category\">

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

                                                <option value=\"-2\">Customized (Select skills manually)</option>
                                                <option value=\"-1\" selected=\"selected\">Select a category of work (optional)</option>
                                            </select>
                                        </li>
                                        <li class=\"form-step secondary-category is-hidden\">
                                            <select id=\"project-sub-category\" name=\"skill_subcategory\">
                                                <option>Select a job</option>
                                            </select>
                                        </li>
                                    </ol>
                                </fieldset>
                            </li>
                            <li>
                                <fieldset>
                                    <legend>What is your project about?</legend>
                                    <ol>
                                        <li class=\"form-step\">
                                            <label for=\"project-name\" class=\"PostProject-stepLabel\">Project Name:
                                                <span class=\"fl-icon-question-sign hoverable\"
                                                data-toggle=\"popover\"
                                                data-original-title=\"Project Name\"
                                                data-content=\"Your project name is important as it is what attracts freelancers to bid on your project.
                                                You should clearly describe what you need in as few words as possible.\">
                                            </span>
                                        </label>

                                        <input type=\"text\"
                                        placeholder=\"e.g. Build a website\"
                                        id=\"project-name\"
                                        name=\"project_name\"
                                        value=\"\">

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
                                <span class=\"fl-icon-question-sign hoverable\"
                                data-toggle=\"popover\"
                                data-original-title=\"Project Skills\"
                                data-content=\"We will notify all freelancers relevant to your project skills.
                                As you enter more skills, your project will reach out to more freelancers.\">
                                </span>
                            </label>
                        <select id=\"project-skills\" class=\"js-example-basic-multiple\" multiple=\"multiple\">
                            <option>Algorithm</option>
                            <option>Web design</option>
                        </select>
                        
                        <script type=\"text/javascript\">
                            \$(\".js-example-basic-multiple\").select2();
                        </script>
                    
                    </li>
                    <li class=\"form-step\">
                        <label for=\"project-description\" class=\"PostProject-stepLabel\">Describe your project
                            <span class=\"fl-icon-question-sign hoverable\"
                            data-toggle=\"popover\"
                            data-original-title=\"Project Description\"
                            data-placement=\"right\"
                            data-content=\"The more detail you provide, the better chance you have in getting exactly
                            what you are after in the shortest possible time period.\">
                        </span>
                    </label>

                    <textarea id=\"project-description\"
                    resize=\"vertical\"
                    name=\"description\"
                    rows=\"3\"
                    value=\"\"
                    placeholder=\"Describe your project here...\"></textarea>
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

                        <option value=\"1\" title=\"\$\"selected >USD</option>

                    <option value=\"3\" title=\"\$\">AUD</option>

                <option value=\"9\" title=\"\$\">CAD</option>

            <option value=\"8\" title=\"€\">EUR</option>

        <option value=\"4\" title=\"£\">GBP</option>

    <option value=\"21\" title=\"￥\">CNY</option>

<option value=\"5\" title=\"\$\">HKD</option>

<option value=\"11\" title=\"₹\">INR</option>

<option value=\"12\" title=\"\$\">JMD</option>

<option value=\"13\" title=\"\$\">CLP</option>

<option value=\"17\" title=\"kr\">SEK</option>

<option value=\"18\" title=\"¥\">JPY</option>

<option value=\"16\" title=\"RM\">MYR</option>

<option value=\"15\" title=\"Rp\">IDR</option>

</select>
</div>
<div class=\"form-step-fieldContainer\">
    <select id=\"project-budget\" name='budget'>

        <option value='188' >
            Micro Project (\$10-30 USD)
        </option>

        <option value='5' >
            Simple project (\$30-250 USD)
        </option>

        <option value='1' selected>
            Very small project (\$250-750 USD)
        </option>

        <option value='2' >
            Small project (\$750-1500 USD)
        </option>

        <option value='3' >
            Medium project (\$1500-3000 USD)
        </option>

        <option value='4' >
            Large project (\$3000-5000 USD)
        </option>

        <option value='6' >
            Larger project (\$5000-10000 USD)
        </option>

        <option value='custom' >Customize budget</option>
    </select>
</div>
</li>
<li id=\"project-duration-select-step\" class=\"form-step\">
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
        </div>
    </div>
</li>

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

</div>

<div class=\"PostProject-sidebar\">
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
        <a href=\"/howitworks\" class=\"ProjectUpsell-link\" target=\"_blank\"
        data-qtsb-section=\"PPP_Form_Behaviour\" data-qtsb-label=\"Click_Learn_More_Link\">

        Learn More
    </a>
</div>
</div>

<div id=\"PppSubmit\" class=\"PostProject-submit\">
    <button id=\"post-project-submit\" onclick=\"postProject()\" class=\"btn btn-info btn-xlarge PostProject-btn\" data-qtsb-section=\"PPP\" data-qtsb-label=\"Submit\">Post Project Now</button>

</div>
</div>
</section>

</div>
</div>

</body>
</html>
";
    }
}
