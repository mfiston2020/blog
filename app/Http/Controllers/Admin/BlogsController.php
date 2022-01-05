<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogsController extends Controller
{
    function index()
    {
        // $blogs  =   "select*from blogs";
        $blogs  =   DB::table('blogs')->select('*')->get();
        // $blogs  =   
        // $blogs  =   
        // $blogs  =   
        return $blogs;
    }
}
