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

Route::get('master', 'AdminController@index')->name('admin');
Route::get('user', 'UserController@index')->name('user');

Route::get('masterkomponen','KomponenController@show')->name('masterkomponen');
Route::get('masteraddkomponen','KomponenController@addKomponen')->name('create.komponen');
Route::post('masteraddkomponen/store','KomponenController@store')->name('store.komponen');
Route::delete('masterkomponen/{id}','KomponenController@destroy')->name('komponen.destroy');
Route::get('mastereditkomponen/{id}/edit','KomponenController@edit')->name('komponen.edit');
Route::patch('mastereditkomponen/{id}','KomponenController@update')->name('komponen.update'); 

Route::get('mastermekanisme','MekanismeController@show')->name('mastermekanisme');
Route::get('masteraddmekanisme','MekanismeController@addMekanisme')->name('create.mekanisme');
Route::post('masteraddmekanisme/store','MekanismeController@store')->name('store.mekanisme');
Route::delete('mastermekanisme/{id}','MekanismeController@destroy')->name('destroy.mekanisme');
Route::get('mastereditmekanisme/{id}/edit','MekanismeController@edit')->name('edit.mekanisme');
Route::patch('mastereditmekanisme/{id}','MekanismeController@update')->name('update.mekanisme');



Route::get('userkomponen','KomponenController@showUser')->name('userkomponen');
Route::get('usermekanisme','MekanismeController@showUser')->name('usermekanisme');


//BAGIAN PROSES KESEJAHTERAAN SOSIAL

// Route Alternatif Kesejahteraan Sosial
Route::get('alternatifkesejahteraan','AlternatifkesejahteraanController@show')->name('alternatifkesejahteraan');
Route::get('alternatifkesejahteraan/input-data','AlternatifkesejahteraanController@addAlternatifkesejahteraan')->name('input.alternatifkesejahteraan');
Route::post('alternatifkesejahteraan/input-data/store','AlternatifkesejahteraanController@store')->name('store.alternatifkesejahteraan');
Route::get('edit-alternatifkesejahteraan/edit-data/{id}','AlternatifkesejahteraanController@edit')->name('edit.alternatifkesejahteraan');
Route::patch('edit-alternatifkesejahteraan/{id}','AlternatifkesejahteraanController@update')->name('update.alternatifkesejahteraan');
Route::delete('alternatifkesejahteraan/{id}','AlternatifkesejahteraanController@destroy')->name('destroy.alternatifkesejahteraan');

// Route Kriteria Kesejahteraan Sosial
Route::get('kriteriakesejahteraan','KriteriakesejahteraanController@show')->name('kriteriakesejahteraan');
Route::get('kriteriakesejahteraan/input-data','KriteriakesejahteraanController@addKriteriakesejahteraan')->name('input.kriteriakesejahteraan');
Route::post('kriteriakesejahteraan/input-data/store','KriteriakesejahteraanController@store')->name('store.kriteriakesejahteraan');
Route::get('edit-kriteriakesejahteraan/edit-data/{id}','KriteriakesejahteraanController@edit')->name('edit.kriteriakesejahteraan');
Route::patch('edit-kriteriakesejahteraan/{id}','KriteriakesejahteraanController@update')->name('update.kriteriakesejahteraan');
Route::delete('kriteriakesejahteraan/{id}','KriteriakesejahteraanController@destroy')->name('destroy.kriteriakesejahteraan');

//Route Sub Kriteria Kesehjahteraan Sosial 
Route::get('skripkesejahteraan','SkripkesejahteraanController@show')->name('skripkesejahteraan'); 
Route::get('skripkesejahteraan/input-data','SkripkesejahteraanController@viewDataKriteria')->name('input.skripkesejahteraan');
Route::post('skripkesejahteraan/input-data/store','SkripkesejahteraanController@store')->name('store.skripkesejahteraan');

// route Nilai Alternatif
Route::get('nilaialternatifkesejahteraan','NilaiController@nilaiAlternatifKesejahteraan')->name('nilai.alternatifkesejahteraan');
Route::get('input-nilaialternatifkesejahteraan','NilaiController@addNilai')->name('input.nilaialternatifkesejahteraan');

