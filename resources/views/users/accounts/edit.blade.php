@extends('layouts.app')

@section('title', 'Profile Page')

@section('content')

    <main class="items-center justify-center ">
        <div class="py-6">
            <div class="flex max-w-sm mx-auto overflow-hidden bg-white rounded-lg shadow-lg lg:max-w-2xl">
                <div class="w-full p-8 lg:w-2/2">
                    <h2 class="text-2xl font-semibold text-center text-gray-700">My Profile</h2>
                    <p class="text-xl text-center text-gray-600">This is where you update your profile</p>
                    <form action="{{ route('users.update', $user->id) }}" name="update" method="POST">
                        @method("PATCH")
                        @csrf
                        <div class="mt-4">
                            <label class="block mb-2 text-sm font-bold text-gray-700">First Name</label>
                            <input
                                class="block w-full px-4 py-2 text-gray-700 bg-gray-200 border border-gray-300 rounded appearance-none focus:outline-none focus:shadow-outline"
                                type="text" value="{{ $user->fname }}" disabled>

                        </div>
                        <div class="mt-4">
                            <label class="block mb-2 text-sm font-bold text-gray-700">Last Name</label>
                            <input
                                class="block w-full px-4 py-2 text-gray-700 bg-gray-200 border border-gray-300 rounded appearance-none focus:outline-none focus:shadow-outline"
                                type="text" value="{{ $user->lname }}" disabled>
                        </div>
                        <div class="mt-4">
                            <label class="block mb-2 text-sm font-bold text-gray-700">Phone Number</label>
                            <input
                                class="block w-full px-4 py-2 text-gray-700 bg-gray-200 border border-gray-300 rounded appearance-none focus:outline-none focus:shadow-outline"
                                type="text" value="{{ $user->phone }}" name="txtphone">
                        </div>
                        <div class="mt-4">
                            <label class="block mb-2 text-sm font-bold text-gray-700">Email Address</label>
                            <input
                                class="block w-full px-4 py-2 text-gray-700 bg-gray-200 border border-gray-300 rounded appearance-none focus:outline-none focus:shadow-outline"
                                type="email" value="{{ $user->email }}" name="txtemail">
                        </div>
                        <div class="mt-4">
                            <div class="flex justify-between">
                                <label class="block mb-2 text-sm font-bold text-gray-700">Password</label>
                            </div>
                            <input
                                class="block w-full px-4 py-2 text-gray-700 bg-gray-200 border border-gray-300 rounded appearance-none focus:outline-none focus:shadow-outline"
                                type="password" value="{{ $user->password }}" name="txtpassword">

                        </div>
                        <div class="mt-4">
                            <div class="flex justify-between">
                                <label class="block mb-2 text-sm font-bold text-gray-700">Confirm Password</label>
                            </div>
                            <input
                                class="block w-full px-4 py-2 text-gray-700 bg-gray-200 border border-gray-300 rounded appearance-none focus:outline-none focus:shadow-outline"
                                type="password" value="{{ $user->password }}" name="txtpassword">
                        </div>

                        <div class="mt-8">
                            <button
                                class="w-full px-4 py-2 font-bold text-white bg-gray-700 rounded hover:bg-gray-600">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection
