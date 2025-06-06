<?php
    
    use App\Http\Controllers\ProductController;
    use App\Http\Controllers\UserController;
    use App\Mail\OrderShipped;
    use Illuminate\Support\Facades\Mail;
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
    
    Route::get('/login', function () {
        return view('dashboard.login');
    })->name('dashboard.login');
    Route::get('/products', [ProductController::class, 'index'])->name('products.index');
    Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');
    
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    
    
    Route::get('send-mail', function () {
//        Mail:: raw('Hello world this a test email', function ($message) {
//            $message->to('esnola@gmail.com')->subject('Este es el subject');
//        });
        Mail::send(new OrderShipped);
        dd('Enviado el email');
    });
    
    Route::get('upload', function () {
        return view('pages.forms', ['forms' => true]);
    });
    
    Route::get('/test', function () {
        $beautymail = app()->make(Snowfire\Beautymail\Beautymail::class);
        $beautymail->send('emails.welcome', [], function ($message) {
            $message
              ->from('bar@example.com')
              ->to('foo@example.com', 'John Smith')
              ->subject('Welcome!');
        });
        
    });
























































