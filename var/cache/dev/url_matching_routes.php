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
        '/taxiste/notifications' => [[['_route' => 'taxiste_notifications_ajax', '_controller' => 'App\\Controller\\TaxisteController::notifications'], null, ['GET' => 0], null, false, false, null]],
        '/telegram/set-webhook' => [[['_route' => 'telegram_set_webhook', '_controller' => 'App\\Controller\\TelegramWebhookController::setWebhook'], null, ['GET' => 0], null, false, false, null]],
        '/telegram/webhook-info' => [[['_route' => 'telegram_webhook_info', '_controller' => 'App\\Controller\\TelegramWebhookController::getWebhookInfo'], null, ['GET' => 0], null, false, false, null]],
        '/trajet/ajouter' => [[['_route' => 'trajet_ajouter', '_controller' => 'App\\Controller\\TrajetController::ajouter'], null, null, null, false, false, null]],
        '/trajet/affichage' => [[['_route' => 'trajet_affichage', '_controller' => 'App\\Controller\\TrajetController::affichage'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'app_user', '_controller' => 'App\\Controller\\UserController::index'], null, null, null, false, false, null]],
        '/user/courses' => [[['_route' => 'user_courses', '_controller' => 'App\\Controller\\UserCourseController::index'], null, null, null, true, false, null]],
        '/vehicles/my-vehicle' => [[['_route' => 'my_vehicle', '_controller' => 'App\\Controller\\VehicleController::myVehicle'], null, ['GET' => 0], null, false, false, null]],
        '/vehicles/driver/vehicle/new' => [[['_route' => 'driver_vehicle_new', '_controller' => 'App\\Controller\\VehicleController::driverAddVehicle'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/voice-test' => [[['_route' => 'voice_test', '_controller' => 'App\\Controller\\voiceController::index'], null, null, null, false, false, null]],
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
        '/telegram/webhook' => [[['_route' => 'telegram_webhook', '_controller' => 'App\\Controller\\TelegramWebhookController::webhook'], null, null, null, false, false, null]],
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
                                .'|reponses(*:339)'
                                .'|tts(*:350)'
                            .')'
                            .'|(*:359)'
                        .')'
                        .'|api/tts\\-token/([^/]++)(*:391)'
                    .')'
                    .'|dmin/(?'
                        .'|maintenances/(?'
                            .'|edit/([^/]++)(*:437)'
                            .'|d(?'
                                .'|elete/([^/]++)(*:463)'
                                .'|river/(?'
                                    .'|new/([^/]++)(*:492)'
                                    .'|edit/([^/]++)(*:513)'
                                    .'|([^/]++)(*:529)'
                                .')'
                            .')'
                            .'|maintenance/export/pdf/([^/]++)(*:570)'
                            .'|clear\\-history/([^/]++)(*:601)'
                        .')'
                        .'|reservations/([^/]++)(*:631)'
                        .'|taxi/(?'
                            .'|new/(\\d+)(*:656)'
                            .'|(\\d+)/edit(*:674)'
                            .'|([^/]++)/delete(*:697)'
                        .')'
                        .'|course/([^/]++)/(?'
                            .'|edit(*:729)'
                            .'|delete(*:743)'
                        .')'
                        .'|users/(?'
                            .'|delete/(?'
                                .'|confirm/([^/]++)(*:787)'
                                .'|([^/]++)(*:803)'
                            .')'
                            .'|edit/([^/]++)(*:825)'
                            .'|block/([^/]++)(*:847)'
                            .'|unblock/([^/]++)(*:871)'
                        .')'
                    .')'
                .')'
                .'|/re(?'
                    .'|po(?'
                        .'|nse/(?'
                            .'|avis/([^/]++)(*:913)'
                            .'|new/([^/]++)(*:933)'
                            .'|([^/]++)(?'
                                .'|(*:952)'
                                .'|/(?'
                                    .'|edit(*:968)'
                                    .'|rate(*:980)'
                                .')'
                                .'|(*:989)'
                            .')'
                        .')'
                        .'|rt/(?'
                            .'|qr/([^/]++)(*:1016)'
                            .'|([^/]++)(*:1033)'
                        .')'
                    .')'
                    .'|se(?'
                        .'|rvation/(?'
                            .'|new/([^/]++)(*:1072)'
                            .'|trajet\\-supprime/([^/]++)(*:1106)'
                            .'|success/([^/]++)(*:1131)'
                            .'|cancel/([^/]++)(*:1155)'
                            .'|p(?'
                                .'|ayment/(?'
                                    .'|([^/]++)(*:1186)'
                                    .'|success/([^/]++)(*:1211)'
                                    .'|cancel/([^/]++)(*:1235)'
                                .')'
                                .'|df/([^/]++)(*:1256)'
                            .')'
                        .')'
                        .'|t\\-password/reset/(\\d+)(*:1290)'
                    .')'
                .')'
                .'|/t(?'
                    .'|axiste/(?'
                        .'|course/([^/]++)/(?'
                            .'|accept(*:1341)'
                            .'|refuse(*:1356)'
                            .'|start(*:1370)'
                            .'|finish(*:1385)'
                        .')'
                        .'|taxi/([^/]++)/change\\-status(*:1423)'
                    .')'
                    .'|rajet/(?'
                        .'|modifier/([^/]++)(*:1459)'
                        .'|supprimer/([^/]++)(*:1486)'
                    .')'
                .')'
                .'|/user/(?'
                    .'|course(?'
                        .'|s/([^/]++)/cancel(*:1532)'
                        .'|/([^/]++)/cancel(*:1557)'
                    .')'
                    .'|taxi/([^/]++)/rate(*:1585)'
                .')'
                .'|/vehicles/(?'
                    .'|my\\-vehicle/([^/]++)/edit(*:1633)'
                    .'|([^/]++)/verify(?'
                        .'|\\-page(*:1666)'
                        .'|(*:1675)'
                    .')'
                    .'|edit/([^/]++)(*:1698)'
                    .'|(\\d+)(*:1712)'
                    .'|delete/([^/]++)(*:1736)'
                .')'
                .'|/maintenances/(?'
                    .'|(\\d+)(*:1768)'
                    .'|edit/([^/]++)(*:1790)'
                    .'|delete/([^/]++)(*:1814)'
                    .'|vehicle/([^/]++)(*:1839)'
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
        339 => [[['_route' => 'app_avis_reponses', '_controller' => 'App\\Controller\\AvisController::viewReponses'], ['id'], ['GET' => 0], null, false, false, null]],
        350 => [[['_route' => 'app_avis_tts', '_controller' => 'App\\Controller\\AvisController::tts'], ['id'], ['GET' => 0], null, false, false, null]],
        359 => [[['_route' => 'app_avis_delete', '_controller' => 'App\\Controller\\AvisController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        391 => [[['_route' => 'app_api_tts_token', '_controller' => 'App\\Controller\\AvisController::getTtsToken'], ['id'], ['GET' => 0], null, false, true, null]],
        437 => [[['_route' => 'admin_maintenances_edit', '_controller' => 'App\\Controller\\MaintenanceController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        463 => [[['_route' => 'admin_maintenances_delete', '_controller' => 'App\\Controller\\MaintenanceController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        492 => [[['_route' => 'driver_maintenances_new', '_controller' => 'App\\Controller\\MaintenanceController::driverNew'], ['vehicle_id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        513 => [[['_route' => 'driver_maintenances_edit', '_controller' => 'App\\Controller\\MaintenanceController::driverEdit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        529 => [[['_route' => 'driver_maintenance_show', '_controller' => 'App\\Controller\\MaintenanceController::driverShow'], ['id'], ['GET' => 0], null, false, true, null]],
        570 => [[['_route' => 'maintenance_export_pdf', '_controller' => 'App\\Controller\\MaintenanceController::exportToPdf'], ['id'], ['GET' => 0], null, false, true, null]],
        601 => [[['_route' => 'clear_vehicle_maintenance_history', '_controller' => 'App\\Controller\\MaintenanceController::clearVehicleMaintenanceHistory'], ['vehicle_id'], ['POST' => 0], null, false, true, null]],
        631 => [[['_route' => 'show_reservation', '_controller' => 'App\\Controller\\ReservationController::showReservation'], ['id'], null, null, false, true, null]],
        656 => [[['_route' => 'taxi_new', '_controller' => 'App\\Controller\\TaxiController::new'], ['userId'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        674 => [[['_route' => 'taxi_edit', '_controller' => 'App\\Controller\\TaxiController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        697 => [[['_route' => 'taxi_delete', '_controller' => 'App\\Controller\\TaxiController::delete'], ['id'], null, null, false, false, null]],
        729 => [[['_route' => 'course_edit', '_controller' => 'App\\Controller\\CourseController::edit'], ['id'], null, null, false, false, null]],
        743 => [[['_route' => 'course_delete', '_controller' => 'App\\Controller\\CourseController::delete'], ['id'], null, null, false, false, null]],
        787 => [[['_route' => 'admin_user_confirm_delete', '_controller' => 'App\\Controller\\Admin\\UserManagementController::confirmDelete'], ['id'], null, null, false, true, null]],
        803 => [[['_route' => 'admin_user_perform_delete', '_controller' => 'App\\Controller\\Admin\\UserManagementController::performDelete'], ['id'], ['POST' => 0], null, false, true, null]],
        825 => [[['_route' => 'admin_user_edit', '_controller' => 'App\\Controller\\Admin\\UserManagementController::editUser'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        847 => [[['_route' => 'admin_user_block', '_controller' => 'App\\Controller\\Admin\\UserManagementController::blockUser'], ['id'], ['POST' => 0], null, false, true, null]],
        871 => [[['_route' => 'admin_user_unblock', '_controller' => 'App\\Controller\\Admin\\UserManagementController::unblockUser'], ['id'], ['POST' => 0], null, false, true, null]],
        913 => [[['_route' => 'app_avis_reponsess', '_controller' => 'App\\Controller\\ReponseController::reponsesForAvis'], ['id'], ['GET' => 0], null, false, true, null]],
        933 => [[['_route' => 'app_reponse_new', '_controller' => 'App\\Controller\\ReponseController::new'], ['avisId'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        952 => [[['_route' => 'app_reponse_show', '_controller' => 'App\\Controller\\ReponseController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        968 => [[['_route' => 'app_reponse_edit', '_controller' => 'App\\Controller\\ReponseController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        980 => [[['_route' => 'app_reponse_rate', '_controller' => 'App\\Controller\\ReponseController::rate'], ['id'], ['POST' => 0], null, false, false, null]],
        989 => [[['_route' => 'app_reponse_delete', '_controller' => 'App\\Controller\\ReponseController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1016 => [[['_route' => 'report_qr', '_controller' => 'App\\Controller\\ReportController::qr'], ['userId'], ['GET' => 0], null, false, true, null]],
        1033 => [[['_route' => 'report_pdf', '_controller' => 'App\\Controller\\ReportController::pdf'], ['userId'], ['GET' => 0], null, false, true, null]],
        1072 => [[['_route' => 'reservation_new', '_controller' => 'App\\Controller\\ReservationController::new'], ['trajetId'], null, null, false, true, null]],
        1106 => [[['_route' => 'reservation_trajet_supprime', '_controller' => 'App\\Controller\\ReservationController::showDeletedTrajetDetails'], ['id'], null, null, false, true, null]],
        1131 => [[['_route' => 'reservation_success', '_controller' => 'App\\Controller\\ReservationController::success'], ['id'], null, null, false, true, null]],
        1155 => [[['_route' => 'reservation_cancel', '_controller' => 'App\\Controller\\ReservationController::cancel'], ['id'], null, null, false, true, null]],
        1186 => [[['_route' => 'reservation_payment', '_controller' => 'App\\Controller\\ReservationController::payment'], ['id'], null, null, false, true, null]],
        1211 => [[['_route' => 'reservation_payment_success', '_controller' => 'App\\Controller\\ReservationController::paymentSuccess'], ['id'], null, null, false, true, null]],
        1235 => [[['_route' => 'reservation_payment_cancel', '_controller' => 'App\\Controller\\ReservationController::paymentCancel'], ['id'], null, null, false, true, null]],
        1256 => [[['_route' => 'reservation_pdf', '_controller' => 'App\\Controller\\ReservationController::generatePdf'], ['id'], null, null, false, true, null]],
        1290 => [[['_route' => 'app_reset_password', '_controller' => 'App\\Controller\\Auth\\ResetPasswordController::reset'], ['code'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1341 => [[['_route' => 'taxiste_course_accept', '_controller' => 'App\\Controller\\TaxisteController::acceptCourse'], ['id'], ['POST' => 0], null, false, false, null]],
        1356 => [[['_route' => 'taxiste_course_refuse', '_controller' => 'App\\Controller\\TaxisteController::refuseCourse'], ['id'], ['POST' => 0], null, false, false, null]],
        1370 => [[['_route' => 'taxiste_course_start', '_controller' => 'App\\Controller\\TaxisteController::startCourse'], ['id'], ['POST' => 0], null, false, false, null]],
        1385 => [[['_route' => 'taxiste_course_finish', '_controller' => 'App\\Controller\\TaxisteController::finishCourse'], ['id'], ['POST' => 0], null, false, false, null]],
        1423 => [[['_route' => 'taxiste_taxi_change_status', '_controller' => 'App\\Controller\\TaxisteController::changeTaxiStatus'], ['id'], ['POST' => 0], null, false, false, null]],
        1459 => [[['_route' => 'trajet_modifier', '_controller' => 'App\\Controller\\TrajetController::modifier'], ['id'], null, null, false, true, null]],
        1486 => [[['_route' => 'trajet_supprimer', '_controller' => 'App\\Controller\\TrajetController::supprimer'], ['id'], null, null, false, true, null]],
        1532 => [[['_route' => 'user_course_cancel', '_controller' => 'App\\Controller\\UserCourseController::cancel'], ['id'], ['POST' => 0], null, false, false, null]],
        1557 => [[['_route' => 'course_cancel', '_controller' => 'App\\Controller\\UserCourseController::cancel'], ['id'], null, null, false, false, null]],
        1585 => [[['_route' => 'taxi_rate', '_controller' => 'App\\Controller\\RatingController::rateTaxi'], ['id'], null, null, false, false, null]],
        1633 => [[['_route' => 'my_vehicle_edit', '_controller' => 'App\\Controller\\VehicleController::editMyVehicle'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1666 => [[['_route' => 'vehicle_verify_page', '_controller' => 'App\\Controller\\VehicleController::verifyPage'], ['id'], ['GET' => 0], null, false, false, null]],
        1675 => [[['_route' => 'vehicle_verify', '_controller' => 'App\\Controller\\VehicleController::verifyVehicle'], ['id'], ['POST' => 0], null, false, false, null]],
        1698 => [[['_route' => 'vehicle_edit', '_controller' => 'App\\Controller\\VehicleController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1712 => [[['_route' => 'vehicle_show', '_controller' => 'App\\Controller\\VehicleController::show'], ['id'], null, null, false, true, null]],
        1736 => [[['_route' => 'vehicle_delete', '_controller' => 'App\\Controller\\VehicleController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1768 => [[['_route' => 'maintenance_show', '_controller' => 'App\\Controller\\MaintenanceController::show'], ['id'], null, null, false, true, null]],
        1790 => [[['_route' => 'maintenance_edit', '_controller' => 'App\\Controller\\MaintenanceController::update'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1814 => [[['_route' => 'maintenance_delete', '_controller' => 'App\\Controller\\MaintenanceController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1839 => [
            [['_route' => 'maintenance_by_vehicle', '_controller' => 'App\\Controller\\MaintenanceController::findByVehicleId'], ['vehicleId'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
