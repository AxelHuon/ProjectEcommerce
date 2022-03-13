<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/cart' => [[['_route' => 'cart', '_controller' => 'App\\Controller\\CartController::index'], null, null, null, false, false, null]],
        '/cart/chekout' => [[['_route' => 'chekout', '_controller' => 'App\\Controller\\CartController::checkout'], null, null, null, false, false, null]],
        '/checkout/payement' => [[['_route' => 'checkout', '_controller' => 'App\\Controller\\CheckoutController::payement'], null, null, null, false, false, null]],
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
                .'|/cart/(?'
                    .'|add/([^/]++)(*:28)'
                    .'|remove/([^/]++)(*:50)'
                .')'
                .'|/product/([^/]++)(*:75)'
                .'|/reset\\-password/reset(?:/([^/]++))?(*:118)'
                .'|/my\\-account/removeAddress([^/]++)(*:160)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        28 => [[['_route' => 'cart_add', '_controller' => 'App\\Controller\\CartController::addCart'], ['id'], null, null, false, true, null]],
        50 => [[['_route' => 'cart_remove', '_controller' => 'App\\Controller\\CartController::remove'], ['id'], null, null, false, true, null]],
        75 => [[['_route' => 'product_simple', '_controller' => 'App\\Controller\\ProductSimpleController::index'], ['id'], null, null, false, true, null]],
        118 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        160 => [
            [['_route' => 'remove_address', '_controller' => 'App\\Controller\\UserPageController::removeAdd'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
