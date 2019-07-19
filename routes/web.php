<?php
use Intervention\Image\Facades\Image;

/**
 * LANGUAJE ROUTE
 */
Route::get('/set_language/{lang}', 'Controller@setLanguage')->name('set_language');

/**
 * SOCIALITE ROUTES
 */
Route::get('login/{driver}', 'Auth\LoginController@redirectToProvider')->name('social_auth');
Route::get('login/{driver}/callback', 'Auth\LoginController@handleProviderCallback');

/**
 * AUTH ROUTE
 */
Auth::routes();


/**
 * HOME ROUTE
 */
Route::get('/', 'HomeController@index')->name('home');

/**
 * COURSE ROUTE
 */
Route::group(['prefix' => 'courses'], function(){

    Route::get('/{course}', 'CourseController@show')->name('courses.detail');

});

/**
 * IMAGE ROUTES
 */
Route::get('/images/{path}/{attachment}', function($path, $attachment){
    $file = sprintf('storage/%s/%s', $path, $attachment);
    if (File::exists($file)) {
        return Image::make($file)->response();
    }
});
