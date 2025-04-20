<?php

use App\Models\Buku;
use App\Models\Paket;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::get('/', 'BerandaController@home')->name('landing');
Route::get('/login', 'HomeController@redirectAdmin')->name('index');
Route::get('/home', 'HomeController@index')->name('home');




// Rute untuk halaman utama
Route::view('/', 'pidana.landing-page')->name('home');

// Rute untuk halaman News
Route::get('/news', function () {
    return view('pidana.news');
})->name('news');

// Rute untuk halaman Ruang Konsultasi
Route::get('/ruang-konsultasi', function () {
    return view('pidana.ruang-konsultasi');
})->name('ruang-konsultasi');


// Rute untuk halaman About
Route::get('/library', function () {
    $data['data'] = Paket::orderBy('created_at', 'desc')->whereNull('deleted_at')->get();
    $data['buku'] = Buku::orderBy('created_at', 'desc')->get();

    return view('pidana.library',$data);
})->name('library.index');

Route::get('/about', function () {
    return view('pidana.about');
})->name('about');

Route::get('/galeri-foto', function () {
    return view('pidana.galeri-foto');
})->name('galeri-foto');



// Rute untuk halaman hotline Berita Utama
Route::get('/berita-utama/hotline1', function () {
    return view('berita-utama.hotline1');
})->name('berita-utama.hotline1');

Route::get('/berita-utama/hotline1', function () {
    $comments = DB::table('comments')->where('post_id', 1)->get(); // Asumsi post_id 1 untuk Hotline 1
    return view('berita-utama.hotline1', compact('comments'));
})->name('berita-utama.hotline1');

Route::get('/berita-utama/hotline2', function () {
    return view('berita-utama.hotline2');
})->name('berita-utama.hotline2');

Route::get('/berita-utama/hotline3', function () {
    return view('berita-utama.hotline3');
})->name('berita-utama.hotline3');

Route::get('/berita-utama/hotline4', function () {
    return view('berita-utama.hotline4');
})->name('berita-utama.hotline4');

Route::get('/berita-utama/hotline5', function () {
    return view('berita-utama.hotline5');
})->name('berita-utama.hotline5');

// Rute untuk halaman hotline ARTIKEL

// Artikel 1
Route::get('/artikel/artikel1', function () {
    return view('pidana.artikel.artikel1');
})->name('artikel.artikel1');

// Artikel 2
Route::get('/artikel/artikel2', function () {
    return view('pidana.artikel.artikel2');
})->name('artikel.artikel2');

// Artikel 3
Route::get('/artikel/artikel3', function () {
    return view('pidana.artikel.artikel3');
})->name('artikel.artikel3');

// Artikel 4
Route::get('/artikel/artikel4', function () {
    return view('pidana.artikel.artikel4');
})->name('artikel.artikel4');

// Artikel 5
Route::get('/artikel/artikel5', function () {
    return view('pidana.artikel.artikel5');
})->name('artikel.artikel5');

// Rute untuk halaman hotline newss

// newss 1
Route::get('/newss/news1', function () {
    return view('pidana.newss.news1');
})->name('newss.news1');

// newss 2
Route::get('/newss/news2', function () {
    return view('pidana.newss.news2');
})->name('newss.news2');

// newss 3
Route::get('/newss/news3', function () {
    return view('pidana.newss.news3');
})->name('newss.news3');

// newss 4
Route::get('/newss/news4', function () {
    return view('pidana.newss.news4');
})->name('newss.news4');

// newss 5
Route::get('/newss/news5', function () {
    return view('pidana.newss.news5');
})->name('newss.news5');

Route::get('/admin/register', 'BerandaController@register')->name('admin-register');
Route::post('/admin/register/store', 'BerandaController@registerStore')->name('admin-register-store');
Route::post('/generate-snap-token/{id_paket}', 'BerandaController@generateSnapToken')->name('generate-snap-token');
Route::get('/checkout/{id_paket}', 'BerandaController@checkout')->name('checkout');
Route::post('/store-transaction', 'BerandaController@storeTransaction')->name('store-transaction');
Route::get('/sendWhatsAppNotification/{no_wa}/{id_transaksi}', 'BerandaController@sendWhatsAppNotification')->name('sendWhatsAppNotification');
Route::get('/success-payment', 'BerandaController@successPayment')->name('payment-success');
Route::get('/check-auth', function () {
    return response()->json([
        'logged_in' => Auth::guard('admin')->check()
    ]);
});
Route::get('/check-paket', function () {

    if (Auth::guard('admin')->check() != null) {
        $masa_aktif = Auth::guard('admin')->user()->expired_date;
        if(!empty($masa_aktif)){
            if($masa_aktif >= date('Y-m-d')){
                $subs = 'Ya';
            }else{
                $subs = 'Tidak';
            }
        }else{
            $subs = 'Tidak';
        }
    }else{
        $subs = 'Tidak';
    }
    
    return response()->json([
        'is_subs' => $subs
    ]);
});
/**
 * Admin routes
 */
Route::group(['prefix' => 'admin'], function () {
    Route::get('/', 'Backend\DashboardController@index')->name('admin.dashboard');
    Route::resource('roles', 'Backend\RolesController', ['names' => 'admin.roles']);
    Route::resource('users', 'Backend\UsersController', ['names' => 'admin.users']);
    Route::resource('admins', 'Backend\AdminsController', ['names' => 'admin.admins']);


    Route::group(['prefix' => 'buku'], function () {
        Route::get('/', 'Backend\BukuController@index')->name('buku');
        Route::get('create', 'Backend\BukuController@create')->name('buku.create');
        Route::post('store', 'Backend\BukuController@store')->name('buku.store');
        Route::get('edit/{id}', 'Backend\BukuController@edit')->name('buku.edit');
        Route::post('update/{id}', 'Backend\BukuController@update')->name('buku.update');
        Route::get('destroy/{id}', 'Backend\BukuController@destroy')->name('buku.destroy');
    });

    Route::group(['prefix' => 'paket'], function () {
        Route::get('/', 'Backend\PaketController@index')->name('paket');
        Route::get('create', 'Backend\PaketController@create')->name('paket.create');
        Route::post('store', 'Backend\PaketController@store')->name('paket.store');
        Route::get('edit/{id}', 'Backend\PaketController@edit')->name('paket.edit');
        Route::post('update/{id}', 'Backend\PaketController@update')->name('paket.update');
        Route::get('destroy/{id}', 'Backend\PaketController@destroy')->name('paket.destroy');
        Route::get('checkout/{id}', 'Backend\PaketController@checkout')->name('paket.checkout');
        Route::get('payment-success', 'Backend\PaketController@successPage')->name('paket.payment-success');
        Route::get('history', 'Backend\PaketController@history')->name('paket.history');
    });

    // Login Routes
    Route::get('/login', 'Backend\Auth\LoginController@showLoginForm')->name('admin.login');
    Route::post('/login/submit', 'Backend\Auth\LoginController@login')->name('admin.login.submit');

    // Logout Routes
    Route::post('/logout/submit', 'Backend\Auth\LoginController@logout')->name('admin.logout.submit');

    // Forget Password Routes
    Route::get('/password/reset', 'Backend\Auth\ForgetPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/password/reset/submit', 'Backend\Auth\ForgetPasswordController@reset')->name('admin.password.update');
});
