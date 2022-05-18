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

Route::group(['namespace'=>'Website'],function(){
    Route::get('/','IndexController@index')->name('index');
    Route::get('/contact-us','IndexController@contactUs')->name('contact');
    Route::get('/about','IndexController@about')->name('about');
    Route::get('/work-with-us','IndexController@work')->name('work');
    Route::get('/location','IndexController@location')->name('location');
    Route::post('/newsletter','IndexController@newsletter')->name('newsletter.add');
    Route::get('treatment-posts/{id}','IndexController@posts')->name('posts');
    Route::get('post-detail/{id}','IndexController@getPost')->name('post.detail');
	Route::get('get-instagram','IndexController@getInstagram')->name('instagram');
});
Route::post('/contact-us','Admin\MessageController@sendMessage')->name('send.contact');



Route::group(['prefix'=>'dashboard','namespace'=>'Admin'],function(){
	// Authentication Routes...
    Route::get('/login','Auth\LoginController@showLoginForm')->name('admin.login');
    Route::post('login','Auth\LoginController@login')->name('adminlogin');
    Route::post('/logout','Auth\LoginController@logout')->name('adminlogout');
    // End authentication routes

    // Admin Email verification routes
    Route::get('email/verify', 'Auth\VerificationController@show')->name('admin.verification.notice');
    Route::get('email/verify/{id}', 'Auth\VerificationController@verify')->name('admin.verification.verify');
    Route::get('email/resend', 'Auth\VerificationController@resend')->name('admin.verification.resend');

    //admin password reset routes
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('admin.password.reset');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('admin.password.update');
    // End Admin Email verification routes
	Route::get('/','AdminController@index')->name('admin.home');
    // Banner roytes
    Route::resource('banner','BannerController');
    Route::get('page/{pageName}','PageController@showPage')->name('admin.showPage');
    Route::post('edit-page/{pageName}','PageController@editPage')->name('admin.editPage');
    Route::get('treatment-category','TreatmentCategoryController@index')->name('treatment.cat.index');
    Route::get('treatment-category-add','TreatmentCategoryController@create')->name('treatment.cat.create');
    Route::post('treatment-category-store','TreatmentCategoryController@store')->name('treatment.cat.store');
    Route::get('edit-treatment-category/{id}','TreatmentCategoryController@edit')->name('treatment.cat.edit');
    Route::post('update-treatment-category/{id}','TreatmentCategoryController@update')->name('treatment.cat.update');
    Route::resource('post','PostController');
    //pages route
    Route::resource('/About','AboutController');
    Route::resource('/Team','TeamController');
    Route::resource('/why','WhyWorkController');
    Route::resource('/practice','PracticeController');
    Route::resource('/general','GeneralController');
    Route::resource('/clinic','ClinicController');
    Route::resource('/svtreatment','SvtreatmentController');
    Route::resource('/partner','PartnerController');
    Route::resource('/location','LocationController');
    Route::get('/messages','MessageController@index')->name('show.messages');
    Route::get('/newsletter','AdminController@newsletter')->name('show.newsnetter');
    Route::get('/email-newsletter','AdminController@emailNewsletter')->name('email.newsnetter');
    Route::post('/email-sent','AdminController@emailSent')->name('email.sent');
    Route::get('/print-newsletter','AdminController@printNewsletter')->name('print.newsnetter');

});
Auth::routes(['verify' => false]);
Route::get('/home', 'HomeController@index')->name('home');

