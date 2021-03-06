<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('id','desc')->paginate(8);
        return view("backend.posts.index",compact("posts"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('backend.posts.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Post();
        $post ->title = $request ->title;
        $post ->slug = Str::slug($request->title);
        $post ->description = $request ->description;
        if($request ->file('featured')){
            $file = $request -> file("featured");
            $newName = time() . $file->getClientOriginalName();
            $file ->move("images",$newName);
            $post ->featured = "images/$newName";
        }
        $post ->save();
        $post->categories()->attach($request->category_id);

        return redirect("/posts");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::all();
        $post = Post::find($id);
        return view("backend.posts.edit",compact("post","categories"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $post ->title = $request ->title;
        $post ->slug = Str::slug($request->title);
        $post ->description = $request ->description;
        if($request ->file('featured')){
            $file = $request -> file("featured");
            $newName = time() . $file->getClientOriginalName();
            $file ->move("images",$newName);
            $post ->featured = "images/$newName";
        }
        $post ->update();
        $post->categories()->sync($request->category_id);

        return redirect("/posts");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect("/posts");
    }
}
