@extends('master')


@section('title')
    Add Student Page
@endsection






@section('body')

    <style>
        .bg {
            background-color: darkslateblue !important;
        }
    </style>


    <section class="py-5 bg-light bg ">
        <div class="container">
            <div class="row mt-5 mb-5">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header bg-info text-white text-center ">
                            <h4>ADD STUDENT FORM</h4>
                        </div>

                        <div class="card-body bg-dark text-white ">
                            <form action="{{route('new-student')}}" method="POST">
                                @csrf

                                <div class="form-group row">
                                    <label  class="col-form-label col-md-3">Enter Name</label>
                                    <div class="col-md-9">
                                        <input type="text" name="name" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label  class="col-form-label col-md-3">Email Address</label>
                                    <div class="col-md-9">
                                        <input type="email" name="email" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label  class="col-form-label col-md-3">Mobile Number</label>
                                    <div class="col-md-9">
                                        <input type="number" name="mobile" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label  class="col-form-label col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit"  class="btn btn-outline-success" value="Create New Student">
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
