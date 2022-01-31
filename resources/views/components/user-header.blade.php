<header class="text-xl font-medium text-gray-300 bg-zinc-600">
    <div class="container px-6 py-3 mx-auto">
        <div class="flex items-center justify-between">

            <!-- Left Side of Navigation Bar -->
            <div class="hidden w-full md:flex md:items-center">
                <a class="w-full text-3xl md:text-left" href="{{ route('landingPage') }}">MyHomestay</a>
            </div>

            <!-- Right side of Navigation Bar -->
            <div class="flex items-center justify-end w-full">
                <nav class="hidden mt-4 sm:flex sm:justify-center sm:items-center">
                    <div class="flex flex-col space-x-8 sm:flex-row">

                        <a class="mt-3 hover:underline sm:mx-3 sm:mt-0" href="{{ route('properties.create') }}">List a House</a>
                        <a class="mt-3 hover:underline sm:mx-3 sm:mt-0" href="{{ route('landingPage') }}">Home</a>
                        <a class="mt-3 hover:underline sm:mx-3 sm:mt-0"
                            href="{{ route('properties.index') }}">Homestays</a>
                        <a class="mt-3 hover:underline sm:mx-3 sm:mt-0" href="{{ route('about') }}">About</a>
                        <a class="mt-3 hover:underline sm:mx-3 sm:mt-0" href="{{ route('contactUs') }}">Contact
                            Us</a>

                        <div x-data="{dropdownMenu: false}" class="">
                            <!-- Dropdown toggle button -->
                            <a @mouseover="dropdownMenu = ! dropdownMenu" class="font-medium hover:text-gray-800">
                                {{ $user->fname }}
                                <svg class="inline-flex w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                            <!-- Dropdown list -->
                            <div x-show="dropdownMenu" @mouseout="dropdownMenu = ! dropdownMenu"
                                class="absolute bg-white rounded-md shadow-xl top-18 w-44">
                                <a href="{{ route('users.edit', $user->id) }}"
                                    class="block px-4 py-2 text-gray-600 hover:bg-gray-400 hover:text-white">
                                    My Profile
                                </a>
                                <a href="{{ route('properties.list', $user->id) }}"
                                    class="block px-4 py-2 text-gray-600 hover:bg-gray-400 hover:text-white">
                                    My Homestays
                                </a>
                                <a href="{{ route('bookings.index', $user->id) }}"
                                    class="block px-4 py-2 text-gray-600 hover:bg-gray-400 hover:text-white">
                                    My Bookings
                                </a>
                                <a href="{{ route('bookingsOwner.index', $user->id) }}"
                                    class="block px-4 py-2 text-gray-600 hover:bg-gray-400 hover:text-white">
                                    My Customers
                                </a>
                                <form action="{{ route('accounts.logout') }}" method="POST">
                                    @csrf
                                    <button class="block px-4 py-2 text-gray-600 shadow-xl hover:bg-gray-400 hover:text-white">
                                        <svg class="inline-block w-6 h-6" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                                            </path>
                                        </svg> Logout
                                    </button>
                                </form>
                            </div>
                        </div>
                        </a>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
