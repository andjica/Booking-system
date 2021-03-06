<?php

use App\Http\Controllers\ReservationController;
use Illuminate\Support\Facades\Route; 


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

    Route::get('/test',function(){
    $string = "10/08/2020";

    $array = explode('/',$string);

    dd($array[0]);
});

Route::post('/checkdates','RoomsController@checkdates');
Route::post('/reservate','RoomsController@reservate');
//user blade for paying reservation
Route::get('/res/{id}', 'ReservationController@payforroom')->name('res/id');


//admin za upravljanje aprtmanima

Route::get('/admin', 'FrontController@admin');


Route::get('/', 'FrontController@index');
Route::get('/supporting', 'FrontController@supporting');
Route::get('/price', 'FrontController@price')->name('price');
Route::get('/price-pro', 'FrontController@pro')->name('price-pro');
Route::get('/price-ex', 'FrontController@ex')->name('price-ex');
Route::get('/booker/{id}', 'FrontController@booker')->name('booker/{id}');
Route::get('/search', 'FrontController@search')->name('search');
Route::get('/all', 'FrontController@all')->name('all');
Route::get('/contact', 'FrontController@contact')->name('contact');
Route::get('/about', 'FrontController@about')->name('about');
//stripe
Route::post('/stpaypro', 'StripeController@paypro')->name('stpaypro');
Route::post('/stpayex', 'StripeController@payex')->name('stpayex');
Route::post('/stpayroom', 'StripeController@payroom')->name('stpayroom');

Route::get('/room/{id}', 'RoomsController@show');


//rooms - renteri
Route::group(['middleware' => ['checkrenter']], function () 
{
    
    Route::get('/create-room', 'RoomsController@create')->name('create-room');
    Route::post('/insert-room', 'RoomsController@store')->name('insert-room');
    Route::get('/rooms', 'RoomsController@index')->name('rooms');
    Route::get('/edit-room/{id}', 'RoomsController@edit')->name('edit-room');
    Route::post('/update-room/{id}', 'RoomsController@update')->name('update-room/{id}');

    Route::get('/delete-room/{id}', 'RoomsController@destroy')->name('delete-room/{id}');
    Route::get('/confirmed-reservation/{id}', 'RenterController@confirmed')->name('confirmed-reservation/id');
    Route::get('/view-res/{id}', 'RenterController@viewres')->name('view-res/id');
    Route::get('/accept-res/{id}', 'RenterController@accept')->name('accept-res/id');
    Route::get('/drop-res/{id}', 'RenterController@drop')->name('drop-res/id');
    Route::get('/on-pending/{id}', 'RenterController@pending')->name('on-pending');
    Route::get('/reservations', 'RenterController@reservations')->name('reservations');
    Route::get('/active-reservations', 'RenterController@activeres')->name('active-reservations');
    Route::get('/dropped-reservations', 'RenterController@droppedres')->name('dropped-reservations');
    Route::get('/support-team' , 'RenterController@supportteam')->name('support-team');
    Route::get('/support-admin', 'RenterController@supportadmin')->name('support-admin');
    Route::get('/support-accounting', 'RenterController@supportaccoounting')->name('support-accounting');
    Route::post('/contact-support', 'EmailController@send')->name('contact-support');
    Route::get('/settings', 'RenterController@settings')->name('settings');
    Route::post('/set-renter', 'RenterController@setrenter')->name('set-renter');
    Route::post('/set-card', 'RenterController@setcard')->name('set-card');


    //images
    Route::get('/save-image', 'ImageController@index');
    Route::get('/create-image/{id}', 'ImageController@create');
    Route::post('/insert-image', 'ImageController@store')->name('insert-image');
    Route::get('/vidislike', 'ImageController@getall');
    Route::post('/delete-images', 'ImageController@delete')->name('delete-images');

});
//upravljaj rezervacijama-calendar
Route::post('/make-res', 'ReservationController@create');

Route::post('/authenticate', 'Auth\LoginController@authenticate');
Auth::routes(['verify' => true]);
Route::get('/logout', 'Auth\LoginController@logout');

//useri
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/user-contact', 'HomeController@usercontact')->name('user-contact');
Route::post('/user-email', 'EmailController@usercontact')->name('user-email');
Route::get('/user-reservations', 'HomeController@reservations')->name('user-reservations');
Route::post('/contact-email', 'EmailController@contact')->name('contact-email');


//admin
Route::get('/admin', 'AdminController@index')->name('admin');
Route::get('/admin-renters', 'AdminController@renters')->name('admin-renters');
Route::get('/admin-renter/{id}', 'AdminController@renter')->name('admin-renter/{id}');
Route::get('/admin-delete-renter/{id}', 'AdminController@destroy')->name('admin-delete-renter/{id}');
Route::get('/active-res/{id}', 'AdminController@active')->name('active-res/{id}');
Route::get('/view-reservation/{id}', 'AdminController@viewres')->name('view-reservation/id');
Route::get('/admin-users', 'AdminController@users')->name('admin-users');
Route::get('/search-by-name', 'AdminController@search')->name('search-by-name');
Route::get('/admin-invoices', 'AdminController@invoice')->name('admin-invoices');

