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
Route::get('/profile', function () {
      return view('layout.profile');
      
  });
route::get('account',function() {
        return view('layout.account');
});
route::get('upo',function() {
      return view('layout.upo');
});
Route::get('/newuser',function()
{
      return view('layout.newuser');
});
route::get('/off',function() {
     return view('layout.off');
});
Route::get('/passreset',function()
{
      return view('layout.forgotpass');
});
Route::get('/forgot_id',function()
{
      return view('layout.forgotid');
});
route::post('/userss','UserController@index');
Route::get('/admin',function()
{
      return view('layout.admin');
});
/*Route::post('/admin','MyController@create');*/

Route::get('/adminpage',function()
{
      return view('layout.adminpage');
});
Route::get('/logim',function(){
      return view('layout.login');
});
Route::get('/createid',function() {
             return view('layout.createid');
});
Route::post('/fresh',function() {
      return view('include.feresher');
});
Route::get('/update', function(){
      return view('layout.update');
});
/*Route::get('/login',[
    'uses' => 'MyController@index',
    'as' => 'login'
]);*/
route::post('hellos','UserController@store');
Route::resource('banks','MyController');
Route::resource('users','UserController');

Route::resource('admins','AdminController');
Auth::routes();



