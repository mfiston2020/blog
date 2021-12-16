<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
}
