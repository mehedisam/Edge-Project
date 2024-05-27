@extends('frontend.layout.master')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="card p-4">
                    <form action="{{route('signup_post')}}" method="post">
                        @csrf
                        <input type="text" class="form-control mb-2" name="name" placeholder="Enter Name">
                        @error('name')
                            <span class="text-danger">name lagbe</span>
                        @enderror
                        <input type="email" name="email" class="form-control mb-2" placeholder="Enter Email">
                        @error('email')
                        <span class="text-danger">name lagbe</span>
                        @enderror
                        <input type="password" name="password" class="form-control mb-2" placeholder="Enter Password">
                        @error('password')
                        <span class="text-danger">name lagbe</span>
                        @enderror
                        <input type="submit" class="btn btn-success mt-2" class="form-control" value="Submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection