<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/css')) {
            if (0 === strpos($pathinfo, '/css/2c8c367')) {
                // _assetic_2c8c367
                if ($pathinfo === '/css/2c8c367.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '2c8c367',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_2c8c367',);
                }

                if (0 === strpos($pathinfo, '/css/2c8c367_part_1_')) {
                    if (0 === strpos($pathinfo, '/css/2c8c367_part_1_font')) {
                        // _assetic_2c8c367_0
                        if ($pathinfo === '/css/2c8c367_part_1_font-awesome.min_1.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '2c8c367',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_2c8c367_0',);
                        }

                        // _assetic_2c8c367_1
                        if ($pathinfo === '/css/2c8c367_part_1_font_2.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '2c8c367',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_2c8c367_1',);
                        }

                    }

                    // _assetic_2c8c367_2
                    if ($pathinfo === '/css/2c8c367_part_1_index_style_3.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '2c8c367',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_2c8c367_2',);
                    }

                    // _assetic_2c8c367_3
                    if ($pathinfo === '/css/2c8c367_part_1_layerslider_4.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '2c8c367',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_2c8c367_3',);
                    }

                    // _assetic_2c8c367_4
                    if ($pathinfo === '/css/2c8c367_part_1_main_5.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '2c8c367',  'pos' => 4,  '_format' => 'css',  '_route' => '_assetic_2c8c367_4',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/css/b18e28a')) {
                // _assetic_b18e28a
                if ($pathinfo === '/css/b18e28a.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'b18e28a',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_b18e28a',);
                }

                if (0 === strpos($pathinfo, '/css/b18e28a_bootstrap')) {
                    // _assetic_b18e28a_0
                    if ($pathinfo === '/css/b18e28a_bootstrap_1.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'b18e28a',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_b18e28a_0',);
                    }

                    // _assetic_b18e28a_1
                    if ($pathinfo === '/css/b18e28a_bootstrap-fixes_2.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'b18e28a',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_b18e28a_1',);
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/js/ed61d72')) {
            // _assetic_ed61d72
            if ($pathinfo === '/js/ed61d72.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'ed61d72',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_ed61d72',);
            }

            if (0 === strpos($pathinfo, '/js/ed61d72_')) {
                // _assetic_ed61d72_0
                if ($pathinfo === '/js/ed61d72_jquery.min_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'ed61d72',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_ed61d72_0',);
                }

                // _assetic_ed61d72_1
                if ($pathinfo === '/js/ed61d72_bootstrap.min_2.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'ed61d72',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_ed61d72_1',);
                }

                if (0 === strpos($pathinfo, '/js/ed61d72_jquery')) {
                    // _assetic_ed61d72_2
                    if ($pathinfo === '/js/ed61d72_jquery-migrate.min_3.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'ed61d72',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_ed61d72_2',);
                    }

                    // _assetic_ed61d72_3
                    if ($pathinfo === '/js/ed61d72_jquery.carouFredSel-6.1.0_4.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'ed61d72',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_ed61d72_3',);
                    }

                }

                // _assetic_ed61d72_4
                if ($pathinfo === '/js/ed61d72_font-awesome-icons_5.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'ed61d72',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_ed61d72_4',);
                }

                // _assetic_ed61d72_5
                if ($pathinfo === '/js/ed61d72_layerslider.transitions_6.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'ed61d72',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_ed61d72_5',);
                }

                // _assetic_ed61d72_6
                if ($pathinfo === '/js/ed61d72_index_script_7.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'ed61d72',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_ed61d72_6',);
                }

                // _assetic_ed61d72_7
                if ($pathinfo === '/js/ed61d72_greensock_8.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'ed61d72',  'pos' => 7,  '_format' => 'js',  '_route' => '_assetic_ed61d72_7',);
                }

                // _assetic_ed61d72_8
                if ($pathinfo === '/js/ed61d72_layerslider.kreaturamedia.jquery_9.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'ed61d72',  'pos' => 8,  '_format' => 'js',  '_route' => '_assetic_ed61d72_8',);
                }

                // _assetic_ed61d72_9
                if ($pathinfo === '/js/ed61d72_wsse_10.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'ed61d72',  'pos' => 9,  '_format' => 'js',  '_route' => '_assetic_ed61d72_9',);
                }

                // _assetic_ed61d72_10
                if ($pathinfo === '/js/ed61d72_loginAjax_11.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'ed61d72',  'pos' => 10,  '_format' => 'js',  '_route' => '_assetic_ed61d72_10',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/css/66e182f')) {
            // _assetic_66e182f
            if ($pathinfo === '/css/66e182f.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '66e182f',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_66e182f',);
            }

            // _assetic_66e182f_0
            if ($pathinfo === '/css/66e182f_login-register_1.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '66e182f',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_66e182f_0',);
            }

        }

        if (0 === strpos($pathinfo, '/js')) {
            if (0 === strpos($pathinfo, '/js/3490027')) {
                // _assetic_3490027
                if ($pathinfo === '/js/3490027.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 3490027,  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_3490027',);
                }

                if (0 === strpos($pathinfo, '/js/3490027_')) {
                    // _assetic_3490027_0
                    if ($pathinfo === '/js/3490027_jquery.min_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 3490027,  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_3490027_0',);
                    }

                    // _assetic_3490027_1
                    if ($pathinfo === '/js/3490027_bootstrap.min_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 3490027,  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_3490027_1',);
                    }

                    // _assetic_3490027_2
                    if ($pathinfo === '/js/3490027_jquery-migrate.min_3.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 3490027,  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_3490027_2',);
                    }

                    // _assetic_3490027_3
                    if ($pathinfo === '/js/3490027_font-awesome-icons_4.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 3490027,  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_3490027_3',);
                    }

                    // _assetic_3490027_4
                    if ($pathinfo === '/js/3490027_post-project_5.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 3490027,  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_3490027_4',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/js/bfe5279')) {
                // _assetic_bfe5279
                if ($pathinfo === '/js/bfe5279.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'bfe5279',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_bfe5279',);
                }

                if (0 === strpos($pathinfo, '/js/bfe5279_')) {
                    // _assetic_bfe5279_0
                    if ($pathinfo === '/js/bfe5279_jquery.min_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bfe5279',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_bfe5279_0',);
                    }

                    // _assetic_bfe5279_1
                    if ($pathinfo === '/js/bfe5279_bootstrap.min_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bfe5279',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_bfe5279_1',);
                    }

                    if (0 === strpos($pathinfo, '/js/bfe5279_jquery')) {
                        // _assetic_bfe5279_2
                        if ($pathinfo === '/js/bfe5279_jquery-migrate.min_3.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'bfe5279',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_bfe5279_2',);
                        }

                        // _assetic_bfe5279_3
                        if ($pathinfo === '/js/bfe5279_jquery.carouFredSel-6.1.0_4.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'bfe5279',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_bfe5279_3',);
                        }

                    }

                    // _assetic_bfe5279_4
                    if ($pathinfo === '/js/bfe5279_font-awesome-icons_5.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bfe5279',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_bfe5279_4',);
                    }

                    // _assetic_bfe5279_5
                    if ($pathinfo === '/js/bfe5279_layerslider.transitions_6.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bfe5279',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_bfe5279_5',);
                    }

                    // _assetic_bfe5279_6
                    if ($pathinfo === '/js/bfe5279_index_script_7.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bfe5279',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_bfe5279_6',);
                    }

                    // _assetic_bfe5279_7
                    if ($pathinfo === '/js/bfe5279_greensock_8.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bfe5279',  'pos' => 7,  '_format' => 'js',  '_route' => '_assetic_bfe5279_7',);
                    }

                    // _assetic_bfe5279_8
                    if ($pathinfo === '/js/bfe5279_layerslider.kreaturamedia.jquery_9.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bfe5279',  'pos' => 8,  '_format' => 'js',  '_route' => '_assetic_bfe5279_8',);
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // howitworks
        if (rtrim($pathinfo, '/') === '/howitworks') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'howitworks');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::test',  '_route' => 'howitworks',);
        }

        // login
        if (rtrim($pathinfo, '/') === '/login') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'login');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::login',  '_route' => 'login',);
        }

        if (0 === strpos($pathinfo, '/p')) {
            // PostProject
            if ($pathinfo === '/post') {
                return array (  '_controller' => 'AppBundle\\Controller\\PostProjectController::indexAction',  '_route' => 'PostProject',);
            }

            if (0 === strpos($pathinfo, '/pro')) {
                // app_postproject_post
                if ($pathinfo === '/project/post') {
                    return array (  '_controller' => 'AppBundle\\Controller\\PostProjectController::postAction',  '_route' => 'app_postproject_post',);
                }

                if (0 === strpos($pathinfo, '/proposal')) {
                    // proposal_index
                    if (rtrim($pathinfo, '/') === '/proposal') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_proposal_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'proposal_index');
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\ProposalController::indexAction',  '_route' => 'proposal_index',);
                    }
                    not_proposal_index:

                    // proposal_new
                    if ($pathinfo === '/proposal/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_proposal_new;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\ProposalController::newAction',  '_route' => 'proposal_new',);
                    }
                    not_proposal_new:

                    // proposal_show
                    if (preg_match('#^/proposal/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_proposal_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'proposal_show')), array (  '_controller' => 'AppBundle\\Controller\\ProposalController::showAction',));
                    }
                    not_proposal_show:

                    // proposal_edit
                    if (preg_match('#^/proposal/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_proposal_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'proposal_edit')), array (  '_controller' => 'AppBundle\\Controller\\ProposalController::editAction',));
                    }
                    not_proposal_edit:

                    // proposal_delete
                    if (preg_match('#^/proposal/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_proposal_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'proposal_delete')), array (  '_controller' => 'AppBundle\\Controller\\ProposalController::deleteAction',));
                    }
                    not_proposal_delete:

                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
