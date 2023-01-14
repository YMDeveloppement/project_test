<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Http\Requests\StorePost;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{

    public function index()
    {
        return view("posts.index    ",[
            // "posts"=>[]
            "posts"=>Post::all()
        ]);
        // dd(\App\Models\Post::all());
    }


    public function show($id)
    {
        // dd(\App\Models\Post::find($id));
        return view("posts.show",[
            "post"=>Post::find($id)
        ]);
    }

    public function create(){
        return view("posts.create");
    }


    public function store(StorePost $request){
        // $title=$request->input('title');
        // $content=$request->input('content');
        // dd('title',$title,'  ','content',$content);

        // $request->validate([
        //     'title' => 'required|min:4|max:100',
        //     'content' => 'required',
        // ]);
        // $request->validate();

        // $post =new Post();

        // $post->title = $request->input('title');
        // $post->content = $request->input('content');

        // $post->slug = Str::slug($request->input('title'),'-');
        // $post->active = true;

        // $post -> save();
        $data=$request->only(["title","content"]);
        $data['slug']=Str::slug($data['title'],'-');
        $data['active']=false;

        $post=Post::create($data);

        $request->session()->flash('status','post was created');
        // return redirect("/posts")
        // return redirect()->route("posts.show",["post"=>$post->id]);
        return redirect()->route("posts.index");

    }

    public function edit($id){
        $post=Post::findorFail($id);

        return view("posts.edit",[
            'post'=>$post
        ]);


    }
    public function update(StorePost $request, $id){
        $post=Post::findorFail($id);

        $post->title=$request->input("title");
        $post->content=$request->input("content");
        $post->slug=Str::slug($request->input("content"),"-");
        $post->save();
        $request->session()->flash('status','post was updated');
        return redirect()->route("posts.index");



    }
    public function destroy(Request $request ,$id){
        // $post=Post::findorFail($id);
        // $post->delete();

        Post::destroy($id);
        $request->session()->flash('status','post was updated');
        return redirect()->route("posts.index");


    }

}
