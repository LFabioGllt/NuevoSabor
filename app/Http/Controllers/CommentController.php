<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $comments = Comment::paginate(5);

    return view('forum/index', compact('comments'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    //
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    Comment::create($request->all());
    return to_route('comments.index')->with('success','Comment added');
  }

  /**
   * Display the specified resource.
   */
  public function show(Comment $comment)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Comment $comment)
  {
    return view ('forum/edit', compact('comment'));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, Comment $comment)
  {
    $comment->update($request->all());
    return to_route('comments.index')->with('success','Updated Comment');
  }

  /**
   * Show the form for deleting the specified resource.
   */
  public function delete(Comment $comment){
    echo view ('forum/delete', compact('comment'));
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Comment $comment)
  {
    $comment->delete();
    return to_route('comments.index')->with('delete','Comment Deleted');
  }
}
