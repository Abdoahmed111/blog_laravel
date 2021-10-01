<?php

namespace App\Http\Controllers;

use App\Blog;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();

        return view('welcome', [
            'blogs' => $blogs,
        ]);

    }
}