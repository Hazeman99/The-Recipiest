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
        <div class="row">
                <a href="/recipes/{{ $recipe->id }}/edit"><button class="btn btn-primary" role="button">Edit Recipe</button></a>
                <form action="/recipes/{{ $recipe->id }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-primary" type="submit" onclick="return alert_before_delete()" >Delete Recipe</button>
                    <script type="text/javascript">
                        function alert_before_delete(){
                            return confirm("Are you sure you want to delete the recipe?");
                        }
                    </script>
                </form>
        </div>
      </div>


@endsection
