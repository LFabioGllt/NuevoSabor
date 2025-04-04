<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use App\Models\User;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $recipes = Recipe::paginate(5);

    return view('pages/menu', compact('recipes'));
  }

  /**
   * Display a listing of the resource by user.
   */
  public function recipesUser()
  {
    $my_recipes = Recipe::where('user_id', auth()->user()->id)->get();

    return view('profile/index', compact('my_recipes'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    return view ('profile/create');
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $data = $request->all();
    if (isset($data['image'])) {
      $data['image'] = $filename = time().".".$data["image"]->extension();
      $request->image->move(public_path("imgs/recipes"), $filename);
    }

    Recipe::create($data);
    return to_route('recipes.index')->with('success','Recipe created');
  }

  /**
   * Display the specified resource.
   */
  public function show(Recipe $recipe)
  {
    return view ('profile/show', compact('recipe'));
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Recipe $recipe)
  {
    return view ('profile/edit', compact('recipe'));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, Recipe $recipe)
  {
    $data = $request->all();
    if (isset($data['image'])) {
      $data['image'] = $filename = time().".".$data["image"]->extension();
      $request->image->move(public_path("imgs/recipes"), $filename);
    }

    $recipe->update($data);
    return to_route('recipes.index')->with('success','Updated Recipe');
  }

  /**
   * Show the form for deleting the specified resource.
   */
  public function delete(Recipe $recipe){
    echo view ('profile/delete', compact('recipe'));
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Recipe $recipe)
  {
    $recipe->delete();
    return to_route('recipes.index')->with('delete','Recipe Deleted');
  }
}
