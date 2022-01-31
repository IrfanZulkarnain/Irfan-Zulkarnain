<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyHomestay Administration</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" />
    <script type="module" src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>
    <script nomodule src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine-ie11.min.js" defer></script>
</head>

<body>
    <div class="flex" style="font-family: Arial;" x-data="{ open: true }">
        <div class="h-screen sidebar" style="width: 260px;" x-show="open">
            <div>
                <div class="block px-4 py-5 mx-auto text-purple-200 bg-purple-700 h-14">
                    WELCOME, ADMIN
                </div>
                <div class="h-screen bg-purple-700">
                    <div class="" style="font-size: 14px;">
                        <a href="dashboard.html"
                            class="block h-12 px-4 py-3 font-thin tracking-wider text-white bg-purple-600 border-b-2 border-purple-800 hover:text-purple-800 hover:bg-white">Dashboard</a>
                        <a href="adminList.html"
                            class="block h-12 px-4 py-3 font-thin tracking-wider text-white bg-purple-600 border-b-2 border-purple-800 hover:text-purple-800 hover:bg-white">List
                            of Admin</a>
                        <a href="propertyList.html"
                            class="block h-12 px-4 py-3 font-thin tracking-wider text-white bg-purple-600 border-b-2 border-purple-800 hover:text-purple-800 hover:bg-white">List
                            of Property</a>
                        <a href="userList.html"
                            class="block h-12 px-4 py-3 font-thin tracking-wider text-white bg-purple-600 border-b-2 border-purple-800 hover:text-purple-800 hover:bg-white">List
                            of User</a>
                        <a href="bookingList.html"
                            class="block h-12 px-4 py-3 font-thin tracking-wider text-white bg-purple-600 border-b-2 border-purple-800 hover:text-purple-800 hover:bg-white">List
                            of Booking</a>
                        <a href="statusPaymentList.html"
                            class="block h-12 px-4 py-3 font-thin tracking-wider text-white bg-purple-600 border-b-2 border-purple-800 hover:text-purple-800 hover:bg-white">List
                            of Payment</a>

                    </div>
                </div>
            </div>
        </div>
        <div class="z-10 w-full">
            <div
                class="sticky top-0 flex items-center justify-between px-10 py-4 bg-purple-600 border-b-4 border-purple-900 header h-14">
                <div class="flex items-center space-x-12">
                    <i class="text-xl font-thin text-white cursor-pointer hover:text-purple fas fa-bars"
                        @click="open = !open"></i>
                    <a href="" class="text-xl font-thin tracking-wider text-white hover:text-purple-400">MyHomestay
                        Administration</a>
                </div>

                <div class="flex items-center px-4 py-2 space-x-8 text-base text-gray-400">
                    <i class="font-thin text-white cursor-pointer fas fa-cog fa-2x animate animate-spin hover:text-green-500"
                        style="animation-duration: 7000ms;"></i>
                </div>
            </div>

            @yield("admin")

        </div>
    </div>
</body>

</html>