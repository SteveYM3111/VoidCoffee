<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.10.1/dist/full.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <nav class="bg-transparent">
        <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
            <div class="relative flex h-16 items-center justify-between">
                <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                    <div class="flex flex-shrink-0 items-center">
                        <img class="h-8 w-8" src="/image/biji.png" alt="Your Company">
                    </div>
                    <div class="hidden sm:ml-96 sm:block -translate-x-8">
                        <div class="flex space-x-12 mt-4">
                            <a href="/login" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white transform transition-transform hover:scale-110">Home</a>
                            <a href="/login" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white transform transition-transform hover:scale-110">About Us</a>
                            <a href="/login" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white transform transition-transform hover:scale-110">Location</a>
                            <a href="/login" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white transform transition-transform hover:scale-110">Products</a>
                        </div>
                    </div>
                </div>
                <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0 space-x-4">
                    <button type="button" class="relative rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 transform transition-transform hover:scale-110">
                        <span class="absolute -inset-1.5"></span>
                        <span class="sr-only">View notifications</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                        </svg>
                    </button>
                    <!-- Profile dropdown -->
                    <div class="dropdown">
                        <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                            <div class="w-10 rounded-full transform transition-transform hover:scale-110">
                                <img alt="Profile" src="/image/gojoadmin.png"/>
                            </div>
                        </div>
                        <div tabindex="0" class="dropdown-content mt-6 z-[1] p-2 shadow bg-base-100 rounded-box w-52 -translate-x-32">
                            <div class="bg-purple-900 p-4 rounded-t-lg animate-colorShift">
                                <div class="flex flex-col items-center">
                                    <img src="/image/gojoadmin.png" alt="Profile" class="w-24 h-24 rounded-full border-4 border-white">
                                    <p class="text-white mt-2">Guest</p>
                                </div>
                            </div>
                            <ul class="menu menu-sm p-2">
                                <li class="mx-auto"><a href="/akun" class="text-whit e">Profile</a></li>
                                <li class="mx-auto"><a href="/login" class="text-white">Login</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    @yield('content')
</body>

</html>
