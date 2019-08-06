@extends('layout')

@section('title', 'Create a Recipe')


@section('content')
<style>
.form-control, label{
    margin-left: 2.5%;
    margin-right: 2.5%;
    width: 80%;
}
.btn{
    margin-left: 2.5%;
}
</style>
            <form method="POST" action="/recipes">
                @csrf
                <div class="form-group">
                  <label for="exampleFormControlInput1">Recipe Title</label>
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Title of the meal..." name="name">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Recipe Description</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description" placeholder="About the food..."></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea2">Steps</label>
                    <textarea class="form-control" id="exampleFormControlTextarea2" rows="3" name="steps" placeholder="Steps to make it..."></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea3">Ingredients</label>
                    <textarea class="form-control" id="exampleFormControlTextarea3" rows="3" name="ingredients" placeholder="Ingredients needed..."></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <br>
            @include('errors')
<br><br>
@endsection
