@extends('layouts.app')

@section('title', 'Landing Page')

@section('content')

    <main class="my-8">
        <div class="container px-6 mx-auto">
            <div class="h-64 overflow-hidden bg-center bg-cover rounded-md"
                style="background-image: url('https://www.doswelldigital.com/wp-content/uploads/2018/05/3D-hotel-design-hd-wallpaper-artistic.jpg')">
                <div class="flex items-center h-full bg-gray-900 bg-opacity-50">
                    <div class="max-w-xl px-10">
                        <h2 class="text-2xl font-semibold text-white">Quality Homestays at Affordable Prices</h2>
                        
                        <button
                            class="flex items-center px-3 py-2 mt-4 text-sm font-medium text-white uppercase bg-blue-600 rounded hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                            <a href="{{ route('properties.index') }}">Book now!</a>
                            <svg class="w-5 h-5 mx-2" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div class="mt-8 md:flex md:-mx-4">
                <div class="w-full h-64 overflow-hidden bg-center bg-cover rounded-md md:mx-4 md:w-1/2"
                    style="background-image: url('https://c0.wallpaperflare.com/preview/366/11/720/sky-landscape-lake-tree.jpg')">
                    <div class="flex items-center h-full bg-gray-900 bg-opacity-50">
                        <div class="max-w-xl px-10">
                            <h2 class="text-2xl font-semibold text-white">Experience a Home Away From Home</h2>
                            <p class="mt-2 text-gray-400"></p>
                            <button
                                class="flex items-center mt-4 text-sm font-medium text-white uppercase rounded hover:underline focus:outline-none">
                                <a href="{{ route('properties.index') }}">Book now!</a>
                                <svg class="w-5 h-5 mx-2" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                    <path d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="w-full h-64 mt-8 overflow-hidden bg-center bg-cover rounded-md md:mx-4 md:mt-0 md:w-1/2"
                    style="background-image: url('https://ak-d.tripcdn.com/images/0205q120008i723ydC2CE_R_550_412_R5_D.jpg')">
                    <div class="flex items-center h-full bg-gray-900 bg-opacity-50">
                        <div class="max-w-xl px-10">
                            <h2 class="text-2xl font-semibold text-white">Short and Long Term Acommodation</h2>
                            <p class="mt-2 text-gray-400"></p>
                            <button
                                class="flex items-center mt-4 text-sm font-medium text-white uppercase rounded hover:underline focus:outline-none">
                                <a href="{{ route('properties.index') }}">Book now!</a>
                                <svg class="w-5 h-5 mx-2" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                    <path d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-16">
                <h3 class="text-2xl font-medium text-gray-600">Explore Our Homestays</h3>
                <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                    <div class="w-full max-w-sm mx-auto overflow-hidden rounded-md shadow-md">
                        <div class="flex items-end justify-end w-full h-56 bg-cover"
                            style="background-image: url('https://cdn-cms.pgimgs.com/static/2021/04/6bd37aa7-67f3-46f6-b666-f5a0e582fdf7.jpg')">

                        </div>
                        <div class="px-5 py-3">
                            <h3 class="text-gray-700 uppercase">Johor Bahru</h3>

                        </div>
                    </div>
                    <div class="w-full max-w-sm mx-auto overflow-hidden rounded-md shadow-md">
                        <div class="flex items-end justify-end w-full h-56 bg-cover"
                            style="background-image: url('https://s3media.freemalaysiatoday.com/wp-content/uploads/2019/03/homestay-kampung-melaka-rumah-FMT-200319.jpg')">

                        </div>
                        <div class="px-5 py-3">
                            <h3 class="text-gray-700 uppercase">Kota Tinggi</h3>

                        </div>
                    </div>
                    <div class="w-full max-w-sm mx-auto overflow-hidden rounded-md shadow-md">
                        <div class="flex items-end justify-end w-full h-56 bg-cover"
                            style="background-image: url('https://homestaybajet.com/webview/gambarrumah/000910_Dhm6TD-A.jpeg')">

                        </div>
                        <div class="px-5 py-3">
                            <h3 class="text-gray-700 uppercase">Batu Pahat</h3>

                        </div>
                    </div>
                    <div class="w-full max-w-sm mx-auto overflow-hidden rounded-md shadow-md">
                        <div class="flex items-end justify-end w-full h-56 bg-cover"
                            style="background-image: url('https://ik.imagekit.io/tvlk/apr-asset/dgXfoyh24ryQLRcGq00cIdKHRmotrWLNlvG-TxlcLxGkiDwaUSggleJNPRgIHCX6/hotel/asset/20011942-8755922d2af050cab7dd82f99acbef7c.jpeg?tr=q-40,c-at_max,w-740,h-500&_src=imagekit')">

                        </div>
                        <div class="px-5 py-3">
                            <h3 class="text-gray-700 uppercase">Mersing</h3>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>

@endsection
