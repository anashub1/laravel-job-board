<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Comment::all();
        return view('comment.index', ['comments' => $data, "pageTitle" => "Comments"]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comment.create',[ "pageTitle" => "Blog"]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CommentRequest $request)
    {
        $post=Post::findOrFail($request->input('post_id'));
        $comment = new Comment();
        $comment->author=$request->input('author');
        $comment->content=$request->input('content');
        $comment->post_id=$request->input('post_id');
        $comment->save();
        return redirect('/blog/'.$post->id)->with('success','comment added successfuly');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $comment = Comment::findOrFail($id);
        return view("comment.show", ["comments" => $comment, "pageTitle" => $comment->title]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
         return view('comment.edit', ["pageTitle" => "Edit"]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
