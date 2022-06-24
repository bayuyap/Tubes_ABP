<?php

use App\Http\Controllers\AdminCategoryController;
use App\Models\Category;
use Doctrine\DBAL\Schema\Index;
use App\Notifications\TestEnrollment;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ScanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TicketDataController;
use App\Http\Controllers\DashboardPostController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
    return view('home', [
        "title" => "Home",
        "active" => "home"
    ]);
});
Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "active" => "about"
    ]);
});




Route::get('/posts', [PostController::class, 'index']);

Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        'active' => 'categories',
        'categories' => Category::all()
    ]);
});

Route::get('/payment', function () {
    return view('payment', [
        "title" => "Payment",
        "active" => "payment"
    ]);
});
// Route::get('/uVBDNAhyagdkKADYWI-AsdsdhaJAHDWOIUEYHNM', function () {
//     return view('ticket', [
//         "title" => "Ticket",
//         "active" => "ticket"
//     ]);
// })->middleware('auth');


Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/formticket', [TicketController::class, 'formticket'])->middleware('auth');
Route::post('/formticket', [TicketController::class, 'store']);

Route::get('/myticket', [TicketController::class, 'show'])->middleware('auth');
// Route::post('/scan', [ScanController::class, 'index'])->middleware('auth');
Route::get('/list', [ScanController::class, 'index'])->middleware('auth');
Route::post('validasi/qrcode', [TicketController::class, 'validasiQRcode'])->name('validasiqrcode')->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth');

Route::get('/profile', [ProfileController::class, 'index'])->middleware('guest');

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');

Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');
Route::get('/send/tickets', [TicketDataController::class, 'sendTicketNotification'])->middleware('auth');

Route::get('/payments', [PaymentController::class, 'payment']);

Route::get('/shops', function () {
    return view('shop.index', [
        "title" => "Shop",
        "active" => "shop"
    ]);
});
Route::get('/scan', function () {
    return view('scan.index', [
        "title" => "Scan",
        "active" => "scan"
    ]);
});


Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');
