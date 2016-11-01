<?php

/* default/index.html.twig */
class __TwigTemplate_2375b4ed743939dda0c33d45164bda65711cc4ad7ee434f8ae039acf829d7182 extends Twig_Template
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
        $__internal_4d6c6732e29470608c5a7a4c5187ef2a8ae4511507406e89d7fc530bb5f5e426 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d6c6732e29470608c5a7a4c5187ef2a8ae4511507406e89d7fc530bb5f5e426->enter($__internal_4d6c6732e29470608c5a7a4c5187ef2a8ae4511507406e89d7fc530bb5f5e426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en-US\"><head>
<meta charset=\"UTF-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<title>Freelancer</title>

";
        // line 7
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "2c8c367_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_2c8c367_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/2c8c367_part_1_font-awesome.min_1.css");
            // line 8
            echo "<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
";
            // asset "2c8c367_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_2c8c367_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/2c8c367_part_1_font_2.css");
            echo "<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
";
            // asset "2c8c367_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_2c8c367_2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/2c8c367_part_1_index_style_3.css");
            echo "<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
";
            // asset "2c8c367_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_2c8c367_3") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/2c8c367_part_1_layerslider_4.css");
            echo "<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
";
            // asset "2c8c367_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_2c8c367_4") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/2c8c367_part_1_main_5.css");
            echo "<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
";
        } else {
            // asset "2c8c367"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_2c8c367") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/2c8c367.css");
            echo "<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
";
        }
        unset($context["asset_url"]);
        // line 10
        echo "
";
        // line 11
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "b18e28a_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_b18e28a_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/b18e28a_bootstrap_1.css");
            // line 14
            echo "<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
";
            // asset "b18e28a_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_b18e28a_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/b18e28a_bootstrap-fixes_2.css");
            echo "<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
";
        } else {
            // asset "b18e28a"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_b18e28a") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/b18e28a.css");
            echo "<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
";
        }
        unset($context["asset_url"]);
        // line 16
        echo "
";
        // line 17
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "bfe5279_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_bfe5279_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/bfe5279_jquery.min_1.js");
            // line 26
            echo "<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "bfe5279_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_bfe5279_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/bfe5279_bootstrap.min_2.js");
            echo "<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "bfe5279_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_bfe5279_2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/bfe5279_jquery-migrate.min_3.js");
            echo "<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "bfe5279_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_bfe5279_3") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/bfe5279_jquery.carouFredSel-6.1.0_4.js");
            echo "<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "bfe5279_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_bfe5279_4") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/bfe5279_font-awesome-icons_5.js");
            echo "<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "bfe5279_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_bfe5279_5") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/bfe5279_layerslider.transitions_6.js");
            echo "<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "bfe5279_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_bfe5279_6") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/bfe5279_index_script_7.js");
            echo "<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "bfe5279_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_bfe5279_7") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/bfe5279_greensock_8.js");
            echo "<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "bfe5279_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_bfe5279_8") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/bfe5279_layerslider.kreaturamedia.jquery_9.js");
            echo "<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
        } else {
            // asset "bfe5279"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_bfe5279") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/bfe5279.js");
            echo "<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
        }
        unset($context["asset_url"]);
        // line 28
        echo "
</head>

<body class=\"home page page-id-50 page-template page-template-tmp-no-title page-template-tmp-no-title-php wpb-js-composer js-comp-ver-4.12 vc_responsive\">
\t<div class=\"main_wrapper\">

