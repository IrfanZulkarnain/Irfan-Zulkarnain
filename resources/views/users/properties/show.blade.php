@extends('layouts.app')

@section('title', 'Homestay Details')

@section('content')

    <main>
        <!-- Breadcrumbs -->
        <div class="p-4 divide-y-2">
            <!-- Navigation links -->
            <div class="p-4 mx-auto max-w-7xl">
                <div class="flex items-center space-x-2 text-sm text-gray-400">
                    <a href="#" class="hover:underline hover:text-gray-600">Home</a>
                    <span>
                        <svg class="w-5 h-5 leading-none text-gray-300" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </span>
                    <a href="../Properties\userPropertyList.html" class="hover:underline hover:text-gray-600">Homestays</a>
                    <span>
                        <svg class="w-5 h-5 leading-none text-gray-300" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </span>
                    <a href="#" class="hover:underline hover:text-gray-600">{{ $property->title }}</a>
                </div>
            </div>

            <!-- Homestay Show -->
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
                        <p class="text-sm text-gray-500">By <span
                                class="inline-flex font-bold text-gray-800">{{ $user->fname }} {{ $user->lname }}</span>
                        </p>

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

                        <p class="text-gray-500" name="description" value="description">
                            {{ $property->brief_description }}</p>

                        <!-- Booking Form -->
                        <form action="{{ route('bookings.store') }}" method="POST" name="booking">
                            @csrf
                            <input type="hidden" name="txtproperty_id" value="{{ $property->id }}">
                            <div class="flex py-4 space-x-4">
                                <div class="mt-4">
                                    <label class="block mb-2 text-sm font-bold text-gray-700">Start Date</label>
                                    <input
                                        class="px-4 py-2 text-gray-700 bg-gray-200 border border-gray-300 rounded focus:outline-none focus:shadow-outline"
                                        type="date" name="txtstart_Date">
                                </div>
                                <div class="mt-4">
                                    <label class="block mb-2 text-sm font-bold text-gray-700">End Date</label>
                                    <input
                                        class="px-4 py-2 text-gray-700 bg-gray-200 border border-gray-300 rounded focus:outline-none focus:shadow-outline"
                                        type="date" name="txtend_Date">
                                </div>
                            </div>
                            <button type="submit"
                                class="px-6 py-2 font-semibold text-white bg-indigo-600 h-14 rounded-xl hover:bg-indigo-500">
                                Book Now
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- About The Homestay Owner -->
            <div class="p-4 mx-auto max-w-7xl bg-zinc-100">
                <h1 class="text-3xl">About the Homestay Owner</h1>
                <br>
                <h1 class="text-xl">Name</h1>
                <p class="font-bold" type="text" name="">{{ $user->fname }} {{ $user->lname }}</p>
                <br>
                <h1 class="text-xl">Email</h1>
                <p class="font-bold" type="text" name="">{{ $user->email }}</p>
                <br>
                <h1 class="text-xl">Phone</h1>
                <p class="font-bold" type="text" name="">{{ $user->phone }}</p>
                <br>
            </div>

            <!-- About The Homestay -->
            <div class="p-4 mx-auto max-w-7xl">
                <h1 class="text-3xl">About the Homestay</h1>
                <br>
                <h1 class="text-xl">Name</h1>
                <p class="font-bold" type="text" name="">{{ $property->title }}</p>
                <br>
                <h1 class="text-xl">Description</h1>
                <p class="font-bold" type="text" name="">{{ $property->description }}</p>
                <br>
                <h1 class="text-xl">Toilet</h1>
                <p class="font-bold" type="text" name="">{{ $property->toilet }}</p>
                <br>
                <h1 class="text-xl">Bedroom</h1>
                <p class="font-bold" type="text" name="">{{ $property->bedroom }}</p>
                <br>
                <h1 class="text-xl">House Rules</h1>
                <p class="font-bold" type="text" name="">{{ $property->rules }}</p>
                <br>
                <h1 class="text-xl">Address</h1>
                <p class="font-bold" type="text" name="">{{ $property->strtAddress }}, {{ $property->city }},
                    {{ $property->zip }}, {{ $property->state }}</p>
                <br>
            </div>

            <!-- About The Area -->
            <div class="p-4 mx-auto max-w-7xl bg-zinc-100">
                <h1 class="text-3xl">About the Area</h1>
                <br>
                <!-- Supposedly to be Map for the address of the homestay -->
                <div class="mapouter">
                    <div class="gmap_canvas"><iframe width="1080" height="500" id="gmap_canvas"
                            src="https://maps.google.com/maps?q={{ $property->strtAddress }},%20{{ $property->city }}%20{{ $property->zip }}%20{{ $property->state }}&t=&z=13&ie=UTF8&iwloc=&output=embed"
                            frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a
                            href="https://fmovies-online.net">fmovies</a><br>
                        <style>
                            .mapouter {
                                position: relative;
                                text-align: right;
                                height: 500px;
                                width: 1080px;
                            }

                        </style><a href="https://www.embedgooglemap.net">embedgooglemap.net</a>
                        <style>
                            .gmap_canvas {
                                overflow: hidden;
                                background: none !important;
                                height: 500px;
                                width: 1080px;
                            }

                        </style>
                    </div>
                </div>
                <br>
                <h1 class="text-xl">Local Area Facilities</h1>
                <p class="font-bold" type="text" name="">{{ $property->facilities }}</p>
            </div>

            <!-- Frequent Questions -->
            <div class="p-4 mx-auto max-w-7xl">
                <div class="py-2">
                    <h1 class="text-3xl">How do I Book?</h1>
                    <p>Contact the host to check their availability and ask them any questions you have about staying
                        with
                        them. Once the host confirms they’re available for your dates, you can complete your booking.
                    </p>
                </div>
                <div class="py-2">
                    <h1 class="text-3xl">When do I pay?</h1>
                    <p>Once a host confirms they're available, you can go ahead and pay the booking fee using a choice
                        of
                        payment methods. You then pay your host on arrival or as stated by your host on their profile
                        and
                        agreed by you on booking. Please be cautious if a host requests advance payment if it's not
                        included
                        on their profile. Our hosts have been advised that if they wish to request advance payment they
                        must
                        make this explicit in their profile. We do not recommend the use of Money gram or Western Union.
                    </p>
                </div>
                <div class="py-2">
                    <h1 class="text-3xl">When can I share my contact details?</h1>
                    <p>Host and Guest email address, phone number and home address will be exchanged in a confirmation
                        email
                        sent to both immediately after a booking is completed. It's against our policy for Guests and
                        Hosts
                        to exchange direct contact details via our messaging system.</p>
                </div>
            </div>
        </div>
    </main>

@endsection
