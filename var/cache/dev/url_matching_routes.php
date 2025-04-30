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
        '/asset-test' => [[['_route' => 'app_asset_test', '_controller' => 'App\\Controller\\AssetTestController::index'], null, null, null, false, false, null]],
        '/back/dashbord' => [[['_route' => 'app_dashbord', '_controller' => 'App\\Controller\\BackController::index'], null, null, null, false, false, null]],
        '/back/bus' => [
            [['_route' => 'app_bus', '_controller' => 'App\\Controller\\BackController::bus'], null, ['GET' => 0, 'POST' => 1], null, false, false, null],
            [['_route' => 'app_bus_index', '_controller' => 'App\\Controller\\BusController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null],
        ],
        '/back/base' => [[['_route' => 'app_base', '_controller' => 'App\\Controller\\BackController::base'], null, null, null, false, false, null]],
        '/back/gestion_station' => [[['_route' => 'app_gestion_station', '_controller' => 'App\\Controller\\BackController::gestion_station'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/back/ticket' => [[['_route' => 'app_ticket', '_controller' => 'App\\Controller\\BackController::ticket'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/back/bus/new' => [[['_route' => 'app_bus_new', '_controller' => 'App\\Controller\\BusController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/email' => [[['_route' => 'app_email', '_controller' => 'App\\Controller\\EmailController::index'], null, null, null, false, false, null]],
        '/reservations/new' => [[['_route' => 'front_reservation_new', '_controller' => 'App\\Controller\\Front\\ReservationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/pi/home' => [[['_route' => 'app_index', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/pi/about' => [[['_route' => 'app_about', '_controller' => 'App\\Controller\\HomeController::about'], null, null, null, false, false, null]],
        '/pi/pricing' => [[['_route' => 'app_pricing', '_controller' => 'App\\Controller\\HomeController::pricing'], null, null, null, false, false, null]],
        '/pi/our_car' => [[['_route' => 'app_our_car', '_controller' => 'App\\Controller\\HomeController::our_car'], null, null, null, false, false, null]],
        '/pi/blog' => [[['_route' => 'app_blog', '_controller' => 'App\\Controller\\HomeController::blog'], null, null, null, false, false, null]],
        '/pi/contact' => [[['_route' => 'app_contact', '_controller' => 'App\\Controller\\HomeController::contact'], null, null, null, false, false, null]],
        '/location' => [[['_route' => 'app_location_index', '_controller' => 'App\\Controller\\LocationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/partenaire/front' => [[['_route' => 'app_partenaire_front', '_controller' => 'App\\Controller\\PartenaireController::front'], null, ['GET' => 0], null, false, false, null]],
        '/partenaire' => [[['_route' => 'app_partenaire_index', '_controller' => 'App\\Controller\\PartenaireController::index'], null, ['GET' => 0], null, true, false, null]],
        '/partenaire/list' => [[['_route' => 'app_partenaire_list', '_controller' => 'App\\Controller\\PartenaireController::list'], null, ['GET' => 0], null, false, false, null]],
        '/partenaire/new' => [[['_route' => 'app_partenaire_new', '_controller' => 'App\\Controller\\PartenaireController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reclamation' => [[['_route' => 'app_reclamation_index', '_controller' => 'App\\Controller\\ReclamationController::index'], null, ['GET' => 0], null, false, false, null]],
        '/reclamation/new' => [[['_route' => 'app_reclamation_new', '_controller' => 'App\\Controller\\ReclamationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/reservations' => [[['_route' => 'app_reservations_index', '_controller' => 'App\\Controller\\ReservationsController::index'], null, ['GET' => 0], null, false, false, null]],
        '/station/all' => [[['_route' => 'app_station_index', '_controller' => 'App\\Controller\\StationController::index'], null, ['GET' => 0], null, false, false, null]],
        '/station/new' => [[['_route' => 'app_station_new', '_controller' => 'App\\Controller\\StationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/ticket' => [[['_route' => 'app_ticket_index', '_controller' => 'App\\Controller\\TicketController::index'], null, ['GET' => 0], null, false, false, null]],
        '/ticket/new' => [[['_route' => 'app_ticket_new', '_controller' => 'App\\Controller\\TicketController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/cars' => [[['_route' => 'front_voiture_index', '_controller' => 'App\\Controller\\VoitureController::frontIndex'], null, ['GET' => 0], null, false, false, null]],
        '/admin/cars' => [[['_route' => 'app_voiture_index', '_controller' => 'App\\Controller\\VoitureController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/cars/new' => [[['_route' => 'app_voiture_new', '_controller' => 'App\\Controller\\VoitureController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/back' => [[['_route' => 'app_back_homedashboard', '_controller' => 'App\\Controller\\back\\homedashboardController::index'], null, null, null, false, false, null]],
        '/dashboard' => [[['_route' => 'app_homedashboard', '_controller' => 'App\\Controller\\HomedashboardController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/a(?'
                    .'|pi/partenaire/([^/]++)/(?'
                        .'|services(*:241)'
                        .'|marques(*:256)'
                        .'|tarif(*:269)'
                    .')'
                    .'|dmin/(?'
                        .'|reservations/(?'
                            .'|([^/]++)(?'
                                .'|(*:313)'
                                .'|/(?'
                                    .'|edit(*:329)'
                                    .'|delete(*:343)'
                                .')'
                            .')'
                            .'|new(*:356)'
                        .')'
                        .'|cars/([^/]++)(?'
                            .'|(*:381)'
                            .'|/edit(*:394)'
                            .'|(*:402)'
                        .')'
                    .')'
                .')'
                .'|/back/(?'
                    .'|modifier_(?'
                        .'|station/([^/]++)(*:450)'
                        .'|bus/([^/]++)(*:470)'
                        .'|ticket/([^/]++)(*:493)'
                    .')'
                    .'|bus/([^/]++)(?'
                        .'|(*:517)'
                        .'|/edit(*:530)'
                        .'|(*:538)'
                    .')'
                    .'|reclamation/([^/]++)/(?'
                        .'|discussion(*:581)'
                        .'|start(*:594)'
                        .'|traiter(*:609)'
                    .')'
                .')'
                .'|/p(?'
                    .'|i/(?'
                        .'|get\\-buses/([^/]++)(*:648)'
                        .'|qrcode/([^/]++)(*:671)'
                        .'|purchase\\-ticket/([^/]++)(*:704)'
                    .')'
                    .'|artenaire/([^/]++)(?'
                        .'|(*:734)'
                        .'|/edit(*:747)'
                        .'|(*:755)'
                    .')'
                .')'
                .'|/location/(?'
                    .'|new/([^/]++)(*:790)'
                    .'|([^/]++)(?'
                        .'|/(?'
                            .'|confirm(*:820)'
                            .'|edit(*:832)'
                        .')'
                        .'|(*:841)'
                    .')'
                .')'
                .'|/re(?'
                    .'|clamation/(?'
                        .'|([^/]++)(?'
                            .'|(*:881)'
                            .'|/(?'
                                .'|edit(*:897)'
                                .'|delete(*:911)'
                            .')'
                        .')'
                        .'|update\\-status/([^/]++)(*:944)'
                        .'|reclamation/show/([^/]++)(*:977)'
                        .'|delete/([^/]++)(*:1000)'
                        .'|start/([^/]++)(*:1023)'
                        .'|([^/]++)/discussion(*:1051)'
                    .')'
                    .'|servations/(?'
                        .'|([^/]++)/cancel(*:1090)'
                        .'|new/([^/]++)(*:1111)'
                    .')'
                .')'
                .'|/station/([^/]++)(?'
                    .'|(*:1142)'
                    .'|/edit(*:1156)'
                    .'|(*:1165)'
                .')'
                .'|/ticket/([^/]++)(?'
                    .'|(*:1194)'
                    .'|/edit(*:1208)'
                    .'|(*:1217)'
                .')'
                .'|/cars/([^/]++)(*:1241)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        241 => [[['_route' => 'api_partenaire_services', '_controller' => 'App\\Controller\\ApiController::getPartenaireServices'], ['id'], ['GET' => 0], null, false, false, null]],
        256 => [[['_route' => 'api_partenaire_marques', '_controller' => 'App\\Controller\\ApiController::getPartenaireMarques'], ['id'], ['GET' => 0], null, false, false, null]],
        269 => [[['_route' => 'api_partenaire_tarif', '_controller' => 'App\\Controller\\ApiController::getPartenaireTarif'], ['id'], ['GET' => 0], null, false, false, null]],
        313 => [[['_route' => 'app_reservations_show', '_controller' => 'App\\Controller\\ReservationsController::show'], ['idRes'], ['GET' => 0], null, false, true, null]],
        329 => [[['_route' => 'app_reservations_edit', '_controller' => 'App\\Controller\\ReservationsController::edit'], ['idRes'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        343 => [[['_route' => 'app_reservations_delete', '_controller' => 'App\\Controller\\ReservationsController::delete'], ['idRes'], ['POST' => 0], null, false, false, null]],
        356 => [[['_route' => 'app_admin_reservations_new', '_controller' => 'App\\Controller\\ReservationsController::newAdmin'], [], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        381 => [[['_route' => 'app_voiture_show', '_controller' => 'App\\Controller\\VoitureController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        394 => [[['_route' => 'app_voiture_edit', '_controller' => 'App\\Controller\\VoitureController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        402 => [[['_route' => 'app_voiture_delete', '_controller' => 'App\\Controller\\VoitureController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        450 => [[['_route' => 'app_modifier_station', '_controller' => 'App\\Controller\\BackController::modifier'], ['idS'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        470 => [[['_route' => 'app_modifier_bus', '_controller' => 'App\\Controller\\BackController::modifier_bus'], ['imatriculation'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        493 => [[['_route' => 'app_modifier_ticket', '_controller' => 'App\\Controller\\BackController::modifier_ticket'], ['ticketid'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        517 => [[['_route' => 'app_bus_show', '_controller' => 'App\\Controller\\BusController::show'], ['imatriculation'], ['GET' => 0], null, false, true, null]],
        530 => [[['_route' => 'app_bus_edit', '_controller' => 'App\\Controller\\BusController::edit'], ['imatriculation'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        538 => [[['_route' => 'app_bus_delete', '_controller' => 'App\\Controller\\BusController::delete'], ['imatriculation'], ['POST' => 0], null, false, true, null]],
        581 => [[['_route' => 'app_back_discussion', '_controller' => 'App\\Controller\\back\\DiscussionController::index'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        594 => [[['_route' => 'reclamation_start', '_controller' => 'App\\Controller\\back\\DiscussionController::startDiscussion'], ['id'], ['POST' => 0], null, false, false, null]],
        609 => [[['_route' => 'app_back_reclamation_marquer_traite', '_controller' => 'App\\Controller\\back\\DiscussionController::marquerCommeTraite'], ['id'], null, null, false, false, null]],
        648 => [[['_route' => 'app_get_buses', '_controller' => 'App\\Controller\\HomeController::getBuses'], ['stationId'], ['GET' => 0], null, false, true, null]],
        671 => [[['_route' => 'app_qrcode', '_controller' => 'App\\Controller\\HomeController::create_qrcode'], ['ticketid'], ['GET' => 0], null, false, true, null]],
        704 => [[['_route' => 'app_purchase_ticket', '_controller' => 'App\\Controller\\HomeController::purchaseTicket'], ['busId'], ['POST' => 0], null, false, true, null]],
        734 => [[['_route' => 'app_partenaire_show', '_controller' => 'App\\Controller\\PartenaireController::show'], ['idPartenaire'], ['GET' => 0], null, false, true, null]],
        747 => [[['_route' => 'app_partenaire_edit', '_controller' => 'App\\Controller\\PartenaireController::edit'], ['idPartenaire'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        755 => [[['_route' => 'app_partenaire_delete', '_controller' => 'App\\Controller\\PartenaireController::delete'], ['idPartenaire'], ['POST' => 0], null, false, true, null]],
        790 => [[['_route' => 'app_location_new', '_controller' => 'App\\Controller\\LocationController::new'], ['idPartenaire'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        820 => [[['_route' => 'app_location_confirm', '_controller' => 'App\\Controller\\LocationController::confirm'], ['idLocation'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        832 => [[['_route' => 'app_location_edit', '_controller' => 'App\\Controller\\LocationController::edit'], ['idLocation'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        841 => [
            [['_route' => 'app_location_show', '_controller' => 'App\\Controller\\LocationController::show'], ['idLocation'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_location_delete', '_controller' => 'App\\Controller\\LocationController::delete'], ['idLocation'], ['POST' => 0], null, false, true, null],
        ],
        881 => [[['_route' => 'app_reclamation_show', '_controller' => 'App\\Controller\\ReclamationController::show'], ['idReclamation'], ['GET' => 0], null, false, true, null]],
        897 => [[['_route' => 'app_reclamation_edit', '_controller' => 'App\\Controller\\ReclamationController::edit'], ['idReclamation'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        911 => [[['_route' => 'app_reclamation_delete', '_controller' => 'App\\Controller\\ReclamationController::delete'], ['idReclamation'], ['POST' => 0], null, false, false, null]],
        944 => [[['_route' => 'update_reclamation_status', '_controller' => 'App\\Controller\\ReclamationController::updateStatus'], ['id'], ['POST' => 0], null, false, true, null]],
        977 => [[['_route' => 'app_back_reclamation_show', '_controller' => 'App\\Controller\\ReclamationController::showBack'], ['id'], ['GET' => 0], null, false, true, null]],
        1000 => [[['_route' => 'app_back_reclamation_delete', '_controller' => 'App\\Controller\\back\\homedashboardController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1023 => [[['_route' => 'app_back_reclamation_start', '_controller' => 'App\\Controller\\back\\homedashboardController::startDiscussion'], ['id'], ['POST' => 0], null, false, true, null]],
        1051 => [[['_route' => 'app_discussion', '_controller' => 'App\\Controller\\DiscussionController::index'], ['idReclamation'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1090 => [[['_route' => 'app_reservations_cancel', '_controller' => 'App\\Controller\\ReservationsController::cancel'], ['idRes'], ['POST' => 0], null, false, false, null]],
        1111 => [[['_route' => 'app_reservations_new', '_controller' => 'App\\Controller\\ReservationsController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1142 => [[['_route' => 'app_station_show', '_controller' => 'App\\Controller\\StationController::show'], ['idS'], ['GET' => 0], null, false, true, null]],
        1156 => [[['_route' => 'app_station_edit', '_controller' => 'App\\Controller\\StationController::edit'], ['idS'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1165 => [[['_route' => 'app_station_delete', '_controller' => 'App\\Controller\\StationController::delete'], ['idS'], ['POST' => 0], null, false, true, null]],
        1194 => [[['_route' => 'app_ticket_show', '_controller' => 'App\\Controller\\TicketController::show'], ['ticketid'], ['GET' => 0], null, false, true, null]],
        1208 => [[['_route' => 'app_ticket_edit', '_controller' => 'App\\Controller\\TicketController::edit'], ['ticketid'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1217 => [[['_route' => 'app_ticket_delete', '_controller' => 'App\\Controller\\TicketController::delete'], ['ticketid'], ['POST' => 0], null, false, true, null]],
        1241 => [
            [['_route' => 'front_voiture_show', '_controller' => 'App\\Controller\\VoitureController::frontShow'], ['id'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
