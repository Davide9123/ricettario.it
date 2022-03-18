<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Closure;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public $recipe;
    public function recipes(){
        $recipes=Recipe::all();
        return view('recipe.recipe_index',compact('recipes'));
    }
    public function recipe_details(Recipe $recipe){
       
        return view('recipe.recipe_details',compact('recipe'));
    }
    public function recipe_form(){
        return view('recipe.recipe_form');
    }
    public function recipe_submit(Request $request){
        $recipe = Recipe::create([
            'title' => $request->title,
            'description' => $request->description,
            'ingrediants' => $request->ingrediants,
            
        ]);
        return redirect(route('welcome'))->with('message', 'Grazie per il tuo contributo!');
     
    }
}
