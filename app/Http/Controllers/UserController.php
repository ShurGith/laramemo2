<?php
    
    namespace App\Http\Controllers;
    
    use App\Models\User;
    
    class UserController extends Controller
    {
        public function index()
        {
            $users = User::query()->paginate(10);
            return view('users.index', ['users' => $users]);
            
            
        }
    }
