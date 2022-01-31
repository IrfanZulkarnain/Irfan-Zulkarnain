@extends('layouts.app')

@section('title', 'Browsing Homestays')

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
                    <a href="#" class="hover:underline hover:text-gray-600">Homestays</a>
                </div>
            </div>

            <!-- Loop for displaying homestays available in database -->
            @foreach ($properties as $property)
                @if ($property->availability === '1')
                    <input type="hidden" name="txtavailability" value={{ $property->availability }}>
                    <div class="p-4 mx-auto max-w-7xl">
                        <div class="flex flex-col -mx-4 md:flex-row">
                            <div class="px-4 md:flex-1">
                                <div x-data="{ image: 1 }" x-cloak>
                                    <div class="h-64 mb-4 bg-gray-100 rounded-lg md:h-80">
                                        <div x-show="image === 1"
                                            style="background-image: url('https://media-cdn.tripadvisor.com/media/photo-s/05/88/39/bf/living-room.jpg')"
                                            class="flex items-center justify-center h-64 mb-4 bg-gray-100 rounded-lg md:h-80">
                                            <span class="text-5xl"></span>
                                        </div>

                                        <div x-show="image === 2"
                                            style="background-image: url('https://pix10.agoda.net/hotelImages/agoda-homes/6224953/5d3876857a058c222f2799d5465f844c.jpg?s=1920x768')"
                                            class="flex items-center justify-center h-64 mb-4 bg-gray-100 rounded-lg md:h-80">
                                            <span class="text-5xl"></span>
                                        </div>

                                        <div x-show="image === 3"
                                            style="background-image: url('https://pix10.agoda.net/hotelImages/6563292/0/71e8e4f2a56ef384bc5cb1d6e55d8f7e.jpg?s=1366x768')"
                                            class="flex items-center justify-center h-64 mb-4 bg-gray-100 rounded-lg md:h-80">
                                            <span class="text-5xl"></span>
                                        </div>

                                        <div x-show="image === 4"
                                            style="background-image: url('https://cf.bstatic.com/xdata/images/hotel/max1024x768/258816723.jpg?k=c92315dd1d9c658d16251f8b1a561de2d23555979d163edda3e06c6c22c54371&o=&hp=1')"
                                            class="flex items-center justify-center h-64 mb-4 bg-gray-100 rounded-lg md:h-80">
                                            <span class="text-5xl"></span>
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
                                <p class="inline-flex text-lg text-gray-600">Location
                                    <span>
                                        <svg class="inline-flex w-5 h-5 leading-none text-gray-300" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 5l7 7-7 7" />
                                        </svg>
                                    </span><p class="inline-flex text-lg font-bold text-gray-600">{{ $property->strtAddress }}, {{ $property->zip }} {{ $property->city }}, {{ $property->state }}
                                </p>
                                <br><br>
                                <p class="text-sm text-gray-500">By {{ $property->user_id }}</p>

                                <div class="flex items-center my-4 space-x-4">
                                    <p class="text-sm text-gray-400">From</p>
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

                                <p class="text-gray-500" name="description">{{ $property->brief_description }}</p>

                                <div class="flex py-4 space-x-4">
                                    <button type="button"
                                        class="px-6 py-2 font-semibold text-white bg-indigo-600 h-14 rounded-xl hover:bg-indigo-500">
                                        <a href="{{ route('properties.show', $property->id) }}" name="" value="">See
                                            More</a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </main>

@endsection
