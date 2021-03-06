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
        '/' => [
            [['_route' => 'home', '_controller' => 'App\\Controller\\MainController::index'], null, null, null, false, false, null],
            [['_route' => 'message', '_controller' => 'App\\Controller\\MainController::message'], null, null, null, false, false, null],
        ],
        '/inscription' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/connexion' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/Deconnexion' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/user/ticket' => [[['_route' => 'cree_ticket', '_controller' => 'App\\Controller\\TicketController::form'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'user', '_controller' => 'App\\Controller\\UserController::index'], null, null, null, false, false, null]],
        '/user/solway' => [[['_route' => 'solway', '_controller' => 'App\\Controller\\UserController::admistateur'], null, null, null, true, false, null]],
        '/solway/utilisateurs' => [[['_route' => 'liste_user', '_controller' => 'App\\Controller\\UserController::listeDeUser'], null, null, null, false, false, null]],
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
                .'|/user/(?'
                    .'|ticket/([^/]++)(?'
                        .'|/(?'
                            .'|modiffication(*:213)'
                            .'|suppression(*:232)'
                        .')'
                        .'|(*:241)'
                    .')'
                    .'|consulter/([^/]++)(*:268)'
                    .'|delete/([^/]++)(*:291)'
                .')'
                .'|/test/([^/]++)(*:314)'
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
        213 => [[['_route' => 'cree_modification', '_controller' => 'App\\Controller\\TicketController::form'], ['id'], null, null, false, false, null]],
        232 => [[['_route' => 'delete', '_controller' => 'App\\Controller\\TicketController::delete'], ['id'], null, null, false, false, null]],
        241 => [[['_route' => 'cree_ticket_u', '_controller' => 'App\\Controller\\TicketController::formSolway'], ['id'], null, null, false, true, null]],
        268 => [[['_route' => 'user_id', '_controller' => 'App\\Controller\\UserController::index_consultee'], ['id'], null, null, false, true, null]],
        291 => [[['_route' => 'delete_id', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], null, null, false, true, null]],
        314 => [
            [['_route' => 'usere', '_controller' => 'App\\Controller\\UserController::index1'], ['nom'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
