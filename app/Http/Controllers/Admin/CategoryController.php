<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class CategoryController extends Controller
{
    public function index(){
        $category = Category::all();
        return view('admin.category.index', compact('category'));
    }


    public function add(){
        return view('admin.category.add');
    }

    public function insert(Request $request){
        /*$request->validate([
            'image' => 'required|image|mimes:jpeg,png,gif,svg|max:2048',
            'name' => 'required',
            'slug' => 'required',
            'description' => 'required',
        ]);*/

        $category = new Category();
        if ($request->hasFile('image'))
        {
            $file = $request->file('image');
            $filename = time().'.'.$file->getClientOriginalExtension();
            $file->move(public_path('asset/uploids/category/'),$filename);
            $category->name = $request->input('name');
            $category->image = $filename;

        }


        $category->name = $request->input('name');
        $category->slug = $request->input('slug');
        $category->description = $request->input('description');
        $category->status = $request->input('status') == TRUE? '1' : '0';
        $category->Popular = $request->input('Popular') == TRUE? '1' : '0';
        $category->meta_title = $request->input('meta_title');
        $category->meta_keyword = $request->input('meta_keyword');
        $category->meta_descrip = $request->input('meta_descrip');
        $category->save();
        return redirect('/categories')->with('status', "Categorie bien ajoutée");
    }

    public function edit($id){
        $category = Category::find($id);
        return view('admin.category.edit' , compact('category'));
    }

    public function update(Request $request, $id){
        $category = Category::find($id);
        if ($request->hasFile('image'))
        {
            $path = 'asset/uploids/category/'.$category->image;
            if (File::exists($path))
            {
                File::delete($path);
            }
            $file = $request->file('image');
            $filename = time().'.'.$file->getClientOriginalExtension();
            $file->move(public_path('asset/uploids/category/'),$filename);
            $category->name = $request->input('name');
            $category->image = $filename;
        }
        $category->name = $request->input('name');
        $category->slug = $request->input('slug');
        $category->description = $request->input('description');
        $category->status = $request->input('status') == TRUE ? '1' : '0';
        $category->Popular = $request->input('Popular') == TRUE ? '1' : '0';
        $category->meta_title = $request->input('meta_title');
        $category->meta_keyword = $request->input('meta_keyword');
        $category->meta_descrip = $request->input('meta_descrip');
        $category->update();
        return redirect('/private')->with('status', "Categorie bien modifiée");
    }


    public function destroy($id)
    {
        $category = Category::find($id);
        if ($category->image)
        {
            $path = 'asset/uploids/category/'.$category->image;
            if (File::exists($path))
            {
                File::delete($path);
            }
        }
        $category->delete();
        return redirect('categories')->with('status', "Categorie supprimée");

    }
}
