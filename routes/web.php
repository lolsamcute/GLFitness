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

use Illuminate\Support\Facades\Route;

Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    // return what you want
});

Route::get('/', 'WelcomeController@glfitness')->name('glfitness');
Route::get('/about', 'WelcomeController@about')->name('about');
Route::get('/trainers', 'WelcomeController@trainers')->name('trainers');
Route::get('/trainersView', 'WelcomeController@trainersView')->name('trainersView');
Route::get('/classes', 'WelcomeController@classes')->name('classes');
Route::get('/classesView', 'WelcomeController@classesView')->name('classesView');
Route::get('/gym', 'WelcomeController@gym')->name('gym');
Route::get('/games_vr', 'WelcomeController@games_vr')->name('games_vr');
Route::get('/beauty_studio', 'WelcomeController@beauty_studio')->name('beauty_studio');
Route::get('/lounge_swimming', 'WelcomeController@lounge_swimming')->name('lounge_swimming');

Route::get('/food_nutrition', 'WelcomeController@food_nutrition')->name('food_nutrition');

Route::get('/contact', 'WelcomeController@contact')->name('contact');
Route::post('/contact', 'WelcomeController@contactPost')->name('contactPost');

Route::get('/become_a_member', 'WelcomeController@become_a_member')->name('become_a_member');
Route::get('/become_a_member_form', 'WelcomeController@become_a_member_form')->name('become_a_member_form');
Route::post('/become_a_member', 'WelcomeController@become_a_memberPost')->name('become_a_memberPost');
Route::post('/become_a_memberExisiting', 'WelcomeController@become_a_memberExPost')->name('become_a_memberExPost');

Route::get('/spa_appointment', 'WelcomeController@appointments')->name('appointments');
Route::post('/spa_appointment', 'WelcomeController@appointmentsPost')->name('appointmentsPost');

Route::get('/paymentCheckout/{member_id}', 'WelcomeController@paymentCheckout')->name('paymentCheckout');


Auth::routes();

// Admin Group
Route::group(['as'=>'admin.', 'prefix' => 'admin', 'middleware' => 'auth' ], function(){

    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
    Route::resource('employee', 'EmployeeController');
    Route::resource('customer', 'CustomerController');
    Route::resource('attendance', 'AttendanceController');
    Route::put('attendance/{attendance?}', 'AttendanceController@att_update')->name('attendance.att_update');
    Route::resource('supplier', 'SupplierController');
    Route::resource('advanced_salary', 'AdvancedSalaryController');
    Route::resource('salary', 'SalaryController');
    Route::resource('category', 'CategoryController');
    Route::resource('product', 'ProductController');
    Route::resource('expense', 'ExpenseController');
    Route::get('expense-today', 'ExpenseController@today_expense')->name('expense.today');
    Route::get('expense-month/{month?}', 'ExpenseController@month_expense')->name('expense.month');
    Route::get('expense-yearly/{year?}', 'ExpenseController@yearly_expense')->name('expense.yearly');

    Route::get('setting', 'SettingController@index')->name('setting.index');
    Route::put('setting/{id}', 'SettingController@update')->name('setting.update');

    Route::resource('pos', 'PosController');

    Route::get('order/show/{id}', 'OrderController@show')->name('order.show');
    Route::get('order/pending', 'OrderController@pending_order')->name('order.pending');
    Route::get('order/approved', 'OrderController@approved_order')->name('order.approved');
    Route::get('order/confirm/{id}', 'OrderController@order_confirm')->name('order.confirm');
    Route::delete('order/delete/{id}', 'OrderController@destroy')->name('order.destroy');
    Route::get('order/download/{id}', 'OrderController@download')->name('order.download');

    Route::get('sales-today', 'OrderController@today_sales')->name('sales.today');
    Route::get('sales-monthly/{month?}', 'OrderController@monthly_sales')->name('sales.monthly');
    Route::get('sales-total','OrderController@total_sales')->name('sales.total');

    Route::resource('cart', 'CartController');

    Route::post('invoice', 'InvoiceController@create')->name('invoice.create');
    Route::get('print/{customer_id}', 'InvoiceController@print')->name('invoice.print');
    Route::get('order-print/{order_id}', 'InvoiceController@order_print')->name('invoice.order_print');
    Route::post('invoice-final', 'InvoiceController@final_invoice')->name('invoice.final_invoice');

});
