@extends('layouts/master')

@section('title') 
    shopping cart
@endsection
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <h1>sigUp</h1>
            @if (count($errors) > 0)
            <div class="alert alert-danger">
                @foreach ($errors as $error)
                <p>{{$error}}</p>
                @endforeach
            </div>
            @endif
            <form action="">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email">
                </div>
                <div class="form-group">
                    <label for="Password">Password</label>
                    <input type="Password" id="Password" name="password">
                </div>
                <button type="submit">Sign Up</button>
            </form>
        </div>
    </div>
</div>