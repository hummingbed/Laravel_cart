@extends('layouts/master')

@section('content') 
    

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <h1>sigUp</h1>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{route('user.login')}}" method="post">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input class="form-control" type="text" id="email" name="email">
                </div>
                <div class="form-group">
                    <label for="Password">Password</label>
                    <input class="form-control" type="Password" id="Password" name="password">
                </div>
                <button type="submit" class="btn btn-primary" >Sign In</button>
                @csrf
            </form>
        </div>
    </div>
</div>

@endsection