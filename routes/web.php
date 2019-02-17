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

Route::resources([
  'projects'             => 'ProjectController',
  'development_statuses' => 'DevelopmentStatusController',
  'clients'              => 'ClientController',
  'payment_methods'      => 'PaymentMethodController',
  'platforms'            => 'PlatformController'
]);
