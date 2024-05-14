<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class userController extends Controller
{
    public function user(Request $request)
    {
        $users = User::get();

        return view('manajemen', ['user' => $users]);
    }

}
