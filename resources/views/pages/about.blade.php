@extends('layouts.app')

@section('title', 'About Us')

@section('content')

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
                    <a href="../system/aboutUs.html" class="hover:underline hover:text-gray-600">About Us</a>
                </div>
            </div>
            <div class="p-4 mx-auto max-w-7xl">
                <div class="space-x-2 text-gray-700">
                    <h2 class="text-2xl font-semibold text-center text-gray-700">About Us</h2>
                    <p class="text-xl text-center text-gray-600">About MyHomestay - Booking and Management System</p>
                </div>
                <br>
                <div class="text-gray-700">
                    <p>Online homestay reservation is a popular method for booking homestays. Travelers can book rooms
                        on a computer by using online security to protect their privacy and financial information and by
                        using several online travel agents to compare prices and facilities at different homestays.</p>
                    <br>
                    <p>Prior to the Internet, travelers could write, telephone the homestay directly, or use a travel
                        agent to make a reservation. Nowadays, online travel agents have pictures of homestays and
                        rooms, information on prices and deals, and even information on local resorts. Many also allow
                        reviews of the traveler to be recorded with the online travel agent.</p>
                    <br>
                    <p>
                        Online homestay reservations are also helpful for making last minute travel arrangements.
                        Homestays may drop the price of a room if some rooms are still available. There are several
                        websites that specialize in searches for deals on rooms.
                    </p>
                    <br>
                    <p>
                        Large homestay chains typically have direct connections to the airline national distribution
                        systems (GDS) (Sabre, Galileo, Amadeus, and Worldspan). These in turn provide homestay
                        information directly to the hundreds of thousands of travel agents that align themselves with
                        one of these systems. Individual homestays and small homestay chains often cannot afford the
                        expense of these direct connections and turn to other companies to provide the connections.
                    </p>
                    <br>
                    <p>
                        Several large online travel sites are, in effect, travel agencies. These sites send the
                        homestays' information and rates downstream to literally thousands of online travel sites, most
                        of which act as travel agents. They can then receive commission payments from the homestays for
                        any business booked on their websites.
                    </p>
                </div>
            </div>
        </div>
    </main>

@endsection
