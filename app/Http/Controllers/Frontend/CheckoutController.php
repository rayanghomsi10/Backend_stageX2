<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function index()
    {
        $old_cartitems= Cart::where('user_id', Auth::id())->get();
        foreach ($old_cartitems as $item)
        {
            if (!Product::where('id', $item->prod_id)->where('qty', '>=', $item->prod_qty)->exists())
            {
                $removeitem = Cart::where('user_id', Auth::id())->where('prod_id',$item->prod_id);
//                $removeitem->delete();
            }
        }
        $cartitems= Cart::where('user_id', Auth::id())->get();


        return view('frontend.checkout', compact('cartitems'));
    }

    public function placeorder(Request $request)
    {
        // Récupération des données du formulaire
        $data = $request->all();

// Validation des champs requis
        $validatedData = $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'phone' => 'required',
            'pincode' => 'nullable',
            'address1' => 'required',
            'address2' => 'nullable',
            'country' => 'nullable',
            'city' => 'nullable',
            'state' => 'nullable',
        ], [
            'required' => 'Le champ :attribute est obligatoire.',
        ]);
        // Si la validation a réussi, on enregistre les données
// Sinon, on retourne un message d'erreur
        if ($validatedData) {
            // Enregistrement des données
            // ...
            $order = new Order();
            $order->user_id = Auth::id();
            $order->fname = $request->input('fname');
            $order->lname = $request->input('lname');
            $order->email = $request->input('email');
            $order->phone = $request->input('phone');
            $order->address1 = $request->input('address1');
            $order->address2 = $request->input('address2');
            $order->city = $request->input('city');
            $order->state = $request->input('state');
            $order->country = $request->input('country');
            $order->pincode = $request->input('pincode');

            //prix total
            $total = 0;
            $cartitems_total = Cart::where('user_id', Auth::id())->get();
            foreach ($cartitems_total as $prod)
            {
                $total += $prod->products->selling_price * $prod->prod_qty;
            }
            $order->total_price = $total;

            $order->tracking_no = 'lab2view'.rand(1111,9999);
            $order->save();


            $order->id;

            $cartitems= Cart::where('user_id', Auth::id())->get();
            foreach ($cartitems as $item)
            {
                OrderItem::create([
                    'order_id' =>$order->id,
                    'prod_id' =>$item->prod_id,
                    'qty' => $item->prod_qty,
                    'price' => $item->products->selling_price,
                ]);

                $prod = Product::where('id', $item->prod_id)->first();
                $prod->qty = $prod->qty - $item->prod_qty;
                $prod->update();
            }

            if (Auth::user()->address1 == NULL)
            {
                $user = User::where('id' ,Auth::id())->first();
                $user->name = $request->input('fname');
                $user->lname = $request->input('lname');
                $user->phone = $request->input('phone');
                $user->address1 = $request->input('address1');
                $user->address2 = $request->input('address2');
                $user->city = $request->input('city');
                $user->state = $request->input('state');
                $user->country = $request->input('country');
                $user->pincode = $request->input('pincode');
                $user->update();
            }
            $cartitems= Cart::where('user_id', Auth::id())->get();

            Cart::destroy($cartitems);

            return redirect('/')->with('status', 'commande effectuée');
        } else {
            return redirect()->back()->withErrors($validatedData);
        }

    }
}

