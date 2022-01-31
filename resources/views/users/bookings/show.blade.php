@extends('layouts.app')

@section('title', 'Booking Details')

@section('content')

<main>
    <div class="p-4 mx-auto divide-y-2 max-w-7xl">

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
                <a href="#" class="hover:underline hover:text-gray-600">Homestays</a>
                <span>
                    <svg class="w-5 h-5 leading-none text-gray-300" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </span>
                <a href="#" class="hover:underline hover:text-gray-600">My Bookings</a>
                <span>
                    <svg class="w-5 h-5 leading-none text-gray-300" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </span>
                <a href="#" class="hover:underline hover:text-gray-600">{{ $booking->id }}</a>
            </div>
        </div>

        <div class="flex flex-col p-4 -mx-4 md:flex-row">
            
            <div class="capitalize md:flex-1">
                <h3 class="p-4 text-2xl">
                    Your booking has been added!
                </h3>
                <table class="w-1/2">
                    <thead>
                        <tr class="text-sm leading-normal text-gray-600">
                            <th class="px-6 py-3 text-center bg-gray-200 border-2 border-gray-400">Booking Reference
                                ID</th>
                            <td class="px-6 py-3 text-center bg-white border-2 border-gray-400">{{ $booking->id }}</td>
                        </tr>
                        <tr class="text-sm leading-normal text-gray-600">
                            <th class="px-6 py-3 text-center bg-gray-200 border-2 border-gray-400">Start Date</th>
                            <td class="px-6 py-3 text-center bg-white border-2 border-gray-400">{{ $booking->start_date }}</td>
                        </tr>
                        <tr class="text-sm leading-normal text-gray-600">
                            <th class="px-6 py-3 text-center bg-gray-200 border-2 border-gray-400">End Date</th>
                            <td class="px-6 py-3 text-center bg-white border-2 border-gray-400">{{ $booking->end_date }}</td>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</main>

@endsection