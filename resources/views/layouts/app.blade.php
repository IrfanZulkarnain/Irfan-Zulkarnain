<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>@yield('title')</title>
</head>

<body>

    


    @if (session('id') == null)
        <!-- Header for User -->
        <x-public-header/>
    @else
        <!-- Header for belum login -->
        <x-user-header/>
    @endif

    @yield("content")

    <footer class="inset-x-0 bottom-0 h-16">
        <div class="grid grid-cols-3 py-8 text-gray-400 justify-items-stretch bg-zinc-600">
            <div class="max-w-screen-xl mx-auto space-y-2 text-sm">
                <h3 class="text-xl text-gray-300">Browse Pages</h3>
                <li><a class="underline underline-offset-2 hover:text-gray-200"
                        href="{{ route('properties.index') }}">Homestays</a></li>
                <li><a class="underline underline-offset-2 hover:text-gray-200" 
                        href="{{ route('about') }}">About</a>
                </li>
                <li><a class="underline underline-offset-2 hover:text-gray-200"
                        href="{{ route('contactUs') }}">Contact Us</a></li>
                <li><a class="underline underline-offset-2 hover:text-gray-200" 
                        href="{{ route('FAQ') }}">FAQ</a>
                </li>
            </div>
            <div class="max-w-screen-xl space-y-2 text-sm">
                <h3 class="text-xl text-gray-300">What else do we offer?</h3>
                <li><a class="underline underline-offset-2 hover:text-gray-200" href="#">Become an Affiliate</a></li>
                <li><a class="underline underline-offset-2 hover:text-gray-200" href="#">Work With Us</a></li>
            </div>
            <div class="max-w-screen-xl space-y-2 text-sm">
                <h3 class="text-xl text-gray-300">Homestay Booking System & Management</h3>
                <div class="">
                    <p>MyHomestay Sdn. Bhd,<br>
                        No. 1, Jalan Kebangsaan 1,<br>
                        Taman Universiti, 81300 Skudai,<br>
                        Johor Bahru, Johor, Malaysia</p>
                    <address class="py-4"> Email: <a class="underline underline-offset-2 hover:text-gray-200"
                            href="support@myhomestay.com">support@myhomestay.com</a><br>
                        Telephone: <a class="underline underline-offset-2 hover:text-gray-200"
                            href="07-1234567">07-1234567</a></address>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-2 gap-4 py-6 max-w-screen-full bg-zinc-800">
            <div class="max-w-screen-xl mx-auto text-sm text-gray-500">
                &copy; MyHomestay Booking System & Management - All Rights Reserved
            </div>
            <div class="max-w-screen-xl mx-auto text-sm text-gray-500">
                Designed by: Muhamad Irfan bin Dzurllkanian@Zulkarnain (S50981)
            </div>
        </div>
    </footer>

</body>

</html>
