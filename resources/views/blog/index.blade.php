@extends('layouts.app')


@section('content')



<div class="container m-auto pb-6 pt-10">
    <h1 class="text-6xl font-bold">All Posts</h1>
</div>
@if (auth::check())
    <div class="container sm:grid  mx-auto p-5 border-b border-gray-300">
        <a href="/blog/create" class="bg-green-900 text-gray-300 py-4 px-5 rounded-lg font-bold uppercase text-l place-self-start">Create New Post</a>
    </div>
@endif
@foreach ($posts as $post)
<div class="container sm:grid grid-cols-2 gap-20 mx-auto py-12 px-5 border-b border-gray-300">
    <div class="flex">
        <img class="object-cover" src="/images/{{$post->image_path}}" alt="">
    </div>
    <div>
        <h2 class="text-gray-700 font-bold text-4xl py-5 md:pt-0">{{$post->title}}</h2>
        <span>
            By: <span class="text-gray-500 italic">{{$post->user->name}}</span><br><br>
            on: <span class="text-gray-500 italic">{{date('d-m-y',strtotime($post->updated_at))}}</span>
            <p class="text-l text-gray-700 py-12 leading-5">{{$post->description}}</p>
            <a href="/blog/{{$post->slug}}" class="bg-gray-900 text-gray-300 py-4 px-5 rounded-lg font-bold uppercase text-l place-self-start">Read More</a>
        </span>
    </div>
</div>

@endforeach


@endsection

