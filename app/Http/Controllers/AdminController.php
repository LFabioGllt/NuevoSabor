<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Menu;
use App\Models\Recipe;
use Illuminate\Http\Request;

class AdminController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    //
  }

    // Comments
  public function commentsIndex()
  {
    $comments = Comment::paginate(5);

    return view('admin/comments/index', compact('comments'));
  }

  public function destroyComment(Comment $comment)
  {
    $comment->delete();
    return to_route('comments.admin')->with('delete','Comment Deleted');
  }

    // Recipes
  public function recipesIndex()
  {
    $recipes = Recipe::paginate(5);

    return view('admin/recipes/index', compact('recipes'));
  }

  public function editRecipe(Recipe $recipe)
  {
    $menus = Menu::pluck('id', 'name_menu');
    return view ('admin/recipes/edit', compact('recipe', 'menus'));
  }

  public function updateRecipe(Request $request, Recipe $recipe)
  {
    $data = $request->all();
    if (isset($data['image'])) {
      $data['image'] = $filename = time().".".$data["image"]->extension();
      $request->image->move(public_path("imgs/recipes"), $filename);
    }

    $recipe->update($data);
    return to_route('recipes.admin')->with('success','Updated Recipe');
  }

  public function destroyRecipe(Recipe $recipe)
  {
    $recipe->delete();
    return to_route('recipes.admin')->with('delete','Recipe Deleted');
  }


  /**
   * Display the specified resource.
   */
  public function show(string $id)
  {
    //
  }
}
