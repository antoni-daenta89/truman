<?php

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

Route::get('/', 'LandingPageController@index');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
route::get('/shop','ShopController@index');
route::get('/cart','CartController@index');
route::get('/shop/detail/{id}','ShopController@show');
route::get('/shop/category/{id}','ShopController@category');


//users
route::get('/admin/PendingUsers','AdminController@showpendinguser');
route::get('/admin/editusers/{id}','AdminController@viewuserdata');
route::get('/admin/userlist','AdminController@showuser');
route::put('/update/{id}','AdminController@update_user');
route::post('/activate/{id}','AdminController@activateuser');
route::post('/deactivate/{id}','AdminController@disableuser');
route::post('/hapus_user/{id}','AdminController@hapusdatauser');
route::post('/changepass/{id}','AdminController@changepassword');


//clients
//route::get('/client/clientlist','ClientController@index');
route::get('/client/clientlist/{name}','ClientController@viewlistclient');

route::get('/client/Clientpage/{id}','ClientController@viewclientdata');
route::get('/admin/client/addclient','ClientController@addclient');
route::Post('/addclient','ClientController@saveaddclient');
route::delete('/deleteclient/{id}','ClientController@hapusdata');
route::get('/admin/client/clientlist','ClientController@index2');
route::get('/admin/client/Clientpage/{id}','ClientController@viewclientdata_admin');
route::post('/updateclient/{id}','ClientController@updateclient');

//useraccess
route::get('/admin/useracess/list','UseraccessController@getuseraccess');
route::get('/admin/useracess/add','AdminController@moduleadduser');
route::Post('/adduseraccess','UseraccessController@adduser');
route::delete('/deluseraccess/{id}','ClientAccessController@deldata');


//clientaccess 
route::get('/admin/clientaccess/list','ClientAccessController@getclientaccess');
route::get('/admin/clientaccess/add','AdminController@moduleadduserclient');
route::Post('/addclientaccess','ClientAccessController@savenew');




