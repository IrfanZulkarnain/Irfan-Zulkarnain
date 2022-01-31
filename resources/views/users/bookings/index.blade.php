@extends('layouts.app')

@section('title', 'My Bookings')

@section('content')
    <?php use App\Models\Property; ?>

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
                    <a href="#" class="hover:underline hover:text-gray-600">My Bookings</a>
                </div>
            </div>

            <!-- Loop for displaying bookings for customer in database -->
            @foreach ($bookings as $booking)
                <?php $property = Property::getPropertyBooked($booking->property_id); ?>
                
                <div class="p-4 mx-auto max-w-7xl">
                    <div class="flex flex-col -mx-4 md:flex-row">
                        <div class="px-4 md:flex-1">
                            <div x-data="{ image: 1 }" x-cloak>
                                <div class="h-64 mb-4 bg-gray-100 rounded-lg md:h-80">
                                    <div x-show="image === 1"
                                        class="flex items-center justify-center h-64 mb-4 bg-gray-100 rounded-lg md:h-80">
                                        <span class="text-5xl">1</span>
                                    </div>

                                    <div x-show="image === 2"
                                        class="flex items-center justify-center h-64 mb-4 bg-gray-100 rounded-lg md:h-80">
                                        <span class="text-5xl">2</span>
                                    </div>

                                    <div x-show="image === 3"
                                        class="flex items-center justify-center h-64 mb-4 bg-gray-100 rounded-lg md:h-80">
                                        <span class="text-5xl">3</span>
                                    </div>

                                    <div x-show="image === 4"
                                        class="flex items-center justify-center h-64 mb-4 bg-gray-100 rounded-lg md:h-80">
                                        <span class="text-5xl">4</span>
                                    </div>
                                </div>

                                <div class="flex mb-4 -mx-2">
                                    <template x-for="i in 4">
                                        <div class="flex-1 px-2">
                                            <button x-on:click="image = i"
                                                :class="{ 'ring-2 ring-indigo-300 ring-inset': image === i }"
                                                class="flex items-center justify-center w-full h-24 bg-gray-100 rounded-lg focus:outline-none md:h-32">
                                                <span x-text="i" class="text-2xl"></span>
                                            </button>
                                        </div>
                                    </template>
                                </div>
                            </div>
                        </div>
                        <div class="px-4 md:flex-1">
                            <h2 class="mb-2 text-2xl font-bold leading-tight tracking-tight text-gray-800 md:text-3xl">
                                {{ $property->title }}</h2>
                            <p class="text-sm text-gray-500">By <a href="#" class="text-indigo-600 hover:underline"
                                    value=""></a>{{ $property->user_id }}</p>

                            <div class="flex items-center my-4 space-x-4">
                                <div>
                                    <div class="flex px-3 py-2 bg-gray-100 rounded-lg">
                                        <span class="mt-1 mr-1 text-indigo-400">RM</span>
                                        <span class="text-3xl font-bold text-indigo-600"
                                            name="price">{{ $property->price }}</span>
                                    </div>
                                </div>
                                <div class="flex-1">
                                    <p class="text-sm text-gray-400">Per Night</p>
                                </div>
                            </div>

                            <table class="w-full">
                                <thead>
                                    <tr class="text-sm leading-normal text-gray-600">
                                        <th class="px-6 py-3 text-center bg-gray-200 border-2 border-gray-400">Booking
                                            Reference
                                            ID</th>
                                        <td class="px-6 py-3 text-center bg-white border-2 border-gray-400">
                                            {{ $booking->id }}</td>
                                    </tr>
                                    <tr class="text-sm leading-normal text-gray-600">
                                        <th class="px-6 py-3 text-center bg-gray-200 border-2 border-gray-400">Start Date
                                        </th>
                                        <td class="px-6 py-3 text-center bg-white border-2 border-gray-400">
                                            {{ $booking->start_date }}</td>
                                    </tr>
                                    <tr class="text-sm leading-normal text-gray-600">
                                        <th class="px-6 py-3 text-center bg-gray-200 border-2 border-gray-400">End Date</th>
                                        <td class="px-6 py-3 text-center bg-white border-2 border-gray-400">
                                            {{ $booking->end_date }}</td>
                                    </tr>
                                </thead>
                            </table>
                            <div class="flex py-4 space-x-4">
                                <button type="button"
                                    class="px-6 py-2 font-semibold text-white bg-indigo-600 h-14 rounded-xl hover:bg-indigo-500">
                                    <a href="{{ route('bookings.show', $booking->id) }}" name="" value="">See More</a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

            @endforeach
        </div>
    </main>

@endsection
