<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{

    public function index()
    {
        //get all the blog posts
        $blogs = Blog::all();
        return view('blog.index', compact('blogs'));
    }
}
