@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')

<style>
    .icon::after {
        content: '';
        display: block;
        position: absolute;
        border-top: 23px solid transparent;
        border-bottom: 17px solid transparent;
        border-left: 12px solid #3182ce;
        left: 100%;
        top: 0;
    }
</style>

    <main>
        <!-- Breadcrumbs -->
        <div class="p-4 divide-y-2">
            <!-- Navigation links -->
            <div class="p-4 mx-auto max-w-7xl">
                <div class="flex items-center space-x-2 text-sm text-gray-400">
                    <a href="../system/home.html" class="hover:underline hover:text-gray-600">Home</a>
                    <span>
                        <svg class="w-5 h-5 leading-none text-gray-300" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </span>
                    <a href="../system/aboutUs.html" class="hover:underline hover:text-gray-600">Contact Us</a>
                </div>
            </div>
            <div class="p-4 mx-auto max-w-7xl">
                <div class="space-x-2 text-gray-700">
                    <h2 class="text-2xl font-semibold text-center text-gray-700">Contact Us</h2>
                    <p class="text-xl text-center text-gray-600">The most common questions about how our business works
                        and what
                        can do for you</p>
                </div>
                <form action="" class="relative p-6 my-10 bg-white form">

                    <div class="absolute flex items-center justify-center w-6 h-6 p-5 text-white bg-blue-600 icon"
                        style="left:-40px"><i class="text-2xl transform -rotate-45 fal fa-phone-volume fa-fw"></i></div>
                    <h3 class="text-2xl font-semibold text-gray-900">Let us call you!</h3>
                    <p class="text-gray-600"> To help you choose your property</p>
                    <div class="flex mt-3 space-x-5">
                        <input type="text" name="" id="" placeholder="Your Name" class="w-1/2 p-2 border">
                        <input type="tel" name="" id="" placeholder="Your Number" class="w-1/2 p-2 border">
                    </div>
                    <input type="email" name="" id="" placeholder="Your Email" class="w-full p-2 mt-3 border">
                    <textarea name="" id="" cols="10" rows="3" placeholder="Tell us about desired property"
                        class="w-full p-2 mt-3 border"></textarea>
                    <p class="mt-3 text-sm font-bold">GDPR Agreement *</p>
                    <div class="flex items-baseline mt-2 space-x-2">
                        <input type="checkbox" name="" id="" class="inline-block">
                        <p class="text-sm text-gray-600">I consent to having this website store my submitted information
                            so they can respond to my inquiry.</p>
                    </div>
                    <input type="submit" value="Submit"
                        class="p-3 mt-6 font-semibold text-white bg-blue-600 hover:bg-blue-500">
                </form>
            </div>
        </div>
    </main>

@endsection
