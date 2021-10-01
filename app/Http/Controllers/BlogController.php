<?php

namespace App\Http\Controllers;

use App\Blog;
use Auth;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();

        return view('welcome', [
            'blogs' => $blogs,
        ]);

    }

    public function store()
    {

        $title = request('title');
        $body = request('body');
        $author = Auth::user()->name;

        if (empty($title) && empty($body)) {
            return redirect('/blogs/create')->with('error_empty', 'Please Fill this Field!');
        }
        if (empty($title)) {
            return redirect('/blogs/create')->with([
                'error_title' => 'Please Fill this Field!',
                'body' => $body,
            ]);
        }

        if (empty($body)) {
            return redirect('/blogs/create')->with([
                'error_body' => 'Please Fill this Field!',
                'title' => $title,
            ]);
        }
        $blog = new Blog();
        $blog->title = $title;
        $blog->body = $body;
        $blog->author = $author;

        $blog->save();

        return redirect('/')->with('message', 'Your blog got saved in the database');

    }

    public function create()
    {
        return view('blogs.create');
    }

    public function show($id)
    {
        $blog = Blog::findOrFail($id);

        return view('blogs.show', ['blog' => $blog]);

    }

    public function destroy($id)
    {

        $blog = Blog::findOrFail($id);
        $blog->delete();

        return redirect('/');
    }

    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('blogs.edit', ['blog' => $blog]);
    }

    public function update($id)
    {
        $title = request('title');
        $body = request('body');
        $author = Auth::user()->name;

        if (empty($title) && empty($body)) {
            return redirect('/blogs/create')->with('error_empty', 'Please Fill this Field!');
        }
        if (empty($title)) {
            return redirect('/blogs/create')->with([
                'error_title' => 'Please Fill this Field!',
                'body' => $body,
            ]);
        }

        if (empty($body)) {
            return redirect('/blogs/create')->with([
                'error_body' => 'Please Fill this Field!',
                'title' => $title,
            ]);
        }
        $blog = new Blog();
        $blog->title = $title;
        $blog->body = $body;
        $blog->author = $author;

        $blog->where('id', $id)->update([
            'title' => $blog->title,
            'body' => $blog->body,
        ]);

        return redirect('/')->with('message', 'Your blog got updated');

    }
}