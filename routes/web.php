<?php
use Illuminate\Support\Facades\Route;

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Auth::routes(); 

Route::namespace('Front')->name('front.')->group(function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/properties', 'ListingsController@index')->name('listings.index');
    Route::get('/properties/{property}', 'ListingsController@show')->name('listings.show');
    Route::get('/agents', 'UsersController@index')->name('agents.index');
    Route::get('/agents/{agent}', 'UsersController@show')->name('agents.show');
    Route::get('/search', 'ListingsController@search')->name('listings.search');
});


Route::get('/home', function () {
    if (session('status')) {
        return redirect()->route('admin.home')->with('status', session('status'));
    }

    return redirect()->route('admin.home');
});


Auth::routes(['register' => false]);

Route::group([
    'prefix' => 'admin',
    'as' => 'admin.',
    'namespace' => 'Admin',
    'middleware' => ['auth']
], function () {
    Route::get('/', 'HomeController@index')->name('home');
    // Listings
    Route::delete('listings/destroy', 'ListingsController@massDestroy')->name('listings.massDestroy');
    Route::resource('listings', 'ListingsController');
    
    Route::group(['middleware' => 'admin'], function(){
        // Permissions
        Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
        Route::resource('permissions', 'PermissionsController');

        // Roles
        Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
        Route::resource('roles', 'RolesController');

        // Users
        Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
        Route::resource('users', 'UsersController');

        // Countries
        Route::delete('countries/destroy', 'CountriesController@massDestroy')->name('countries.massDestroy');
        Route::resource('countries', 'CountriesController');

        // Cities
        Route::delete('cities/destroy', 'CitiesController@massDestroy')->name('cities.massDestroy');
        Route::resource('cities', 'CitiesController');

        // Property Types
        Route::delete('propertytypes/destroy', 'PropertytypesController@massDestroy')->name('propertytypes.massDestroy');
        Route::resource('propertytypes', 'PropertytypesController');
    });

    
});

Route::group(['prefix' => 'profile', 'as' => 'profile.', 'namespace' => 'Auth', 'middleware' => ['auth']], function () {
// Change password
    if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))) {
        Route::get('password', 'ChangePasswordController@edit')->name('password.edit');
        Route::post('password', 'ChangePasswordController@update')->name('password.update');
    }
});
