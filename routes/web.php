<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register/index', function () {
    return view('register.index');
});

// Route::get('/register/employer', function () {
//     return view('register.employer');
// });

// Route::get('/register/freelancer', function () {
//     return view('register.freelancer');
// });

Route::get('/register/hireling', 'HirelingController@registerHireling');

Route::post('/hireling/store', 'HirelingController@store');

Route::get('/register/hirer', 'HirerController@registerHirer');

Route::post('/hirer/store', 'HirerController@store');

Route::get('/hirer/post_a_project', 'HirerController@createpost');

Route::post('/hirer/post', 'HirerController@store_project');
// Route::get('/profile/index', function () {
//     return view('profile.index');
// });

Route::get('/admin/index_admin', 'AdminController@index');
Route::get('/diff', 'AdminController@diff');

Route::get('hirer/my_project', "HirerController@myproject");

Route::get('/user/login', "LoginController@userlogin");

Route::get('/project/view_projects', "HomeController@viewpro");

Route::get('/view_project/{id}', "HomeController@view_project");
Route::get('/view_projectt/{name}', "HomeController@view_projectt");
Route::post('/project_complete', "HomeController@project_complete");

// Route::get('/user/login', function () {
//     return view('register.login');
// });

Route::get('/projects', function () {
    return view('project.project');
});

Route::get('/profile', function () {
    return view('profile.index');
});

// Route::get('/temp', function () {
//     return view('temp.');
// });



Route::get('/applied_projects', 'HirelingController@applied_projects');
Route::get('/hirer/project_responces', 'HirerController@project_responces');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// Admin 


Route::get('/admin/all_applied_projects', 'AdminController@all_applied_projects');
Route::post('apply_project', 'HomeController@apply_project');
Route::post('generate_invoice', 'HomeController@generate_invoice');
Route::post('feedback', 'HirerController@feedback');
Route::post('submit_feedback', 'HirerController@submit_feedback');


Route::get('/all_feedback', 'HomeController@all_feedback');
