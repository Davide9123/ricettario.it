<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function recipes(){
        return view('recipe.recipe_index');
    }
    public function recipe_form(){
        return view('recipe.recipe_form');
    }
    public function recipe_submit(){
     
    }
}
