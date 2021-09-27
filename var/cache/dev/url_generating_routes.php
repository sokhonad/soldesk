<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    'admin' => [[], ['_controller' => 'App\\Controller\\Admin\\DashboardController::index'], [], [['text', '/admin']], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\MainController::index'], [], [['text', '/']], [], []],
    'message' => [[], ['_controller' => 'App\\Controller\\MainController::message'], [], [['text', '/']], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/inscription']], [], []],
    'app_verify_email' => [[], ['_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], [], [['text', '/verify/email']], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/connexion']], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/Deconnexion']], [], []],
    'cree_ticket' => [[], ['_controller' => 'App\\Controller\\TicketController::form'], [], [['text', '/user/ticket']], [], []],
    'cree_modification' => [['id'], ['_controller' => 'App\\Controller\\TicketController::form'], [], [['text', '/modiffication'], ['variable', '/', '[^/]++', 'id', true], ['text', '/user/ticket']], [], []],
    'cree_ticket_u' => [['id'], ['_controller' => 'App\\Controller\\TicketController::formSolway'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user/ticket']], [], []],
    'delete' => [['id'], ['_controller' => 'App\\Controller\\TicketController::delete'], [], [['text', '/suppression'], ['variable', '/', '[^/]++', 'id', true], ['text', '/user/ticket']], [], []],
    'user' => [[], ['_controller' => 'App\\Controller\\UserController::index'], [], [['text', '/user']], [], []],
    'user_id' => [['id'], ['_controller' => 'App\\Controller\\UserController::index_consultee'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user/consulter']], [], []],
    'delete_id' => [['id'], ['_controller' => 'App\\Controller\\UserController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user/delete']], [], []],
    'usere' => [['nom'], ['_controller' => 'App\\Controller\\UserController::index1'], [], [['variable', '/', '[^/]++', 'nom', true], ['text', '/test']], [], []],
    'solway' => [[], ['_controller' => 'App\\Controller\\UserController::admistateur'], [], [['text', '/user/solway/']], [], []],
    'liste_user' => [[], ['_controller' => 'App\\Controller\\UserController::listeDeUser'], [], [['text', '/solway/utilisateurs']], [], []],
];