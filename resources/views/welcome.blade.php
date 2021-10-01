@extends('layouts.layout')

@section('content')
    <div class="content">
        <div class="container">
            <h3 class="text-center">Welcome to your Blog</h3>
            <p class="lead text-center mb-5 ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi ex in iure
                obcaecati, quasi rerum sunt? At rem tenetur voluptatum?</p>
        </div>
    </div>

    <section class="mt-5">
        <div class="container">
            <h4 class="text-center">Some Basics Blogs</h4>
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12 my-2">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Fist Blog</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum error
                                at ratione numquam tempore provident architecto facere non ad labore.</p>
                            <a href="#" class="btn btn-info">more
                                info!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
