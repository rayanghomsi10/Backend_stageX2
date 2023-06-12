<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    public function index(){
        if (Auth::id()){
            $role=Auth()->user()->role;

            if ($role=='user'){
                return redirect('/')->with('status', "Bien connecter");
            }
            elseif ($role=='admin'){
                return view('admin.index')->with('status', "Bienvenue Administrateur");
            }
            else{
                return redirect()->back();
            }
        }
    }
    public function isAdmin()
    {
        return $this->roles()->where('name', 'admin')->exists();
    }

    public function users()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));

    }

    public function viewusers($id)
    {
        $users = User::find($id);
        return view('admin.users.view', compact('users'));
    }

}
