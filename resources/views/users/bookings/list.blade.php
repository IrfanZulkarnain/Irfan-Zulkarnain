@extends('layouts.app')

@section('title', 'Bookings List')

@section('content')

    <main>
        <!-- Breadcrumbs -->
        <div class="p-4 divide-y-2">
            <div class="p-4 mx-auto max-w-7xl">
                <div class="flex items-center space-x-2 text-sm text-gray-400">
                    <a href="#" class="hover:underline hover:text-gray-600">Home</a>
                    <span>
                        <svg class="w-5 h-5 leading-none text-gray-300" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </span>
                    <a href="#" class="hover:underline hover:text-gray-600">My Customers</a>
                </div>
            </div>
            <div class="p-4 mx-auto max-w-7xl">
                <table class="w-full table-auto min-w-max">
                    <thead>
                        <tr class="text-sm leading-normal text-gray-600 uppercase bg-gray-200">
                            <th class="px-6 py-3 text-center">{{ $booking->id }}</th>
                            <th class="px-6 py-3 text-center">Name</th>
                            <th class="px-6 py-3 text-center">Promoted By (First Name)</th>
                            <th class="px-6 py-3 text-center">Customer ID</th>
                            <th class="px-6 py-3 text-center">Status</th>
                            <th class="px-6 py-3 text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="text-sm font-light text-gray-600">
                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                            <td class="px-6 py-3 text-center">
                                <div class="flex items-center justify-center">
                                    <div class="flex items-center">
                                        <input class="font-medium" value="booking.id" disabled></input>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-3 text-center">
                                <div class="flex items-center justify-center">
                                    <div class="flex items-center">
                                        <input class="font-medium" value="property.name" disabled></input>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-3 text-center">
                                <div class="flex items-center justify-center">
                                    <div class="flex items-center">
                                        <input class="font-medium" value="user.firstname" disabled></input>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-3 text-center">
                                <div class="flex items-center justify-center">
                                    <div class="flex items-center">
                                        <input class="font-medium" value="user.id" disabled></input>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-3 text-center">
                                <span class="px-3 py-1 text-xs text-purple-600 bg-purple-200 rounded-full">Active</span>
                            </td>
                            <td class="px-6 py-3 text-center">
                                <div class="flex justify-center item-center">

                                    <!-- View Button  -->
                                    <button>
                                        <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">

                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor">

                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                            </svg>
                                        </div>
                                    </button>

                                    <!-- Delete Button -->
                                    <button>
                                        <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                        </div>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
    </main>
@endsection
