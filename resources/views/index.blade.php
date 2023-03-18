@extends('layouts.app')




@section('content')

    <!-------------- hero ------------->
    <div class="hero-bg-image flex flex-col items-center justify-center text-center">
        <h1 class="text-gray-900 text-5xl uppercase font-bold pb-10">Welcome To My Blog</h1>
        <a href="/" class="bg-gray-300 text-gray-900 py-4 px-5 rounded-lg font-bold uppercase">Start Reading</a>
    </div>

    <!----------- how to be an expert --------->
    <div class="container sm:grid grid-cols-2 gap-20 mx-auto py-10">
        <div class="mx-2 md:mx-0">
            <img class="sm:rounded-lg" src="https://picsum.photos/id/266/960/620">
        </div>
        <div class="flex flex-col items-left justify-center m-10 sm:m-0">
            <h2 class="font-bold uppercase text-gray-900 text-4xl">How To Be An Expert</h2>
            <p class="font-bold text-gray-700 text-xl pt-2">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. A recusandae dicta temporibus inventore molestias quae maxime unde voluptatem quas, dolorum, architecto aut nobis quod repudiandae optio quos, adipisci ipsum. Numquam!
            </p>
            <p class="py-4 text-gray-500 text-sm leading-5">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perspiciatis commodi cum provident minima sint aut necessitatibus consequuntur beatae distinctio iusto, inventore vel quod eius? Accusamus voluptas dolores quaerat? Sunt, soluta.
            </p>
            <a href="/" class="bg-gray-900 text-gray-300 py-4 px-5 rounded-lg font-bold uppercase text-l place-self-start">Read More</a>
        </div>
    </div>

    <!----------- blog categories ------>
    <div class="text-center p-12 bg-gray-900 text-gray-300">
        <h2 class="text-2xl">Blog Categories</h2>
        <div class="container mx-auto pt-10  sm:grid grid-cols-4">
            <div class="font-bold text-3xl py-2">Front End</div>
            <div class="font-bold text-3xl py-2">Ux Design</div>
            <div class="font-bold text-3xl py-2">Programing Language</div>
            <div class="font-bold text-3xl py-2">Graphic Design</div>

        </div>
    </div>
    <!------- Recent posts ----------->
    <div class="container mx-auto text-center py-12">
        <h2 class="font-bold text-5xl py-10">Recent Posts</h2>
        <p class="text-gray-700 leading-6 px-10">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi similique et magnam deleniti dolor laudantium rem nesciunt ea nisi, maxime dolorum quibusdam maiores nemo facere at voluptas illo corrupti assumenda?</p>

    </div>
    <div class="sm:grid grid-cols-2 w-4/5 mx-auto">
        <div class="flex bg-yellow-900 text-gray-300 pt-10">
            <div class="block m-auto pt-4 pb-12 w-4/5">
                <ul class="md:flex text-xs gap-2">
                    <li class="bg-yellow-100 text-yellow-700 p-2 rounded inline-block my-1 md:my-0 hover:bg-yellow-500 hover:text-yellow-100 transition duration"><a href="/">php</a></li>
                    <li class="bg-yellow-100 text-yellow-700 p-2 rounded inline-block my-1 md:my-0 hover:bg-yellow-500 hover:text-yellow-100 transition duration"><a href="/">programing</a></li>
                    <li class="bg-yellow-100 text-yellow-700 p-2 rounded inline-block my-1 md:my-0 hover:bg-yellow-500 hover:text-yellow-100 transition duration"><a href="/">language</a></li>
                    <li class="bg-yellow-100 text-yellow-700 p-2 rounded inline-block my-1 md:my-0 hover:bg-yellow-500 hover:text-yellow-100 transition duration"><a href="/">back end</a></li>

                </ul>
                <h4 class="text-l py-10 leading-6">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit dignissimos cum reprehenderit commodi minus animi quos, quam deleniti nostrum corrupti sapiente laborum omnis explicabo praesentium. Nam adipisci accusamus quasi facere?
                </h4>
                <a href="/" class="bg-transparent border-2 text-gray-100 py-4 px-5 rounded-lg font-bold uppercase text-l inline-block">Read More</a>
            </div>

        </div>
        <div class="flex ">
            <img class="object-cover" src="https://picsum.photos/id/242/960/620" alt="">
        </div>
    </div>
@endsection
