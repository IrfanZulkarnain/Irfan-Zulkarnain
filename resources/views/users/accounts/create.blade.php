@extends('layouts.app')

@section('title', 'User Register')

@section('content')

    
    
    <main class="items-center justify-center p-4 divide-y">

        <!-- Navigation Links -->
        <div class="p-4 mx-auto max-w-7xl">
            <div class="flex items-center space-x-2 text-sm text-gray-400">
                <a href="#" class="hover:underline hover:text-gray-600">Home</a>
                <span>
                    <svg class="w-5 h-5 leading-none text-gray-300" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </span>
                <a href="#" class="hover:underline hover:text-gray-600">Register</a>
            </div>
        </div>

        <!-- Register Content -->
        <div class="p-4 mx-auto max-w-7xl">
            <div class="flex max-w-sm mx-auto overflow-hidden bg-white rounded-lg shadow-lg lg:max-w-5xl">
                <div class="hidden bg-cover lg:block lg:w-1/2"
                    style="background-image:url('https://www.teahub.io/photos/full/142-1422592_homestay-murah-di-kl.jpg')">
                </div>
                <div class="w-full p-8 lg:w-1/2">
                    <h2 class="text-2xl font-semibold text-center text-gray-700">Welcome to MyHomestay</h2>
                    <p class="text-xl text-center text-gray-600">Fill up the form to continue</p>

                    <form action="{{ route('users.store') }}" name="register" method="POST">
                        @csrf
                        <div class="mt-4">
                            <label class="block mb-2 text-sm font-bold text-gray-700">First Name</label>
                            <input
                                class="block w-full px-4 py-2 text-gray-700 bg-gray-200 border border-gray-300 rounded appearance-none focus:outline-none focus:shadow-outline"
                                type="text" name="txtfname">

                        </div>
                        <div class="mt-4">
                            <label class="block mb-2 text-sm font-bold text-gray-700">Last Name</label>
                            <input
                                class="block w-full px-4 py-2 text-gray-700 bg-gray-200 border border-gray-300 rounded appearance-none focus:outline-none focus:shadow-outline"
                                type="text" name="txtlname">
                        </div>
                        <div class="mt-4">
                            <label class="block mb-2 text-sm font-bold text-gray-700">Phone Number</label>
                            <input
                                class="block w-full px-4 py-2 text-gray-700 bg-gray-200 border border-gray-300 rounded appearance-none focus:outline-none focus:shadow-outline"
                                type="text" name="txtphone">
                        </div>
                        <div class="mt-4">
                            <label class="block mb-2 text-sm font-bold text-gray-700">Email Address</label>
                            <input
                                class="block w-full px-4 py-2 text-gray-700 bg-gray-200 border border-gray-300 rounded appearance-none focus:outline-none focus:shadow-outline"
                                type="email" name="txtemail">
                        </div>
                        <div class="mt-4">
                            <div class="flex justify-between">
                                <label class="block mb-2 text-sm font-bold text-gray-700">Password</label>
                            </div>
                            <input
                                class="block w-full px-4 py-2 text-gray-700 bg-gray-200 border border-gray-300 rounded appearance-none focus:outline-none focus:shadow-outline"
                                type="password" name="txtpassword">

                        </div>
                        <div class="mt-4">
                            <div class="flex justify-between">
                                <label class="block mb-2 text-sm font-bold text-gray-700">Confirm Password</label>
                            </div>
                            <input
                                class="block w-full px-4 py-2 text-gray-700 bg-gray-200 border border-gray-300 rounded appearance-none focus:outline-none focus:shadow-outline"
                                type="password" name="txtpassword">
                        </div>

                        <div class="mt-8">
                            <button type="submit"
                                class="w-full px-4 py-2 font-bold text-white bg-gray-700 rounded hover:bg-gray-600">Sign
                                Up</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    
@endsection
