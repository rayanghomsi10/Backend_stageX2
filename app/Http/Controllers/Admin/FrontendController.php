<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    public function index(){
        if (Auth::id()){
            $role=Auth()->user()->role;

            if ($role=='user'){
                return view('dashboard');
            }
            elseif ($role=='admin'){
                return view('admin.index');
            }
            else{
                return redirect()->back();
            }
        }
    }
}
