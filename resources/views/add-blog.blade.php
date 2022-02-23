@extends('master')


@section('title')
    Add Blog Page
@endsection


@section('body')

    <style>
        .bg {
            background-color: mediumslateblue !important;
        }
    </style>


    <section class="py-5 bg-light bg ">
        <div class="container">
            <div class="row mt-5 mb-5">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header bg-primary text-white text-center ">
                            <h4>ADD NEW BLOG</h4>
                        </div>

                        <div class="card-body bg-dark text-white ">
                            <form action="{{route('new-blog')}}" method="POST">
                                @csrf

                                <div class="form-group row">
                                    <label  class="col-form-label col-md-3">Blog Title</label>
                                    <div class="col-md-9">
                                        <input type="text" name="blog_title" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label  class="col-form-label col-md-3">Author Name</label>
                                    <div class="col-md-9">
                                        <input type="text" name="author_name" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label  class="col-form-label col-md-3">Blog Description</label>
                                    <div class="col-md-9">
                                        <textarea name="blog_description" class="form-control"></textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label  class="col-form-label col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit"  class="btn btn-outline-success" value="Create New Blog">
                                    </div>
                                </div>

                                <h5 class="text-success text-center">{{Session::get('message')}}</h5>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
