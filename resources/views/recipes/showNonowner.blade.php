@extends('layout')

@section('title', 'Show Recipe')

@section('content')
<style>
.jumbotron{
    margin-top: -5%;
    background-color: white;
}
.btn{
    margin-left: 1rem;

}
</style>
<div class="jumbotron">
<h1 class="display-4">{{ $recipe->name }}</h1>
        <p class="lead">{{ $recipe->description }}</p>
        <hr class="my-4">
        <h3 class="display-10">Steps</h3>
        <p>{{ $recipe->steps }}</p>
        <hr class="my-4">
        <h3 class="display-10">Ingredients</h3>
        <p>{{ $recipe->ingredients }}</p>
        <br>
      </div>


@endsection
