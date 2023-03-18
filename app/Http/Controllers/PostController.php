<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('blog.index')->with('posts',post::get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpg,png,svg|max:5048',
        ]);
        $slug = Str::slug($request->title, '-');
        $NewImageNAme = uniqid() . '-'. $slug .'.' . $request->image->extension();
        $request->image->move(public_path('images'),$NewImageNAme);

        Post::create([
            'title'=> $request->title,
            'slug' => $slug,
            'description'=> $request->description,
            'image_path'=>$NewImageNAme,
            'user_id'=> auth()->user()->id
        ]);
        return redirect('/blog');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {

        return view('blog.show')->with('post',Post::where('slug',$slug)->first());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        return view('blog.edit')->with('post',Post::where('slug',$slug)->first());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpg,png,svg|max:5048',
        ]);
        $NewImageNAme = uniqid() . '-'. $slug .'.' . $request->image->extension();
        $request->image->move(public_path('images'),$NewImageNAme);

        Post::where('slug',$slug)->update([
            'title'=> $request->title,
            'slug' => $slug,
            'description'=> $request->description,
            'image_path'=>$NewImageNAme,
            'user_id'=> auth()->user()->id
        ]);
        return redirect('/blog/'. $slug)->with('message','done');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        Post::where('slug',$slug)->delete();
        return redirect('/blog');
    }
}
