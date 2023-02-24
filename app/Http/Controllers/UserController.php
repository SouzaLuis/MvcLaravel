<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function listUser(){
        // $user = new User();
        // $user->name = 'Luis Souza';
        // $user->email = 'luis.souza@laravel.com.br';
        // $user->password = Hash::make('123');
        // $user->save();

        $user = User::where('id', '=', 1)->first();
        return view('listUser', [
            'user' => $user
        ]);

    }
}
