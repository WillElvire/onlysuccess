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

Route::get('/', function () {
    return view('layout/home');
});

Route::get('/tableaux',function(){
     return View('layout/tableaux');
});

Route::get('/contact',function(){

    return View('layout/contact');

});


//route action
Route::group(['prefix'=>'action'],function(){

    Route::get('/inscription',function(){
         return View('layout/inscription');
    });

    Route::post('/inscription','InscriptionController@shop');
    Route::get('/validation',function(){
          return View('layout/validation');
    });
    

});

//route user
Route::group(['prefix'=>"user"],function(){

    Route::get('/connection',function(){
         return View('user/partials/connection');
    });
    Route::post('/connection','authentificationController@register');

    Route::get('/home/{id}','profilController@index');

    Route::get('/historique',function(){
         return View('user/partials/historique');
    });
      Route::get('/investissement/{id}',function($id){

            if(session('id')!=$id):

                return view('user/partials/investissement');
            else:

                return redirect('/user/connection');

            endif;

            
      });
});

//route admin

Route::group(['prefix'=>'admin'],function(){




});