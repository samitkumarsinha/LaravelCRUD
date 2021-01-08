@extends('layouts.master')
<div class="container">
    <div class="row" style="background-color: rgb(231, 235, 235);">
        <div class="col-sm-3">
            ID
        </div>
        <div class="col-sm-3">
            PNAME
        </div>
        <div class="col-sm-3">
            PRICE
        </div>
        <div class="col-sm-3">
            DELETE/EDIT
        </div>
    </div>
    @foreach ($products as $item)
    <div class="row">
        <div class="col-sm-3">
            {{$item->id}}
        </div>
        <div class="col-sm-3">
            {{$item->pname}}
        </div>
        <div class="col-sm-3">
            {{$item->price}}
        </div>
        <div class="col-sm-3">
            <form method="POST" action="{{ route('products.destroy', $item->id)}}">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
            <form method="POST" action="{{ route('products.edit', $item->id)}}">
                @csrf
                @method('GET')
                <button type="submit">Edit</button>
            </form>
        </div>
      </div>
    @endforeach
  </div>
