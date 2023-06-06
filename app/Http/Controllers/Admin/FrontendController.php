<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
}
