<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/doc.json' => [[['_route' => 'app.swagger', '_controller' => 'nelmio_api_doc.controller.swagger'], null, ['GET' => 0], null, false, false, null]],
        '/' => [[['_route' => 'app.swagger_ui', '_controller' => 'nelmio_api_doc.controller.swagger_ui'], null, ['GET' => 0], null, false, false, null]],
        '/_wdt/styles.css' => [[['_route' => '_wdt_stylesheet', '_controller' => 'web_profiler.controller.profiler::toolbarStylesheetAction'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/api/access/create' => [[['_route' => 'create_access', '_controller' => 'App\\Controller\\Api\\Access\\CreateAccessController::createAccess'], null, ['POST' => 0], null, false, false, null]],
        '/api/access/delete' => [[['_route' => 'delete_access', '_controller' => 'App\\Controller\\Api\\Access\\DeleteAccessController::deleteAccess'], null, ['DELETE' => 0], null, false, false, null]],
        '/api/access/get' => [[['_route' => 'get_all_accesses', '_controller' => 'App\\Controller\\Api\\Access\\GetAccessController::getAllAccesses'], null, ['GET' => 0], null, false, false, null]],
        '/api/log' => [[['_route' => 'api_log', '_controller' => 'App\\Controller\\Api\\Logs\\LogsController::getLogs'], null, null, null, false, false, null]],
        '/api/roles/create' => [[['_route' => 'create_role', '_controller' => 'App\\Controller\\Api\\Roles\\CreateRolesController::createOrUpdateRole'], null, ['POST' => 0], null, false, false, null]],
        '/api/roles/list' => [[['_route' => 'get_all_roles', '_controller' => 'App\\Controller\\Api\\Roles\\GetRolesController::getAllRoles'], null, ['GET' => 0], null, false, false, null]],
        '/api/taches/create' => [[['_route' => 'create_taches', '_controller' => 'App\\Controller\\Api\\Taches\\CreateTachesController::createTaches'], null, ['POST' => 0], null, false, false, null]],
        '/api/taches' => [[['_route' => 'get_all_taches', '_controller' => 'App\\Controller\\Api\\Taches\\GetTachesController::getAllTaches'], null, ['GET' => 0], null, false, false, null]],
        '/api/send-bulk-email' => [[['_route' => 'send_bulk_email', '_controller' => 'App\\Controller\\Api\\Users\\BulkMailController::sendBulkEmail'], null, ['POST' => 0], null, false, false, null]],
        '/api/users/register' => [[['_route' => 'api_register', '_controller' => 'App\\Controller\\Api\\Users\\CreateUsers\\CreateUsersController::register'], null, ['POST' => 0], null, false, false, null]],
        '/api/users/Info' => [[['_route' => 'api_user_info', '_controller' => 'App\\Controller\\Api\\Users\\InfoUsers\\InfoUsersController::getUserInfo'], null, ['GET' => 0], null, false, false, null]],
        '/api/users/list' => [[['_route' => 'api_list_users', '_controller' => 'App\\Controller\\Api\\Users\\ListUsers\\ListUsersController::GetUsers'], null, ['GET' => 0], null, false, false, null]],
        '/login' => [[['_route' => 'login_2fa', '_controller' => 'App\\Controller\\Api\\Users\\Login\\LoginController::login'], null, ['POST' => 0], null, false, false, null]],
        '/verify-2fa' => [[['_route' => 'api_verify_2fa', '_controller' => 'App\\Controller\\Api\\Users\\Login\\LoginController::verify2FA'], null, ['POST' => 0], null, false, false, null]],
        '/api/password/request-reset' => [[['_route' => 'password_request_reset', '_controller' => 'App\\Controller\\Api\\Users\\PasswordReset\\PasswordResetController::requestReset'], null, ['POST' => 0], null, false, false, null]],
        '/api/password/reset' => [[['_route' => 'password_reset', '_controller' => 'App\\Controller\\Api\\Users\\PasswordReset\\PasswordResetController::resetPassword'], null, ['POST' => 0], null, false, false, null]],
        '/api/password/change' => [[['_route' => 'password_change', '_controller' => 'App\\Controller\\Api\\Users\\PasswordReset\\PasswordResetController::changePassword'], null, ['POST' => 0], null, false, false, null]],
        '/api/modules/create' => [[['_route' => 'create_modules', '_controller' => 'App\\Controller\\Modules\\CreateModuleController::createMultiple'], null, ['POST' => 0], null, false, false, null]],
        '/api/modules/get_all' => [[['_route' => 'list_modules', '_controller' => 'App\\Controller\\Modules\\ListModuleController::list'], null, ['GET' => 0], null, true, false, null]],
        '/api/projects/create' => [[['_route' => 'api_create_projects', '_controller' => 'App\\Controller\\Projets\\CreateProjetsController::createProjects'], null, ['POST' => 0], null, false, false, null]],
        '/api/projects/list' => [[['_route' => 'api_list_projects', '_controller' => 'App\\Controller\\Projets\\GetProjetsController'], null, ['GET' => 0], null, false, false, null]],
        '/login/app' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
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
                .'|/api/(?'
                    .'|access/(?'
                        .'|delete/([^/]++)(*:235)'
                        .'|([^/]++)(*:251)'
                        .'|update(*:265)'
                    .')'
                    .'|roles/(?'
                        .'|delete/([^/]++)(*:298)'
                        .'|([^/]++)(?'
                            .'|(*:317)'
                            .'|/update(*:332)'
                        .')'
                    .')'
                    .'|taches/([^/]++)(?'
                        .'|/(?'
                            .'|delete(*:370)'
                            .'|update(*:384)'
                        .')'
                        .'|(*:393)'
                    .')'
                    .'|users/(?'
                        .'|([^/]++)/delete(*:426)'
                        .'|(\\d+)(*:439)'
                        .'|([^/]++)/update(*:462)'
                    .')'
                    .'|modules/(?'
                        .'|delete/([^/]++)(*:497)'
                        .'|get/([^/]++)(*:517)'
                        .'|update/([^/]++)(*:540)'
                    .')'
                    .'|projects/(?'
                        .'|delete/([^/]++)(*:576)'
                        .'|([^/]++)(*:592)'
                        .'|update/([^/]++)(*:615)'
                    .')'
                .')'
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
        235 => [[['_route' => 'delete_access_by_id', '_controller' => 'App\\Controller\\Api\\Access\\DeleteAccessController::deleteAccessById'], ['id'], ['DELETE' => 0], null, false, true, null]],
        251 => [[['_route' => 'get_access_by_id', '_controller' => 'App\\Controller\\Api\\Access\\GetAccessController::getAccessById'], ['id'], ['GET' => 0], null, false, true, null]],
        265 => [[['_route' => 'update_access', '_controller' => 'App\\Controller\\Api\\Access\\UpdateAccessController::updateAccess'], [], ['PATCH' => 0], null, false, false, null]],
        298 => [[['_route' => 'delete_role', '_controller' => 'App\\Controller\\Api\\Roles\\DeleteRolesController::deleteRole'], ['id'], ['DELETE' => 0], null, false, true, null]],
        317 => [[['_route' => 'get_role_by_id', '_controller' => 'App\\Controller\\Api\\Roles\\GetRolesController::getRoleById'], ['id'], ['GET' => 0], null, false, true, null]],
        332 => [[['_route' => 'update_role', '_controller' => 'App\\Controller\\Api\\Roles\\UpdateRolesController::updateRole'], ['id'], ['PATCH' => 0], null, false, false, null]],
        370 => [[['_route' => 'delete_tache', '_controller' => 'App\\Controller\\Api\\Taches\\DeleteTachesController::deleteTache'], ['id'], ['DELETE' => 0], null, false, false, null]],
        384 => [[['_route' => 'update_tache', '_controller' => 'App\\Controller\\Api\\Taches\\UpdateTachesController::updateTache'], ['id'], ['PUT' => 0, 'PATCH' => 1], null, false, false, null]],
        393 => [[['_route' => 'get_tache', '_controller' => 'App\\Controller\\Api\\Taches\\GetTachesController::getTache'], ['id'], ['GET' => 0], null, false, true, null]],
        426 => [[['_route' => 'api_user_delete', '_controller' => 'App\\Controller\\Api\\Users\\DeleteUsers\\DeleteUsersController::deleteUser'], ['id'], ['DELETE' => 0], null, false, false, null]],
        439 => [[['_route' => 'api_user_get', '_controller' => 'App\\Controller\\Api\\Users\\InfoUsers\\InfoUsersController::OneUser'], ['id'], ['GET' => 0], null, false, true, null]],
        462 => [[['_route' => 'api_user_update', '_controller' => 'App\\Controller\\Api\\Users\\UpdateUsers\\UpdateUsersController::updateUser'], ['id'], ['PATCH' => 0], null, false, false, null]],
        497 => [[['_route' => 'delete_module', '_controller' => 'App\\Controller\\Modules\\DeleteModuleController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        517 => [[['_route' => 'get_module', '_controller' => 'App\\Controller\\Modules\\ListModuleController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        540 => [[['_route' => 'update_module', '_controller' => 'App\\Controller\\Modules\\UpdateModuleController::update'], ['id'], ['PATCH' => 0], null, false, true, null]],
        576 => [[['_route' => 'api_delete_projects', '_controller' => 'App\\Controller\\Projets\\DeleteProjetsController::deleteProject'], ['id'], ['DELETE' => 0], null, false, true, null]],
        592 => [[['_route' => 'api_get_project_by_id', '_controller' => 'App\\Controller\\Projets\\GetProjetsController::getProjetById'], ['id'], ['GET' => 0], null, false, true, null]],
        615 => [
            [['_route' => 'api_update_projects', '_controller' => 'App\\Controller\\Projets\\UpdateProjetsController::patchProjet'], ['id'], ['PATCH' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
