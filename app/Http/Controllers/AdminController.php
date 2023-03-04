<?php

namespace App\Http\Controllers;

use App\Models\User;
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
    public function analisis()
    {
        return view('admin.analisis');
    }
    public function profil()
    {
        $user = auth()->user();
        return view('admin.profil', compact('user'));
    }

    public function updateProfil(Request $request)
    {
        $user = User::find(auth()->user()->id);
        $user->name = $request->name;
        if ($request->password != null) {
            $user->password = bcrypt($request->password);
        }
        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            if ($user->profile_photo_path != null) {
                unlink(public_path($user->profile_photo_path));
            }
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images/avatar'), $filename);
            $user->profile_photo_path = 'images/avatar/' . $filename;
        }
        $user->save();
        return redirect()->route('profil')->withSuccess('Profil berhasil diupdate');
    }
}
