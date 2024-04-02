<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller
{
    public function index(){
        if (Auth::id()){
            $role=Auth()->user()->role;

            if ($role=='user'){
                return redirect('/')->with('status', "Bien connecté");
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

    public function count()
    {
        $usersCount = DB::table('users')->where('role', 'user')->count();
        $adminCount = DB::table('users')->where('role', 'admin')->count();
        $products = DB::table('orders')->where('status', '1')->get();
        $totalPrice = $products->sum('total_price');
        $order = DB::table('orders')->where('status', '0')->count();
        $order_complete = DB::table('orders')->where('status', '1')->count();
        $productno = DB::table('products')->count();
        $catno = DB::table('categories')->count();
        $product = DB::table('products')->where('trending', '1')->get();

        return view('admin.index', compact('usersCount','adminCount','products', 'totalPrice', 'order', 'order_complete', 'productno', 'catno', 'product'));
    }

}
