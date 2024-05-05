<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/evenement' => [[['_route' => 'app_evenement_index', '_controller' => 'App\\Controller\\EvenementController::index'], null, ['GET' => 0], null, true, false, null]],
        '/evenement/ghofrane/student-element' => [[['_route' => 'app_student_element', '_controller' => 'App\\Controller\\EvenementController::studentelement'], null, null, null, false, false, null]],
        '/evenement/ghofrane/add-student' => [[['_route' => 'app_add_student', '_controller' => 'App\\Controller\\EvenementController::addStudent'], null, null, null, false, false, null]],
        '/integration' => [[['_route' => 'app_integration', '_controller' => 'App\\Controller\\PreviewController::index'], null, null, null, false, false, null]],
        '/events' => [[['_route' => 'app_events', '_controller' => 'App\\Controller\\PreviewController::events'], null, null, null, false, false, null]],
        '/ghofrane' => [[['_route' => 'app_ghofrane', '_controller' => 'App\\Controller\\PreviewController::ghofrane'], null, null, null, false, false, null]],
        '/reserver/event' => [[['_route' => 'app_reserver_event_index', '_controller' => 'App\\Controller\\ReserverEventController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reserver/event/new' => [[['_route' => 'app_reserver_event_new', '_controller' => 'App\\Controller\\ReserverEventController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reserver/event/new-reservation' => [[['_route' => 'add_reservation', '_controller' => 'App\\Controller\\ReserverEventController::addReservation'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\DefaultController::index'], null, null, null, false, false, null]],
        '/evenement/search' => [[['_route' => 'app_evenement_rechercher', '_controller' => 'App\\Controller\\EvenementController::search'], null, ['POST' => 0], null, false, false, null]],
        '/afficher/reservation' => [[['_route' => 'app_afficher_reservation', '_controller' => 'App\\Controller\\ReserverEventController::show'], null, ['GET' => 0], null, false, false, null]],
        '/translate-event' => [[['_route' => 'translate_event', '_controller' => 'App\\Controller\\EvenementController::translateEvent'], null, ['POST' => 0], null, false, false, null]],
        '/reserver/event/reservations/new' => [[['_route' => 'reservation_new', '_controller' => 'App\\Controller\\ReserverEventController::create'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/evenement/statistiques' => [[['_route' => 'app_evenement_statistiques', '_controller' => 'App\\Controller\\EvenementController::statistiques'], null, ['GET' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/evenement(?'
                    .'|/(?'
                        .'|evenement/([^/]++)(*:42)'
                        .'|([^/]++)/edit(*:62)'
                    .')'
                    .'|delete/([^/]++)(*:85)'
                .')'
                .'|/reserver/event/([^/]++)(?'
                    .'|/edit(*:125)'
                    .'|(*:133)'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:173)'
                    .'|wdt/([^/]++)(*:193)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:239)'
                            .'|router(*:253)'
                            .'|exception(?'
                                .'|(*:273)'
                                .'|\\.css(*:286)'
                            .')'
                        .')'
                        .'|(*:296)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        42 => [[['_route' => 'app_evenement_delete', '_controller' => 'App\\Controller\\EvenementController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        62 => [[['_route' => 'app_evenement_edit', '_controller' => 'App\\Controller\\EvenementController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        85 => [[['_route' => 'app_delete', '_controller' => 'App\\Controller\\EvenementController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        125 => [[['_route' => 'app_reserver_event_edit', '_controller' => 'App\\Controller\\ReserverEventController::edit'], ['id_reservation'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        133 => [[['_route' => 'app_reserver_event_delete', '_controller' => 'App\\Controller\\ReserverEventController::delete'], ['id_reservation'], ['POST' => 0], null, false, true, null]],
        173 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        193 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        239 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        253 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        273 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        286 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        296 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
