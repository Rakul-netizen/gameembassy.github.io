<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Card\Card1Controller;
use App\Http\Controllers\control\ContactController;
use App\Http\Controllers\createblog\AdminBlogController;
use App\Http\Controllers\createblog\CreateBlogController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

// loginregisterroute
Route::get('/register', [RegisterController::class, 'show'])->name('register');
Route::post('register', [RegisterController::class, 'store'])->middleware(['auth:admin']);

Route::get('/login', [LoginController::class, 'show'])->name('login');
Route::post('login', [LoginController::class, 'authenticate']);



Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


Route::get('/', function () {
    return view('home');
});
Route::get('/', [AdminBlogController::class, 'newcards']);
Route::post('createblog', [CreateBlogController::class, 'createblog']);
Route::post('send', [ContactController::class, 'send']);

Route::get('/contact',[ContactController::class,'contact']);
Route::get('/messageview',[ContactController::class,'usermessage'])->middleware(['auth','can:admin-access']);
Route::get('/contact', [ContactController::class, 'contactcontrol']);
Route::view('/about', 'about');

Route::get('/admin/dashboard',[DashboardController::class,'index'])->middleware(['auth','can:admin-access']);

Route::get('/admin',[AdminBlogController::class,'admin'])->middleware(['auth','can:admin-access']);

Route::get('/blogcardedit',[AdminBlogController::class,'blogcards'])->middleware(['auth','can:admin-access']);

Route::post('adminblogs', [AdminBlogController::class, 'adminblog'])->middleware(['auth','can:admin-access']);
Route::get('/admin/viewcardsrow1/view/{id}',[AdminBlogController::class,'viewes'])->middleware('auth','can:admin-access');


Route::get('/blog', [AdminBlogController::class, 'cards']);
Route::get('/blogcards/{id}', [AdminBlogController::class, 'show']);
Route::get('/card1/row1card/{id}', [AdminBlogController::class, 'showpage1'])->name('card1.show');
Route::get('/card2/row1card/{id}', [AdminBlogController::class, 'showpage2'])->name('card2.show');
Route::get('/card3/row1card/{id}', [AdminBlogController::class, 'showpage2'])->name('card3.show');
Route::get('/card4/row1card/{id}', [AdminBlogController::class, 'showpage2'])->name('card4.show');
Route::get('/card5/row1card/{id}', [AdminBlogController::class, 'showpage2'])->name('card5.show');
Route::get('/card6/row1card/{id}', [AdminBlogController::class, 'showpage2'])->name('card6.show');
Route::get('/card7/row1card/{id}', [AdminBlogController::class, 'showpage2'])->name('card7.show');
Route::get('/card8/row1card/{id}', [AdminBlogController::class, 'showpage2'])->name('card8.show');
Route::get('/card9/row1card/{id}', [AdminBlogController::class, 'showpage2'])->name('card9.show');
Route::get('/card10/row1card/{id}', [AdminBlogController::class, 'showpage2'])->name('card10.show');
Route::get('/card11/row1card/{id}', [AdminBlogController::class, 'showpage2'])->name('card11.show');
Route::get('/card12/row1card/{id}', [AdminBlogController::class, 'showpage2'])->name('card12.show');
Route::get('/card13/row1card/{id}', [AdminBlogController::class, 'showpage2'])->name('card13.show');
Route::get('/card14/row1card/{id}', [AdminBlogController::class, 'showpage2'])->name('card14.show');
Route::get('/card15/row1card/{id}', [AdminBlogController::class, 'showpage2'])->name('card15.show');
Route::get('/card16/row1card/{id}', [AdminBlogController::class, 'showpage2'])->name('card16.show');
Route::get('/card17/row1card/{id}', [AdminBlogController::class, 'showpage2'])->name('card17.show');
Route::get('/card18/row1card/{id}', [AdminBlogController::class, 'showpage2'])->name('card18.show');
Route::get('/card19/row1card/{id}', [AdminBlogController::class, 'showpage2'])->name('card19.show');
Route::get('/card20/row1card/{id}', [AdminBlogController::class, 'showpage2'])->name('card20.show');

Route::get('/viewblogcards',[AdminBlogController::class,'viewblogcards'])->middleware(['auth','can:admin-access']);
Route::get('/', [AdminBlogController::class, 'showLatestRelease']);



Route::post('row{id}', [Card1Controller::class, 'rows'])->middleware(['auth','can:admin-access']);
Route::get('/cards', [Card1Controller::class, 'index'])->middleware(['auth','can:admin-access'])->name('cards.index');

// social media
Route::get('/instagram', function () {
    return redirect('https://www.instagram.com/game_embassy?igsh=MWdjeXk0MTQ3bDViYQ==');
});

Route::get('/youtube', function () {
    return redirect('https://youtube.com/@thegameembassy-m5k?si=sZ-GevlTf5rnWBOQ');
});

Route::get('/facebook', function () {
    return redirect('https://www.facebook.com/share/14HmNENwXe9/');
});
