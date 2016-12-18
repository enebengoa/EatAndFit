<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/ad')) {
            // App_user_add_comentario
            if ($pathinfo === '/addComentario') {
                return array (  '_controller' => 'App\\UserBundle\\Controller\\ComentarioController::addComentarioAction',  '_route' => 'App_user_add_comentario',);
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

                // App_admin_addMenu
                if ($pathinfo === '/admin/addMenu') {
                    return array (  '_controller' => 'App\\AdminBundle\\Controller\\AdminController::addMenuAction',  '_route' => 'App_admin_addMenu',);
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

                // App_admin_addLista
                if ($pathinfo === '/admin/addLista') {
                    return array (  '_controller' => 'App\\AdminBundle\\Controller\\AdminController::addListaAction',  '_route' => 'App_admin_addLista',);
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
