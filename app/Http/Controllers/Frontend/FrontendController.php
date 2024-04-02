<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $featured_products = Product::where('trending', '1')->take(15)->get();
        $trending_category = Category::where('popular', '1')->take(15)->get();
        return view('frontend.index', compact('featured_products', 'trending_category'));
    }

    public function category()
    {
        $category = Category::where('status' , '0')->take(15)->get();
        return view('frontend.category', compact('category'));
    }

    public function viewcategory($id)
    {
        if (Category::where('id', $id)->exists())
        {
//            $category = Category::with('products')->get();
            $category = Category::with('products')->where('id', $id)->first();

            $products = Product::where('cate_id', $category->id)->where('status', '0')->get();
            return view('frontend.products.index', compact('category', 'products'));

        }
        else{
            return redirect('category')->with('status', "Categorie vide");
        }
    }


    public function productview($cate_slug, $prod_slug)
    {
        if (Category::where('slug', $cate_slug)->exists())
        {
            if (Product::where('slug', $prod_slug)->exists())
            {
                $products = Product::where('slug', $prod_slug)->first();
                return view('frontend.products.view', compact('products'));
            }
            else{
                return redirect('category')->with('status', 'Lien mort');
            }
        }
        else{
            return redirect('category')->with('status', 'Lien mort');
        }
    }

    public function productlist()
    {
        $products = Product::select('name')->where('status' , '0')->get();
        $data = [];

        foreach ($products as $item){
            $data[] = $item['name'];
        }
        return $data;

    }

    public function searchproduct(Request $request)
    {
        $search = $request->product_name;

        if ($search != "")
        {
            $product = Product::where('name',"LIKE","%$search%")->first();
            if ($product)
            {
                return redirect('category/'.$product->category->slug.'/'.$product->slug);
            }
            else
            {
                return redirect()->back()->with('status', "Aucun produit ne correspond à la recherche");
            }
        }
        else
        {
            return redirect()->back();
        }
    }
}
