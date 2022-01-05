<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    function index()
    {
        $categories =   \App\Models\Category::all();

        return view('admin.category.index',[
            'categories'=>$categories
        ]);
    }

    function store(Request $categoryData)
    {
        $this->validate($categoryData,[
            'category_name'=>'required'
        ]);

        $category   =   new Category();
        

        $category->name =   $categoryData->category_name;
        $category->save();
        return redirect()->route('admin.category')->with('successMessage','Category created successfully!');
        // return $categoryData->all();
    }
}