<!-- HEADER
\t================================================== -->
\t<header>
\t\t<div class=\"navbartop-wrapper\" >
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"search-wrapper\">
\t\t\t\t\t<ul class=\"social-media\">
\t\t\t\t\t\t<li><a target=\"_blank\" class=\"facebook\"href=\"#\">facebook</a></li>
            <li><a target=\"_blank\" class=\"twitter\" href=\"#\">twitter</a></li>
            <li><a target=\"_blank\" class=\"google\" href=\"#\">google</a></li>
            <li><a target=\"_blank\" class=\"skype\" href=\"skype:#?add\">skype</a></li>
          </ul>
        </div>
        <div class=\"top-right\">
          <a href=\"#myModalR\" role=\"button\" class=\"register-top\" data-toggle=\"modal\"><i class=\"fa fa-lock\" aria-hidden=\"true\"></i> Register</a>
          <a href=\"#\" id=\"login\" role=\"button\" class=\"login-top\" data-toggle=\"modal\"><i class=\"fa fa-key\" aria-hidden=\"true\"></i> Login</a>
        </div>
      </div><!-- top right -->
    </div><!-- Container -->

    <!-- NAVBAR
    ================================================== -->
    <div class=\"navbar-wrapper navtransparent\">
    \t<!-- Wrap the .navbar in .container to center it within the absolutely positioned parent. -->
    \t<div class=\"container\">
    \t\t<div class=\"logo-wrapper\">
    \t\t\t<a href=\"#\"> <img src=\"http://skywarriorthemes.com/fundingpress/wp-content/themes/fundingpress/img/logo.png\" alt=\"logo\"  /> </a>
    \t\t</div>
    \t\t<div class=\"navbar navbar-inverse navbar-static-top \" role=\"navigation\">

    \t\t\t<div class=\"navbar-header\">

    \t\t\t\t<button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
    \t\t\t\t\t<span class=\"sr-only\">Toggle navigation</span>
    \t\t\t\t\t<span class=\"fa fa-bars\"></span>
    \t\t\t\t</button>

    \t\t\t</div>
    \t\t\t<div class=\"navbar-collapse collapse\">
    \t\t\t\t<div class=\"menu-menu-1-container\">
              <ul  class=\"nav navbar-nav\"><li id=\"menu-item-2574\" class=\"menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-50 current_page_item menu-item-2574\"><a href=\"#\">Homepage</a></li>
               <li id=\"menu-item-2914\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2914\"><a href=\"#\">how it works</a></li>
               <li id=\"menu-item-2592\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-2592\"><a href=\"post\">Post a project</a></li>
               <li id=\"menu-item-2947\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2947\"><a href=\"#\">Contact</a></li>
             </ul>
           </div>                \t                                
           <div class=\"clear\"></div>
         </div><!--/.nav-collapse -->
         <div class=\"clear\"></div>

         <div class=\"clear\"></div>
       </div>

     </div> <!-- /.container -->
   </div>
    <!-- NAVBAR
    ================================================== -->   
  </header>
<!-- HEADER
\t================================================== -->

     <div class=\"modal fade login\" id=\"myModal\">
          <div class=\"modal-dialog login animated\">
              <div class=\"modal-content\">
                 <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                        <h4 class=\"modal-title\">Login with</h4>
                    </div>
                    <div class=\"modal-body\">  
                        <div class=\"box\">
                             <div class=\"content\">
                                <div class=\"social\">
                                    <a class=\"circle github\" href=\"/auth/github\">
                                        <i class=\"fa fa-github fa-fw\"></i>
                                    </a>
                                    <a id=\"google_login\" class=\"circle google\" href=\"/auth/google_oauth2\">
                                        <i class=\"fa fa-google-plus fa-fw\"></i>
                                    </a>
                                    <a id=\"facebook_login\" class=\"circle facebook\" href=\"/auth/facebook\">
                                        <i class=\"fa fa-facebook fa-fw\"></i>
                                    </a>
                                </div>
                                <div class=\"division\">
                                    <div class=\"line l\"></div>
                                      <span>or</span>
                                    <div class=\"line r\"></div>
                                </div>
                                <div class=\"error\"></div>
                                <div class=\"form loginBox\">
                                    <form method=\"post\" action=\"/login\" accept-charset=\"UTF-8\">
                                    <input id=\"email\" class=\"form-control\" type=\"text\" placeholder=\"Email\" name=\"email\">
                                    <input id=\"password\" class=\"form-control\" type=\"password\" placeholder=\"Password\" name=\"password\">
                                    <input class=\"btn btn-default btn-login\" type=\"button\" value=\"Login\" onclick=\"loginAjax()\">
                                    </form>
                                </div>
                             </div>
                        </div>
                        <div class=\"box\">
                            <div class=\"content registerBox\" style=\"display:none;\">
                             <div class=\"form\">
                                <form method=\"post\" html=\"{:multipart=>true}\" data-remote=\"true\" action=\"/register\" accept-charset=\"UTF-8\">
                                <input id=\"email\" class=\"form-control\" type=\"text\" placeholder=\"Email\" name=\"email\">
                                <input id=\"password\" class=\"form-control\" type=\"password\" placeholder=\"Password\" name=\"password\">
                                <input id=\"password_confirmation\" class=\"form-control\" type=\"password\" placeholder=\"Repeat Password\" name=\"password_confirmation\">
                                <input class=\"btn btn-default btn-register\" type=\"submit\" value=\"Create account\" name=\"commit\">
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <div class=\"forgot login-footer\">
                            <span>Looking to 
                                 <a href=\"javascript: showRegisterForm();\">create an account</a>
                            ?</span>
                        </div>
                        <div class=\"forgot register-footer\" style=\"display:none\">
                             <span>Already have an account?</span>
                             <a href=\"javascript: showLoginForm();\">Login</a>
                        </div>
                    </div>        
              </div>
          </div>
      </div>

