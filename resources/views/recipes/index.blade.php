@extends('layout')

@section('title', 'My Recipes')

@section('content')
<style>
.col-centered{
  text-align: center;
  display: inline-block;
}
/* .right-border {
            border-right: 1px solid #DDD;
            height: 200px;
      } */
.card-title, .card-text{
    text-align: left;
    width: 100%;
}
h1{
    text-align: center;
    margin-top: -3%;
    margin-bottom: 3%;
}
</style>
<br>
<h1>My Recipes</h1>
    <div class="row justify-content-center" style="margin-right: 0px;">
        <div class="col-2 col-centered right-border">
        </div>
        <div class="col-6 col-centered right-border">
          @if ($recipes->count())
            @foreach ($recipes as $recipe)
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">{{ $recipe->name }}</h5>
                <p class="card-text">{{ $recipe->description }}</p>
                <a href="/recipes/{{ $recipe->id }}" class="btn btn-primary show-recipe">Show Recipe</a>
              </div>
            </div>
            <br>
            @endforeach
          @else
            <div>
              You do not have any recipes
            </div>
          @endif
        </div>
        <div class="col-2 col-centered">
          <a href="/recipes/create"><button type="button" class="btn btn-primary" style="">Create a Recipe</button></a>
        </div>
      </div>
@if (session('message'))
<script type="text/javascript">
alert( " {{ session('message') }} "  );
</script>
@endif
@endsection
