<?php

namespace App\Http\Controllers;

use App\Http\Requests\Menus\StoreRequest;
use App\Http\Requests\Menus\UpdateRequest;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $menus = Menu::paginate(5);

    return view('admin/menus/index', compact('menus'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    return view ('admin/menus/create');
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(StoreRequest $request)
  {
    $data = $request->all();
    if (isset($data['image'])) {
      $data['image'] = $filename = time().".".$data["image"]->extension();
      $request->image->move(public_path("imgs/menus"), $filename);
    }

    Menu::create($data);
    return to_route('menus.index')->with('success','Menu created');
  }

  /**
   * Display the specified resource.
   */
  public function show(Menu $menu)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Menu $menu)
  {
    return view ('admin/menus/edit', compact('menu'));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(UpdateRequest $request, Menu $menu)
  {
    $data = $request->all();
    if (isset($data['image'])) {
      $data['image'] = $filename = time().".".$data["image"]->extension();
      $request->image->move(public_path("imgs/menus"), $filename);
    }

    $menu->update($data);
    return to_route('menus.index')->with('success','Updated Menu');
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Menu $menu)
  {
    $menu->delete();
    return to_route('menus.index')->with('delete','Menu Deleted');
  }
}