";
        // line 159
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "66e182f_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_66e182f_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/66e182f_login-register_1.css");
            // line 160
            echo "<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
";
        } else {
            // asset "66e182f"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_66e182f") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/66e182f.css");
            echo "<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
";
        }
        unset($context["asset_url"]);
        // line 162
        echo "
<script type=\"text/javascript\">

\$(\"#login\").click(function(){
  \$(\"#myModal\").modal({backdrop: \"static\"});
});

</script>


<div class=\"page normal-page container-wrap\">
  <div class=\"container\">
   <div class=\"row\">
    <div class=\"col-md-12 col-sm-12\">

     <div class=\"vc_row wpb_row vc_row-fluid vc_custom_1472740031226\"><div class=\"wpb_column vc_column_container vc_col-sm-12\"><div class=\"vc_column-inner \"><div class=\"wpb_wrapper\">
      <div class=\"wpb_text_column wpb_content_element  vc_custom_1472742663895\">
       <div class=\"wpb_wrapper\">
        <script data-cfasync=\"false\" type=\"text/javascript\">var lsjQuery = jQuery;</script><script data-cfasync=\"false\" type=\"text/javascript\">
        lsjQuery(document).ready(function() {
         if(typeof lsjQuery.fn.layerSlider == \"undefined\") { lsShowNotice('layerslider_1','jquery'); }
         else {
          lsjQuery(\"#layerslider_1\").layerSlider({responsiveUnder: 1300, layersContainer: 1300, navPrevNext: false, hoverPrevNext: false, navStartStop: false, navButtons: false, showCircleTimer: false, autoPlayVideos: false, imgPreload: false, lazyLoad: false, skinsPath: 'http://skywarriorthemes.com/fundingpress/wp-content/plugins/LayerSlider/static/skins/'})
        }
      });
        </script>
        <div class=\"ls-wp-fullwidth-container\" style=\"height:725px;\">
          <div class=\"ls-wp-fullwidth-helper\">
            <div id=\"layerslider_1\" class=\"ls-wp-container\" style=\"width:100%;height:725px;margin:0 auto;margin-bottom: 0px;padding: 0px\">
              <div class=\"ls-slide\" data-ls=\" transition2d: all;\">


                <img src=\"http://skywarriorthemes.com/fundingpress/wp-content/uploads/2016/09/bg.jpg\" class=\"ls-bg\" alt=\"bg\" />

                <h1 class=\"ls-l\" style=\"top:273px;left:45px; text-transform: capitalize;width:;height:;padding-top:15px;padding-right:15px;padding-bottom:15px;padding-left:15px;border-top:;border-right:;border-bottom:;border-left:;font-family:;font-size:55px;line-height:;color:#ffffff;background:;border-radius:;white-space: nowrap;\">Hire expert freelancers for your online job</h1>

                <h2 class=\"ls-l\" style=\"top:351px;left:59px; text-transform: capitalize; font-weight:normal;width:;height:;padding-top:15px;padding-right:15px;padding-bottom:15px;padding-left:15px;border-top:;border-right:;border-bottom:;border-left:;font-family:;font-size:24px;line-height:;color:#ffffff;background:;border-radius:;white-space: nowrap;\">Watch your dream become reality</h2>

                <a href=\"#\" target=\"_blank\" class=\"ls-l\" style=\"top:420px;left:72px; margin-right:0px;\">
                  <p class=\"button-medium\" style=\"text-shadow: rgba(0, 0, 0, 0.498039) 0px 0px 5px;width:;height:;padding-top:15px;padding-right:40px;padding-bottom:15px ;padding-left:40px;border-top:;border-right:;border-bottom:;border-left:;font-family:;font-size:14px;line-height:;color:;background:;border-radius:;white-space: nowrap;\">
                    <i style=\"margin-right:5px\" class=\"fa fa-th\" aria-hidden=\"true\"></i>I want to Hire
                  </p>
                </a>

                <a href=\"#\" target=\"_blank\" class=\"ls-l\" style=\"top:420px;left:296px;margin-left:0px;\">
                  <p class=\"button-medium\" style=\"text-shadow: rgba(0, 0, 0, 0) 0px 0px 5px;width:;height:;padding-top:15px;padding-right:40px;padding-bottom:15px ;padding-left:40px;border-top:;border-right:;border-bottom:;border-left:;font-family:;font-size:14px;line-height:;color:#333333;background:#e7e7e7;border-radius:;white-space: nowrap;\">
                    <i style=\"margin-right:5px\" class=\"fa fa-users\" aria-hidden=\"true\"></i>I want to Work
                  </p>
                </a>
              
              </div></div></div></div>
            </div>
          </div>
        </div></div></div></div>

      </div></div></div></div>
    </div>
  </body>
  </html>
";
        
        $__internal_4d6c6732e29470608c5a7a4c5187ef2a8ae4511507406e89d7fc530bb5f5e426->leave($__internal_4d6c6732e29470608c5a7a4c5187ef2a8ae4511507406e89d7fc530bb5f5e426_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  319 => 162,  305 => 160,  301 => 159,  168 => 28,  106 => 26,  102 => 17,  99 => 16,  79 => 14,  75 => 11,  72 => 10,  34 => 8,  30 => 7,  22 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html lang=\"en-US\"><head>
<meta charset=\"UTF-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<title>Freelancer</title>

{% stylesheets 'bundles/app/css/*' filter='cssrewrite' %}
<link rel=\"stylesheet\" href=\"{{ asset_url }}\" />
{% endstylesheets %}

{% stylesheets 'bundles/app/css/bootstrap/bootstrap.css'
'bundles/app/css/bootstrap/bootstrap-fixes.css'
filter='cssrewrite' %}
<link rel=\"stylesheet\" href=\"{{ asset_url }}\" />
{% endstylesheets %}

{% javascripts 'bundles/app/js/jquery.min.js'
'bundles/app/js/bootstrap.min.js'
'bundles/app/js/jquery-migrate.min.js'
'bundles/app/js/jquery.carouFredSel-6.1.0.js'
'bundles/app/js/font-awesome-icons.js'
'bundles/app/js/layerslider.transitions.js'
'bundles/app/js/index_script.js'
'bundles/app/js/greensock.js'
'bundles/app/js/layerslider.kreaturamedia.jquery.js'%}
<script src=\"{{ asset_url }}\"></script>
{% endjavascripts %}

</head>

<body class=\"home page page-id-50 page-template page-template-tmp-no-title page-template-tmp-no-title-php wpb-js-composer js-comp-ver-4.12 vc_responsive\">
\t<div class=\"main_wrapper\">

<!-- HEADER
\t================================================== -->
\t<header>
\t\t<div class=\"navbartop-wrapper\" >
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"search-wrapper\">
\t\t\t\t\t<ul class=\"social-media\">
\t\t\t\t\t\t<li><a target=\"_blank\" class=\"facebook\"href=\"#\">facebook</a></li>
            <li><a target=\"_blank\" class=\"twitter\" href=\"#\">twitter</a></li>
            <li><a target=\"_blank\" class=\"google\" href=\"#\">google</a></li>
            <li><a target=\"_blank\" class=\"skype\" href=\"skype:#?add\">skype</a></li>
          </ul>
        </div>
        <div class=\"top-right\">
          <a href=\"#myModalR\" role=\"button\" class=\"register-top\" data-toggle=\"modal\"><i class=\"fa fa-lock\" aria-hidden=\"true\"></i> Register</a>
          <a href=\"#\" id=\"login\" role=\"button\" class=\"login-top\" data-toggle=\"modal\"><i class=\"fa fa-key\" aria-hidden=\"true\"></i> Login</a>
        </div>
      </div><!-- top right -->
    </div><!-- Container -->

    <!-- NAVBAR
    ================================================== -->
    <div class=\"navbar-wrapper navtransparent\">
    \t<!-- Wrap the .navbar in .container to center it within the absolutely positioned parent. -->
    \t<div class=\"container\">
    \t\t<div class=\"logo-wrapper\">
    \t\t\t<a href=\"#\"> <img src=\"http://skywarriorthemes.com/fundingpress/wp-content/themes/fundingpress/img/logo.png\" alt=\"logo\"  /> </a>
    \t\t</div>
    \t\t<div class=\"navbar navbar-inverse navbar-static-top \" role=\"navigation\">

    \t\t\t<div class=\"navbar-header\">

    \t\t\t\t<button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
    \t\t\t\t\t<span class=\"sr-only\">Toggle navigation</span>
    \t\t\t\t\t<span class=\"fa fa-bars\"></span>
    \t\t\t\t</button>

    \t\t\t</div>
    \t\t\t<div class=\"navbar-collapse collapse\">
    \t\t\t\t<div class=\"menu-menu-1-container\">
              <ul  class=\"nav navbar-nav\"><li id=\"menu-item-2574\" class=\"menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-50 current_page_item menu-item-2574\"><a href=\"#\">Homepage</a></li>
               <li id=\"menu-item-2914\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2914\"><a href=\"#\">how it works</a></li>
               <li id=\"menu-item-2592\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-2592\"><a href=\"post\">Post a project</a></li>
               <li id=\"menu-item-2947\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2947\"><a href=\"#\">Contact</a></li>
             </ul>
           </div>                \t                                
           <div class=\"clear\"></div>
         </div><!--/.nav-collapse -->
         <div class=\"clear\"></div>

         <div class=\"clear\"></div>
       </div>

     </div> <!-- /.container -->
   </div>
    <!-- NAVBAR
    ================================================== -->   
  </header>
<!-- HEADER
\t================================================== -->

     <div class=\"modal fade login\" id=\"myModal\">
          <div class=\"modal-dialog login animated\">
              <div class=\"modal-content\">
                 <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                        <h4 class=\"modal-title\">Login with</h4>
                    </div>
                    <div class=\"modal-body\">  
                        <div class=\"box\">
                             <div class=\"content\">
                                <div class=\"social\">
                                    <a class=\"circle github\" href=\"/auth/github\">
                                        <i class=\"fa fa-github fa-fw\"></i>
                                    </a>
                                    <a id=\"google_login\" class=\"circle google\" href=\"/auth/google_oauth2\">
                                        <i class=\"fa fa-google-plus fa-fw\"></i>
                                    </a>
                                    <a id=\"facebook_login\" class=\"circle facebook\" href=\"/auth/facebook\">
                                        <i class=\"fa fa-facebook fa-fw\"></i>
                                    </a>
                                </div>
                                <div class=\"division\">
                                    <div class=\"line l\"></div>
                                      <span>or</span>
                                    <div class=\"line r\"></div>
                                </div>
                                <div class=\"error\"></div>
                                <div class=\"form loginBox\">
                                    <form method=\"post\" action=\"/login\" accept-charset=\"UTF-8\">
                                    <input id=\"email\" class=\"form-control\" type=\"text\" placeholder=\"Email\" name=\"email\">
                                    <input id=\"password\" class=\"form-control\" type=\"password\" placeholder=\"Password\" name=\"password\">
                                    <input class=\"btn btn-default btn-login\" type=\"button\" value=\"Login\" onclick=\"loginAjax()\">
                                    </form>
                                </div>
                             </div>
                        </div>
                        <div class=\"box\">
                            <div class=\"content registerBox\" style=\"display:none;\">
                             <div class=\"form\">
                                <form method=\"post\" html=\"{:multipart=>true}\" data-remote=\"true\" action=\"/register\" accept-charset=\"UTF-8\">
                                <input id=\"email\" class=\"form-control\" type=\"text\" placeholder=\"Email\" name=\"email\">
                                <input id=\"password\" class=\"form-control\" type=\"password\" placeholder=\"Password\" name=\"password\">
                                <input id=\"password_confirmation\" class=\"form-control\" type=\"password\" placeholder=\"Repeat Password\" name=\"password_confirmation\">
                                <input class=\"btn btn-default btn-register\" type=\"submit\" value=\"Create account\" name=\"commit\">
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <div class=\"forgot login-footer\">
                            <span>Looking to 
                                 <a href=\"javascript: showRegisterForm();\">create an account</a>
                            ?</span>
                        </div>
                        <div class=\"forgot register-footer\" style=\"display:none\">
                             <span>Already have an account?</span>
                             <a href=\"javascript: showLoginForm();\">Login</a>
                        </div>
                    </div>        
              </div>
          </div>
      </div>

{% stylesheets 'bundles/app/css/login/login-register.css' filter='cssrewrite' %}
<link rel=\"stylesheet\" href=\"{{ asset_url }}\" />
{% endstylesheets %}

<script type=\"text/javascript\">

\$(\"#login\").click(function(){
  \$(\"#myModal\").modal({backdrop: \"static\"});
});

</script>


<div class=\"page normal-page container-wrap\">
  <div class=\"container\">
   <div class=\"row\">
    <div class=\"col-md-12 col-sm-12\">

     <div class=\"vc_row wpb_row vc_row-fluid vc_custom_1472740031226\"><div class=\"wpb_column vc_column_container vc_col-sm-12\"><div class=\"vc_column-inner \"><div class=\"wpb_wrapper\">
      <div class=\"wpb_text_column wpb_content_element  vc_custom_1472742663895\">
       <div class=\"wpb_wrapper\">
        <script data-cfasync=\"false\" type=\"text/javascript\">var lsjQuery = jQuery;</script><script data-cfasync=\"false\" type=\"text/javascript\">
        lsjQuery(document).ready(function() {
         if(typeof lsjQuery.fn.layerSlider == \"undefined\") { lsShowNotice('layerslider_1','jquery'); }
         else {
          lsjQuery(\"#layerslider_1\").layerSlider({responsiveUnder: 1300, layersContainer: 1300, navPrevNext: false, hoverPrevNext: false, navStartStop: false, navButtons: false, showCircleTimer: false, autoPlayVideos: false, imgPreload: false, lazyLoad: false, skinsPath: 'http://skywarriorthemes.com/fundingpress/wp-content/plugins/LayerSlider/static/skins/'})
        }
      });
        </script>
        <div class=\"ls-wp-fullwidth-container\" style=\"height:725px;\">
          <div class=\"ls-wp-fullwidth-helper\">
            <div id=\"layerslider_1\" class=\"ls-wp-container\" style=\"width:100%;height:725px;margin:0 auto;margin-bottom: 0px;padding: 0px\">
              <div class=\"ls-slide\" data-ls=\" transition2d: all;\">


                <img src=\"http://skywarriorthemes.com/fundingpress/wp-content/uploads/2016/09/bg.jpg\" class=\"ls-bg\" alt=\"bg\" />

                <h1 class=\"ls-l\" style=\"top:273px;left:45px; text-transform: capitalize;width:;height:;padding-top:15px;padding-right:15px;padding-bottom:15px;padding-left:15px;border-top:;border-right:;border-bottom:;border-left:;font-family:;font-size:55px;line-height:;color:#ffffff;background:;border-radius:;white-space: nowrap;\">Hire expert freelancers for your online job</h1>

                <h2 class=\"ls-l\" style=\"top:351px;left:59px; text-transform: capitalize; font-weight:normal;width:;height:;padding-top:15px;padding-right:15px;padding-bottom:15px;padding-left:15px;border-top:;border-right:;border-bottom:;border-left:;font-family:;font-size:24px;line-height:;color:#ffffff;background:;border-radius:;white-space: nowrap;\">Watch your dream become reality</h2>

                <a href=\"#\" target=\"_blank\" class=\"ls-l\" style=\"top:420px;left:72px; margin-right:0px;\">
                  <p class=\"button-medium\" style=\"text-shadow: rgba(0, 0, 0, 0.498039) 0px 0px 5px;width:;height:;padding-top:15px;padding-right:40px;padding-bottom:15px ;padding-left:40px;border-top:;border-right:;border-bottom:;border-left:;font-family:;font-size:14px;line-height:;color:;background:;border-radius:;white-space: nowrap;\">
                    <i style=\"margin-right:5px\" class=\"fa fa-th\" aria-hidden=\"true\"></i>I want to Hire
                  </p>
                </a>

                <a href=\"#\" target=\"_blank\" class=\"ls-l\" style=\"top:420px;left:296px;margin-left:0px;\">
                  <p class=\"button-medium\" style=\"text-shadow: rgba(0, 0, 0, 0) 0px 0px 5px;width:;height:;padding-top:15px;padding-right:40px;padding-bottom:15px ;padding-left:40px;border-top:;border-right:;border-bottom:;border-left:;font-family:;font-size:14px;line-height:;color:#333333;background:#e7e7e7;border-radius:;white-space: nowrap;\">
                    <i style=\"margin-right:5px\" class=\"fa fa-users\" aria-hidden=\"true\"></i>I want to Work
                  </p>
                </a>
              
              </div></div></div></div>
            </div>
          </div>
        </div></div></div></div>

      </div></div></div></div>
    </div>
  </body>
  </html>
";
    }
}
