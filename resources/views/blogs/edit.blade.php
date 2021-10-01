@extends('layouts.app')

@section('content')
    <section class="content">
        <div class="container d-flex w-100 h-100">
            <div class="card w-50 justify-content-center align-self-center mx-auto p-5">
                <h2 class="text-center card-title ">Add Blog</h2>
                <form action={{ route('blogs.update', $blog->id) }} method="POST">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" placeholder="Enter Title" name="title"
                            value={{ $blog->title }}>
                        <small class="text-danger">{{ Session::get('error_title') }}</small>
                        <small class="text-danger">{{ session('error_empty') }}</small>
                    </div>
                    <div class="form-group mb-3">
                        <label for="body">Body</label>
                        <textarea name="body" id="body" cols="30" rows="10" class="form-control"
                            placeholder="Enter a Text">{{ $blog->body }}</textarea>
                        <small class="text-danger">{{ Session::get('error_body') }}</small>
                        <small class="text-danger">{{ session('error_empty') }}</small>
                    </div>
                    <button type="submit" name="submit" class="btn btn-danger">Update blog</button>
                </form>
            </div>
        </div>
    </section>
@endsection
