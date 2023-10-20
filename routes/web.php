<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Scene;
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
Auth::routes();



Route::group(['middleware' => ['auth','Admin']], function () {
 
    Route::get('/admin', 'HomeController@index')->name('home');
   
    Route::get('/configuration', 'SceneController@index')->name('config');
    Route::get('/ConfigHotspot', 'HotspotController@index')->name('configHotspot');

    Route::get('/addScenes', 'SceneController@addSceneCampus')->name('addScenes');
    Route::get('/addHotspots', 'HotspotController@addHotspt')->name('addHotspots');
    Route::get('/Profile', 'CreateAccountController@index')->name('createAccountUser');
    Route::post('/createAccount', 'CreateAccountController@createAccount')->name('createAccount');

    Route::get('/Account','ManageAccountController@index')->name('adminAccount');
    Route::get('/showprofile','ManageAccountController@showAccount')->name('adminAccountManage');
    Route::put('/setFScene/{id}', 'ManageAccountController@status')->name('accountprofile');

    Route::get('/profile', 'UserController@index')->name('profil');
    Route::get('/ubahPassword', 'PasswordController@index')->name('ubahPassword');

    Route::get('/dataScene', 'SceneController@dataScene')->name('dataScene');
    Route::get('/dataHotspot', 'SceneController@dataHotspot')->name('dataHotspot');

    Route::post('/changePassword', 'PasswordController@store')->name('changePassword');
    Route::post('/addScene', 'SceneController@store')->name('addScene');
    Route::post('/addHotspot', 'HotspotController@store')->name('addHotspot');

    Route::get('/showScene/{id}', 'SceneController@show')->name('showScene');
    Route::get('/showHotspot/{id}', 'HotspotController@show')->name('showHotspot');

    Route::put('/editScene/{id}', 'SceneController@update')->name('editScene');
    Route::put('/editHotspot/{id}', 'HotspotController@update')->name('editHotspot');
    Route::put('/editprofile/{id}', 'UserController@update')->name('editProfil');

    Route::get('/RegisterAccount','Auth/RegisterController.php@showRegistrationForm')->name('Register');

    Route::put('/setFScene/{id}', 'SceneController@status')->name('changeFScene');

    Route::delete('/delUser/{id}', 'UserController@destroy')->name('delProfil');
    Route::delete('/delScene/{id}', 'SceneController@destroy')->name('delScene');
    Route::delete('/delHotspot/{id}', 'HotspotController@destroy')->name('delHotspot');
 
});


Route::get('/', 'SceneController@Welcome')->name('welcome');
Route::get('/interface', 'MainInterfaceController@interface')->name('mainpage');
//Route::get('/search', 'search@index')->name('search');
Route::get('/autoComplete', 'MainInterfaceController@SearchData')->name('autocomplete');
Route::get('/get-data', 'MainInterfaceController@getData')->name('get.data');
Route::get('/search', [search::class, 'index']);
Route::get('/ajax-autocomplete-search', 'search@selectSearch')->name('searchdata');