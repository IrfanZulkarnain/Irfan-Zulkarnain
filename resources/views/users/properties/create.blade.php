@extends('layouts.app')

@section('title', 'Listing a Homestay')

@section('content')


    <main>
        <!-- Breadcrumbs -->
        <form action="{{ route('properties.store') }}" name="propertyCreate" method="POST">
            @csrf
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
                        <a href="../Properties\userPropertyList.html"
                            class="hover:underline hover:text-gray-600">Homestays</a>
                        <span>
                            <svg class="w-5 h-5 leading-none text-gray-300" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </span>
                        <a href="#" class="hover:underline hover:text-gray-600">Listing A Homestay</a>
                    </div>
                </div>
                <!--  -->
                <div class="p-4 mx-auto max-w-7xl">
                    <h2 class="text-2xl font-semibold text-center text-gray-700">Creating A New Homestay</h2>
                    <p class="text-xl text-center text-gray-600">You are going to be one of our hosts!</p>

                    <div class="flex flex-col -mx-4 divide-x-2 md:flex-row">
                        <div class="px-4 md:flex-1">
                            <div class="mt-4">
                                <h2 class="text-2xl font-semibold text-center text-gray-700">Get started here</h2>
                                <br>
                                <label class="block mb-2 text-sm font-bold text-gray-700">Homestay Name</label>
                                <input
                                    class="block w-full px-4 py-2 text-gray-700 bg-gray-200 border border-gray-300 rounded appearance-none focus:outline-none focus:shadow-outline"
                                    type="text" placeholder="What is the name of your homestay?" name="txttitle" required>
                            </div>
                            <div class="mt-4">
                                <label class="block mb-2 text-sm font-bold text-gray-700">Price per night</label>
                                <input
                                    class="block w-full px-4 py-2 text-gray-700 bg-gray-200 border border-gray-300 rounded appearance-none focus:outline-none focus:shadow-outline"
                                    type="text" placeholder="How much RM per night?" name="txtprice" required>
                            </div>
                            <div class="mt-4">
                                <label class="block mb-2 text-sm font-bold text-gray-700">Brief description</label>
                                <input
                                    class="block w-full px-4 py-2 text-gray-700 bg-gray-200 border border-gray-300 rounded appearance-none focus:outline-none focus:shadow-outline"
                                    type="text" placeholder="How do you convince people to stay at your homestay?"
                                    name="txtbrief_description" required>
                            </div>
                        </div>
                        <div class="px-4 md:flex-1">
                            <div class="mt-4">
                                <h2 class="text-2xl font-semibold text-center text-gray-700">How many rooms does your
                                    homestay have?</h2>
                                <br>
                                <label class="block mb-2 text-sm font-bold text-gray-700">Number of toilets</label>
                                <select
                                    class="px-4 py-2 text-gray-700 bg-gray-200 border border-gray-300 rounded focus:outline-none focus:shadow-outline "
                                    name="txttoilet" required>
                                    <option value="">Select</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                </select>
                            </div>
                            <div class="mt-4">
                                <label class="block mb-2 text-sm font-bold text-gray-700">Number of Bedrooms</label>
                                <select
                                    class="px-4 py-2 text-gray-700 bg-gray-200 border border-gray-300 rounded focus:outline-none focus:shadow-outline"
                                    name="txtbedroom" required>
                                    <option value="">Select</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- About Your Homestay -->
                <div class="p-4 mx-auto max-w-7xl bg-zinc-100">
                    <h2 class="text-2xl font-semibold text-center text-gray-700">About your homestay</h2>
                    <p class="text-xl text-center text-gray-600">You are one step closer to becoming one of our hosts!
                    </p>

                    <div class="flex flex-col -mx-4 divide-x-2 md:flex-row">
                        <div class="px-4 md:flex-1">
                            <div class="mt-4">
                                <h2 class="text-2xl font-semibold text-center text-gray-700">Tell us more about your
                                    Homestay</h2>
                                <br>
                                <label class="block mb-2 text-sm font-bold text-gray-700">Full Description</label>
                                <textarea cols="30" rows="10"
                                    class="block w-full px-4 py-2 text-gray-700 bg-gray-200 border border-gray-300 rounded appearance-none focus:outline-none focus:shadow-outline"
                                    type="text" placeholder="Tell people more about your homestay" name="txtdescription"
                                    required></textarea>
                            </div>
                            <div class="mt-4">
                                <label class="block mb-2 text-sm font-bold text-gray-700">House Rules</label>
                                <select
                                    class="px-4 py-2 text-gray-700 bg-gray-200 border border-gray-300 rounded focus:outline-none focus:shadow-outline"
                                    name="txtrules" required>
                                    <option value="">Select</option>
                                    <option value="No Partying">No Partying</option>
                                    <option value="No Smoking">No Smoking</option>
                                    <option value="No Drinking">No Drinking</option>
                                    <option value="No Loud Music">No Loud Music</option>
                                </select>
                            </div>
                            <div class="mt-4">
                                <label class="block mb-2 text-sm font-bold text-gray-700">Local Area Facilities (Explain
                                    in
                                    your own words)</label>
                                <textarea cols="30" rows="6"
                                    class="block w-full px-4 py-2 text-gray-700 bg-gray-200 border border-gray-300 rounded appearance-none focus:outline-none focus:shadow-outline"
                                    type="text"
                                    placeholder="Example: Close to UTM, Close to KFC, Close to AEON Mall, Close to Park"
                                    name="txtfacilities" required></textarea>
                            </div>
                        </div>
                        <div class="px-4 md:flex-1">
                            <div class="mt-4">
                                <h2 class="text-2xl font-semibold text-center text-gray-700">Where exactly is your house
                                    stated?</h2>
                                <br>
                                <label class="block mb-2 text-sm font-bold text-gray-700">Street Address</label>
                                <input
                                    class="block w-full px-4 py-2 text-gray-700 bg-gray-200 border border-gray-300 rounded appearance-none focus:outline-none focus:shadow-outline"
                                    type="text" placeholder="Example: No.1, Jalan Kebangsaan 3, Taman Universiti"
                                    name="txtstrtAddress" required>
                            </div>
                            <div class="mt-4">
                                <label class="block mb-2 text-sm font-bold text-gray-700">City</label>
                                <select
                                    class="px-4 py-2 text-gray-700 bg-gray-200 border border-gray-300 rounded focus:outline-none focus:shadow-outline"
                                    name="txtcity" required>
                                    <option value="">Select</option>
                                    <option value="Batu Pahat">Batu Pahat</option>
                                    <option value="Johor Bahru">Johor Bahru</option>
                                    <option value="Kluang">Kluang</option>
                                    <option value="Kota Tinggi">Kota Tinggi</option>
                                    <option value="Kulai">Kulai</option>
                                    <option value="Mersing">Mersing</option>
                                    <option value="Muar">Muar</option>
                                    <option value="Pontian">Pontian</option>
                                    <option value="Segamat">Segamat</option>
                                    <option value="Tangkak">Tangkak</option>
                                </select>
                            </div>
                            <div class="mt-4">
                                <label class="block mb-2 text-sm font-bold text-gray-700">State</label>
                                <input
                                    class="px-4 py-2 text-gray-700 bg-gray-200 border border-gray-300 rounded focus:outline-none focus:shadow-outline"
                                    type="text" value="Johor" name="txtstate" disabled>
                            </div>
                            <div class="mt-4">
                                <label class="block mb-2 text-sm font-bold text-gray-700">Postal Code</label>
                                <input
                                    class="block px-4 py-2 text-gray-700 bg-gray-200 border border-gray-300 rounded appearance-none focus:outline-none focus:shadow-outline"
                                    type="text" placeholder="Example: 81300" name="txtzip" required>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="p-4 mx-auto max-w-7xl">
                    <div class="flex flex-col -mx-4 md:flex-row">
                        <div class="px-4 md:flex-1">
                            <div class="mt-8">
                                <button
                                    class="px-4 py-2 font-bold text-white bg-gray-700 rounded hover:bg-gray-600">Submit</button>
                            </div>
                        </div>
                        <div class="px-4 md:flex-1">
                        </div>
                    </div>
                </div>
            </div>
        </form>
        </div>
    </main>

@endsection
