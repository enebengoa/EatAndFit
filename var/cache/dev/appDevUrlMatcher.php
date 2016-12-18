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

        // fos_js_routing_js
        if (0 === strpos($pathinfo, '/js/routing') && preg_match('#^/js/routing(?:\\.(?P<_format>js|json))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_js_routing_js')), array (  '_controller' => 'fos_js_routing.controller:indexAction',  '_format' => 'js',));
        }

        // App_user_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'App_user_homepage');
            }

            return array (  '_controller' => 'App\\UserBundle\\Controller\\UserController::homeAction',  '_route' => 'App_user_homepage',);
        }

        // App_user_contacto
        if ($pathinfo === '/contacto') {
            return array (  '_controller' => 'App\\UserBundle\\Controller\\UserController::contactoAction',  '_route' => 'App_user_contacto',);
        }

        if (0 === strpos($pathinfo, '/blog')) {
            if (0 === strpos($pathinfo, '/blogListReceta')) {
                // App_user_listReceta
                if ($pathinfo === '/blogListReceta') {
                    return array (  '_controller' => 'App\\UserBundle\\Controller\\UserController::listRecetaAction',  '_route' => 'App_user_listReceta',);
                }

                // App_user_listRecetaHoraIngesta
                if (0 === strpos($pathinfo, '/blogListRecetaHoraIngesta') && preg_match('#^/blogListRecetaHoraIngesta/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'App_user_listRecetaHoraIngesta')), array (  '_controller' => 'App\\UserBundle\\Controller\\UserController::listRecetaHoraIngestaAction',));
                }

                // App_user_listRecetaTipoReceta
                if (0 === strpos($pathinfo, '/blogListRecetaTipoReceta') && preg_match('#^/blogListRecetaTipoReceta/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'App_user_listRecetaTipoReceta')), array (  '_controller' => 'App\\UserBundle\\Controller\\UserController::listRecetaTipoRecetaAction',));
                }

                // App_user_listRecetaLastThree
                if ($pathinfo === '/blogListRecetaLastThree') {
                    return array (  '_controller' => 'App\\UserBundle\\Controller\\UserController::listLastThreeRecetaAction',  '_route' => 'App_user_listRecetaLastThree',);
                }

            }

            // App_user_showReceta
            if (0 === strpos($pathinfo, '/blogShowReceta') && preg_match('#^/blogShowReceta/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'App_user_showReceta')), array (  '_controller' => 'App\\UserBundle\\Controller\\UserController::showRecetaAction',));
            }

            // App_user_listUtensilio
            if ($pathinfo === '/blogListUtensilio') {
                return array (  '_controller' => 'App\\UserBundle\\Controller\\UserController::listUtensilioAction',  '_route' => 'App_user_listUtensilio',);
            }

            // App_user_listTecnica
            if ($pathinfo === '/bloglistTecnica') {
                return array (  '_controller' => 'App\\UserBundle\\Controller\\UserController::listTecnicaAction',  '_route' => 'App_user_listTecnica',);
            }

        }

        // App_user_listMenu
        if ($pathinfo === '/ListMenu') {
            return array (  '_controller' => 'App\\UserBundle\\Controller\\UserController::listMenuAction',  '_route' => 'App_user_listMenu',);
        }

        // App_user_addMenu
        if ($pathinfo === '/AddMenu' && $request->isXmlHttpRequest()) {
            return array (  '_controller' => 'App\\UserBundle\\Controller\\UserController::addMenuAction',  '_route' => 'App_user_addMenu',);
        }

        // App_user_showMenu
        if (0 === strpos($pathinfo, '/ShowMenu') && preg_match('#^/ShowMenu/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'App_user_showMenu')), array (  '_controller' => 'App\\UserBundle\\Controller\\UserController::showMenuAction',));
        }

        // App_user_addSubMenu
        if (0 === strpos($pathinfo, '/AddSubMenu') && preg_match('#^/AddSubMenu/(?P<Menu>[^/]++)/(?P<Receta>[^/]++)/(?P<horasIngesta>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'App_user_addSubMenu')), array (  '_controller' => 'App\\UserBundle\\Controller\\UserController::addSubMenuAction',));
        }

        // App_user_deleteSubMenu
        if (0 === strpos($pathinfo, '/DeleteSubMenu') && preg_match('#^/DeleteSubMenu/(?P<receta>[^/]++)/(?P<menu>[^/]++)/(?P<horaIngesta>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'App_user_deleteSubMenu')), array (  '_controller' => 'App\\UserBundle\\Controller\\UserController::deleteSubMenuAction',));
        }

        // App_user_listLista
        if ($pathinfo === '/listLista') {
            return array (  '_controller' => 'App\\UserBundle\\Controller\\UserController::listListaAction',  '_route' => 'App_user_listLista',);
        }

        // App_user_addLista
        if ($pathinfo === '/addLista' && $request->isXmlHttpRequest()) {
            return array (  '_controller' => 'App\\UserBundle\\Controller\\UserController::addListaAction',  '_route' => 'App_user_addLista',);
        }

        if (0 === strpos($pathinfo, '/showLista')) {
            // App_user_showLista
            if (preg_match('#^/showLista/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'App_user_showLista')), array (  '_controller' => 'App\\UserBundle\\Controller\\UserController::showListaAction',));
            }

            // App_user_showListaJson
            if (0 === strpos($pathinfo, '/showListaJson') && preg_match('#^/showListaJson/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'App_user_showListaJson')), array (  '_controller' => 'App\\UserBundle\\Controller\\UserController::renderJsonShowListaAction',));
            }

        }

        // App_user_addOrdenCompra
        if (0 === strpos($pathinfo, '/AddOrdenCompra') && preg_match('#^/AddOrdenCompra/(?P<Lista>[^/]++)/(?P<Menu>[^/]++)/(?P<cantidad>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'App_user_addOrdenCompra')), array (  '_controller' => 'App\\UserBundle\\Controller\\UserController::addOrdenCompraAction',));
        }

        // App_user_listForo
        if ($pathinfo === '/listForo') {
            return array (  '_controller' => 'App\\UserBundle\\Controller\\UserController::listForoAction',  '_route' => 'App_user_listForo',);
        }

        // App_user_addForo
        if ($pathinfo === '/addForo') {
            return array (  '_controller' => 'App\\UserBundle\\Controller\\UserController::addForoAction',  '_route' => 'App_user_addForo',);
        }

        if (0 === strpos($pathinfo, '/show')) {
            // App_user_showForo
            if (0 === strpos($pathinfo, '/showForo') && preg_match('#^/showForo/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'App_user_showForo')), array (  '_controller' => 'App\\UserBundle\\Controller\\UserController::showForoAction',));
            }

            // App_user_showBlog
            if ($pathinfo === '/showBlog') {
                return array (  '_controller' => 'App\\UserBundle\\Controller\\UserController::showBlogAction',  '_route' => 'App_user_showBlog',);
            }

            // App_user_showServicio
            if ($pathinfo === '/showServicio') {
                return array (  '_controller' => 'App\\UserBundle\\Controller\\UserController::showServicioAction',  '_route' => 'App_user_showServicio',);
            }

        }

        if (0 === strpos($pathinfo, '/add')) {
            // App_user_add_comentario
            if (0 === strpos($pathinfo, '/addComentario') && preg_match('#^/addComentario/(?P<id>[^/]+)(?P<user>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'App_user_add_comentario')), array (  '_controller' => 'App\\UserBundle\\Controller\\ComentarioController::addComentarioAction',));
            }

            // App_user_add_puntuacion
            if (0 === strpos($pathinfo, '/addPuntuacion') && preg_match('#^/addPuntuacion/(?P<id2>[^/]+)(?P<user2>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'App_user_add_puntuacion')), array (  '_controller' => 'App\\UserBundle\\Controller\\ComentarioController::addPuntuacionAction',));
            }

        }

        // App_user_RecetasMenu
        if (0 === strpos($pathinfo, '/RecetasMenu') && preg_match('#^/RecetasMenu/(?P<Menu>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'App_user_RecetasMenu')), array (  '_controller' => 'App\\UserBundle\\Controller\\UserController::RecetasMenuAction',));
        }

        // App_user_addOrdenCompraLista
        if (0 === strpos($pathinfo, '/addOrdenCompraLista') && preg_match('#^/addOrdenCompraLista/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'App_user_addOrdenCompraLista')), array (  '_controller' => 'App\\UserBundle\\Controller\\UserController::addOrdenCompraListaAction',));
        }

        // App_user_deleteOrdenCompra
        if (0 === strpos($pathinfo, '/deleteOrdenCompra') && preg_match('#^/deleteOrdenCompra/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'App_user_deleteOrdenCompra')), array (  '_controller' => 'App\\UserBundle\\Controller\\UserController::deleteOrdenCompraAction',));
        }

        // App_user_modifyEstadoOrdenCompra
        if (0 === strpos($pathinfo, '/modifyEstadoOrdenCompra') && preg_match('#^/modifyEstadoOrdenCompra/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'App_user_modifyEstadoOrdenCompra')), array (  '_controller' => 'App\\UserBundle\\Controller\\UserController::modifyEstadoAction',));
        }

        if (0 === strpos($pathinfo, '/admin')) {
            // App_admin_homepage
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'App_admin_homepage');
                }

                return array (  '_controller' => 'App\\AdminBundle\\Controller\\AdminController::dashboardAction',  '_route' => 'App_admin_homepage',);
            }

            // App_admin_addIngrediente
            if ($pathinfo === '/admin/addIngrediente') {
                return array (  '_controller' => 'App\\AdminBundle\\Controller\\AdminController::addIngredienteAction',  '_route' => 'App_admin_addIngrediente',);
            }

            // App_admin_listIngrediente
            if ($pathinfo === '/admin/listIngrediente') {
                return array (  '_controller' => 'App\\AdminBundle\\Controller\\AdminController::listIngredienteAction',  '_route' => 'App_admin_listIngrediente',);
            }

            // App_admin_modifyIngrediente
            if (0 === strpos($pathinfo, '/admin/modifyIngrediente') && preg_match('#^/admin/modifyIngrediente/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'App_admin_modifyIngrediente')), array (  '_controller' => 'App\\AdminBundle\\Controller\\AdminController::modifyIngredienteAction',));
            }

            // App_admin_deleteIngrediente
            if (0 === strpos($pathinfo, '/admin/deleteIngrediente') && preg_match('#^/admin/deleteIngrediente/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'App_admin_deleteIngrediente')), array (  '_controller' => 'App\\AdminBundle\\Controller\\AdminController::deleteIngredienteAction',));
            }

            // App_admin_addTipoReceta
            if ($pathinfo === '/admin/addTipoReceta') {
                return array (  '_controller' => 'App\\AdminBundle\\Controller\\AdminController::addTipoRecetaAction',  '_route' => 'App_admin_addTipoReceta',);
            }

            // App_admin_listTipoReceta
            if ($pathinfo === '/admin/listTipoReceta') {
                return array (  '_controller' => 'App\\AdminBundle\\Controller\\AdminController::listTipoRecetaAction',  '_route' => 'App_admin_listTipoReceta',);
            }

            // App_admin_modifyTipoReceta
            if (0 === strpos($pathinfo, '/admin/modifyTipoReceta') && preg_match('#^/admin/modifyTipoReceta/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'App_admin_modifyTipoReceta')), array (  '_controller' => 'App\\AdminBundle\\Controller\\AdminController::modifyTipoRecetaAction',));
            }

            // App_admin_deleteTipoReceta
            if (0 === strpos($pathinfo, '/admin/deleteTipoReceta') && preg_match('#^/admin/deleteTipoReceta/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'App_admin_deleteTipoReceta')), array (  '_controller' => 'App\\AdminBundle\\Controller\\AdminController::deleteTipoRecetaAction',));
            }

            // App_admin_addHoraIngesta
            if ($pathinfo === '/admin/addHoraIngesta') {
                return array (  '_controller' => 'App\\AdminBundle\\Controller\\AdminController::addHoraIngestaAction',  '_route' => 'App_admin_addHoraIngesta',);
            }

            // App_admin_listHoraIngesta
            if ($pathinfo === '/admin/listHoraIngesta') {
                return array (  '_controller' => 'App\\AdminBundle\\Controller\\AdminController::listHoraIngestaAction',  '_route' => 'App_admin_listHoraIngesta',);
            }

            // App_admin_modifyHoraIngesta
            if (0 === strpos($pathinfo, '/admin/modifyHoraIngesta') && preg_match('#^/admin/modifyHoraIngesta/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'App_admin_modifyHoraIngesta')), array (  '_controller' => 'App\\AdminBundle\\Controller\\AdminController::modifyHoraIngestaAction',));
            }

            // App_admin_deleteHoraIngesta
            if (0 === strpos($pathinfo, '/admin/deleteHoraIngesta') && preg_match('#^/admin/deleteHoraIngesta/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'App_admin_deleteHoraIngesta')), array (  '_controller' => 'App\\AdminBundle\\Controller\\AdminController::deleteHoraIngestaAction',));
            }

            // App_admin_addUtensilio
            if ($pathinfo === '/admin/addUtensilio') {
                return array (  '_controller' => 'App\\AdminBundle\\Controller\\AdminController::addUtensilioAction',  '_route' => 'App_admin_addUtensilio',);
            }

            // App_admin_listUtensilio
            if ($pathinfo === '/admin/listUtensilio') {
                return array (  '_controller' => 'App\\AdminBundle\\Controller\\AdminController::listUtensilioAction',  '_route' => 'App_admin_listUtensilio',);
            }

            // App_admin_modifyUtensilio
            if (0 === strpos($pathinfo, '/admin/modifyUtensilio') && preg_match('#^/admin/modifyUtensilio/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'App_admin_modifyUtensilio')), array (  '_controller' => 'App\\AdminBundle\\Controller\\AdminController::modifyUtensilioAction',));
            }

            // App_admin_deleteUtensilio
            if (0 === strpos($pathinfo, '/admin/deleteUtensilio') && preg_match('#^/admin/deleteUtensilio/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'App_admin_deleteUtensilio')), array (  '_controller' => 'App\\AdminBundle\\Controller\\AdminController::deleteUtensilioAction',));
            }

            // App_admin_addTecnica
            if ($pathinfo === '/admin/addTecnica') {
                return array (  '_controller' => 'App\\AdminBundle\\Controller\\AdminController::addTecnicaAction',  '_route' => 'App_admin_addTecnica',);
            }

            // App_admin_listTecnica
            if ($pathinfo === '/admin/listTecnica') {
                return array (  '_controller' => 'App\\AdminBundle\\Controller\\AdminController::listTecnicaAction',  '_route' => 'App_admin_listTecnica',);
            }

            // App_admin_showTecnica
            if (0 === strpos($pathinfo, '/admin/showTecnica') && preg_match('#^/admin/showTecnica/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'App_admin_showTecnica')), array (  '_controller' => 'App\\AdminBundle\\Controller\\AdminController::showTecnicaAction',));
            }

            // App_admin_modifyTecnica
            if (0 === strpos($pathinfo, '/admin/modifyTecnica') && preg_match('#^/admin/modifyTecnica/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'App_admin_modifyTecnica')), array (  '_controller' => 'App\\AdminBundle\\Controller\\AdminController::modifyTecnicaAction',));
            }

            // App_admin_deleteTecnica
            if (0 === strpos($pathinfo, '/admin/deleteTecnica') && preg_match('#^/admin/deleteTecnica/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'App_admin_deleteTecnica')), array (  '_controller' => 'App\\AdminBundle\\Controller\\AdminController::deleteTecnicaAction',));
            }

            // App_admin_addReceta
            if ($pathinfo === '/admin/addReceta') {
                return array (  '_controller' => 'App\\AdminBundle\\Controller\\AdminController::addRecetaAction',  '_route' => 'App_admin_addReceta',);
            }

            // App_admin_listReceta
            if ($pathinfo === '/admin/listReceta') {
                return array (  '_controller' => 'App\\AdminBundle\\Controller\\AdminController::listRecetaAction',  '_route' => 'App_admin_listReceta',);
            }

            // App_admin_modifyReceta
            if (0 === strpos($pathinfo, '/admin/modifyReceta') && preg_match('#^/admin/modifyReceta/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'App_admin_modifyReceta')), array (  '_controller' => 'App\\AdminBundle\\Controller\\AdminController::modifyRecetaAction',));
            }

            // App_admin_deleteReceta
            if (0 === strpos($pathinfo, '/admin/deleteReceta') && preg_match('#^/admin/deleteReceta/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'App_admin_deleteReceta')), array (  '_controller' => 'App\\AdminBundle\\Controller\\AdminController::deleteRecetaAction',));
            }

            if (0 === strpos($pathinfo, '/admin/a')) {
                // App_admin_addMenu
                if ($pathinfo === '/admin/addMenu') {
                    return array (  '_controller' => 'App\\AdminBundle\\Controller\\AdminController::addMenuAction',  '_route' => 'App_admin_addMenu',);
                }

                // App_admin_ajax_add_subMenu_form
                if ($pathinfo === '/admin/ajaxAddSubMenuform') {
                    return array (  '_controller' => 'App\\AdminBundle\\Controller\\AdminController::SubMenuAjaxFormAction',  '_route' => 'App_admin_ajax_add_subMenu_form',);
                }

            }

            // App_admin_listMenu
            if ($pathinfo === '/admin/listMenu') {
                return array (  '_controller' => 'App\\AdminBundle\\Controller\\AdminController::listMenuAction',  '_route' => 'App_admin_listMenu',);
            }

            // App_admin_modifyMenu
            if (0 === strpos($pathinfo, '/admin/modifyMenu') && preg_match('#^/admin/modifyMenu/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'App_admin_modifyMenu')), array (  '_controller' => 'App\\AdminBundle\\Controller\\AdminController::modifyMenuAction',));
            }

            // App_admin_deleteMenu
            if (0 === strpos($pathinfo, '/admin/deleteMenu') && preg_match('#^/admin/deleteMenu/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'App_admin_deleteMenu')), array (  '_controller' => 'App\\AdminBundle\\Controller\\AdminController::deleteMenuAction',));
            }

            if (0 === strpos($pathinfo, '/admin/add')) {
                // App_admin_addSubMenu
                if ($pathinfo === '/admin/addSubMenu') {
                    return array (  '_controller' => 'App\\AdminBundle\\Controller\\AdminController::addSubMenuAction',  '_route' => 'App_admin_addSubMenu',);
                }

                // App_admin_addLista
                if ($pathinfo === '/admin/addLista') {
                    return array (  '_controller' => 'App\\AdminBundle\\Controller\\AdminController::addListaAction',  '_route' => 'App_admin_addLista',);
                }

            }

            // App_admin_listLista
            if ($pathinfo === '/admin/listLista') {
                return array (  '_controller' => 'App\\AdminBundle\\Controller\\AdminController::listListaAction',  '_route' => 'App_admin_listLista',);
            }

            // App_admin_modifyLista
            if (0 === strpos($pathinfo, '/admin/modifyLista') && preg_match('#^/admin/modifyLista/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'App_admin_modifyLista')), array (  '_controller' => 'App\\AdminBundle\\Controller\\AdminController::modifyListaAction',));
            }

            // App_admin_deleteLista
            if (0 === strpos($pathinfo, '/admin/deleteLista') && preg_match('#^/admin/deleteLista/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'App_admin_deleteLista')), array (  '_controller' => 'App\\AdminBundle\\Controller\\AdminController::deleteListaAction',));
            }

            // App_admin_addTemaForo
            if ($pathinfo === '/admin/addTemaForo') {
                return array (  '_controller' => 'App\\AdminBundle\\Controller\\AdminController::addTemaForoAction',  '_route' => 'App_admin_addTemaForo',);
            }

            // App_admin_listTemaForo
            if ($pathinfo === '/admin/listTemaForo') {
                return array (  '_controller' => 'App\\AdminBundle\\Controller\\AdminController::listTemaForoAction',  '_route' => 'App_admin_listTemaForo',);
            }

            // App_admin_modifyTemaForo
            if (0 === strpos($pathinfo, '/admin/modifyTemaForo') && preg_match('#^/admin/modifyTemaForo/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'App_admin_modifyTemaForo')), array (  '_controller' => 'App\\AdminBundle\\Controller\\AdminController::modifyTemaForoAction',));
            }

            // App_admin_deleteTemaForo
            if (0 === strpos($pathinfo, '/admin/deleteTemaForo') && preg_match('#^/admin/deleteTemaForo/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'App_admin_deleteTemaForo')), array (  '_controller' => 'App\\AdminBundle\\Controller\\AdminController::deleteTemaForoAction',));
            }

            // App_admin_addComentario
            if ($pathinfo === '/admin/addComentario') {
                return array (  '_controller' => 'App\\AdminBundle\\Controller\\AdminController::addComentarioAction',  '_route' => 'App_admin_addComentario',);
            }

            // App_admin_listComentario
            if ($pathinfo === '/admin/listComentario') {
                return array (  '_controller' => 'App\\AdminBundle\\Controller\\AdminController::listComentarioAction',  '_route' => 'App_admin_listComentario',);
            }

            // App_admin_deleteComentario
            if (0 === strpos($pathinfo, '/admin/deleteComentario') && preg_match('#^/admin/deleteComentario/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'App_admin_deleteComentario')), array (  '_controller' => 'App\\AdminBundle\\Controller\\AdminController::deleteComentarioAction',));
            }

            // App_admin_listUsuario
            if ($pathinfo === '/admin/listUsuario') {
                return array (  '_controller' => 'App\\AdminBundle\\Controller\\AdminController::listUsuarioAction',  '_route' => 'App_admin_listUsuario',);
            }

            // App_admin_deleteUsuario
            if (0 === strpos($pathinfo, '/admin/deleteUsuario') && preg_match('#^/admin/deleteUsuario/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'App_admin_deleteUsuario')), array (  '_controller' => 'App\\AdminBundle\\Controller\\AdminController::deleteUsuarioAction',));
            }

            // App_admin_addTipoUsuario
            if ($pathinfo === '/admin/addTipoUsuario') {
                return array (  '_controller' => 'App\\AdminBundle\\Controller\\AdminController::addTipoUsuarioAction',  '_route' => 'App_admin_addTipoUsuario',);
            }

            // App_admin_listTipoUsuario
            if ($pathinfo === '/admin/listTipoUsuario') {
                return array (  '_controller' => 'App\\AdminBundle\\Controller\\AdminController::listTipoUsuarioAction',  '_route' => 'App_admin_listTipoUsuario',);
            }

            // App_admin_modifyTipoUsuario
            if (0 === strpos($pathinfo, '/admin/modifyTipoUsuario') && preg_match('#^/admin/modifyTipoUsuario/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'App_admin_modifyTipoUsuario')), array (  '_controller' => 'App\\AdminBundle\\Controller\\AdminController::modifyTipoUsuarioAction',));
            }

            // App_admin_deleteTipoUsuario
            if (0 === strpos($pathinfo, '/admin/deleteTipoUsuario') && preg_match('#^/admin/deleteTipoUsuario/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'App_admin_deleteTipoUsuario')), array (  '_controller' => 'App\\AdminBundle\\Controller\\AdminController::deleteTipoUsuarioAction',));
            }

            // App_admin_sendEmail
            if ($pathinfo === '/admin/sendEmail') {
                return array (  '_controller' => 'App\\AdminBundle\\Controller\\AdminController::sendEmailAction',  '_route' => 'App_admin_sendEmail',);
            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
