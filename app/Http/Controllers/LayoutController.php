<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayoutController extends Controller
{
    public function dashboard(){
        return view('admin.pages.dashboard');
    }
    public function formElements(){
        return view('admin.pages.form_elements');
    }
    public function login(){
        return view('admin.pages.login');
    }
    public function register(){
        return view('admin.pages.register');
    }
}
