<?php



use CodeIgniter\Router\RouteCollection;



/**

 * @var RouteCollection $routes

 */

 // frontend routing

$routes->get('/', 'Frontend::index');

$routes->get('/index', 'Frontend::index');

$routes->get('/about', 'Frontend::about');

$routes->get('/baking', 'Frontend::baking');

$routes->get('/blog', 'Frontend::blog');

$routes->get('/login', 'User::login');

$routes->get('/logout', 'User::logout');



$routes->get('/user/quiz', 'User::quiz');
$routes->get('/user/thanks', 'User::thanks');

$routes->post('/quiz/submitQuiz', 'User::submitQuiz');

$routes->post('/login/auth', 'User::auth');

$routes->post('/signup', 'User::save');



$routes->get('/signup', 'User::signup');

$routes->get('/forgotPassword', 'User::forgotPassword'); 

$routes->post('/forgotPassword', 'User::forgotPassword');



$routes->get('/forgotpassotp', 'User::forgotpassotp'); 

$routes->post('/forgetOTPverified', 'User::forgetOTPverified');



$routes->get('/reset_password', 'User::reset_password'); 

$routes->post('/reset_password', 'User::reset_password');



$routes->get('/crying', 'Frontend::crying');

$routes->get('/culture', 'Frontend::culture');

$routes->get('/dancingroutine', 'Frontend::dancingroutine');

$routes->get('/depression', 'Frontend::depression');

$routes->get('/eating', 'Frontend::eating');

$routes->get('/embracing_routine', 'Frontend::embracing_routine');

$routes->get('/exercies', 'Frontend::exercies');

$routes->get('/festivals', 'Frontend::festivals');

$routes->get('/generosity', 'Frontend::generosity');

$routes->get('/gratitude', 'Frontend::gratitude');

$routes->get('/household_anxiety', 'Frontend::household_anxiety');

$routes->get('/journaling', 'Frontend::journaling');

$routes->get('/mental_health_moment', 'Frontend::mental_health_moment');

$routes->get('/mood_boosting', 'Frontend::mood_boosting');

$routes->get('/phone_addiction', 'Frontend::phone_addiction');

$routes->get('/pricing', 'Frontend::pricing');

$routes->get('/privacy_policy', 'Frontend::privacy_policy');

$routes->get('/ritgh_meditation', 'Frontend::ritgh_meditation');

$routes->get('/selfcare', 'Frontend::selfcare');

$routes->get('/smailing_health_benefits', 'Frontend::smailing_health_benefits');

$routes->get('/stigma_around_mental_health', 'Frontend::stigma_around_mental_health');

$routes->get('/termsandconditions', 'Frontend::termsandconditions');

$routes->get('/testimonials', 'Frontend::testimonials');

$routes->get('/unique', 'Frontend::unique');



// backend routing

$routes->get('admin/signup', 'Admin::signup');

$routes->post('admin/register/save', 'Admin::save');

$routes->get('admin/login', 'Admin::login'); 

$routes->post('admin/auth', 'Admin::auth');

$routes->get('admin/logout', 'Admin::logout');



$routes->get('admin/otp', 'Admin::otp'); 

$routes->get('admin/forgetpass', 'Admin::forgetpass'); 

$routes->get('admin/change_password', 'Admin::change_password'); 

//$routes->get('admin/dashboard', 'Admin::index');

//$routes->get('admin/', 'Admin::index');

$routes->post('admin/recover-password', 'Admin::recover_password');

// ** admin auth start

$routes->get('admin/dashboard', 'Admin::index',['filter' => 'admin_auth']);

$routes->get('admin/', 'Admin::index',['filter' => 'admin_auth']);

$routes->get('admin/profile', 'Admin::profile',['filter' => 'admin_auth']);

$routes->get('admin/users', 'Admin::users',['filter' => 'admin_auth']);

// quiz

$routes->get('admin/quiz', 'Quiz::index',['filter' => 'admin_auth']);

$routes->get('admin/quiz/crud', 'Quiz::crud',['filter' => 'admin_auth']);

$routes->get('admin/quiz/crud/(:num)', 'Quiz::crud/$1',['filter' => 'admin_auth']);

$routes->post('admin/quiz/crud', 'Quiz::save',['filter' => 'admin_auth']);

$routes->post('admin/quiz/delete', 'Quiz::crud',['filter' => 'admin_auth']);

$routes->post('admin/quiz/status', 'Quiz::crud',['filter' => 'admin_auth']);



$routes->get('admin/quiz/result/(:num)', 'Quiz::user_result/$1',['filter' => 'admin_auth']);



// emoji_link

$routes->get('admin/emoji_link', 'Emoji::index',['filter' => 'admin_auth']);

$routes->get('admin/emoji_link/crud', 'Emoji::crud',['filter' => 'admin_auth']);

$routes->get('admin/emoji_link/crud/(:num)', 'Emoji::crud/$1',['filter' => 'admin_auth']);

$routes->post('admin/emoji_link/crud', 'Emoji::save',['filter' => 'admin_auth']);

$routes->post('admin/emoji_link/delete', 'Emoji::crud',['filter' => 'admin_auth']);

$routes->post('admin/emoji_link/status', 'Emoji::crud',['filter' => 'admin_auth']);

