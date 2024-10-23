@extends('layouts.master')

@section('title')
About
@endsection


@section('content')

<div class="container">

    <h1>Produit :</h1>
    <p class="well">{{ $produit->product_name }}</p>
    <p class="well">{{ $produit->product_price }}</p>
    <p class="well">{{ $produit->product_description }}</p>

    <hr>

    <a href="{{ url('editproduct', [$produit->id]) }}" class="btn btn-default">Edit</a>
    <form action="{{ url('deleteproduct', [$produit->id]) }}"
        methode="get" class="pull-right">
    @csrf
        <button class="btn btn-danger" type="submit">Supprimer</button>
    </form>
</div>

@endsection
