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
        '/abonnement' => [[['_route' => 'app_abonnement', '_controller' => 'App\\Controller\\AbonnementController::index'], null, null, null, false, false, null]],
        '/abonnement/add' => [[['_route' => 'abonnement_add', '_controller' => 'App\\Controller\\AbonnementController::add'], null, null, null, false, false, null]],
        '/abonnements' => [[['_route' => 'abonnement_list', '_controller' => 'App\\Controller\\AbonnementController::list'], null, null, null, false, false, null]],
        '/abonnementR' => [[['_route' => 'app_abonnement_index', '_controller' => 'App\\Controller\\AbonnementReservationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/pdf-generator' => [[['_route' => 'admin_pdf_generator', '_controller' => 'App\\Controller\\Admin\\PdfGeneratorController::index'], null, null, null, false, false, null]],
        '/admin/users/pdf' => [[['_route' => 'admin_users_pdf', '_controller' => 'App\\Controller\\Admin\\UserPdfController::generatePdf'], null, null, null, false, false, null]],
        '/affichage' => [[['_route' => 'app_affichage', '_controller' => 'App\\Controller\\AffichageController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\Auth\\RegistrationController::register'], null, null, null, false, false, null]],
        '/avis' => [[['_route' => 'app_avis_index', '_controller' => 'App\\Controller\\AvisController::index'], null, ['GET' => 0], null, false, false, null]],
        '/avis/new' => [[['_route' => 'app_avis_new', '_controller' => 'App\\Controller\\AvisController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/chatbot' => [[['_route' => 'app_chatbot', '_controller' => 'App\\Controller\\ChatbotController::index'], null, null, null, false, false, null]],
        '/chatbot/message' => [[['_route' => 'app_chatbot_message', '_controller' => 'App\\Controller\\ChatbotController::message'], null, null, null, false, false, null]],
        '/course/admin/courses' => [[['_route' => 'admin_courses', '_controller' => 'App\\Controller\\CourseController::listUserCourses'], null, null, null, false, false, null]],
        '/course/taxiste/courses' => [[['_route' => 'taxiste_courses', '_controller' => 'App\\Controller\\CourseController::listTaxisteCourses'], null, null, null, false, false, null]],
        '/hello' => [[['_route' => 'app_hello', '_controller' => 'App\\Controller\\HelloController::index'], null, null, null, false, false, null]],
        '/profile' => [
            [['_route' => 'app_profile', '_controller' => 'App\\Controller\\ProfileController::index'], null, null, null, false, false, null],
            [['_route' => 'client_profile', '_controller' => 'App\\Controller\\ProfileController::index'], null, null, null, false, false, null],
        ],
        '/profile/edit' => [[['_route' => 'app_profile_edit', '_controller' => 'App\\Controller\\ProfileController::edit'], null, null, null, false, false, null]],
        '/profile/delete' => [[['_route' => 'app_profile_delete', '_controller' => 'App\\Controller\\ProfileController::delete'], null, ['POST' => 0], null, false, false, null]],
        '/reponse' => [[['_route' => 'app_reponse_index', '_controller' => 'App\\Controller\\ReponseController::index'], null, ['GET' => 0], null, false, false, null]],
        '/reservation' => [[['_route' => 'app_reservation', '_controller' => 'App\\Controller\\ReservationController::index'], null, null, null, false, false, null]],
        '/reservation/affichage' => [[['_route' => 'reservation_affichage', '_controller' => 'App\\Controller\\ReservationController::affichage'], null, null, null, false, false, null]],
        '/reservation/list' => [[['_route' => 'reservation_list', '_controller' => 'App\\Controller\\ReservationController::list'], null, null, null, false, false, null]],
        '/admin/reservations' => [[['_route' => 'admin_reservations', '_controller' => 'App\\Controller\\ReservationController::indexAdmin'], null, null, null, false, false, null]],
        '/admin/statistics' => [[['_route' => 'admin_statistics', '_controller' => 'App\\Controller\\StatisticsController::index'], null, null, null, false, false, null]],
        '/taxi/dashboajrd' => [[['_route' => 'taxi_dashboafrd', '_controller' => 'App\\Controller\\Taxi\\DashboardController::index'], null, null, null, false, false, null]],
        '/admin/taxi/user/taxis' => [[['_route' => 'user_taxis', '_controller' => 'App\\Controller\\TaxiController::listAvailableTaxis'], null, null, null, false, false, null]],
        '/admin/taxi/admin/taxi/get-models' => [[['_route' => 'get_models', '_controller' => 'App\\Controller\\TaxiController::getModels'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/taxi/taxis/nearby' => [[['_route' => 'get_nearby_taxis', '_controller' => 'App\\Controller\\TaxiController::getNearbyTaxis'], null, null, null, false, false, null]],
        '/trajet/ajouter' => [[['_route' => 'trajet_ajouter', '_controller' => 'App\\Controller\\TrajetController::ajouter'], null, null, null, false, false, null]],
        '/trajet/affichage' => [[['_route' => 'trajet_affichage', '_controller' => 'App\\Controller\\TrajetController::affichage'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'app_user', '_controller' => 'App\\Controller\\UserController::index'], null, null, null, false, false, null]],
        '/user/courses' => [[['_route' => 'user_courses', '_controller' => 'App\\Controller\\UserCourseController::index'], null, null, null, true, false, null]],
        '/vehicles' => [[['_route' => 'vehicle_index', '_controller' => 'App\\Controller\\VehicleController::index'], null, ['GET' => 0], null, true, false, null]],
        '/vehicles/new' => [[['_route' => 'vehicle_new', '_controller' => 'App\\Controller\\VehicleController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\Auth\\LoginController::index'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'back_office_dashboard', '_controller' => 'App\\Controller\\BackOfficeController::dashboard'], null, null, null, false, false, null]],
        '/admin/taxi' => [[['_route' => 'taxi_index', '_controller' => 'App\\Controller\\TaxiController::index'], null, null, null, false, false, null]],
        '/admin/taxi/new' => [[['_route' => 'taxi_new', '_controller' => 'App\\Controller\\TaxiController::new'], null, null, null, false, false, null]],
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
                    .'|bonnement(?'
                        .'|/(?'
                            .'|([^/]++)(*:231)'
                            .'|edit/([^/]++)(*:252)'
                            .'|delete/([^/]++)(*:275)'
                        .')'
                        .'|R/([^/]++)/reserve(*:302)'
                    .')'
                    .'|vis/([^/]++)(?'
                        .'|(*:326)'
                        .'|/(?'
                            .'|edit(*:342)'
                            .'|reponses(*:358)'
                        .')'
                        .'|(*:367)'
                    .')'
                    .'|dmin/(?'
                        .'|reservations/([^/]++)(*:405)'
                        .'|taxi/([^/]++)/(?'
                            .'|edit(*:434)'
                            .'|delete(*:448)'
                        .')'
                        .'|course/([^/]++)/(?'
                            .'|edit(*:480)'
                            .'|delete(*:494)'
                        .')'
                        .'|users/(?'
                            .'|delete/(?'
                                .'|confirm/([^/]++)(*:538)'
                                .'|([^/]++)(*:554)'
                            .')'
                            .'|edit/([^/]++)(*:576)'
                            .'|block/([^/]++)(*:598)'
                            .'|unblock/([^/]++)(*:622)'
                        .')'
                    .')'
                .')'
                .'|/re(?'
                    .'|ponse/(?'
                        .'|new/([^/]++)(*:660)'
                        .'|([^/]++)(?'
                            .'|(*:679)'
                            .'|/edit(*:692)'
                            .'|(*:700)'
                        .')'
                    .')'
                    .'|se(?'
                        .'|rvation/(?'
                            .'|new/([^/]++)(*:738)'
                            .'|trajet\\-supprime/([^/]++)(*:771)'
                            .'|success/([^/]++)(*:795)'
                            .'|cancel/([^/]++)(*:818)'
                            .'|p(?'
                                .'|ayment/(?'
                                    .'|([^/]++)(*:848)'
                                    .'|success/([^/]++)(*:872)'
                                    .'|cancel/([^/]++)(*:895)'
                                .')'
                                .'|df/([^/]++)(*:915)'
                            .')'
                        .')'
                        .'|t\\-password/reset/(\\d+)(*:948)'
                    .')'
                .')'
                .'|/t(?'
                    .'|axiste/(?'
                        .'|course/([^/]++)/(?'
                            .'|accept(*:998)'
                            .'|refuse(*:1012)'
                            .'|start(*:1026)'
                            .'|finish(*:1041)'
                        .')'
                        .'|taxi/([^/]++)/change\\-status(*:1079)'
                    .')'
                    .'|rajet/(?'
                        .'|modifier/([^/]++)(*:1115)'
                        .'|supprimer/([^/]++)(*:1142)'
                    .')'
                .')'
                .'|/user/(?'
                    .'|course(?'
                        .'|s/([^/]++)/cancel(*:1188)'
                        .'|/([^/]++)/cancel(*:1213)'
                    .')'
                    .'|taxi/([^/]++)/rate(*:1241)'
                .')'
                .'|/vehicles/([^/]++)(?'
                    .'|(*:1272)'
                    .'|/edit(*:1286)'
                    .'|(*:1295)'
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
        231 => [[['_route' => 'abonnement_show', '_controller' => 'App\\Controller\\AbonnementController::show'], ['id'], null, null, false, true, null]],
        252 => [[['_route' => 'abonnement_edit', '_controller' => 'App\\Controller\\AbonnementController::edit'], ['id'], null, null, false, true, null]],
        275 => [[['_route' => 'abonnement_delete', '_controller' => 'App\\Controller\\AbonnementController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        302 => [[['_route' => 'app_abonnement_reserve', '_controller' => 'App\\Controller\\AbonnementReservationController::reserve'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        326 => [[['_route' => 'app_avis_show', '_controller' => 'App\\Controller\\AvisController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        342 => [[['_route' => 'app_avis_edit', '_controller' => 'App\\Controller\\AvisController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        358 => [[['_route' => 'app_avis_reponses', '_controller' => 'App\\Controller\\AvisController::viewReponses'], ['id'], ['GET' => 0], null, false, false, null]],
        367 => [[['_route' => 'app_avis_delete', '_controller' => 'App\\Controller\\AvisController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        405 => [[['_route' => 'show_reservation', '_controller' => 'App\\Controller\\ReservationController::showReservation'], ['id'], null, null, false, true, null]],
        434 => [[['_route' => 'taxi_edit', '_controller' => 'App\\Controller\\TaxiController::edit'], ['id'], null, null, false, false, null]],
        448 => [[['_route' => 'taxi_delete', '_controller' => 'App\\Controller\\TaxiController::delete'], ['id'], null, null, false, false, null]],
        480 => [[['_route' => 'course_edit', '_controller' => 'App\\Controller\\CourseController::edit'], ['id'], null, null, false, false, null]],
        494 => [[['_route' => 'course_delete', '_controller' => 'App\\Controller\\CourseController::delete'], ['id'], null, null, false, false, null]],
        538 => [[['_route' => 'admin_user_confirm_delete', '_controller' => 'App\\Controller\\Admin\\UserManagementController::confirmDelete'], ['id'], null, null, false, true, null]],
        554 => [[['_route' => 'admin_user_perform_delete', '_controller' => 'App\\Controller\\Admin\\UserManagementController::performDelete'], ['id'], ['POST' => 0], null, false, true, null]],
        576 => [[['_route' => 'admin_user_edit', '_controller' => 'App\\Controller\\Admin\\UserManagementController::editUser'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        598 => [[['_route' => 'admin_user_block', '_controller' => 'App\\Controller\\Admin\\UserManagementController::blockUser'], ['id'], ['POST' => 0], null, false, true, null]],
        622 => [[['_route' => 'admin_user_unblock', '_controller' => 'App\\Controller\\Admin\\UserManagementController::unblockUser'], ['id'], ['POST' => 0], null, false, true, null]],
        660 => [[['_route' => 'app_reponse_new', '_controller' => 'App\\Controller\\ReponseController::new'], ['avisId'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        679 => [[['_route' => 'app_reponse_show', '_controller' => 'App\\Controller\\ReponseController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        692 => [[['_route' => 'app_reponse_edit', '_controller' => 'App\\Controller\\ReponseController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        700 => [[['_route' => 'app_reponse_delete', '_controller' => 'App\\Controller\\ReponseController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        738 => [[['_route' => 'reservation_new', '_controller' => 'App\\Controller\\ReservationController::new'], ['trajetId'], null, null, false, true, null]],
        771 => [[['_route' => 'reservation_trajet_supprime', '_controller' => 'App\\Controller\\ReservationController::showDeletedTrajetDetails'], ['id'], null, null, false, true, null]],
        795 => [[['_route' => 'reservation_success', '_controller' => 'App\\Controller\\ReservationController::success'], ['id'], null, null, false, true, null]],
        818 => [[['_route' => 'reservation_cancel', '_controller' => 'App\\Controller\\ReservationController::cancel'], ['id'], null, null, false, true, null]],
        848 => [[['_route' => 'reservation_payment', '_controller' => 'App\\Controller\\ReservationController::payment'], ['id'], null, null, false, true, null]],
        872 => [[['_route' => 'reservation_payment_success', '_controller' => 'App\\Controller\\ReservationController::paymentSuccess'], ['id'], null, null, false, true, null]],
        895 => [[['_route' => 'reservation_payment_cancel', '_controller' => 'App\\Controller\\ReservationController::paymentCancel'], ['id'], null, null, false, true, null]],
        915 => [[['_route' => 'reservation_pdf', '_controller' => 'App\\Controller\\ReservationController::generatePdf'], ['id'], null, null, false, true, null]],
        948 => [[['_route' => 'app_reset_password', '_controller' => 'App\\Controller\\Auth\\ResetPasswordController::reset'], ['code'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        998 => [[['_route' => 'taxiste_course_accept', '_controller' => 'App\\Controller\\TaxisteController::acceptCourse'], ['id'], ['POST' => 0], null, false, false, null]],
        1012 => [[['_route' => 'taxiste_course_refuse', '_controller' => 'App\\Controller\\TaxisteController::refuseCourse'], ['id'], ['POST' => 0], null, false, false, null]],
        1026 => [[['_route' => 'taxiste_course_start', '_controller' => 'App\\Controller\\TaxisteController::startCourse'], ['id'], ['POST' => 0], null, false, false, null]],
        1041 => [[['_route' => 'taxiste_course_finish', '_controller' => 'App\\Controller\\TaxisteController::finishCourse'], ['id'], ['POST' => 0], null, false, false, null]],
        1079 => [[['_route' => 'taxiste_taxi_change_status', '_controller' => 'App\\Controller\\TaxisteController::changeTaxiStatus'], ['id'], ['POST' => 0], null, false, false, null]],
        1115 => [[['_route' => 'trajet_modifier', '_controller' => 'App\\Controller\\TrajetController::modifier'], ['id'], null, null, false, true, null]],
        1142 => [[['_route' => 'trajet_supprimer', '_controller' => 'App\\Controller\\TrajetController::supprimer'], ['id'], null, null, false, true, null]],
        1188 => [[['_route' => 'user_course_cancel', '_controller' => 'App\\Controller\\UserCourseController::cancel'], ['id'], ['POST' => 0], null, false, false, null]],
        1213 => [[['_route' => 'course_cancel', '_controller' => 'App\\Controller\\UserCourseController::cancel'], ['id'], null, null, false, false, null]],
        1241 => [[['_route' => 'taxi_rate', '_controller' => 'App\\Controller\\RatingController::rateTaxi'], ['id'], null, null, false, false, null]],
        1272 => [[['_route' => 'vehicle_show', '_controller' => 'App\\Controller\\VehicleController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1286 => [[['_route' => 'vehicle_edit', '_controller' => 'App\\Controller\\VehicleController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1295 => [
            [['_route' => 'vehicle_delete', '_controller' => 'App\\Controller\\VehicleController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
