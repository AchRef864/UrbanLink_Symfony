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
        '/admin/pdf-generator' => [[['_route' => 'admin_pdf_generator', '_controller' => 'App\\Controller\\Admin\\PdfGeneratorController::index'], null, null, null, false, false, null]],
        '/admin/users/pdf' => [[['_route' => 'admin_users_pdf', '_controller' => 'App\\Controller\\Admin\\UserPdfController::generatePdf'], null, null, null, false, false, null]],
        '/affichage' => [[['_route' => 'app_affichage', '_controller' => 'App\\Controller\\AffichageController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\Auth\\RegistrationController::register'], null, null, null, false, false, null]],
        '/avis' => [[['_route' => 'app_avis_index', '_controller' => 'App\\Controller\\AvisController::index'], null, ['GET' => 0], null, false, false, null]],
        '/avis/new' => [[['_route' => 'app_avis_new', '_controller' => 'App\\Controller\\AvisController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/avis/avisFront' => [[['_route' => 'app_avis_front', '_controller' => 'App\\Controller\\AvisController::indexFront'], null, ['GET' => 0], null, false, false, null]],
        '/avis/avisFront/new' => [[['_route' => 'app_avis_new_front', '_controller' => 'App\\Controller\\AvisController::newFront'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/avis/export/pdf' => [[['_route' => 'app_avis_pdf', '_controller' => 'App\\Controller\\AvisController::exportPdf'], null, ['GET' => 0], null, false, false, null]],
        '/chatbot' => [[['_route' => 'app_chatbot', '_controller' => 'App\\Controller\\ChatbotController::index'], null, null, null, false, false, null]],
        '/chatbot/message' => [[['_route' => 'app_chatbot_message', '_controller' => 'App\\Controller\\ChatbotController::message'], null, null, null, false, false, null]],
        '/course/admin/courses' => [[['_route' => 'admin_courses', '_controller' => 'App\\Controller\\CourseController::listUserCourses'], null, null, null, false, false, null]],
        '/course/taxiste/courses' => [[['_route' => 'taxiste_courses', '_controller' => 'App\\Controller\\CourseController::listTaxisteCourses'], null, null, null, false, false, null]],
        '/course/admin/course/zones' => [[['_route' => 'course_zones_map', '_controller' => 'App\\Controller\\CourseController::zonesMap'], null, null, null, false, false, null]],
        '/hello' => [[['_route' => 'app_hello', '_controller' => 'App\\Controller\\HelloController::index'], null, null, null, false, false, null]],
        '/admin/maintenances' => [[['_route' => 'admin_maintenances_index', '_controller' => 'App\\Controller\\MaintenanceController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/maintenances/new' => [[['_route' => 'admin_maintenances_new', '_controller' => 'App\\Controller\\MaintenanceController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/maintenances/driver' => [[['_route' => 'driver_maintenances_index', '_controller' => 'App\\Controller\\MaintenanceController::driverIndex'], null, ['GET' => 0], null, false, false, null]],
        '/profile' => [
            [['_route' => 'app_profile', '_controller' => 'App\\Controller\\ProfileController::index'], null, null, null, false, false, null],
            [['_route' => 'client_profile', '_controller' => 'App\\Controller\\ProfileController::index'], null, null, null, false, false, null],
        ],
        '/profile/myprofile' => [
            [['_route' => 'app_profile_myprofile', '_controller' => 'App\\Controller\\ProfileController::myProfile'], null, null, null, false, false, null],
            [['_route' => 'my_profile', '_controller' => 'App\\Controller\\ProfileController::myProfile'], null, null, null, false, false, null],
        ],
        '/profile/edit' => [[['_route' => 'app_profile_edit', '_controller' => 'App\\Controller\\ProfileController::edit'], null, null, null, false, false, null]],
        '/profile/delete' => [[['_route' => 'app_profile_delete', '_controller' => 'App\\Controller\\ProfileController::delete'], null, ['POST' => 0], null, false, false, null]],
        '/profile/change-password' => [[['_route' => 'app_change_password', '_controller' => 'App\\Controller\\ProfileController::changePassword'], null, null, null, false, false, null]],
        '/reponse' => [[['_route' => 'app_reponse_index', '_controller' => 'App\\Controller\\ReponseController::index'], null, ['GET' => 0], null, false, false, null]],
        '/reponse/stats/global' => [[['_route' => 'app_reponse_global_stats', '_controller' => 'App\\Controller\\ReponseController::globalStats'], null, ['GET' => 0], null, false, false, null]],
        '/reservation' => [[['_route' => 'app_reservation', '_controller' => 'App\\Controller\\ReservationController::index'], null, null, null, false, false, null]],
        '/reservation/affichage' => [[['_route' => 'reservation_affichage', '_controller' => 'App\\Controller\\ReservationController::affichage'], null, null, null, false, false, null]],
        '/reservation/list' => [[['_route' => 'reservation_list', '_controller' => 'App\\Controller\\ReservationController::list'], null, null, null, false, false, null]],
        '/admin/reservations' => [[['_route' => 'admin_reservations', '_controller' => 'App\\Controller\\ReservationController::indexAdmin'], null, null, null, false, false, null]],
        '/admin/statistics' => [[['_route' => 'admin_statistics', '_controller' => 'App\\Controller\\StatisticsController::index'], null, null, null, false, false, null]],
        '/taxi/dashboajrd' => [[['_route' => 'taxi_dashboafrd', '_controller' => 'App\\Controller\\Taxi\\DashboardController::index'], null, null, null, false, false, null]],
        '/admin/taxi/users' => [[['_route' => 'taxi_user_list', '_controller' => 'App\\Controller\\TaxiController::userList'], null, null, null, false, false, null]],
        '/admin/taxi/user/taxis' => [[['_route' => 'user_taxis', '_controller' => 'App\\Controller\\TaxiController::listAvailableTaxis'], null, null, null, false, false, null]],
        '/admin/taxi/admin/taxi/get-models' => [[['_route' => 'get_models', '_controller' => 'App\\Controller\\TaxiController::getModels'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/taxi/taxis/nearby' => [[['_route' => 'get_nearby_taxis', '_controller' => 'App\\Controller\\TaxiController::getNearbyTaxis'], null, null, null, false, false, null]],
        '/admin/taxiste' => [[['_route' => 'taxiste_liste', '_controller' => 'App\\Controller\\TaxisteController::taxiste'], null, null, null, false, false, null]],
        '/trajet/ajouter' => [[['_route' => 'trajet_ajouter', '_controller' => 'App\\Controller\\TrajetController::ajouter'], null, null, null, false, false, null]],
        '/trajet/affichage' => [[['_route' => 'trajet_affichage', '_controller' => 'App\\Controller\\TrajetController::affichage'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'app_user', '_controller' => 'App\\Controller\\UserController::index'], null, null, null, false, false, null]],
        '/user/courses' => [[['_route' => 'user_courses', '_controller' => 'App\\Controller\\UserCourseController::index'], null, null, null, true, false, null]],
        '/vehicles/my-vehicle' => [[['_route' => 'my_vehicle', '_controller' => 'App\\Controller\\VehicleController::myVehicle'], null, ['GET' => 0], null, false, false, null]],
        '/vehicles/driver/vehicle/new' => [[['_route' => 'driver_vehicle_new', '_controller' => 'App\\Controller\\VehicleController::driverAddVehicle'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'app_home2', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/home' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\DashboardController::home'], null, null, null, false, false, null]],
        '/login' => [
            [['_route' => 'app_login', '_controller' => 'App\\Controller\\Auth\\LoginController::index'], null, null, null, false, false, null],
            [['_route' => 'hwi_oauth_connect', '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\LoginController::connectAction'], null, ['GET' => 0], null, true, false, null],
        ],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'back_office_dashboard', '_controller' => 'App\\Controller\\BackOfficeController::dashboard'], null, null, null, false, false, null]],
        '/admin/taxi' => [[['_route' => 'taxi_index', '_controller' => 'App\\Controller\\TaxiController::index'], null, null, null, false, false, null]],
        '/admin/course' => [[['_route' => 'course_index', '_controller' => 'App\\Controller\\CourseController::index'], null, null, null, false, false, null]],
        '/user/course' => [[['_route' => 'course_show', '_controller' => 'App\\Controller\\UserCourseController::index'], null, null, null, false, false, null]],
        '/course/new' => [[['_route' => 'course_new', '_controller' => 'App\\Controller\\CourseController::new'], null, null, null, false, false, null]],
        '/user/course/new' => [[['_route' => 'user_course_new', '_controller' => 'App\\Controller\\UserCourseController::new'], null, null, null, false, false, null]],
        '/dashboard' => [[['_route' => 'app_dashboard', '_controller' => 'App\\Controller\\DashboardController::index'], null, null, null, false, false, null]],
        '/admin/dashboard' => [[['_route' => 'admin_dashboard', '_controller' => 'App\\Controller\\DashboardController::adminDashboard'], null, null, null, false, false, null]],
        '/admin/users/delete' => [[['_route' => 'admin_user_delete', '_controller' => 'App\\Controller\\Admin\\UserManagementController::deleteUsers'], null, null, null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\Auth\\ResetPasswordController::request'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reset-password/verify' => [[['_route' => 'app_verify_code', '_controller' => 'App\\Controller\\Auth\\ResetPasswordController::verifyCode'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/test/email' => [[['_route' => 'test_email', '_controller' => 'App\\Controller\\TestEmailController::testEmail'], null, null, null, false, false, null]],
        '/admin/users/manage' => [[['_route' => 'admin_user_manage', '_controller' => 'App\\Controller\\Admin\\UserManagementController::manageUsers'], null, null, null, false, false, null]],
        '/driver/dashboard' => [[['_route' => 'driver_dashboard', '_controller' => 'App\\Controller\\Driver\\DashboardController::index'], null, null, null, false, false, null]],
        '/taxi/dashboard' => [[['_route' => 'taxi_dashboard', '_controller' => 'App\\Controller\\TaxisteController::dashboard'], null, null, null, false, false, null]],
        '/client/dashboard' => [[['_route' => 'client_dashboard', '_controller' => 'App\\Controller\\Client\\DashboardController::index'], null, null, null, false, false, null]],
        '/taxiste/dashboard' => [[['_route' => 'taxiste_dashboard', '_controller' => 'App\\Controller\\TaxisteController::dashboard'], null, null, null, false, false, null]],
        '/admin/course/zones' => [[['_route' => 'course_map', '_controller' => 'App\\Controller\\CourseController::zonesMap'], null, null, null, false, false, null]],
        '/admin/course/stats' => [[['_route' => 'course_stats', '_controller' => 'App\\Controller\\CourseController::stats'], null, null, null, false, false, null]],
        '/urban-talk' => [[['_route' => 'urban_talk', '_controller' => 'App\\Controller\\UrbanTalkController::chat'], null, ['POST' => 0], null, false, false, null]],
        '/vehicles' => [[['_route' => 'vehicle_index', '_controller' => 'App\\Controller\\VehicleController::index'], null, null, null, false, false, null]],
        '/vehicles/new' => [[['_route' => 'vehicle_new', '_controller' => 'App\\Controller\\VehicleController::new'], null, null, null, false, false, null]],
        '/maintenances' => [[['_route' => 'maintenance_index', '_controller' => 'App\\Controller\\MaintenanceController::index'], null, null, null, false, false, null]],
        '/maintenances/new' => [[['_route' => 'maintenance_new', '_controller' => 'App\\Controller\\MaintenanceController::create'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/oauth/check-google' => [[['_route' => 'oauth_check_google', '_controller' => 'App\\Controller\\SecurityController::checkGoogleCallback'], null, ['GET' => 0], null, false, false, null]],
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
                .'|/connect/(?'
                    .'|([^/]++)(*:222)'
                    .'|service/([^/]++)(*:246)'
                    .'|registration/([^/]++)(*:275)'
                .')'
                .'|/a(?'
                    .'|vis/(?'
                        .'|([^/]++)(?'
                            .'|(*:307)'
                            .'|/(?'
                                .'|edit(*:323)'
                                .'|tts(*:334)'
                            .')'
                            .'|(*:343)'
                        .')'
                        .'|api/tts\\-token/([^/]++)(*:375)'
                    .')'
                    .'|dmin/(?'
                        .'|maintenances/(?'
                            .'|edit/([^/]++)(*:421)'
                            .'|d(?'
                                .'|elete/([^/]++)(*:447)'
                                .'|river/(?'
                                    .'|new/([^/]++)(*:476)'
                                    .'|edit/([^/]++)(*:497)'
                                    .'|([^/]++)(*:513)'
                                .')'
                            .')'
                            .'|maintenance/export/pdf/([^/]++)(*:554)'
                            .'|clear\\-history/([^/]++)(*:585)'
                        .')'
                        .'|reservations/([^/]++)(*:615)'
                        .'|taxi/(?'
                            .'|new/(\\d+)(*:640)'
                            .'|(\\d+)/edit(*:658)'
                            .'|([^/]++)/delete(*:681)'
                        .')'
                        .'|course/([^/]++)/(?'
                            .'|edit(*:713)'
                            .'|delete(*:727)'
                        .')'
                        .'|users/(?'
                            .'|delete/(?'
                                .'|confirm/([^/]++)(*:771)'
                                .'|([^/]++)(*:787)'
                            .')'
                            .'|edit/([^/]++)(*:809)'
                            .'|block/([^/]++)(*:831)'
                            .'|unblock/([^/]++)(*:855)'
                        .')'
                    .')'
                .')'
                .'|/re(?'
                    .'|ponse/(?'
                        .'|avis/([^/]++)(*:894)'
                        .'|new/([^/]++)(*:914)'
                        .'|([^/]++)(?'
                            .'|(*:933)'
                            .'|/(?'
                                .'|edit(*:949)'
                                .'|rate(*:961)'
                            .')'
                            .'|(*:970)'
                        .')'
                    .')'
                    .'|se(?'
                        .'|rvation/(?'
                            .'|new/([^/]++)(*:1008)'
                            .'|trajet\\-supprime/([^/]++)(*:1042)'
                            .'|success/([^/]++)(*:1067)'
                            .'|cancel/([^/]++)(*:1091)'
                            .'|p(?'
                                .'|ayment/(?'
                                    .'|([^/]++)(*:1122)'
                                    .'|success/([^/]++)(*:1147)'
                                    .'|cancel/([^/]++)(*:1171)'
                                .')'
                                .'|df/([^/]++)(*:1192)'
                            .')'
                        .')'
                        .'|t\\-password/reset/(\\d+)(*:1226)'
                    .')'
                .')'
                .'|/t(?'
                    .'|axiste/(?'
                        .'|course/([^/]++)/(?'
                            .'|accept(*:1277)'
                            .'|refuse(*:1292)'
                            .'|start(*:1306)'
                            .'|finish(*:1321)'
                        .')'
                        .'|taxi/([^/]++)/change\\-status(*:1359)'
                    .')'
                    .'|rajet/(?'
                        .'|modifier/([^/]++)(*:1395)'
                        .'|supprimer/([^/]++)(*:1422)'
                    .')'
                .')'
                .'|/user/(?'
                    .'|course(?'
                        .'|s/([^/]++)/cancel(*:1468)'
                        .'|/([^/]++)/cancel(*:1493)'
                    .')'
                    .'|taxi/([^/]++)/rate(*:1521)'
                .')'
                .'|/vehicles/(?'
                    .'|my\\-vehicle/([^/]++)/edit(*:1569)'
                    .'|([^/]++)/verify(?'
                        .'|\\-page(*:1602)'
                        .'|(*:1611)'
                    .')'
                    .'|edit/([^/]++)(*:1634)'
                    .'|(\\d+)(*:1648)'
                    .'|delete/([^/]++)(*:1672)'
                .')'
                .'|/maintenances/(?'
                    .'|(\\d+)(*:1704)'
                    .'|edit/([^/]++)(*:1726)'
                    .'|delete/([^/]++)(*:1750)'
                    .'|vehicle/([^/]++)(*:1775)'
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
        222 => [[['_route' => 'hwi_oauth_service_redirect', '_controller' => ['HWI\\Bundle\\OAuthBundle\\Controller\\RedirectToServiceController', 'redirectToServiceAction']], ['service'], ['GET' => 0], null, false, true, null]],
        246 => [[['_route' => 'hwi_oauth_connect_service', '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\Connect\\ConnectController::connectServiceAction'], ['service'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        275 => [[['_route' => 'hwi_oauth_connect_registration', '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\Connect\\RegisterController::registrationAction'], ['key'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        307 => [[['_route' => 'app_avis_show', '_controller' => 'App\\Controller\\AvisController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        323 => [[['_route' => 'app_avis_edit', '_controller' => 'App\\Controller\\AvisController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        334 => [[['_route' => 'app_avis_tts', '_controller' => 'App\\Controller\\AvisController::tts'], ['id'], ['GET' => 0], null, false, false, null]],
        343 => [[['_route' => 'app_avis_delete', '_controller' => 'App\\Controller\\AvisController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        375 => [[['_route' => 'app_api_tts_token', '_controller' => 'App\\Controller\\AvisController::getTtsToken'], ['id'], ['GET' => 0], null, false, true, null]],
        421 => [[['_route' => 'admin_maintenances_edit', '_controller' => 'App\\Controller\\MaintenanceController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        447 => [[['_route' => 'admin_maintenances_delete', '_controller' => 'App\\Controller\\MaintenanceController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        476 => [[['_route' => 'driver_maintenances_new', '_controller' => 'App\\Controller\\MaintenanceController::driverNew'], ['vehicle_id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        497 => [[['_route' => 'driver_maintenances_edit', '_controller' => 'App\\Controller\\MaintenanceController::driverEdit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        513 => [[['_route' => 'driver_maintenance_show', '_controller' => 'App\\Controller\\MaintenanceController::driverShow'], ['id'], ['GET' => 0], null, false, true, null]],
        554 => [[['_route' => 'maintenance_export_pdf', '_controller' => 'App\\Controller\\MaintenanceController::exportToPdf'], ['id'], ['GET' => 0], null, false, true, null]],
        585 => [[['_route' => 'clear_vehicle_maintenance_history', '_controller' => 'App\\Controller\\MaintenanceController::clearVehicleMaintenanceHistory'], ['vehicle_id'], ['POST' => 0], null, false, true, null]],
        615 => [[['_route' => 'show_reservation', '_controller' => 'App\\Controller\\ReservationController::showReservation'], ['id'], null, null, false, true, null]],
        640 => [[['_route' => 'taxi_new', '_controller' => 'App\\Controller\\TaxiController::new'], ['userId'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        658 => [[['_route' => 'taxi_edit', '_controller' => 'App\\Controller\\TaxiController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        681 => [[['_route' => 'taxi_delete', '_controller' => 'App\\Controller\\TaxiController::delete'], ['id'], null, null, false, false, null]],
        713 => [[['_route' => 'course_edit', '_controller' => 'App\\Controller\\CourseController::edit'], ['id'], null, null, false, false, null]],
        727 => [[['_route' => 'course_delete', '_controller' => 'App\\Controller\\CourseController::delete'], ['id'], null, null, false, false, null]],
        771 => [[['_route' => 'admin_user_confirm_delete', '_controller' => 'App\\Controller\\Admin\\UserManagementController::confirmDelete'], ['id'], null, null, false, true, null]],
        787 => [[['_route' => 'admin_user_perform_delete', '_controller' => 'App\\Controller\\Admin\\UserManagementController::performDelete'], ['id'], ['POST' => 0], null, false, true, null]],
        809 => [[['_route' => 'admin_user_edit', '_controller' => 'App\\Controller\\Admin\\UserManagementController::editUser'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        831 => [[['_route' => 'admin_user_block', '_controller' => 'App\\Controller\\Admin\\UserManagementController::blockUser'], ['id'], ['POST' => 0], null, false, true, null]],
        855 => [[['_route' => 'admin_user_unblock', '_controller' => 'App\\Controller\\Admin\\UserManagementController::unblockUser'], ['id'], ['POST' => 0], null, false, true, null]],
        894 => [[['_route' => 'app_avis_reponses', '_controller' => 'App\\Controller\\ReponseController::reponsesForAvis'], ['id'], ['GET' => 0], null, false, true, null]],
        914 => [[['_route' => 'app_reponse_new', '_controller' => 'App\\Controller\\ReponseController::new'], ['avisId'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        933 => [[['_route' => 'app_reponse_show', '_controller' => 'App\\Controller\\ReponseController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        949 => [[['_route' => 'app_reponse_edit', '_controller' => 'App\\Controller\\ReponseController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        961 => [[['_route' => 'app_reponse_rate', '_controller' => 'App\\Controller\\ReponseController::rate'], ['id'], ['POST' => 0], null, false, false, null]],
        970 => [[['_route' => 'app_reponse_delete', '_controller' => 'App\\Controller\\ReponseController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1008 => [[['_route' => 'reservation_new', '_controller' => 'App\\Controller\\ReservationController::new'], ['trajetId'], null, null, false, true, null]],
        1042 => [[['_route' => 'reservation_trajet_supprime', '_controller' => 'App\\Controller\\ReservationController::showDeletedTrajetDetails'], ['id'], null, null, false, true, null]],
        1067 => [[['_route' => 'reservation_success', '_controller' => 'App\\Controller\\ReservationController::success'], ['id'], null, null, false, true, null]],
        1091 => [[['_route' => 'reservation_cancel', '_controller' => 'App\\Controller\\ReservationController::cancel'], ['id'], null, null, false, true, null]],
        1122 => [[['_route' => 'reservation_payment', '_controller' => 'App\\Controller\\ReservationController::payment'], ['id'], null, null, false, true, null]],
        1147 => [[['_route' => 'reservation_payment_success', '_controller' => 'App\\Controller\\ReservationController::paymentSuccess'], ['id'], null, null, false, true, null]],
        1171 => [[['_route' => 'reservation_payment_cancel', '_controller' => 'App\\Controller\\ReservationController::paymentCancel'], ['id'], null, null, false, true, null]],
        1192 => [[['_route' => 'reservation_pdf', '_controller' => 'App\\Controller\\ReservationController::generatePdf'], ['id'], null, null, false, true, null]],
        1226 => [[['_route' => 'app_reset_password', '_controller' => 'App\\Controller\\Auth\\ResetPasswordController::reset'], ['code'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1277 => [[['_route' => 'taxiste_course_accept', '_controller' => 'App\\Controller\\TaxisteController::acceptCourse'], ['id'], ['POST' => 0], null, false, false, null]],
        1292 => [[['_route' => 'taxiste_course_refuse', '_controller' => 'App\\Controller\\TaxisteController::refuseCourse'], ['id'], ['POST' => 0], null, false, false, null]],
        1306 => [[['_route' => 'taxiste_course_start', '_controller' => 'App\\Controller\\TaxisteController::startCourse'], ['id'], ['POST' => 0], null, false, false, null]],
        1321 => [[['_route' => 'taxiste_course_finish', '_controller' => 'App\\Controller\\TaxisteController::finishCourse'], ['id'], ['POST' => 0], null, false, false, null]],
        1359 => [[['_route' => 'taxiste_taxi_change_status', '_controller' => 'App\\Controller\\TaxisteController::changeTaxiStatus'], ['id'], ['POST' => 0], null, false, false, null]],
        1395 => [[['_route' => 'trajet_modifier', '_controller' => 'App\\Controller\\TrajetController::modifier'], ['id'], null, null, false, true, null]],
        1422 => [[['_route' => 'trajet_supprimer', '_controller' => 'App\\Controller\\TrajetController::supprimer'], ['id'], null, null, false, true, null]],
        1468 => [[['_route' => 'user_course_cancel', '_controller' => 'App\\Controller\\UserCourseController::cancel'], ['id'], ['POST' => 0], null, false, false, null]],
        1493 => [[['_route' => 'course_cancel', '_controller' => 'App\\Controller\\UserCourseController::cancel'], ['id'], null, null, false, false, null]],
        1521 => [[['_route' => 'taxi_rate', '_controller' => 'App\\Controller\\RatingController::rateTaxi'], ['id'], null, null, false, false, null]],
        1569 => [[['_route' => 'my_vehicle_edit', '_controller' => 'App\\Controller\\VehicleController::editMyVehicle'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1602 => [[['_route' => 'vehicle_verify_page', '_controller' => 'App\\Controller\\VehicleController::verifyPage'], ['id'], ['GET' => 0], null, false, false, null]],
        1611 => [[['_route' => 'vehicle_verify', '_controller' => 'App\\Controller\\VehicleController::verifyVehicle'], ['id'], ['POST' => 0], null, false, false, null]],
        1634 => [[['_route' => 'vehicle_edit', '_controller' => 'App\\Controller\\VehicleController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1648 => [[['_route' => 'vehicle_show', '_controller' => 'App\\Controller\\VehicleController::show'], ['id'], null, null, false, true, null]],
        1672 => [[['_route' => 'vehicle_delete', '_controller' => 'App\\Controller\\VehicleController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1704 => [[['_route' => 'maintenance_show', '_controller' => 'App\\Controller\\MaintenanceController::show'], ['id'], null, null, false, true, null]],
        1726 => [[['_route' => 'maintenance_edit', '_controller' => 'App\\Controller\\MaintenanceController::update'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1750 => [[['_route' => 'maintenance_delete', '_controller' => 'App\\Controller\\MaintenanceController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1775 => [
            [['_route' => 'maintenance_by_vehicle', '_controller' => 'App\\Controller\\MaintenanceController::findByVehicleId'], ['vehicleId'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
