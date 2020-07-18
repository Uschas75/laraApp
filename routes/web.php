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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/master','AppController@master')->name('master');
Route::get('/master1','AppController@master1')->name('master1');

Route::get('/index','AppController@index')->name('index');

/*dashboard route*/
Route::group(['prefix' => 'dashboard'], function()
{
    Route::get('/v1','dashboardController@dashboard_v1')->name('dashboard_v1');
    Route::get('/v2','dashboardController@dashboard_v2')->name('dashboard_v2');
    Route::get('/v3','dashboardController@dashboard_v3')->name('dashboard_v3');
    Route::get('/v4','dashboardController@dashboard_v4')->name('dashboard_v4');
});


/*\dashboard route*/

/*ui kits routes*/
Route::group(['prefix' => 'ui_kits'], function()
{
    Route::get('/alerts','ui_kitsController@alerts')->name('alerts');
    Route::get('/accordion','ui_kitsController@accordion')->name('accordion');
    Route::get('/badges','ui_kitsController@badges')->name('badges');
    Route::get('/buttons','ui_kitsController@buttons')->name('buttons');
    Route::get('/cards','ui_kitsController@cards')->name('cards');
    Route::get('/card_metrics','ui_kitsController@card_metrics')->name('card_metrics');
    Route::get('/carousel','ui_kitsController@carousel')->name('carousel');
    Route::get('/lists','ui_kitsController@lists')->name('lists');
    Route::get('/pagination','ui_kitsController@pagination')->name('pagination');
    Route::get('/popover','ui_kitsController@popover')->name('popover');
    Route::get('/progressbar','ui_kitsController@progressbar')->name('progressbar');
    Route::get('/tables','ui_kitsController@tables')->name('tables');
    Route::get('/tabs','ui_kitsController@tabs')->name('tabs');
    Route::get('/tooltip','ui_kitsController@tooltip')->name('tooltip');
    Route::get('/modals','ui_kitsController@modals')->name('modals');
    Route::get('/nouislide','ui_kitsController@nouislide')->name('nouislide');
});


/*\ui kits routes*/

/*extra kits routes*/

Route::group(['prefix' => 'extra_kits'], function()
{
    Route::get('/image_cropper','extra_kitsController@image_cropper')->name('image_cropper');
    Route::get('/loaders','extra_kitsController@loaders')->name('loaders');
    Route::get('/ladda_button','extra_kitsController@ladda_button')->name('ladda_button');
    Route::get('/toastr','extra_kitsController@toastr')->name('toastr');
    Route::get('/sweet_alerts','extra_kitsController@sweet_alerts')->name('sweet_alerts');
    Route::get('/tour','extra_kitsController@tour')->name('tour');
    Route::get('/upload','extra_kitsController@upload')->name('upload');
});


/*\extra kits routes*/

/*apps routes*/

Route::group(['prefix' => 'apps'], function()
{

    Route::get('/invoice','appsController@invoice')->name('invoice');
    Route::get('/inbox','appsController@inbox')->name('inbox');
    Route::get('/chat','appsController@chat')->name('chat');

});

/*\apps routes*/

/*forms routes*/
Route::group(['prefix' => 'forms'], function()
{

    Route::get('/form_basic','formsController@form_basic')->name('form_basic');
    Route::get('/form_layouts','formsController@form_layouts')->name('form_layouts');
    Route::get('/form_input_group','formsController@form_input_group')->name('form_input_group');
    Route::get('/form_validation','formsController@form_validation')->name('form_validation');
    Route::get('/smart_wizard','formsController@smart_wizard')->name('smart_wizard');
    Route::get('/tag_input','formsController@tag_input')->name('tag_input');
    Route::get('/editor','formsController@editor')->name('editor');
});


/*\forms routes*/

/*datatables routes*/
Route::get('/datatables','AppController@datatables')->name('datatables');

/*\datatables routes*/


/*sessions routes*/
Route::group(['prefix' => 'sessions'], function()
{

    Route::get('/signin','sessionsController@signin')->name('signin');
    Route::get('/signup','sessionsController@signup')->name('signup');
    Route::get('/forgot','sessionsController@forgot')->name('forgot');
});


/*\sessions routes*/

/*others routes*/
Route::group(['prefix' => 'others'], function()
{
    Route::get('/not_found','othersController@not_found')->name('not_found');
    Route::get('/user_profile','othersController@user_profile')->name('user_profile');
    Route::get('/blank','othersController@blank')->name('blank');
});

/*\others routes*/
