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
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/mon-panier' => [[['_route' => 'cart_index', '_controller' => 'App\\Controller\\CartController::index'], null, null, null, false, false, null]],
        '/mon-panier/removeAll' => [[['_route' => 'cart_removeAll', '_controller' => 'App\\Controller\\CartController::removeAll'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'app_contact', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'homepage', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/order/historique' => [[['_route' => 'order_history', '_controller' => 'App\\Controller\\OrderController::orderHistory'], null, null, null, false, false, null]],
        '/order/livraison' => [[['_route' => 'order_livraison', '_controller' => 'App\\Controller\\OrderController::validLivraison'], null, null, null, false, false, null]],
        '/order/create' => [[['_route' => 'order_index', '_controller' => 'App\\Controller\\OrderController::index'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/profil' => [[['_route' => 'app_info_profil', '_controller' => 'App\\Controller\\RegistrationController::profil'], null, null, null, false, false, null]],
        '/profil/mdp' => [[['_route' => 'app_mdp_profil', '_controller' => 'App\\Controller\\RegistrationController::changeMdp'], null, null, null, false, false, null]],
        '/connexion' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/mon\\-panier/(?'
                    .'|remove/(\\d+)(*:197)'
                    .'|decrease/(\\d+)(*:219)'
                    .'|increase/(\\d+)(*:241)'
                .')'
                .'|/([^/]++)/category(*:268)'
                .'|/order/([^/]++)/livraison(*:301)'
                .'|/valid/([^/]++)/livraison(*:334)'
                .'|/([^/]++)/boutique(*:360)'
                .'|/verify/([^/]++)/(\\d+)(*:390)'
                .'|/mon\\-panier/add/(\\d+)(*:420)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        197 => [[['_route' => 'cart_remove', '_controller' => 'App\\Controller\\CartController::removeToCart'], ['id'], null, null, false, true, null]],
        219 => [[['_route' => 'cart_decrease', '_controller' => 'App\\Controller\\CartController::decrease'], ['id'], null, null, false, true, null]],
        241 => [[['_route' => 'cart_increase', '_controller' => 'App\\Controller\\CartController::increase'], ['id'], null, null, false, true, null]],
        268 => [[['_route' => 'app_category', '_controller' => 'App\\Controller\\CategoryController::index'], ['id'], null, null, false, false, null]],
        301 => [[['_route' => 'see_order_livraison', '_controller' => 'App\\Controller\\OrderController::seeLivraison'], ['id'], null, null, false, false, null]],
        334 => [[['_route' => 'change_status_livraison', '_controller' => 'App\\Controller\\OrderController::finLivraison'], ['id'], null, null, false, false, null]],
        360 => [[['_route' => 'shop_index', '_controller' => 'App\\Controller\\ProductController::index'], ['id'], null, null, false, false, null]],
        390 => [[['_route' => 'account_verify', '_controller' => 'App\\Controller\\RegistrationController::verify'], ['token', 'id'], ['GET' => 0], null, false, true, null]],
        420 => [
            [['_route' => 'cart_add', '_controller' => 'App\\Controller\\SecurityController::addToCart'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
