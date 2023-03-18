@extends('layouts.app')


@section('content')
<div class="container m-auto text-center pb-6 pt-10">
    <h1 class="text-6xl font-bold">Add New Post</h1>
</div>

<div class="container m-auto text-center pb-6 pt-10">
    <form action="/blog" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" name="title" placeholder="Title" class="w-full text-3xl rounded-lg shadow-lg border-b">
        <textarea name="description" placeholder="description" class="w-full text-3xl rounded-lg shadow-lg border-b mt-5"></textarea>


        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload file</label>
        <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" name="image" id="file_input" type="file">


<div class="container sm:grid  mx-auto p-5 border-b border-gray-300">
    <button type="submit" class="bg-green-900 text-gray-300 py-4 px-5 rounded-lg font-bold uppercase text-l place-self-center">Submit New Post</button>
</div>
    </form>

</div>

@endsection
