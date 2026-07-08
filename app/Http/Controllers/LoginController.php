<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(){
        return View ('login');
    }

    public function loginProcess(){
    

        if (auth()->guard('admin')->attempt(['email' => request('email'), 'password' => request('password')])){
            return redirect('admin')->with('success', 'Login Berhasil');
        }

		if (auth()->guard('pengguna')->attempt(['email' => request('email'), 'password' => request('password')])){
            return redirect('pengguna')->with('success', 'Login Berhasil');
        }

        return redirect('login')->with('error', 'Login Gagal! Pastikan email dan password    benar.');
        
    }

    public function logout(){
        
        auth()->guard('admin')->logout();
		auth()->guard('pengguna')->logout();
        return redirect('/');
    }

    function test(){
		$user= new Admin();
		$user->nama= 'Super Admin';
		$user->email= 'admin@gmail.com';
		$user->password ='admin';
		$user->save();

		return "Berhasil"; 


	}
}
