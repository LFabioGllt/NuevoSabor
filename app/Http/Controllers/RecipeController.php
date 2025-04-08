<?php

namespace App\Http\Controllers;

use App\Http\Requests\Recipes\StoreRequest;
use App\Http\Requests\Recipes\UpdateRequest;
use App\Models\Menu;
use App\Models\Recipe;
use App\Models\User;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $recipes = Recipe::paginate(5);
    $menus = Menu::paginate(5);

    return view('menu/index', compact('recipes', 'menus'));
  }

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
    $menus = Menu::pluck('id', 'name_menu');
    return view ('profile/create', compact('menus'));
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(StoreRequest $request)
  {
    $data = $request->all();
    if (isset($data['image'])) {
      $data['image'] = $filename = time().".".$data["image"]->extension();
      $request->image->move(public_path("imgs/recipes"), $filename);
    }

    Recipe::create($data);
    return to_route('recipes.user', auth()->user()->id )->with('success','Recipe created');
  }

  /**
   * Display the specified resource.
   */
  public function show(Recipe $recipe)
  {
    return view ('menu/show', compact('recipe'));
  }

  public function showRecUser(Recipe $recipe)
  {
    return view ('profile/show', compact('recipe'));
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Recipe $recipe)
  {
    $menus = Menu::pluck('id', 'name_menu');
    return view ('profile/edit', compact('recipe', 'menus'));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(UpdateRequest $request, Recipe $recipe)
  {
    $data = $request->all();
    if (isset($data['image'])) {
      $data['image'] = $filename = time().".".$data["image"]->extension();
      $request->image->move(public_path("imgs/recipes"), $filename);
    }

    $recipe->update($data);
    return to_route('recipes.user', auth()->user()->id )->with('success','Updated Recipe');
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Recipe $recipe)
  {
    $recipe->delete();
    return to_route('recipes.user', auth()->user()->id )->with('delete','Recipe Deleted');
  }
}
