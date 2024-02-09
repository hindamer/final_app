<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BeverageController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Models\Beverage;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Auth::routes(['verify' => true]);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('verified')->name('home');
Route::middleware('verified')->group(function () {
    Route::get('adduser', function () {
        return view('admin.addUser');
    });
    Route::get('userlist', [UserController::class, 'getdata']);
    Route::post('store', [UserController::class, 'store']);
    Route::get('showuser/{id}', [UserController::class, 'showuser']);
    Route::get('edituser/{id}', [UserController::class, 'edituser']);
    Route::post('update/{id}', [UserController::class, 'update'])->name('update');
    Route::get('deleteuser/{id}', [UserController::class, 'deleteuser']);
    //category

    Route::get('addCategory', [CategoryController::class, 'addCategory']);
    Route::get('categorylist', [CategoryController::class, 'categorylist'])->name('categorylist');
    Route::post('category', [CategoryController::class, 'category']);
    Route::get('showcategory/{id}', [CategoryController::class, 'showcategory']);
    Route::get('editcategory/{id}', [CategoryController::class, 'editcategory']);
    Route::post('updatecategory/{id}', [CategoryController::class, 'updatecategory'])->name('updatecategory');
    Route::get('deletecategory/{id}', [CategoryController::class, 'deletecategory']);
    //beverage

    Route::get('addBeverage', function () {
        return view('admin.addBeverage');
    });
    Route::get('addBeverage', [BeverageController::class, 'addBeverage']);
    Route::post('insertbeverage', [BeverageController::class, 'insertbeverage']);
    Route::get('data', [BeverageController::class, 'data']);
    Route::get('editbeverage/{id}', [BeverageController::class, 'edit']);
    Route::post('updatebeverage/{id}', [BeverageController::class, 'update'])->name('updatebeverage');
    Route::get('deletebeverage/{id}', [BeverageController::class, 'deletebeverage']);

    //contact
    Route::get('showmessage/{id}', [ContactController::class, 'showmessage']);
    Route::get('deletemessage/{id}', [ContactController::class, 'deletemessage']);
    Route::get('mails', [ContactController::class, 'mails']);
});
//route of the website
Route::get('index', [IndexController::class, 'index']);
Route::post('storee', [ContactController::class, 'storee'])->name('storee');
