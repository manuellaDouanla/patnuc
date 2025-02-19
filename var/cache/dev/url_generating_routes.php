<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    'app.swagger' => [[], ['_controller' => 'nelmio_api_doc.controller.swagger'], [], [['text', '/api/doc.json']], [], [], []],
    'app.swagger_ui' => [[], ['_controller' => 'nelmio_api_doc.controller.swagger_ui'], [], [['text', '/']], [], [], []],
    '_wdt_stylesheet' => [[], ['_controller' => 'web_profiler.controller.profiler::toolbarStylesheetAction'], [], [['text', '/_wdt/styles.css']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_xdebug' => [[], ['_controller' => 'web_profiler.controller.profiler::xdebugAction'], [], [['text', '/_profiler/xdebug']], [], [], []],
    '_profiler_font' => [['fontName'], ['_controller' => 'web_profiler.controller.profiler::fontAction'], [], [['text', '.woff2'], ['variable', '/', '[^/\\.]++', 'fontName', true], ['text', '/_profiler/font']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'create_access' => [[], ['_controller' => 'App\\Controller\\Api\\Access\\CreateAccessController::createAccess'], [], [['text', '/api/access/create']], [], [], []],
    'delete_access' => [[], ['_controller' => 'App\\Controller\\Api\\Access\\DeleteAccessController::deleteAccess'], [], [['text', '/api/access/delete']], [], [], []],
    'delete_access_by_id' => [['id'], ['_controller' => 'App\\Controller\\Api\\Access\\DeleteAccessController::deleteAccessById'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/access/delete']], [], [], []],
    'get_all_accesses' => [[], ['_controller' => 'App\\Controller\\Api\\Access\\GetAccessController::getAllAccesses'], [], [['text', '/api/access/get']], [], [], []],
    'get_access_by_id' => [['id'], ['_controller' => 'App\\Controller\\Api\\Access\\GetAccessController::getAccessById'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/access']], [], [], []],
    'update_access' => [[], ['_controller' => 'App\\Controller\\Api\\Access\\UpdateAccessController::updateAccess'], [], [['text', '/api/access/update']], [], [], []],
    'api_log' => [[], ['_controller' => 'App\\Controller\\Api\\Logs\\LogsController::getLogs'], [], [['text', '/api/log']], [], [], []],
    'create_role' => [[], ['_controller' => 'App\\Controller\\Api\\Roles\\CreateRolesController::createOrUpdateRole'], [], [['text', '/api/roles/create']], [], [], []],
    'delete_role' => [['id'], ['_controller' => 'App\\Controller\\Api\\Roles\\DeleteRolesController::deleteRole'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/roles/delete']], [], [], []],
    'get_all_roles' => [[], ['_controller' => 'App\\Controller\\Api\\Roles\\GetRolesController::getAllRoles'], [], [['text', '/api/roles/list']], [], [], []],
    'get_role_by_id' => [['id'], ['_controller' => 'App\\Controller\\Api\\Roles\\GetRolesController::getRoleById'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/roles']], [], [], []],
    'update_role' => [['id'], ['_controller' => 'App\\Controller\\Api\\Roles\\UpdateRolesController::updateRole'], [], [['text', '/update'], ['variable', '/', '[^/]++', 'id', true], ['text', '/api/roles']], [], [], []],
    'create_taches' => [[], ['_controller' => 'App\\Controller\\Api\\Taches\\CreateTachesController::createTaches'], [], [['text', '/api/taches/create']], [], [], []],
    'delete_tache' => [['id'], ['_controller' => 'App\\Controller\\Api\\Taches\\DeleteTachesController::deleteTache'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/api/taches']], [], [], []],
    'get_tache' => [['id'], ['_controller' => 'App\\Controller\\Api\\Taches\\GetTachesController::getTache'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/taches']], [], [], []],
    'get_all_taches' => [[], ['_controller' => 'App\\Controller\\Api\\Taches\\GetTachesController::getAllTaches'], [], [['text', '/api/taches']], [], [], []],
    'update_tache' => [['id'], ['_controller' => 'App\\Controller\\Api\\Taches\\UpdateTachesController::updateTache'], [], [['text', '/update'], ['variable', '/', '[^/]++', 'id', true], ['text', '/api/taches']], [], [], []],
    'send_bulk_email' => [[], ['_controller' => 'App\\Controller\\Api\\Users\\BulkMailController::sendBulkEmail'], [], [['text', '/api/send-bulk-email']], [], [], []],
    'api_register' => [[], ['_controller' => 'App\\Controller\\Api\\Users\\CreateUsers\\CreateUsersController::register'], [], [['text', '/api/users/register']], [], [], []],
    'api_user_delete' => [['id'], ['_controller' => 'App\\Controller\\Api\\Users\\DeleteUsers\\DeleteUsersController::deleteUser'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/api/users']], [], [], []],
    'api_user_info' => [[], ['_controller' => 'App\\Controller\\Api\\Users\\InfoUsers\\InfoUsersController::getUserInfo'], [], [['text', '/api/users/Info']], [], [], []],
    'api_user_get' => [['id'], ['_controller' => 'App\\Controller\\Api\\Users\\InfoUsers\\InfoUsersController::OneUser'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/api/users']], [], [], []],
    'api_list_users' => [[], ['_controller' => 'App\\Controller\\Api\\Users\\ListUsers\\ListUsersController::GetUsers'], [], [['text', '/api/users/list']], [], [], []],
    'login_2fa' => [[], ['_controller' => 'App\\Controller\\Api\\Users\\Login\\LoginController::login'], [], [['text', '/login']], [], [], []],
    'api_verify_2fa' => [[], ['_controller' => 'App\\Controller\\Api\\Users\\Login\\LoginController::verify2FA'], [], [['text', '/verify-2fa']], [], [], []],
    'password_request_reset' => [[], ['_controller' => 'App\\Controller\\Api\\Users\\PasswordReset\\PasswordResetController::requestReset'], [], [['text', '/api/password/request-reset']], [], [], []],
    'password_reset' => [[], ['_controller' => 'App\\Controller\\Api\\Users\\PasswordReset\\PasswordResetController::resetPassword'], [], [['text', '/api/password/reset']], [], [], []],
    'password_change' => [[], ['_controller' => 'App\\Controller\\Api\\Users\\PasswordReset\\PasswordResetController::changePassword'], [], [['text', '/api/password/change']], [], [], []],
    'api_user_update' => [['id'], ['_controller' => 'App\\Controller\\Api\\Users\\UpdateUsers\\UpdateUsersController::updateUser'], [], [['text', '/update'], ['variable', '/', '[^/]++', 'id', true], ['text', '/api/users']], [], [], []],
    'create_modules' => [[], ['_controller' => 'App\\Controller\\Modules\\CreateModuleController::createMultiple'], [], [['text', '/api/modules/create']], [], [], []],
    'delete_module' => [['id'], ['_controller' => 'App\\Controller\\Modules\\DeleteModuleController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/modules/delete']], [], [], []],
    'list_modules' => [[], ['_controller' => 'App\\Controller\\Modules\\ListModuleController::list'], [], [['text', '/api/modules/get_all/']], [], [], []],
    'get_module' => [['id'], ['_controller' => 'App\\Controller\\Modules\\ListModuleController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/modules/get']], [], [], []],
    'update_module' => [['id'], ['_controller' => 'App\\Controller\\Modules\\UpdateModuleController::update'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/modules/update']], [], [], []],
    'api_create_projects' => [[], ['_controller' => 'App\\Controller\\Projets\\CreateProjetsController::createProjects'], [], [['text', '/api/projects/create']], [], [], []],
    'api_delete_projects' => [['id'], ['_controller' => 'App\\Controller\\Projets\\DeleteProjetsController::deleteProject'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/projects/delete']], [], [], []],
    'api_list_projects' => [[], ['_controller' => 'App\\Controller\\Projets\\GetProjetsController'], [], [['text', '/api/projects/list']], [], [], []],
    'api_get_project_by_id' => [['id'], ['_controller' => 'App\\Controller\\Projets\\GetProjetsController::getProjetById'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/projects']], [], [], []],
    'api_update_projects' => [['id'], ['_controller' => 'App\\Controller\\Projets\\UpdateProjetsController::patchProjet'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/projects/update']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login/app']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'App\Controller\Api\Access\CreateAccessController::createAccess' => [[], ['_controller' => 'App\\Controller\\Api\\Access\\CreateAccessController::createAccess'], [], [['text', '/api/access/create']], [], [], []],
    'App\Controller\Api\Access\DeleteAccessController::deleteAccess' => [[], ['_controller' => 'App\\Controller\\Api\\Access\\DeleteAccessController::deleteAccess'], [], [['text', '/api/access/delete']], [], [], []],
    'App\Controller\Api\Access\DeleteAccessController::deleteAccessById' => [['id'], ['_controller' => 'App\\Controller\\Api\\Access\\DeleteAccessController::deleteAccessById'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/access/delete']], [], [], []],
    'App\Controller\Api\Access\GetAccessController::getAllAccesses' => [[], ['_controller' => 'App\\Controller\\Api\\Access\\GetAccessController::getAllAccesses'], [], [['text', '/api/access/get']], [], [], []],
    'App\Controller\Api\Access\GetAccessController::getAccessById' => [['id'], ['_controller' => 'App\\Controller\\Api\\Access\\GetAccessController::getAccessById'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/access']], [], [], []],
    'App\Controller\Api\Access\UpdateAccessController::updateAccess' => [[], ['_controller' => 'App\\Controller\\Api\\Access\\UpdateAccessController::updateAccess'], [], [['text', '/api/access/update']], [], [], []],
    'App\Controller\Api\Logs\LogsController::getLogs' => [[], ['_controller' => 'App\\Controller\\Api\\Logs\\LogsController::getLogs'], [], [['text', '/api/log']], [], [], []],
    'App\Controller\Api\Roles\CreateRolesController::createOrUpdateRole' => [[], ['_controller' => 'App\\Controller\\Api\\Roles\\CreateRolesController::createOrUpdateRole'], [], [['text', '/api/roles/create']], [], [], []],
    'App\Controller\Api\Roles\DeleteRolesController::deleteRole' => [['id'], ['_controller' => 'App\\Controller\\Api\\Roles\\DeleteRolesController::deleteRole'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/roles/delete']], [], [], []],
    'App\Controller\Api\Roles\GetRolesController::getAllRoles' => [[], ['_controller' => 'App\\Controller\\Api\\Roles\\GetRolesController::getAllRoles'], [], [['text', '/api/roles/list']], [], [], []],
    'App\Controller\Api\Roles\GetRolesController::getRoleById' => [['id'], ['_controller' => 'App\\Controller\\Api\\Roles\\GetRolesController::getRoleById'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/roles']], [], [], []],
    'App\Controller\Api\Roles\UpdateRolesController::updateRole' => [['id'], ['_controller' => 'App\\Controller\\Api\\Roles\\UpdateRolesController::updateRole'], [], [['text', '/update'], ['variable', '/', '[^/]++', 'id', true], ['text', '/api/roles']], [], [], []],
    'App\Controller\Api\Taches\CreateTachesController::createTaches' => [[], ['_controller' => 'App\\Controller\\Api\\Taches\\CreateTachesController::createTaches'], [], [['text', '/api/taches/create']], [], [], []],
    'App\Controller\Api\Taches\DeleteTachesController::deleteTache' => [['id'], ['_controller' => 'App\\Controller\\Api\\Taches\\DeleteTachesController::deleteTache'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/api/taches']], [], [], []],
    'App\Controller\Api\Taches\GetTachesController::getTache' => [['id'], ['_controller' => 'App\\Controller\\Api\\Taches\\GetTachesController::getTache'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/taches']], [], [], []],
    'App\Controller\Api\Taches\GetTachesController::getAllTaches' => [[], ['_controller' => 'App\\Controller\\Api\\Taches\\GetTachesController::getAllTaches'], [], [['text', '/api/taches']], [], [], []],
    'App\Controller\Api\Taches\UpdateTachesController::updateTache' => [['id'], ['_controller' => 'App\\Controller\\Api\\Taches\\UpdateTachesController::updateTache'], [], [['text', '/update'], ['variable', '/', '[^/]++', 'id', true], ['text', '/api/taches']], [], [], []],
    'App\Controller\Api\Users\BulkMailController::sendBulkEmail' => [[], ['_controller' => 'App\\Controller\\Api\\Users\\BulkMailController::sendBulkEmail'], [], [['text', '/api/send-bulk-email']], [], [], []],
    'App\Controller\Api\Users\CreateUsers\CreateUsersController::register' => [[], ['_controller' => 'App\\Controller\\Api\\Users\\CreateUsers\\CreateUsersController::register'], [], [['text', '/api/users/register']], [], [], []],
    'App\Controller\Api\Users\DeleteUsers\DeleteUsersController::deleteUser' => [['id'], ['_controller' => 'App\\Controller\\Api\\Users\\DeleteUsers\\DeleteUsersController::deleteUser'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/api/users']], [], [], []],
    'App\Controller\Api\Users\InfoUsers\InfoUsersController::getUserInfo' => [[], ['_controller' => 'App\\Controller\\Api\\Users\\InfoUsers\\InfoUsersController::getUserInfo'], [], [['text', '/api/users/Info']], [], [], []],
    'App\Controller\Api\Users\InfoUsers\InfoUsersController::OneUser' => [['id'], ['_controller' => 'App\\Controller\\Api\\Users\\InfoUsers\\InfoUsersController::OneUser'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/api/users']], [], [], []],
    'App\Controller\Api\Users\ListUsers\ListUsersController::GetUsers' => [[], ['_controller' => 'App\\Controller\\Api\\Users\\ListUsers\\ListUsersController::GetUsers'], [], [['text', '/api/users/list']], [], [], []],
    'App\Controller\Api\Users\Login\LoginController::login' => [[], ['_controller' => 'App\\Controller\\Api\\Users\\Login\\LoginController::login'], [], [['text', '/login']], [], [], []],
    'App\Controller\Api\Users\Login\LoginController::verify2FA' => [[], ['_controller' => 'App\\Controller\\Api\\Users\\Login\\LoginController::verify2FA'], [], [['text', '/verify-2fa']], [], [], []],
    'App\Controller\Api\Users\Login\LoginController::logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'App\Controller\Api\Users\PasswordReset\PasswordResetController::requestReset' => [[], ['_controller' => 'App\\Controller\\Api\\Users\\PasswordReset\\PasswordResetController::requestReset'], [], [['text', '/api/password/request-reset']], [], [], []],
    'App\Controller\Api\Users\PasswordReset\PasswordResetController::resetPassword' => [[], ['_controller' => 'App\\Controller\\Api\\Users\\PasswordReset\\PasswordResetController::resetPassword'], [], [['text', '/api/password/reset']], [], [], []],
    'App\Controller\Api\Users\PasswordReset\PasswordResetController::changePassword' => [[], ['_controller' => 'App\\Controller\\Api\\Users\\PasswordReset\\PasswordResetController::changePassword'], [], [['text', '/api/password/change']], [], [], []],
    'App\Controller\Api\Users\UpdateUsers\UpdateUsersController::updateUser' => [['id'], ['_controller' => 'App\\Controller\\Api\\Users\\UpdateUsers\\UpdateUsersController::updateUser'], [], [['text', '/update'], ['variable', '/', '[^/]++', 'id', true], ['text', '/api/users']], [], [], []],
    'App\Controller\Modules\CreateModuleController::createMultiple' => [[], ['_controller' => 'App\\Controller\\Modules\\CreateModuleController::createMultiple'], [], [['text', '/api/modules/create']], [], [], []],
    'App\Controller\Modules\DeleteModuleController::delete' => [['id'], ['_controller' => 'App\\Controller\\Modules\\DeleteModuleController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/modules/delete']], [], [], []],
    'App\Controller\Modules\ListModuleController::list' => [[], ['_controller' => 'App\\Controller\\Modules\\ListModuleController::list'], [], [['text', '/api/modules/get_all/']], [], [], []],
    'App\Controller\Modules\ListModuleController::show' => [['id'], ['_controller' => 'App\\Controller\\Modules\\ListModuleController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/modules/get']], [], [], []],
    'App\Controller\Modules\UpdateModuleController::update' => [['id'], ['_controller' => 'App\\Controller\\Modules\\UpdateModuleController::update'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/modules/update']], [], [], []],
    'App\Controller\Projets\CreateProjetsController::createProjects' => [[], ['_controller' => 'App\\Controller\\Projets\\CreateProjetsController::createProjects'], [], [['text', '/api/projects/create']], [], [], []],
    'App\Controller\Projets\DeleteProjetsController::deleteProject' => [['id'], ['_controller' => 'App\\Controller\\Projets\\DeleteProjetsController::deleteProject'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/projects/delete']], [], [], []],
    'App\Controller\Projets\GetProjetsController::__invoke' => [[], ['_controller' => 'App\\Controller\\Projets\\GetProjetsController'], [], [['text', '/api/projects/list']], [], [], []],
    'App\Controller\Projets\GetProjetsController::getProjetById' => [['id'], ['_controller' => 'App\\Controller\\Projets\\GetProjetsController::getProjetById'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/projects']], [], [], []],
    'App\Controller\Projets\UpdateProjetsController::patchProjet' => [['id'], ['_controller' => 'App\\Controller\\Projets\\UpdateProjetsController::patchProjet'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/projects/update']], [], [], []],
    'App\Controller\SecurityController::login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login/app']], [], [], []],
    'App\Controller\SecurityController::logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
];
