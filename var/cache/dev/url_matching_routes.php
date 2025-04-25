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
        '/chatbot' => [[['_route' => 'app_chatbot', '_controller' => 'App\\Controller\\ChatbotController::index'], null, null, null, false, false, null]],
        '/chatbot/message' => [[['_route' => 'app_chatbot_message', '_controller' => 'App\\Controller\\ChatbotController::message'], null, null, null, false, false, null]],
        '/course/admin/courses' => [[['_route' => 'admin_courses', '_controller' => 'App\\Controller\\CourseController::listUserCourses'], null, null, null, false, false, null]],
        '/course/taxiste/courses' => [[['_route' => 'taxiste_courses', '_controller' => 'App\\Controller\\CourseController::listTaxisteCourses'], null, null, null, false, false, null]],
        '/course/admin/course/zones' => [[['_route' => 'course_zones_map', '_controller' => 'App\\Controller\\CourseController::zonesMap'], null, null, null, false, false, null]],
        '/hello' => [[['_route' => 'app_hello', '_controller' => 'App\\Controller\\HelloController::index'], null, null, null, false, false, null]],
        '/admin/maintenances' => [
            [['_route' => 'admin_maintenances_index', '_controller' => 'App\\Controller\\MaintenanceController::index'], null, ['GET' => 0], null, true, false, null],
            [['_route' => 'maintenance_index', '_controller' => 'App\\Controller\\MaintenanceController::index'], null, null, null, false, false, null],
        ],
        '/admin/maintenances/new' => [
            [['_route' => 'admin_maintenances_new', '_controller' => 'App\\Controller\\MaintenanceController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null],
            [['_route' => 'maintenance_new', '_controller' => 'App\\Controller\\MaintenanceController::create'], null, ['GET' => 0, 'POST' => 1], null, false, false, null],
        ],
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
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\Auth\\LoginController::index'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'back_office_dashboard', '_controller' => 'App\\Controller\\BackOfficeController::dashboard'], null, null, null, false, false, null]],
        '/admin/taxi' => [[['_route' => 'taxi_index', '_controller' => 'App\\Controller\\TaxiController::index'], null, null, null, false, false, null]],
        '/admin/course' => [[['_route' => 'course_index', '_controller' => 'App\\Controller\\CourseController::index'], null, null, null, false, false, null]],
        '/user/course' => [[['_route' => 'course_show', '_controller' => 'App\\Controller\\UserCourseController::index'], null, null, null, false, false, null]],
        '/course/new' => [[['_route' => 'course_new', '_controller' => 'App\\Controller\\CourseController::new'], null, null, null, false, false, null]],
        '/user/course/new' => [[['_route' => 'user_course_new', '_controller' => 'App\\Controller\\UserCourseController::new'], null, null, null, false, false, null]],
        '/dashboard' => [[['_route' => 'app_dashboard', '_controller' => 'App\\Controller\\DashboardController::index'], null, null, null, false, false, null]],
        '/admin/dashboard' => [[['_route' => 'admin_dashboard', '_controller' => 'App\\Controller\\DashboardController::adminDashboard'], null, null, null, false, false, null]],
        '/home' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\DashboardController::home'], null, null, null, false, false, null]],
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
        '/admin/vehicles' => [[['_route' => 'vehicle_index', '_controller' => 'App\\Controller\\VehicleController::index'], null, null, null, false, false, null]],
        '/admin/vehicles/new' => [[['_route' => 'vehicle_new', '_controller' => 'App\\Controller\\VehicleController::new'], null, null, null, false, false, null]],
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
                    .'|vis/([^/]++)(?'
                        .'|(*:222)'
                        .'|/(?'
                            .'|edit(*:238)'
                            .'|reponses(*:254)'
                        .')'
                        .'|(*:263)'
                    .')'
                    .'|dmin/(?'
                        .'|maintenances/(?'
                            .'|edit/([^/]++)(*:309)'
                            .'|delete/([^/]++)(*:332)'
                            .'|maintenance/export/pdf/([^/]++)(*:371)'
                            .'|(\\d+)(*:384)'
                            .'|edit/([^/]++)(*:405)'
                            .'|delete/([^/]++)(*:428)'
                            .'|vehicle/([^/]++)(*:452)'
                        .')'
                        .'|reservations/([^/]++)(*:482)'
                        .'|taxi/(?'
                            .'|new/(\\d+)(*:507)'
                            .'|(\\d+)/edit(*:525)'
                            .'|([^/]++)/delete(*:548)'
                        .')'
                        .'|course/([^/]++)/(?'
                            .'|edit(*:580)'
                            .'|delete(*:594)'
                        .')'
                        .'|users/(?'
                            .'|delete/(?'
                                .'|confirm/([^/]++)(*:638)'
                                .'|([^/]++)(*:654)'
                            .')'
                            .'|edit/([^/]++)(*:676)'
                            .'|block/([^/]++)(*:698)'
                            .'|unblock/([^/]++)(*:722)'
                        .')'
                        .'|vehicles/(?'
                            .'|edit/([^/]++)(*:756)'
                            .'|(\\d+)(*:769)'
                            .'|delete/([^/]++)(*:792)'
                        .')'
                    .')'
                .')'
                .'|/re(?'
                    .'|ponse/(?'
                        .'|avis/([^/]++)(*:831)'
                        .'|new/([^/]++)(*:851)'
                        .'|([^/]++)(?'
                            .'|(*:870)'
                            .'|/edit(*:883)'
                            .'|(*:891)'
                        .')'
                    .')'
                    .'|se(?'
                        .'|rvation/(?'
                            .'|new/([^/]++)(*:929)'
                            .'|trajet\\-supprime/([^/]++)(*:962)'
                            .'|success/([^/]++)(*:986)'
                            .'|cancel/([^/]++)(*:1009)'
                            .'|p(?'
                                .'|ayment/(?'
                                    .'|([^/]++)(*:1040)'
                                    .'|success/([^/]++)(*:1065)'
                                    .'|cancel/([^/]++)(*:1089)'
                                .')'
                                .'|df/([^/]++)(*:1110)'
                            .')'
                        .')'
                        .'|t\\-password/reset/(\\d+)(*:1144)'
                    .')'
                .')'
                .'|/t(?'
                    .'|axiste/(?'
                        .'|course/([^/]++)/(?'
                            .'|accept(*:1195)'
                            .'|refuse(*:1210)'
                            .'|start(*:1224)'
                            .'|finish(*:1239)'
                        .')'
                        .'|taxi/([^/]++)/change\\-status(*:1277)'
                    .')'
                    .'|rajet/(?'
                        .'|modifier/([^/]++)(*:1313)'
                        .'|supprimer/([^/]++)(*:1340)'
                    .')'
                .')'
                .'|/user/(?'
                    .'|course(?'
                        .'|s/([^/]++)/cancel(*:1386)'
                        .'|/([^/]++)/cancel(*:1411)'
                    .')'
                    .'|taxi/([^/]++)/rate(*:1439)'
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
        222 => [[['_route' => 'app_avis_show', '_controller' => 'App\\Controller\\AvisController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        238 => [[['_route' => 'app_avis_edit', '_controller' => 'App\\Controller\\AvisController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        254 => [[['_route' => 'app_avis_reponses', '_controller' => 'App\\Controller\\AvisController::viewReponses'], ['id'], ['GET' => 0], null, false, false, null]],
        263 => [[['_route' => 'app_avis_delete', '_controller' => 'App\\Controller\\AvisController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        309 => [[['_route' => 'admin_maintenances_edit', '_controller' => 'App\\Controller\\MaintenanceController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        332 => [[['_route' => 'admin_maintenances_delete', '_controller' => 'App\\Controller\\MaintenanceController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        371 => [[['_route' => 'maintenance_export_pdf', '_controller' => 'App\\Controller\\MaintenanceController::exportToPdf'], ['id'], ['GET' => 0], null, false, true, null]],
        384 => [[['_route' => 'maintenance_show', '_controller' => 'App\\Controller\\MaintenanceController::show'], ['id'], null, null, false, true, null]],
        405 => [[['_route' => 'maintenance_edit', '_controller' => 'App\\Controller\\MaintenanceController::update'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        428 => [[['_route' => 'maintenance_delete', '_controller' => 'App\\Controller\\MaintenanceController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        452 => [[['_route' => 'maintenance_by_vehicle', '_controller' => 'App\\Controller\\MaintenanceController::findByVehicleId'], ['vehicleId'], null, null, false, true, null]],
        482 => [[['_route' => 'show_reservation', '_controller' => 'App\\Controller\\ReservationController::showReservation'], ['id'], null, null, false, true, null]],
        507 => [[['_route' => 'taxi_new', '_controller' => 'App\\Controller\\TaxiController::new'], ['userId'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        525 => [[['_route' => 'taxi_edit', '_controller' => 'App\\Controller\\TaxiController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        548 => [[['_route' => 'taxi_delete', '_controller' => 'App\\Controller\\TaxiController::delete'], ['id'], null, null, false, false, null]],
        580 => [[['_route' => 'course_edit', '_controller' => 'App\\Controller\\CourseController::edit'], ['id'], null, null, false, false, null]],
        594 => [[['_route' => 'course_delete', '_controller' => 'App\\Controller\\CourseController::delete'], ['id'], null, null, false, false, null]],
        638 => [[['_route' => 'admin_user_confirm_delete', '_controller' => 'App\\Controller\\Admin\\UserManagementController::confirmDelete'], ['id'], null, null, false, true, null]],
        654 => [[['_route' => 'admin_user_perform_delete', '_controller' => 'App\\Controller\\Admin\\UserManagementController::performDelete'], ['id'], ['POST' => 0], null, false, true, null]],
        676 => [[['_route' => 'admin_user_edit', '_controller' => 'App\\Controller\\Admin\\UserManagementController::editUser'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        698 => [[['_route' => 'admin_user_block', '_controller' => 'App\\Controller\\Admin\\UserManagementController::blockUser'], ['id'], ['POST' => 0], null, false, true, null]],
        722 => [[['_route' => 'admin_user_unblock', '_controller' => 'App\\Controller\\Admin\\UserManagementController::unblockUser'], ['id'], ['POST' => 0], null, false, true, null]],
        756 => [[['_route' => 'vehicle_edit', '_controller' => 'App\\Controller\\VehicleController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        769 => [[['_route' => 'vehicle_show', '_controller' => 'App\\Controller\\VehicleController::show'], ['id'], null, null, false, true, null]],
        792 => [[['_route' => 'vehicle_delete', '_controller' => 'App\\Controller\\VehicleController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        831 => [[['_route' => 'app_avis_reponsess', '_controller' => 'App\\Controller\\ReponseController::reponsesForAvis'], ['id'], ['GET' => 0], null, false, true, null]],
        851 => [[['_route' => 'app_reponse_new', '_controller' => 'App\\Controller\\ReponseController::new'], ['avisId'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        870 => [[['_route' => 'app_reponse_show', '_controller' => 'App\\Controller\\ReponseController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        883 => [[['_route' => 'app_reponse_edit', '_controller' => 'App\\Controller\\ReponseController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        891 => [[['_route' => 'app_reponse_delete', '_controller' => 'App\\Controller\\ReponseController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        929 => [[['_route' => 'reservation_new', '_controller' => 'App\\Controller\\ReservationController::new'], ['trajetId'], null, null, false, true, null]],
        962 => [[['_route' => 'reservation_trajet_supprime', '_controller' => 'App\\Controller\\ReservationController::showDeletedTrajetDetails'], ['id'], null, null, false, true, null]],
        986 => [[['_route' => 'reservation_success', '_controller' => 'App\\Controller\\ReservationController::success'], ['id'], null, null, false, true, null]],
        1009 => [[['_route' => 'reservation_cancel', '_controller' => 'App\\Controller\\ReservationController::cancel'], ['id'], null, null, false, true, null]],
        1040 => [[['_route' => 'reservation_payment', '_controller' => 'App\\Controller\\ReservationController::payment'], ['id'], null, null, false, true, null]],
        1065 => [[['_route' => 'reservation_payment_success', '_controller' => 'App\\Controller\\ReservationController::paymentSuccess'], ['id'], null, null, false, true, null]],
        1089 => [[['_route' => 'reservation_payment_cancel', '_controller' => 'App\\Controller\\ReservationController::paymentCancel'], ['id'], null, null, false, true, null]],
        1110 => [[['_route' => 'reservation_pdf', '_controller' => 'App\\Controller\\ReservationController::generatePdf'], ['id'], null, null, false, true, null]],
        1144 => [[['_route' => 'app_reset_password', '_controller' => 'App\\Controller\\Auth\\ResetPasswordController::reset'], ['code'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1195 => [[['_route' => 'taxiste_course_accept', '_controller' => 'App\\Controller\\TaxisteController::acceptCourse'], ['id'], ['POST' => 0], null, false, false, null]],
        1210 => [[['_route' => 'taxiste_course_refuse', '_controller' => 'App\\Controller\\TaxisteController::refuseCourse'], ['id'], ['POST' => 0], null, false, false, null]],
        1224 => [[['_route' => 'taxiste_course_start', '_controller' => 'App\\Controller\\TaxisteController::startCourse'], ['id'], ['POST' => 0], null, false, false, null]],
        1239 => [[['_route' => 'taxiste_course_finish', '_controller' => 'App\\Controller\\TaxisteController::finishCourse'], ['id'], ['POST' => 0], null, false, false, null]],
        1277 => [[['_route' => 'taxiste_taxi_change_status', '_controller' => 'App\\Controller\\TaxisteController::changeTaxiStatus'], ['id'], ['POST' => 0], null, false, false, null]],
        1313 => [[['_route' => 'trajet_modifier', '_controller' => 'App\\Controller\\TrajetController::modifier'], ['id'], null, null, false, true, null]],
        1340 => [[['_route' => 'trajet_supprimer', '_controller' => 'App\\Controller\\TrajetController::supprimer'], ['id'], null, null, false, true, null]],
        1386 => [[['_route' => 'user_course_cancel', '_controller' => 'App\\Controller\\UserCourseController::cancel'], ['id'], ['POST' => 0], null, false, false, null]],
        1411 => [[['_route' => 'course_cancel', '_controller' => 'App\\Controller\\UserCourseController::cancel'], ['id'], null, null, false, false, null]],
        1439 => [
            [['_route' => 'taxi_rate', '_controller' => 'App\\Controller\\RatingController::rateTaxi'], ['id'], null, null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
