<?php

use App\AlatModel;
use App\GuruModel;
use App\BarangModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlatController;

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

// Route::get('/', function () {
//     return view('welcome');
// });



// Front End
// Route::get('/','FrontEndController@index', function () {
//     $jumlahguru = GuruModel::count();
//     $jumlahbarangrpl = AlatModel::count();
//     $jumlahbarangtkj = BarangModel::count();
//     // $jumlahpegawailaki = Employee::where('jeniskelamin','laki-laki')->count();
//     // $jumlahpegawaiperempuan = Employee::where('jeniskelamin','perempuan')->count();
//     return view('home',compact('jumlahguru','jumlahbarangrpl','jumlahbarangtkj'));
// })->middleware('auth');

Route::get('/','FrontEndController@index');

Route::get('tentang-jurusan','FrontEndController@jurusan');
Route::get('daftar-guru','FrontEndController@guru');
Route::get('daftar-siswa','FrontEndController@siswa');
Route::get('daftar-prestasi','FrontEndController@prestasi');
Route::get('daftar-alat','FrontEndController@alat');
Route::get('daftar-barang','FrontEndController@barang');

// Route::get('admin/home','HomeController@index');

//CRUD GURU
Route::get('guru/index','GuruController@index');
Route::get('guru/edit/{id}','GuruController@edit');
Route::get('guru/delete/{id}','GuruController@delete');
Route::post('guru/update/{id}','GuruController@update');
Route::get('guru/create','GuruController@create');
Route::post('guru/store','GuruController@store');


//CRUD SISWA
Route::get('siswa/index','SiswaController@index');
Route::get('siswa/edit/{id}','SiswaController@edit');
Route::get('siswa/delete/{id}','SiswaController@delete');
Route::post('siswa/update/{id}','SiswaController@update');
Route::get('siswa/create','SiswaController@create');
Route::post('siswa/store','SiswaController@store');

Route::resource('data-barang/barang','barangController');

//CRUD ALAT
Route::get('alat/index','AlatController@index');
Route::get('alat/edit/{id}','AlatController@edit');
Route::get('alat/delete/{id}','AlatController@delete')->name('delete');
Route::post('alat/update/{id}','AlatController@update');
Route::get('alat/create','AlatController@create');
Route::post('alat/store','AlatController@store');

//CRUD Barang
Route::get('barang/index','BarangController@index');
Route::get('barang/edit/{id}','BarangController@edit');
Route::get('barang/delete/{id}','BarangController@delete');
Route::post('barang/update/{id}','BarangController@update');
Route::get('barang/create','BarangController@create');
Route::post('barang/store','BarangController@store');

Route::get('/exportpdfguru','GuruController@exportpdfguru')->name('exportpdfguru');
Route::get('/exportpdfsiswa','SiswaController@exportpdfsiswa')->name('exportpdfsiswa');
Route::get('/exportpdfrpl','AlatController@exportpdfrpl')->name('exportpdfrpl');
Route::get('/exportpdftkj','BarangController@exportpdftkj')->name('exportpdftkj');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

