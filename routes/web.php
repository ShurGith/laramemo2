<?php
    
    use App\Http\Controllers\ProductController;
    use App\Http\Controllers\UserController;
    use Illuminate\Support\Facades\Route;
    
    Route::get('/', function () {
        return view('index-main');
    });
    
    Route::get('/team', function () {
        return view('pages.team');
    })->name('pages.team');
    
    Route::get('/features', function () {
        return view('pages.features');
    })->name('pages.features');
    
    Route::get('/market', function () {
        return view('pages.market');
    })->name('pages.market');
    
    Route::get('/about', function () {
        return view('pages.about');
    })->name('pages.about');
    Route::get('/products', [ProductController::class, 'index'])->name('products.index');
    Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');
    
    Route::get('/users', [UserController::class, 'index'])->name('users.index');



























































