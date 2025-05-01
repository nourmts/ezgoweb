<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/fc-load-events' => [[['_route' => 'fc_load_events', '_controller' => 'CalendarBundle\\Controller\\CalendarController::loadAction'], null, null, null, false, false, null]],
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
        '/admin/calendar' => [[['_route' => 'app_calendar', '_controller' => 'App\\Controller\\CalendarController::index'], null, null, null, false, false, null]],
        '/admin/calendar/events' => [[['_route' => 'app_calendar_events', '_controller' => 'App\\Controller\\CalendarController::events'], null, null, null, false, false, null]],
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
        '/admin/reservations/search' => [[['_route' => 'app_reservations_search', '_controller' => 'App\\Controller\\ReservationsController::search'], null, ['GET' => 0], null, false, false, null]],
        '/station/all' => [[['_route' => 'app_station_index', '_controller' => 'App\\Controller\\StationController::index'], null, ['GET' => 0], null, false, false, null]],
        '/station/new' => [[['_route' => 'app_station_new', '_controller' => 'App\\Controller\\StationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/ticket' => [[['_route' => 'app_ticket_index', '_controller' => 'App\\Controller\\TicketController::index'], null, ['GET' => 0], null, false, false, null]],
        '/ticket/new' => [[['_route' => 'app_ticket_new', '_controller' => 'App\\Controller\\TicketController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/cars' => [[['_route' => 'front_voiture_index', '_controller' => 'App\\Controller\\VoitureController::frontIndex'], null, ['GET' => 0], null, false, false, null]],
        '/statistics' => [[['_route' => 'front_voiture_statistics', '_controller' => 'App\\Controller\\VoitureController::frontStatistics'], null, null, null, false, false, null]],
        '/admin/cars' => [[['_route' => 'app_voiture_index', '_controller' => 'App\\Controller\\VoitureController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/cars/new' => [[['_route' => 'app_voiture_new', '_controller' => 'App\\Controller\\VoitureController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/statistics' => [[['_route' => 'app_voiture_statistics', '_controller' => 'App\\Controller\\VoitureController::statistics'], null, null, null, false, false, null]],
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
                            .'|([^/]++)/pdf(*:376)'
                        .')'
                        .'|cars/([^/]++)(?'
                            .'|(*:401)'
                            .'|/(?'
                                .'|edit(*:417)'
                                .'|delete(*:431)'
                            .')'
                        .')'
                    .')'
                .')'
                .'|/back/(?'
                    .'|modifier_(?'
                        .'|station/([^/]++)(*:480)'
                        .'|bus/([^/]++)(*:500)'
                        .'|ticket/([^/]++)(*:523)'
                    .')'
                    .'|bus/(?'
                        .'|([^/]++)(?'
                            .'|(*:550)'
                            .'|/edit(*:563)'
                            .'|(*:571)'
                        .')'
                        .'|stats(*:585)'
                    .')'
                    .'|reclamation/([^/]++)/(?'
                        .'|discussion(*:628)'
                        .'|start(*:641)'
                        .'|traiter(*:656)'
                    .')'
                .')'
                .'|/p(?'
                    .'|i/(?'
                        .'|get\\-buses/([^/]++)(*:695)'
                        .'|qrcode/([^/]++)(*:718)'
                        .'|purchase\\-ticket/([^/]++)(*:751)'
                    .')'
                    .'|artenaire/([^/]++)(?'
                        .'|(*:781)'
                        .'|/edit(*:794)'
                        .'|(*:802)'
                    .')'
                .')'
                .'|/location/(?'
                    .'|new/([^/]++)(*:837)'
                    .'|([^/]++)(?'
                        .'|/(?'
                            .'|confirm(*:867)'
                            .'|edit(*:879)'
                        .')'
                        .'|(*:888)'
                    .')'
                .')'
                .'|/re(?'
                    .'|clamation/(?'
                        .'|([^/]++)(?'
                            .'|(*:928)'
                            .'|/(?'
                                .'|edit(*:944)'
                                .'|delete(*:958)'
                            .')'
                        .')'
                        .'|update\\-status/([^/]++)(*:991)'
                        .'|reclamation/show/([^/]++)(*:1024)'
                        .'|delete/([^/]++)(*:1048)'
                        .'|start/([^/]++)(*:1071)'
                        .'|([^/]++)/discussion(*:1099)'
                    .')'
                    .'|servations/(?'
                        .'|([^/]++)/c(?'
                            .'|ancel(*:1141)'
                            .'|onfirmation(*:1161)'
                        .')'
                        .'|new/([^/]++)(*:1183)'
                    .')'
                .')'
                .'|/station/([^/]++)(?'
                    .'|(*:1214)'
                    .'|/edit(*:1228)'
                    .'|(*:1237)'
                .')'
                .'|/ticket/([^/]++)(?'
                    .'|(*:1266)'
                    .'|/edit(*:1280)'
                    .'|(*:1289)'
                .')'
                .'|/cars/([^/]++)(*:1313)'
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
        376 => [[['_route' => 'app_reservations_pdf', '_controller' => 'App\\Controller\\ReservationsController::generatePdf'], ['idRes'], ['GET' => 0], null, false, false, null]],
        401 => [[['_route' => 'app_voiture_show', '_controller' => 'App\\Controller\\VoitureController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        417 => [[['_route' => 'app_voiture_edit', '_controller' => 'App\\Controller\\VoitureController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        431 => [[['_route' => 'app_voiture_delete', '_controller' => 'App\\Controller\\VoitureController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        480 => [[['_route' => 'app_modifier_station', '_controller' => 'App\\Controller\\BackController::modifier'], ['idS'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        500 => [[['_route' => 'app_modifier_bus', '_controller' => 'App\\Controller\\BackController::modifier_bus'], ['imatriculation'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        523 => [[['_route' => 'app_modifier_ticket', '_controller' => 'App\\Controller\\BackController::modifier_ticket'], ['ticketid'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        550 => [[['_route' => 'app_bus_show', '_controller' => 'App\\Controller\\BusController::show'], ['imatriculation'], ['GET' => 0], null, false, true, null]],
        563 => [[['_route' => 'app_bus_edit', '_controller' => 'App\\Controller\\BusController::edit'], ['imatriculation'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        571 => [[['_route' => 'app_bus_delete', '_controller' => 'App\\Controller\\BusController::delete'], ['imatriculation'], ['POST' => 0], null, false, true, null]],
        585 => [[['_route' => 'app_stats', '_controller' => 'App\\Controller\\BusController::stats'], [], null, null, false, false, null]],
        628 => [[['_route' => 'app_back_discussion', '_controller' => 'App\\Controller\\back\\DiscussionController::index'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        641 => [[['_route' => 'reclamation_start', '_controller' => 'App\\Controller\\back\\DiscussionController::startDiscussion'], ['id'], ['POST' => 0], null, false, false, null]],
        656 => [[['_route' => 'app_back_reclamation_marquer_traite', '_controller' => 'App\\Controller\\back\\DiscussionController::marquerCommeTraite'], ['id'], null, null, false, false, null]],
        695 => [[['_route' => 'app_get_buses', '_controller' => 'App\\Controller\\HomeController::getBuses'], ['stationId'], ['GET' => 0], null, false, true, null]],
        718 => [[['_route' => 'app_qrcode', '_controller' => 'App\\Controller\\HomeController::create_qrcode'], ['ticketid'], ['GET' => 0], null, false, true, null]],
        751 => [[['_route' => 'app_purchase_ticket', '_controller' => 'App\\Controller\\HomeController::purchaseTicket'], ['busId'], ['POST' => 0], null, false, true, null]],
        781 => [[['_route' => 'app_partenaire_show', '_controller' => 'App\\Controller\\PartenaireController::show'], ['idPartenaire'], ['GET' => 0], null, false, true, null]],
        794 => [[['_route' => 'app_partenaire_edit', '_controller' => 'App\\Controller\\PartenaireController::edit'], ['idPartenaire'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        802 => [[['_route' => 'app_partenaire_delete', '_controller' => 'App\\Controller\\PartenaireController::delete'], ['idPartenaire'], ['POST' => 0], null, false, true, null]],
        837 => [[['_route' => 'app_location_new', '_controller' => 'App\\Controller\\LocationController::new'], ['idPartenaire'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        867 => [[['_route' => 'app_location_confirm', '_controller' => 'App\\Controller\\LocationController::confirm'], ['idLocation'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        879 => [[['_route' => 'app_location_edit', '_controller' => 'App\\Controller\\LocationController::edit'], ['idLocation'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        888 => [
            [['_route' => 'app_location_show', '_controller' => 'App\\Controller\\LocationController::show'], ['idLocation'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_location_delete', '_controller' => 'App\\Controller\\LocationController::delete'], ['idLocation'], ['POST' => 0], null, false, true, null],
        ],
        928 => [[['_route' => 'app_reclamation_show', '_controller' => 'App\\Controller\\ReclamationController::show'], ['idReclamation'], ['GET' => 0], null, false, true, null]],
        944 => [[['_route' => 'app_reclamation_edit', '_controller' => 'App\\Controller\\ReclamationController::edit'], ['idReclamation'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        958 => [[['_route' => 'app_reclamation_delete', '_controller' => 'App\\Controller\\ReclamationController::delete'], ['idReclamation'], ['POST' => 0], null, false, false, null]],
        991 => [[['_route' => 'update_reclamation_status', '_controller' => 'App\\Controller\\ReclamationController::updateStatus'], ['id'], ['POST' => 0], null, false, true, null]],
        1024 => [[['_route' => 'app_back_reclamation_show', '_controller' => 'App\\Controller\\ReclamationController::showBack'], ['id'], ['GET' => 0], null, false, true, null]],
        1048 => [[['_route' => 'app_back_reclamation_delete', '_controller' => 'App\\Controller\\back\\homedashboardController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1071 => [[['_route' => 'app_back_reclamation_start', '_controller' => 'App\\Controller\\back\\homedashboardController::startDiscussion'], ['id'], ['POST' => 0], null, false, true, null]],
        1099 => [[['_route' => 'app_discussion', '_controller' => 'App\\Controller\\DiscussionController::index'], ['idReclamation'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1141 => [[['_route' => 'app_reservations_cancel', '_controller' => 'App\\Controller\\ReservationsController::cancel'], ['idRes'], ['POST' => 0], null, false, false, null]],
        1161 => [[['_route' => 'app_reservations_confirmation', '_controller' => 'App\\Controller\\ReservationsController::confirmation'], ['id'], ['GET' => 0], null, false, false, null]],
        1183 => [[['_route' => 'app_reservations_new', '_controller' => 'App\\Controller\\ReservationsController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1214 => [[['_route' => 'app_station_show', '_controller' => 'App\\Controller\\StationController::show'], ['idS'], ['GET' => 0], null, false, true, null]],
        1228 => [[['_route' => 'app_station_edit', '_controller' => 'App\\Controller\\StationController::edit'], ['idS'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1237 => [[['_route' => 'app_station_delete', '_controller' => 'App\\Controller\\StationController::delete'], ['idS'], ['POST' => 0], null, false, true, null]],
        1266 => [[['_route' => 'app_ticket_show', '_controller' => 'App\\Controller\\TicketController::show'], ['ticketid'], ['GET' => 0], null, false, true, null]],
        1280 => [[['_route' => 'app_ticket_edit', '_controller' => 'App\\Controller\\TicketController::edit'], ['ticketid'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1289 => [[['_route' => 'app_ticket_delete', '_controller' => 'App\\Controller\\TicketController::delete'], ['ticketid'], ['POST' => 0], null, false, true, null]],
        1313 => [
            [['_route' => 'front_voiture_show', '_controller' => 'App\\Controller\\VoitureController::frontShow'], ['id'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
