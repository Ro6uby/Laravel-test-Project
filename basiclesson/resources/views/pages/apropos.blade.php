@extends('layouts.master')

@section('title')
About
@endsection


@section('content')

<div class="container">

    <h1>Welcome to the services page</h1>
    @if(Session:: has('status'))
        <div class="alert alert-success">
            {{Session::get('status')}}
        </div>
        @endif

    @foreach ($produits as $produit)
    <p class="well">
       <a href="/show/{{ $produit->id}}">{{ $produit->product_name }}</a> 
    </p>
@endforeach
</div>

@endsection
