<header class="text-xl font-medium text-gray-300 bg-zinc-600">
    <div class="container px-6 py-3 mx-auto">
        <div class="flex items-center justify-between">
            <div class="hidden w-full md:flex md:items-center">
                <a class="w-full text-3xl md:text-left" href="{{ route('landingPage') }}">MyHomestay</a>
            </div>


            <div class="flex items-center justify-end w-full">
                <nav class="mt-4 sm:flex sm:justify-center sm:items-center">
                    <div class="flex flex-col space-x-8 sm:flex-row">
                        <a class="mt-3 hover:underline sm:mx-3 sm:mt-0"
                            href="{{ route('landingPage') }}">Home</a>
                        <a class="mt-3 hover:underline sm:mx-3 sm:mt-0"
                            href="{{ route('properties.index') }}">Homestays</a>
                        <a class="mt-3 hover:underline sm:mx-3 sm:mt-0"
                            href="{{ route('users.create') }}">Register</a>
                        <a class="mt-3 hover:underline sm:mx-3 sm:mt-0"
                            href="{{ route('users.login') }}">Login</a>
                        <a class="mt-3 hover:underline sm:mx-3 sm:mt-0" href="{{ route('about') }}">About</a>
                        <a class="mt-3 hover:underline sm:mx-3 sm:mt-0"
                            href="{{ route('contactUs') }}">Contact
                            Us</a>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>