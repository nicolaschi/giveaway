<?php

use App\Http\Controllers\LogController;
use App\Http\Controllers\campaignController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LgadminController;
use App\Http\Controllers\LgagentController;
use App\Http\Controllers\CadminController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\admin;
use App\Http\Middleware\ladmin;

use App\Http\Controllers\RegisterController;


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



Route::get('/', [LogController::class,'index']);



/*SUPER ADMIN*/

  Route::get('/dashboard',[HomeController::class, 'dashboard']);
  Route::get('/profile',[HomeController::class, 'profile']);
  Route::get('/editprofile',[HomeController::class, 'editprofile']);
  Route::post('/adduser',[HomeController::class, 'adduser']);
  Route::post('/camp',[HomeController::class, 'camp']);
  Route::get('/createuser',[HomeController::class, 'createuser']);
  Route::get('/users',[HomeController::class, 'users']);
  Route::get('/updateuser/{id}',[HomeController::class, 'updateuser']);
  Route::post('/updatua/{id}',[HomeController::class, 'updatua']);
  Route::get('/approve/{id}',[HomeController::class, 'approve']);
  Route::get('/deny/{id}',[HomeController::class, 'deny']);
  Route::get('/createcampaign',[HomeController::class, 'createcampaign']);
  Route::get('/campaign',[HomeController::class, 'campaign']);
  Route::get('/registeeredusers',[HomeController::class, 'registeeredusers']);
  Route::get('/createlga',[HomeController::class, 'createlga']);
  Route::post('/addlga',[HomeController::class, 'addlga']);
  Route::get('/lga',[HomeController::class, 'lga']);
  Route::post('/import', [campaignController::class, 'import']);
  Route::get('/employed',[HomeController::class, 'employed']);
  Route::get('/unemployed',[HomeController::class, 'unepmloyed']);
  Route::get('/married',[HomeController::class, 'married']);
  Route::get('/single',[HomeController::class, 'single']);
  Route::get('/widowed',[HomeController::class, 'widowed']);
  Route::post('/importt', [HomeController::class, 'importt']);



  /* ADMIN CO*/


  Route::get('/sdashboard',[CadminController::class, 'sdashboard']);
  Route::get('/sprofile',[CadminController::class, 'sprofile']);
  Route::get('/seditprofile',[CadminController::class, 'seditprofile']);
  Route::get('/screatecampaign',[CadminController::class, 'screatecampaign']);
  Route::get('/sregisteeredusers',[CadminController::class, 'sregisteeredusers']);
  Route::post('/import', [campCadminController::class, 'import']);


/* LGA ADMIN */

   Route::get('/ldashboard',[LgadminController::class, 'ldashboard']);
   Route::get('/lprofile',[LgadminController::class, 'lprofile']);
   Route::get('/leditprofile',[LgadminController::class, 'leditprofile']);
   Route::post('/adduser',[LgadminController::class, 'adduser']);
   Route::get('/lcreateuser',[LgadminController::class, 'lcreateuser']);
   Route::get('/lusers',[LgadminController::class, 'lusers']);
   Route::get('/lagents',[LgadminController::class, 'lagents']);
   Route::get('/portfolio',[LgadminController::class, 'portfolio']);
   Route::get('/buy',[LgadminController::class, 'buy']);
   Route::get('/sell',[LgadminController::class, 'sell']);
   Route::get('/enti',[LgadminController::class, 'enti']);
   Route::get('/contact',[LgadminController::class, 'contact']);


/* LGA AGENT */

   Route::get('/adashboard',[LgagentController::class, 'adashboard']);
   Route::get('/asingle',[LgagentController::class, 'asingle']);
   Route::get('/aprofile',[LgagentController::class, 'aprofile']);
   Route::get('/aeditprofile',[LgagentController::class, 'aeditprofile']);
   Route::get('/ausers',[LgagentController::class, 'ausers']);

   Route::get('/payment/callback', [App\Http\Controllers\PaymentController::class, 'handleGatewayCallback']);








