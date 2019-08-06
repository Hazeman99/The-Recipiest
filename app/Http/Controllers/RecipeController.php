<?php

namespace App\Http\Controllers;

use \App\Recipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class RecipeController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('recipes.index', [
            'recipes' => auth()->user()->recipes
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('recipes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attributes = $this->validateRecipe();

        $attributes['user_id'] = auth()->id();

        $recipe = Recipe::create($attributes);

        return redirect('/recipes')->with('message', 'Your recipe has been added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function show(Recipe $recipe)
    {
        return view('recipes.show', compact('recipe'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function edit(Recipe $recipe)
    {
        return view('recipes.edit', compact('recipe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recipe $recipe)
    {
        $recipe->update($this->validateRecipe());

        return redirect('/recipes')->with('message', 'Your recipe has been edited successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recipe $recipe)
    {
        $recipe->delete();

        return redirect('/recipes')->with('message', 'Your recipe has been deleted successfully!');
    }

    public function showNonowner(Recipe $recipe){
        return view('/recipes/showNonowner', compact('recipe'));
    }

    public function validateRecipe(){
        return request()->validate([
            'name' => ['required', 'min:3'],
            'description' => ['required', 'min:5'],
            'steps' => ['required', 'min:5'],
            'ingredients' => ['required', 'min:5']
        ]);
    }
}
