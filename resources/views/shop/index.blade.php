@extends('layouts/master')

@section('title') 
    shopping cart
@endsection

@section('content') 
  
<div class="container">
  <div class="row">
    @foreach ($getProduct as $item)
    <div class="card" style="width: 18rem; margin-left: 5%">
      <img class="card-img-top" src="{{$item->imagePath}}" height="auto" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">{{$item->title}}</h5>
        <p class="card-text">{{$item->description}}</p>
        <a href="#" class="btn btn-success float-right">N{{$item->price}}</a>
        <a href="#" class="btn btn-secondary">Go somewhere</a>
      </div>
    </div>
    @endforeach
  </div>
</div>

@endsection