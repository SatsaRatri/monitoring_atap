<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }
    public function signup()
    {
        return view('admin.signup');
    }
    public function profil()
    {
        return view('admin.profil');
    }

    public function basispengetahuan()
    {
        return view('admin.basispengetahuan');
    }
    public function editbasispengetahuan()
    {
        return view('admin.editbasispengetahuan');
    }
}
