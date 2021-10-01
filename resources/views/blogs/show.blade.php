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

                <!--Form-->
                <form action="blog_details.php" method="POST">
                    <input type="hidden" name="blogId" value="">
                    <input type="submit" name="delete" value="Delete" class="btn btn-danger">
                    <a href="" class="btn btn-warning m-2">Update</a>
                </form>
            </div>
        </div>
    </section>
@endsection
