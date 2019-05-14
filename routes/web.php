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

Route::get('/', "LoginController@index");

//pour s'authentifier à la plateforme partenaire, route par defaut
Route::get('/api', function(){
    $client = new \GuzzleHttp\Client();
    $request = $client->get('http://w.png');
});
Route::post('/authenticate', function($email, $pwd){
    return "welcome";
});

Route::get('/httpd', "LoginController@admin");

Route::post('/auth', "LoginController@auth");

//creation d'un compte client
Route::get('/client/new', "ClientController@new");

//creation effectif d'un nouvel utilisateur
Route::post('/client/new/save', "ClientController@save_new_customer");

//activation d'un compte client
Route::get('/client/activate', "ClientController@activate");

//credit d'un compte client
Route::get('/client/credit', "ClientController@credit");

//debit d'un compte client
Route::get('/client/debit', "ClientController@debit");

//Blocage d'un compte client
Route::get('/client/lock', "ClientController@lock");

//deblcage d'un compte client
Route::get('/client/unlock', "ClientController@unlock");

//Messagerie
Route::get('/client/messagerie', "ClientController@messagerie");

//pour se deconnecter
Route::get('client/logout', "LoginController@logout");
