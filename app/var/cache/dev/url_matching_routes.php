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
        '/avion' => [[['_route' => 'avion_index', '_controller' => 'App\\Controller\\AvionController::index'], null, ['GET' => 0], null, true, false, null]],
        '/avion/new' => [[['_route' => 'avion_new', '_controller' => 'App\\Controller\\AvionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/brevet' => [[['_route' => 'brevet_index', '_controller' => 'App\\Controller\\BrevetController::index'], null, ['GET' => 0], null, true, false, null]],
        '/brevet/new' => [[['_route' => 'brevet_new', '_controller' => 'App\\Controller\\BrevetController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/facture' => [[['_route' => 'facture', '_controller' => 'App\\Controller\\FactureController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/pilote' => [[['_route' => 'pilote_index', '_controller' => 'App\\Controller\\PiloteController::index'], null, ['GET' => 0], null, true, false, null]],
        '/pilote/new' => [[['_route' => 'pilote_new', '_controller' => 'App\\Controller\\PiloteController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/qualification' => [[['_route' => 'qualification_index', '_controller' => 'App\\Controller\\QualificationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/qualification/new' => [[['_route' => 'qualification_new', '_controller' => 'App\\Controller\\QualificationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reservation' => [[['_route' => 'reservation_index', '_controller' => 'App\\Controller\\ReservationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reservation/new' => [[['_route' => 'reservation_new', '_controller' => 'App\\Controller\\ReservationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/search' => [[['_route' => 'search', '_controller' => 'App\\Controller\\SearchController::index'], null, null, null, false, false, null]],
        '/type/avion' => [[['_route' => 'type_avion_index', '_controller' => 'App\\Controller\\TypeAvionController::index'], null, ['GET' => 0], null, true, false, null]],
        '/type/avion/new' => [[['_route' => 'type_avion_new', '_controller' => 'App\\Controller\\TypeAvionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/avion/([^/]++)(?'
                    .'|(*:187)'
                    .'|/edit(*:200)'
                    .'|(*:208)'
                .')'
                .'|/brevet/([^/]++)(?'
                    .'|(*:236)'
                    .'|/edit(*:249)'
                    .'|(*:257)'
                .')'
                .'|/pilote/([^/]++)(?'
                    .'|(*:285)'
                    .'|/edit(*:298)'
                    .'|(*:306)'
                .')'
                .'|/qualification/([^/]++)(?'
                    .'|(*:341)'
                    .'|/edit(*:354)'
                    .'|(*:362)'
                .')'
                .'|/reservation/([^/]++)(?'
                    .'|(*:395)'
                    .'|/edit(*:408)'
                    .'|(*:416)'
                .')'
                .'|/type/avion/([^/]++)(?'
                    .'|(*:448)'
                    .'|/edit(*:461)'
                    .'|(*:469)'
                .')'
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
        187 => [[['_route' => 'avion_show', '_controller' => 'App\\Controller\\AvionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        200 => [[['_route' => 'avion_edit', '_controller' => 'App\\Controller\\AvionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        208 => [[['_route' => 'avion_delete', '_controller' => 'App\\Controller\\AvionController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        236 => [[['_route' => 'brevet_show', '_controller' => 'App\\Controller\\BrevetController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        249 => [[['_route' => 'brevet_edit', '_controller' => 'App\\Controller\\BrevetController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        257 => [[['_route' => 'brevet_delete', '_controller' => 'App\\Controller\\BrevetController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        285 => [[['_route' => 'pilote_show', '_controller' => 'App\\Controller\\PiloteController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        298 => [[['_route' => 'pilote_edit', '_controller' => 'App\\Controller\\PiloteController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        306 => [[['_route' => 'pilote_delete', '_controller' => 'App\\Controller\\PiloteController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        341 => [[['_route' => 'qualification_show', '_controller' => 'App\\Controller\\QualificationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        354 => [[['_route' => 'qualification_edit', '_controller' => 'App\\Controller\\QualificationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        362 => [[['_route' => 'qualification_delete', '_controller' => 'App\\Controller\\QualificationController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        395 => [[['_route' => 'reservation_show', '_controller' => 'App\\Controller\\ReservationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        408 => [[['_route' => 'reservation_edit', '_controller' => 'App\\Controller\\ReservationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        416 => [[['_route' => 'reservation_delete', '_controller' => 'App\\Controller\\ReservationController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        448 => [[['_route' => 'type_avion_show', '_controller' => 'App\\Controller\\TypeAvionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        461 => [[['_route' => 'type_avion_edit', '_controller' => 'App\\Controller\\TypeAvionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        469 => [
            [['_route' => 'type_avion_delete', '_controller' => 'App\\Controller\\TypeAvionController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
