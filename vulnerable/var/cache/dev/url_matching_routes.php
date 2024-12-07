<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/logout' => [
            [['_route' => '_logout_main'], null, null, null, false, false, null],
            [['_route' => 'app_logout'], null, null, null, false, false, null],
            [['_route' => 'logout', '_controller' => 'App\\Controller\\FrontController::logout'], null, null, null, false, false, null],
        ],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin/activite' => [[['_route' => 'app_activite_index', '_controller' => 'App\\Controller\\ActiviteController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/activite/new' => [[['_route' => 'app_activite_new', '_controller' => 'App\\Controller\\ActiviteController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/atelier' => [[['_route' => 'app_atelier_index', '_controller' => 'App\\Controller\\AtelierController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/atelier/new' => [[['_route' => 'app_atelier_new', '_controller' => 'App\\Controller\\AtelierController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/competence' => [[['_route' => 'app_competence_index', '_controller' => 'App\\Controller\\CompetenceController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/competence/new' => [[['_route' => 'app_competence_new', '_controller' => 'App\\Controller\\CompetenceController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'homepage', '_controller' => 'App\\Controller\\FrontController::index'], null, null, null, false, false, null]],
        '/all-ateliers' => [[['_route' => 'all-articles', '_controller' => 'App\\Controller\\FrontController::allAteliers'], null, null, null, false, false, null]],
        '/commande' => [[['_route' => 'commande', '_controller' => 'App\\Controller\\FrontController::commande'], null, null, null, false, false, null]],
        '/admin/inscription' => [[['_route' => 'app_inscription_index', '_controller' => 'App\\Controller\\InscriptionController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/inscription/new' => [[['_route' => 'app_inscription_new', '_controller' => 'App\\Controller\\InscriptionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\LoginController::index'], null, null, null, false, false, null]],
        '/admin/lycee' => [[['_route' => 'app_lycee_index', '_controller' => 'App\\Controller\\LyceeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/lycee/new' => [[['_route' => 'app_lycee_new', '_controller' => 'App\\Controller\\LyceeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/metier' => [[['_route' => 'app_metier_index', '_controller' => 'App\\Controller\\MetierController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/metier/new' => [[['_route' => 'app_metier_new', '_controller' => 'App\\Controller\\MetierController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/admin/ressource' => [[['_route' => 'app_ressource_index', '_controller' => 'App\\Controller\\RessourceController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/ressource/new' => [[['_route' => 'app_ressource_new', '_controller' => 'App\\Controller\\RessourceController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/salle' => [[['_route' => 'app_salle_index', '_controller' => 'App\\Controller\\SalleController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/salle/new' => [[['_route' => 'app_salle_new', '_controller' => 'App\\Controller\\SalleController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/secteur' => [[['_route' => 'app_secteur_index', '_controller' => 'App\\Controller\\SecteurController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/secteur/new' => [[['_route' => 'app_secteur_new', '_controller' => 'App\\Controller\\SecteurController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/section' => [[['_route' => 'app_section_index', '_controller' => 'App\\Controller\\SectionController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/section/new' => [[['_route' => 'app_section_new', '_controller' => 'App\\Controller\\SectionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/admin/(?'
                    .'|a(?'
                        .'|ctivite/([^/]++)(?'
                            .'|(*:235)'
                            .'|/edit(*:248)'
                            .'|(*:256)'
                        .')'
                        .'|telier/([^/]++)(?'
                            .'|(*:283)'
                            .'|/edit(*:296)'
                            .'|(*:304)'
                        .')'
                    .')'
                    .'|competence/([^/]++)(?'
                        .'|(*:336)'
                        .'|/edit(*:349)'
                        .'|(*:357)'
                    .')'
                    .'|inscription/([^/]++)(?'
                        .'|(*:389)'
                        .'|/edit(*:402)'
                        .'|(*:410)'
                    .')'
                    .'|lycee/([^/]++)(?'
                        .'|(*:436)'
                        .'|/edit(*:449)'
                        .'|(*:457)'
                    .')'
                    .'|metier/([^/]++)(?'
                        .'|(*:484)'
                        .'|/edit(*:497)'
                        .'|(*:505)'
                    .')'
                    .'|ressource/([^/]++)(?'
                        .'|(*:535)'
                        .'|/edit(*:548)'
                        .'|(*:556)'
                    .')'
                    .'|s(?'
                        .'|alle/([^/]++)(?'
                            .'|(*:585)'
                            .'|/edit(*:598)'
                            .'|(*:606)'
                        .')'
                        .'|ect(?'
                            .'|eur/([^/]++)(?'
                                .'|(*:636)'
                                .'|/edit(*:649)'
                                .'|(*:657)'
                            .')'
                            .'|ion/([^/]++)(?'
                                .'|(*:681)'
                                .'|/edit(*:694)'
                                .'|(*:702)'
                            .')'
                        .')'
                    .')'
                .')'
                .'|/detail\\-atelier/([^/]++)(*:739)'
                .'|/student/user\\-profile/([^/]++)(*:778)'
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
        235 => [[['_route' => 'app_activite_show', '_controller' => 'App\\Controller\\ActiviteController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        248 => [[['_route' => 'app_activite_edit', '_controller' => 'App\\Controller\\ActiviteController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        256 => [[['_route' => 'app_activite_delete', '_controller' => 'App\\Controller\\ActiviteController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        283 => [[['_route' => 'app_atelier_show', '_controller' => 'App\\Controller\\AtelierController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        296 => [[['_route' => 'app_atelier_edit', '_controller' => 'App\\Controller\\AtelierController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        304 => [[['_route' => 'app_atelier_delete', '_controller' => 'App\\Controller\\AtelierController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        336 => [[['_route' => 'app_competence_show', '_controller' => 'App\\Controller\\CompetenceController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        349 => [[['_route' => 'app_competence_edit', '_controller' => 'App\\Controller\\CompetenceController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        357 => [[['_route' => 'app_competence_delete', '_controller' => 'App\\Controller\\CompetenceController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        389 => [[['_route' => 'app_inscription_show', '_controller' => 'App\\Controller\\InscriptionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        402 => [[['_route' => 'app_inscription_edit', '_controller' => 'App\\Controller\\InscriptionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        410 => [[['_route' => 'app_inscription_delete', '_controller' => 'App\\Controller\\InscriptionController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        436 => [[['_route' => 'app_lycee_show', '_controller' => 'App\\Controller\\LyceeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        449 => [[['_route' => 'app_lycee_edit', '_controller' => 'App\\Controller\\LyceeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        457 => [[['_route' => 'app_lycee_delete', '_controller' => 'App\\Controller\\LyceeController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        484 => [[['_route' => 'app_metier_show', '_controller' => 'App\\Controller\\MetierController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        497 => [[['_route' => 'app_metier_edit', '_controller' => 'App\\Controller\\MetierController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        505 => [[['_route' => 'app_metier_delete', '_controller' => 'App\\Controller\\MetierController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        535 => [[['_route' => 'app_ressource_show', '_controller' => 'App\\Controller\\RessourceController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        548 => [[['_route' => 'app_ressource_edit', '_controller' => 'App\\Controller\\RessourceController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        556 => [[['_route' => 'app_ressource_delete', '_controller' => 'App\\Controller\\RessourceController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        585 => [[['_route' => 'app_salle_show', '_controller' => 'App\\Controller\\SalleController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        598 => [[['_route' => 'app_salle_edit', '_controller' => 'App\\Controller\\SalleController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        606 => [[['_route' => 'app_salle_delete', '_controller' => 'App\\Controller\\SalleController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        636 => [[['_route' => 'app_secteur_show', '_controller' => 'App\\Controller\\SecteurController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        649 => [[['_route' => 'app_secteur_edit', '_controller' => 'App\\Controller\\SecteurController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        657 => [[['_route' => 'app_secteur_delete', '_controller' => 'App\\Controller\\SecteurController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        681 => [[['_route' => 'app_section_show', '_controller' => 'App\\Controller\\SectionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        694 => [[['_route' => 'app_section_edit', '_controller' => 'App\\Controller\\SectionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        702 => [[['_route' => 'app_section_delete', '_controller' => 'App\\Controller\\SectionController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        739 => [[['_route' => 'detail-atelier', '_controller' => 'App\\Controller\\AtelierDetailPublicController::index'], ['id'], null, null, false, true, null]],
        778 => [
            [['_route' => 'user-profile', '_controller' => 'App\\Controller\\UserProfileController::index'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
