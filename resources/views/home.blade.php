@extends('layout')
@section('title', 'Home')
@section('content')
<style>
.card{
    margin-left: 7.5%;
    margin-right: 7.5%;
    width: 80%;
}
h1{
    margin-left: 7.5%;
    margin-top: -2.5%;
    margin-bottom: 2.5%;
}
.jumbotron{
    margin-left: 7.5%;
    margin-right: 7.5%;
    margin-bottom: 5%;
    width: 80%;
    text-align: left;
}
.display-4{
    margin-left: 0%;
}
.no-recipes-p{
    margin-left: 7.5%
}
</style>
    <div class="jumbotron">
        <h1 class="display-4">The Recipiest</h1>
        <p class="lead">A place for all recipes</p>
        <hr class="my-4">
        <p>Share your recipes and view over people's recipes and try them yourself!</p>
        <br>
        @if ($user)
        <a class="btn btn-primary btn-lg" href="/recipes/create" role="button">Click here to create a recipe!</a>
        @else
        <a class="btn btn-primary btn-lg" href="/register" role="button">Click here to make an account!</a>
        @endif
      </div>

<h1>All Recipes</h1>
@if ($recipes->count())
<div class="list-group">
    @foreach ($recipes as $recipe)
    <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $recipe->name }}</h5>
              <p class="card-text">{{ $recipe->description }}</p>
                <a href="/recipes/{{ $recipe->id }}/showNonowner" class="btn btn-primary">Show Recipe</a>
            </div>
          </div>
    @endforeach
  </div>
  <br><br>
@else
    <p class="no-recipes-p">There are currently no recipes.</p>
    <br><br><br>
@endif
@endsection
