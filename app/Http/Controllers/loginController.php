<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function regisForm(Request $request)
    {

        return view('registrasi');
    }

    public function doneRegister(Request $request)
{
    $validator = Validator::make($request->all(), [
        'nama' => 'required',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:8',
        'gender' => 'required',
        'umur' => 'required|integer|min:1',
        'tgl_lahir' => 'required|date',
        'alamat' => 'required',
        'role' => 'required|in:superadmin,user'
    ]);

    if ($validator->fails()) {
        return redirect()->route('register')
            ->withErrors($validator)
            ->withInput();
    }

    $user = User::create([
        'nama' => $request->nama,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'gender' => $request->gender,
        'umur' => $request->umur,
        'tgl_lahir' => $request->tgl_lahir,
        'alamat' => $request->alamat,
    ]);

    // assign role
    $user->assignRole($request->role);

    if ($user) {
        return redirect()->route('login');
    } else {
        return redirect()->route('register')
            ->with('error', 'Failed to create user');
    }
}


    public function loginForm()
    {
        return view ('login');
    }

    public function doneLogin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->route('login')
                ->withErrors($validator)
                ->withInput();
        }

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $request->session()->regenerate();
            $user = User::where('id', Auth::user()->id)->first();
            if ($user->hasRole('superadmin')){
                return redirect()->route('admin-table');
            } else {
                return redirect()->route('product-view');
            }
        } else {
            return redirect()->route('login')
                ->with('error', 'Login failed email or password is incorrect');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        return redirect()->route('login');
    }
}
