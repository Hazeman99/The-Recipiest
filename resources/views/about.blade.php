@extends('layout')
@section('title', 'Home')
@section('content')

<div class="container">
    <h1 class="display-4">About The Recipiest</h1>
    <hr class="my-4">
    <br>
    <p>The Recipiest is a website that helps keep recipes online as well as share them to the world. It allows the users to add each recipe's name, description, steps, as well as ingredients of the recipe and the food being described. Users are also able to view other peoples recipes and try their hands on them!</p>
    <p>The website was made as a hands-on attempt on making a Laravel-based website</p>
    <p>The website was made by Hazem Hadi.</p>
    @if ($user)
        <p>To create on your own recipe, click on the button!</p>
        <a class="btn btn-primary btn-lg" href="/recipes/create" role="button">Create a recipe!</a>
    @else
        <p>To create an account and starting adding your recipes, click on the first button!</p>
        <p>And if you already have an account, click on the other button to login!</p>
        <br>
        <a class="btn btn-primary btn-lg" href="/register" role="button">Create an account!</a>
        <a class="btn btn-primary btn-lg" href="/login" role="button">Login to account!</a>
    @endif
</div>

@endsection
