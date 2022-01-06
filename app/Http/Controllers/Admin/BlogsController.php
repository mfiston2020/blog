<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogsController extends Controller
{
    function index()
    {
        // $blogs  =   "select*from blogs";
        // $blogs  =   DB::table('blogs')->select('*')->get();
        $blogs  =   Blog::all();
        // $blogs  =   \App\Models\Blog::all();
        return view('admin.blog.index',compact('blogs'));
    }

    function create()
    {
        return view('admin.blog.create');
    }
}
