<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CdController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;

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
/* Admin Route*/

Route::group(['middleware' => 'prevent-back-history'],function(){

Route::prefix('admin')->group(function(){
    Route::get('/login', [AdminController::class, 'Index'])->name('login_form');

        Route::post('/login/owner', [AdminController::class, 'Login'])->name('admin.login');
        Route::get('/dashboard', [AdminController::class, 'Dashboard'])->name('admin.dashboard')->middleware('admin');
        Route::get('/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout')->middleware('admin');
        Route::get('/register', [AdminController::class, 'AdminRegister'])->name('admin.register');
        Route::get('/register/create', [AdminController::class, 'AdminRegisterCreate'])->name('admin.register.create');

});
/* end Admin Route*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/cdview', [CdController::class, 'CdView'])->name('cd.view');
Route::get('/cdadd', [CdController::class, 'CdAdd'])->name('cd.add');
Route::post('/cdstore', [CdController::class, 'CdStore'])->name('cd.store');
Route::get('cd/edit/{id}', [CdController::class, 'CdEdit'])->name('cd.edit');
Route::post('/cd/update/{id}', [CdController::class, 'CdUpdate'])->name('cd.update');
Route::get('cd/delete/{id}', [CdController::class, 'CdDelete'])->name('cd.delete');

Route::get('/gameview', [GameController::class, 'GameView'])->name('game.view');
Route::get('/gameadd', [GameController::class, 'GameAdd'])->name('game.add');
Route::post('/gamestore', [GameController::class, 'GameStore'])->name('game.store');
Route::get('game/edit/{id}', [GameController::class, 'GameEdit'])->name('game.edit');
Route::post('/game/update/{id}', [GameController::class, 'GameUpdate'])->name('game.update');
Route::get('game/delete/{id}', [GameController::class, 'GameDelete'])->name('game.delete');

Route::get('/bookview', [BookController::class, 'BookView'])->name('book.view');
Route::get('/add', [BookController::class, 'BookAdd'])->name('book.add');
Route::post('/store', [BookController::class, 'BookStore'])->name('book.store');
Route::get('book/edit/{id}', [BookController::class, 'BookEdit'])->name('book.edit');
Route::post('/book/update/{id}', [BookController::class, 'BookUpdate'])->name('book.update');
Route::get('/delete/{id}', [BookController::class, 'BookDelete'])->name('book.delete');


/* user */
Route::get('/userdashboard', [CdController::class, 'CdUserDashboard'])->name('user.dashboard');
Route::get('/cduserview', [CdController::class, 'CdUserView'])->name('cd.user.view');
Route::get('/gameuserview', [GameController::class, 'GameUserView'])->name('game.user.view');
Route::get('/bookuserview', [BookController::class, 'BookUserView'])->name('book.user.view');

Route::controller(UserController::class)->group(function(){
    Route::get('/user/logout', 'destroy')->name('user.logout');
});

require __DIR__.'/auth.php';

}); // Prevent Back history
