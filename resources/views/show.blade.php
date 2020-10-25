@extends('layouts.main')

@section('content')
    <div class="movie-info border-b border-gray-800">
        <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
            <img src="/img/bloodshot.jpg" alt="bloodshot" class="w-64 md:w-96" >
            <div class="md:ml-24">
                <h2 class="text-4xl font-semibold">Bloodshot (2020)</h2>
                <div class="flex items-center text-gray-400 text-sm">
                    {{-- star start --}}
                    <svg class="fill-content text-orange-500 w-4" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                    width="32px" height="32px" viewBox="0 0 32 32" enable-background="new 0 0 32 32" xml:space="preserve">
                        <polygon fill="#E74C3C" points="16,0 20.351,10.835 32,11.625 23.04,19.111 25.889,30.434 16,24.226 6.111,30.434 8.96,19.111 
                            0,11.625 11.649,10.835 "/>
                        <polygon fill="#C0392B" points="16,0 20.351,10.835 16,16.722 "/>
                        <polygon fill="#C0392B" points="31.978,11.642 23.031,19.109 16,16.722 "/>
                        <polygon fill="#C0392B" points="25.889,30.434 23.04,19.111 16,16.722 "/>
                        <polygon fill="#C0392B" points="6.111,30.434 16,24.226 16,16.722 "/>
                        <polygon fill="#C0392B" points="0,11.625 8.96,19.111 16,16.722 "/>
                    </svg>
                    {{-- star end --}}

                    <span class="ml-1">85%</span>
                    <span class="mx-2">|</span>
                    <span>March 13, 2020</span>
                    <span class="mx-2">|</span>
                    <span>Action, Thriller, Drama</span>
                </div>
                <p class="text-gray-300 mt-8">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat eaque sequi similique, repellat aliquid asperiores a quae provident labore ab voluptates earum nobis, natus modi, accusamus maiores. Sequi nemo, consectetur dolorum accusamus magnam nostrum illo saepe, pariatur reiciendis suscipit ea. Nostrum dolores dicta explicabo quia recusandae rerum similique repudiandae nihil!
                </p>
                <div class="mt-12">
                    <h4 class="text-white font-semibold">Featured Cast</h4>
                    <div class="flex mt-4">
                        <div>
                            <div>Dave Wilson</div>
                            <div class="text-sm text-gray-400">Director</div>
                        </div>
                        <div class="ml-8">
                            <div>Kimberly A. Tillman</div>
                            <div class="text-sm text-gray-400">Costume designer</div>
                        </div>
                        <div class="ml-8">
                            <div>Steve Jablonsky</div>
                            <div class="text-sm text-gray-400">Music</div>
                        </div>
                    </div>
                </div>
                <div class="mt-12">
                    <button class="flex items-center bg-red-500 text-gray-900 rounded font-semibold px-5 py-4 hover:bg-red-800 transition ease-in-out duration-150">
                        <svg class="w-6 fill-content" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50"><path d="M25 42c-9.4 0-17-7.6-17-17S15.6 8 25 8s17 7.6 17 17-7.6 17-17 17zm0-32c-8.3 0-15 6.7-15 15s6.7 15 15 15 15-6.7 15-15-6.7-15-15-15z"/><path d="M20 33.7V16.3L35 25l-15 8.7zm2-14v10.5l9-5.3-9-5.2z"/></svg>
                        <span class="ml-1">Trailer</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="movie-cast border-b border-gray-800">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Cast</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/bloodshot1.jpg" alt="bloodshot" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-300">Bloodshot</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">
                            <h2>Full name</h2>
                            <span class="ml-1">Movie name</span>
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/bloodshot2.jpg" alt="bloodshot" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-300">Bloodshot</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">
                            <h2>Full name</h2>
                            <span class="ml-1">Movie name</span>
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/bloodshot3.jpg" alt="bloodshot" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-300">Bloodshot</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">
                            <h2>Full name</h2>
                            <span class="ml-1">Movie name</span>
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/bloodshot4.jpg" alt="bloodshot" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-300">Bloodshot</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">
                            <h2>Full name</h2>
                            <span class="ml-1">Movie name</span>
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/bloodshot5.jpg" alt="bloodshot" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-300">Bloodshot</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">
                            <h2>Full name</h2>
                            <span class="ml-1">Movie name</span>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>

    <div class="movie-cast border-b border-gray-800">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Images</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/bloodshotImg1.jpg" alt="bloodshot" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/bloodshotImg2.jpg" alt="bloodshot" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/bloodshotImg3.jpg" alt="bloodshot" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                </div>
            </div> 
        </div>
    </div>
@endsection