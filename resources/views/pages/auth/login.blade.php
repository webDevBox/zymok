@extends('layouts.app')

@section('content')
<h2 class="text-center my-3">Login here</h2>
    <div class="container col-6 offset-3 bg-light">
        <form action="{{ route('login') }}" class="py-3" method="post">
            @csrf
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="Enter your email">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Enter your password">
                    </div>
                </div>
                <input type="submit" class="btn btn-primary d-block mx-auto" value="Login">
            </div>
        </form>
    </div>
@endsection