@extends('layout')

@section('title', 'Edit Recipe')


@section('content')
<style>
        .form-control, label{
            margin-left: 2.5%;
            margin-right: 2.5%;
            width: 80%;
        }
        #submit{
            margin-left: 2.5%;
        }
        </style>
<form method="POST" action="/recipes/{{ $recipe->id }}">
    @method('PATCH')
    @csrf
    <div class="form-group">
      <label for="exampleFormControlInput1">Recipe Title</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Title of the meal..." name="name" value="{{ $recipe->name }}">
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Recipe Description</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description" placeholder="About the food...">{{ $recipe->description }}</textarea>
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea2">Steps</label>
        <textarea class="form-control" id="exampleFormControlTextarea2" rows="3" name="steps" placeholder="Steps to make it...">{{ $recipe->steps }}</textarea>
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea3">Ingredients</label>
        <textarea class="form-control" id="exampleFormControlTextarea3" rows="3" name="ingredients" placeholder="Ingredients needed...">{{ $recipe->ingredients }}</textarea>
    </div>
    <button type="submit" class="btn btn-primary" id="submit">Submit</button>
</form>
@include('errors')
<br><br>


@endsection
