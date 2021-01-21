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
    'avion_index' => [[], ['_controller' => 'App\\Controller\\AvionController::index'], [], [['text', '/avion/']], [], []],
    'avion_new' => [[], ['_controller' => 'App\\Controller\\AvionController::new'], [], [['text', '/avion/new']], [], []],
    'avion_show' => [['id'], ['_controller' => 'App\\Controller\\AvionController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/avion']], [], []],
    'avion_edit' => [['id'], ['_controller' => 'App\\Controller\\AvionController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/avion']], [], []],
    'avion_delete' => [['id'], ['_controller' => 'App\\Controller\\AvionController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/avion']], [], []],
    'brevet_index' => [[], ['_controller' => 'App\\Controller\\BrevetController::index'], [], [['text', '/brevet/']], [], []],
    'brevet_new' => [[], ['_controller' => 'App\\Controller\\BrevetController::new'], [], [['text', '/brevet/new']], [], []],
    'brevet_show' => [['id'], ['_controller' => 'App\\Controller\\BrevetController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/brevet']], [], []],
    'brevet_edit' => [['id'], ['_controller' => 'App\\Controller\\BrevetController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/brevet']], [], []],
    'brevet_delete' => [['id'], ['_controller' => 'App\\Controller\\BrevetController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/brevet']], [], []],
    'facture' => [[], ['_controller' => 'App\\Controller\\FactureController::index'], [], [['text', '/facture']], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], []],
    'pilote_index' => [[], ['_controller' => 'App\\Controller\\PiloteController::index'], [], [['text', '/pilote/']], [], []],
    'pilote_new' => [[], ['_controller' => 'App\\Controller\\PiloteController::new'], [], [['text', '/pilote/new']], [], []],
    'pilote_show' => [['id'], ['_controller' => 'App\\Controller\\PiloteController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/pilote']], [], []],
    'pilote_edit' => [['id'], ['_controller' => 'App\\Controller\\PiloteController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/pilote']], [], []],
    'pilote_delete' => [['id'], ['_controller' => 'App\\Controller\\PiloteController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/pilote']], [], []],
    'qualification_index' => [[], ['_controller' => 'App\\Controller\\QualificationController::index'], [], [['text', '/qualification/']], [], []],
    'qualification_new' => [[], ['_controller' => 'App\\Controller\\QualificationController::new'], [], [['text', '/qualification/new']], [], []],
    'qualification_show' => [['id'], ['_controller' => 'App\\Controller\\QualificationController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/qualification']], [], []],
    'qualification_edit' => [['id'], ['_controller' => 'App\\Controller\\QualificationController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/qualification']], [], []],
    'qualification_delete' => [['id'], ['_controller' => 'App\\Controller\\QualificationController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/qualification']], [], []],
    'reservation_index' => [[], ['_controller' => 'App\\Controller\\ReservationController::index'], [], [['text', '/reservation/']], [], []],
    'reservation_new' => [[], ['_controller' => 'App\\Controller\\ReservationController::new'], [], [['text', '/reservation/new']], [], []],
    'reservation_show' => [['id'], ['_controller' => 'App\\Controller\\ReservationController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/reservation']], [], []],
    'reservation_edit' => [['id'], ['_controller' => 'App\\Controller\\ReservationController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/reservation']], [], []],
    'reservation_delete' => [['id'], ['_controller' => 'App\\Controller\\ReservationController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/reservation']], [], []],
    'search' => [[], ['_controller' => 'App\\Controller\\SearchController::index'], [], [['text', '/search']], [], []],
    'type_avion_index' => [[], ['_controller' => 'App\\Controller\\TypeAvionController::index'], [], [['text', '/type/avion/']], [], []],
    'type_avion_new' => [[], ['_controller' => 'App\\Controller\\TypeAvionController::new'], [], [['text', '/type/avion/new']], [], []],
    'type_avion_show' => [['id'], ['_controller' => 'App\\Controller\\TypeAvionController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/type/avion']], [], []],
    'type_avion_edit' => [['id'], ['_controller' => 'App\\Controller\\TypeAvionController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/type/avion']], [], []],
    'type_avion_delete' => [['id'], ['_controller' => 'App\\Controller\\TypeAvionController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/type/avion']], [], []],
];
