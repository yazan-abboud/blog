@extends('layouts.app')


@section('content')
@if (session()->has('message'))
<div class="bg-blue-900 text-center py-4 lg:px-4">
    <div class="p-2 bg-gray-900 items-center text-indigo-100 leading-none lg:rounded-full flex lg:inline-flex" role="alert">
    <span class="flex rounded-full bg-indigo-500 uppercase px-2 py-1 text-xs font-bold mr-3">New</span>
    <span class="font-semibold mr-2 text-left flex-auto">{{session()->get('message')}}</span>
    <svg class="fill-current opacity-75 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z"/></svg>
    </div>
</div>
@endif


<div class="container m-auto text-center pb-6 pt-10">
    <h1 class="text-6xl font-bold">{{$post->title}}</h1>
    <div class="mt-5">
        By: <span class="text-gray-500 italic">{{$post->user->name}}</span><br><br>
        on: <span class="text-gray-500 italic">{{date('d-m-y',strtotime($post->updated_at))}}</span>

    </div>
</div>

<div class="container m-auto  pb-6 pt-10">
    <div class="flex h-96">
        <img class="object-cover w-full" src="/images/{{$post->image_path}}" alt="">
    </div>
    <div class="text-l text-gray-700 py-8 leading-6">
        <p>{{$post->description}}</p>
    </div>
    @if (auth::user() && auth::user()->id == $post->user_id)
    <div>
        <a href="/blog/{{$post->slug}}/edit" class="bg-green-900 inline-block text-gray-300 py-4 px-5 rounded-lg font-bold uppercase text-l place-self-start">Edit Post</a>
        <form action="/blog/{{$post->slug}}" method="post" class="inline-block">
            @csrf
            @method('DELETE')
            <button type="submit" class="bg-red-900 text-gray-300 py-4 px-5 rounded-lg font-bold uppercase text-l place-self-start">Delete Post</button>

        </form>
    </div>
    @endif

</div>

@endsection
