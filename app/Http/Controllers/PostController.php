<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = new Post();
        $posts=$posts->get();
        return view("mviews.page",compact('posts'));
    }

     public function userindex()
    {
        $users = new User();
        $users=$users->get();
        return view("mviews.users",compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function user($author_id)
    {
        $posts = new Post();
        $posts = $posts->where('author_id', $author_id)->get();
        return view('post.use',compact('posts'));
    }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new post();
        $post->title = $request->title;
        $post->pcode = $request->pcode;
        $post->author_id = $request->author_id;
        $post->description = $request->description;
        $post->type = $request->type;
        $post->specification = $request->specification;
        $post->category = $request->category;
        $post->price = $request->price;
        $file = $request->file('image');
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $file->move('image/upload/'.$request->author_id.'/',$file->getClientOriginalName());
        }
        $post->img='image/upload/'.$request->author_id.'/'.$file->getClientOriginalName();
        $data = $post->save();
        return redirect(route('post.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $posts = new post();
        $post = $posts->find($id);
        $uid = $post->author_id;
        $users = new user();
        $user = $users->find($uid);

        return view('post.pg',compact('post','user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $posts = new post();
        $post = $posts->find($id);
        return view('mviews.edit',compact('post'));
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
        $posts = new post();
        $post = $posts->find($id);
        $post->title = $request->title;
        $post->pcode = $request->pcode;
        $post->description = $request->description;
        $post->type = $request->type;
        $post->specification = $request->specification;
        $post->category = $request->category;
        $post->price = $request->price;
        $file = $request->file('image');
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $file->move('image/upload/'.$request->author_id.'/',$file->getClientOriginalName());
        }
        $post->img='image/upload/'.$request->author_id.'/'.$file->getClientOriginalName();
        $data = $post->save();
        return redirect(route('post.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $posts = new post();
        $post = $posts->find($id);
        $post->delete();
        return redirect(route('post.index'));
    }
}
