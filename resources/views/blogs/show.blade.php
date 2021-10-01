@extends('layouts.app');

@section('content')
    <section class="content">
        <div class="container">

            <h4 class="text-center mt-5">{{ $blog->title }}</h4>
            <div class="card w-50 mx-auto mt-3 p-5 pb-0 rounded-3">
                <p class="lead">{{ $blog->body }}</p>
                <div class="d-flex justify-content-between align-item-center">
                    <p>Created by: {{ $blog->author }}</p>
                    <p class="card-text">{{ $blog->created_at }}</p>
                </div>

                @if (Auth::user()->name === $blog->author)
                    <!--Form-->
                    <form action={{ route('blogs.destroy', $blog->id) }} method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Delete" class="btn btn-danger">
                        <a href={{ route('blogs.edit', $blog->id) }} class="btn btn-warning m-2">Update</a>
                    </form>
                @endif
            </div>
        </div>
    </section>
@endsection
