@extends('layouts.master')
@section('content')
<form method="POST" action="{{route('products.update',$product->id)}}">
    @csrf
    @method('PUT')
<div class="container">
    <div class="row">
        <div class="col-sm-4">
            Product Name:
        </div>
        <div class="col-sm-4">
            <input type="text" name="pname" value="{{ $product->pname}}">
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            Price:
        </div>
        <div class="col-sm-4">
            <input type="text" name="price" value="{{ $product->price}}">
        </div>
    </div>
    <div class="row d-flex justify-content-center">
        <div class="col-sm-8">
            <input type="submit" name="submit" value="submit">
        </div>
    </div>
</div>
</form>
@endsection
