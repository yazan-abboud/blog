@extends('layouts.app')




@section('content')
<div class="container m-auto text-center pb-6 pt-10">
    <h1 class="text-6xl font-bold">Your Profile</h1>
</div>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="container m-auto pb-6 pt-10">
    <form action="/profile/store/{{auth::user()->id}}" method="post">
        @csrf

        <label class="block my-2 text-gray-900 dark:text-white" for="file_input">Number Phone:</label>
        <input type="text" name="phone" placeholder="Enter Your Number" value="{{$user->phone??null}}" class="w-full text-3xl rounded-lg shadow-lg border-b">
        <label class="block my-2 text-gray-900 dark:text-white" for="file_input">Your Address:</label>
        <input type="text" name="address" placeholder="Enter Your Address" value="{{$user->address??null}}" class="w-full text-3xl rounded-lg shadow-lg border-b">
        <label class="block my-2 text-gray-900 dark:text-white" for="file_input">Country:</label>
        <input type="text" name="country" placeholder="Enter Your Country" value="{{$user->country??null}}" class="w-full text-3xl rounded-lg shadow-lg border-b">
        <label class="block my-2 text-gray-900 dark:text-white" for="file_input">City:</label>
        <input type="text" name="city" placeholder="Enter Your City" value="{{$user->city??null}}" class="w-full text-3xl rounded-lg shadow-lg border-b">

<div class="container sm:grid  mx-auto p-5 border-b border-gray-300">
    <button type="submit" class="bg-green-900 text-gray-300 py-4 px-5 rounded-lg font-bold uppercase text-l place-self-center">Submit</button>
</div>
    </form>

</div>
@endsection
