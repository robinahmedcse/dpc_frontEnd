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

//Route::get('/', function () {
//    return view('welcome');
//});
 
Route::get('/', 'frontEnd\home\home@index');

/***************************/
Route::get('/welcome/note', 'frontEnd\about_us\aboutUs@welcome_note');
Route::get('/history/', 'frontEnd\about_us\aboutUs@history');
Route::get('/at/a/glance', 'frontEnd\about_us\aboutUs@glance');
Route::get('/principal/words', 'frontEnd\about_us\aboutUs@principal_word');
Route::get('/facilities', 'frontEnd\about_us\aboutUs@facilities');
Route::get('/achievement/', 'frontEnd\about_us\aboutUs@achievement');
Route::get('/governing/body/', 'frontEnd\about_us\aboutUs@governing_body');
/***************************/




/***************************/
Route::get('/calender', 'frontEnd\administration\administration@calender');
Route::get('/career', 'frontEnd\administration\administration@job');
Route::get('/teacher/login', 'frontEnd\administration\administration@teacher_login');
Route::get('/staff/login', 'frontEnd\administration\administration@staff_login');
Route::get('/account/officer/login', 'frontEnd\administration\administration@account_login');
/***************************/



/***************************/
Route::get('/teacher/info', 'frontEnd\academic\academic@tc_info');
Route::get('/staff/info', 'frontEnd\academic\academic@staff_info');
Route::get('/rules/and/regulations', 'frontEnd\academic\academic@rules_info');
Route::get('/committee/info', 'frontEnd\academic\academic@committee_info');
/***************************/


/***************************/
Route::get('/student/info', 'frontEnd\student\student@stu_info');
Route::get('/class/routine', 'frontEnd\student\student@class_routine');
Route::get('/syllabus', 'frontEnd\student\student@syllabus');
Route::get('/dress/code', 'frontEnd\student\student@dress_code');
/***************************/


Route::get('/results', 'frontEnd\home\home@result');
Route::get('/event', 'frontEnd\home\home@event');
Route::get('/notice', 'frontEnd\home\home@notice');
Route::get('/gallery', 'frontEnd\home\home@gallery');
Route::get('/contact/us', 'frontEnd\home\home@contact_us');






 