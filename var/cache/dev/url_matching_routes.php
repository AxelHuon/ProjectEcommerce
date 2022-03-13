<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/cart' => [[['_route' => 'cart', '_controller' => 'App\\Controller\\CartController::index'], null, null, null, false, false, null]],
        '/checkout/address' => [[['_route' => 'checkout', '_controller' => 'App\\Controller\\CheckoutController::index'], null, null, null, false, false, null]],
        '/checkout/payement' => [[['_route' => 'checkout_payement', '_controller' => 'App\\Controller\\CheckoutController::payement'], null, null, null, false, false, null]],
        '/checkout/final' => [[['_route' => 'checkout_final', '_controller' => 'App\\Controller\\CheckoutController::chekoutFinal'], null, null, null, false, false, null]],
        '/checkout/removeAllCart' => [[['_route' => 'remove_Allcart', '_controller' => 'App\\Controller\\CheckoutController::removeAllCart'], null, null, null, false, false, null]],
        '/checkout/addAddress' => [[['_route' => 'checkout_addNewAddress', '_controller' => 'App\\Controller\\CheckoutController::addAdress'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/email' => [[['_route' => 'email', '_controller' => 'App\\Controller\\HomeController::testEmail'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/shop' => [[['_route' => 'shop', '_controller' => 'App\\Controller\\ShopController::index'], null, null, null, false, false, null]],
        '/my-account' => [[['_route' => 'user_page', '_controller' => 'App\\Controller\\UserPageController::index'], null, null, null, false, false, null]],
        '/my-account/addAddress' => [[['_route' => 'user_addAddress', '_controller' => 'App\\Controller\\UserPageController::addAdress'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|wdt/([^/]++)(*:24)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:69)'
                            .'|router(*:82)'
                            .'|exception(?'
                                .'|(*:101)'
                                .'|\\.css(*:114)'
                            .')'
                        .')'
                        .'|(*:124)'
                    .')'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:159)'
                .')'
                .'|/c(?'
                    .'|art/(?'
                        .'|add/([^/]++)(*:192)'
                        .'|remove/([^/]++)(*:215)'
                    .')'
                    .'|heckout/addAddress([^/]++)(*:250)'
                .')'
                .'|/product/([^/]++)(*:276)'
                .'|/reset\\-password/reset(?:/([^/]++))?(*:320)'
                .'|/shop/category([^/]++)(*:350)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        69 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        82 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        101 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        114 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        124 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        159 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        192 => [[['_route' => 'cart_add', '_controller' => 'App\\Controller\\CartController::addCart'], ['id'], null, null, false, true, null]],
        215 => [[['_route' => 'cart_remove', '_controller' => 'App\\Controller\\CartController::remove'], ['id'], null, null, false, true, null]],
        250 => [[['_route' => 'checkout_addAdress', '_controller' => 'App\\Controller\\CheckoutController::chooseAddress'], ['idAddress'], null, null, false, true, null]],
        276 => [[['_route' => 'product_simple', '_controller' => 'App\\Controller\\ProductSimpleController::index'], ['id'], null, null, false, true, null]],
        320 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        350 => [
            [['_route' => 'shop_category', '_controller' => 'App\\Controller\\ShopController::filter'], ['categoryId'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
