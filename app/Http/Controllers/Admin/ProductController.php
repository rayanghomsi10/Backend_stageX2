<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }


    public function add()
    {
        $category = Category::all();
        return view('admin.products.add', compact('category'));
    }

    public function insert(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,gif,svg|max:2048',
            'name' => 'required',
            'original_price' => 'required',
            'slug' => 'required',
            'small_description' => 'required',
            'selling_price' => 'required',
            'tax' => 'required',
            'qty' => 'required',
            'meta_title' => 'required',
            'meta_keyword' => 'required',
            'meta_description' => 'required',
        ]);

        $products = new Product();
        if ($request->hasFile('image'))
        {
            $file = $request->file('image');
            $filename = time().'.'.$file->getClientOriginalExtension();
            $file->move(public_path('asset/uploids/products/'),$filename);
            $products->name = $request->input('name');
            $products->image = $filename;
        }
        $products->cate_id = $request->input('cate_id');
        $products->name = $request->input('name');
        $products->slug = $request->input('slug');
        $products->small_description = $request->input('small_description');
        $products->description = $request->input('description');
        $products->original_price = $request->input('original_price');
        $products->selling_price = $request->input('selling_price');
        $products->tax = $request->input('tax');
        $products->qty = $request->input('qty');
        $products->status = $request->input('status')== TRUE? '1' : '0';
        $products->trending = $request->input('trending') == TRUE? '1' : '0';
        $products->meta_title = $request->input('meta_title');
        $products->meta_keyword = $request->input('meta_keyword');
        $products->meta_description = $request->input('meta_description');
        $products->save();
        return redirect('products')->with('status', "Produit ajouté");
    }

    public function edit($id)
    {
        $products = Product::find($id);
        return view('admin.products.edit', compact('products'));
    }

    public function update(Request $request, $id)
    {
        $products = Product::find($id);

        if ($request->hasFile('image'))
        {
            $path = 'asset/uploids/products/'.$products->image;
            if (File::exists($path))
            {
                File::delete($path);
            }
            $file = $request->file('image');
            $filename = time().'.'.$file->getClientOriginalExtension();
            $file->move(public_path('asset/uploids/products/'),$filename);
            $products->name = $request->input('name');
            $products->image = $filename;
        }
        $products->name = $request->input('name');
        $products->slug = $request->input('slug');
        $products->small_description = $request->input('small_description');
        $products->description = $request->input('description');
        $products->original_price = $request->input('original_price');
        $products->selling_price = $request->input('selling_price');
        $products->tax = $request->input('tax');
        $products->qty = $request->input('qty');
        $products->status = $request->input('status')== TRUE? '1' : '0';
        $products->trending = $request->input('trending') == TRUE? '1' : '0';
        $products->meta_title = $request->input('meta_title');
        $products->meta_keyword = $request->input('meta_keyword');
        $products->meta_description = $request->input('meta_description');
        $products->update();
        return redirect('products')->with('status', "Produit mis a jour");
    }

    public function destroy($id)
    {
        $products = Product::find($id);
        if ($products->image)
        {
            $path = 'asset/uploids/products/'.$products->image;
            if (File::exists($path))
            {
                File::delete($path);
            }
        }
        $products->delete();
        return redirect('products')->with('status', "Produit supprimé");


    }
}
