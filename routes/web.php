<?php
    
    use App\Http\Controllers\ProductController;
    use App\Http\Controllers\UserController;
    use Illuminate\Support\Facades\Route;
    
    Route::get('/', function () {
        return view('index-main');
    });
    
    Route::get('/products', [ProductController::class, 'index'])->name('products.index');
    Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');
    
    Route::get('/users', [UserController::class, 'index'])->name('users.index');



























































