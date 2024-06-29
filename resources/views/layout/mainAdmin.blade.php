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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>

<body>
    <div class="flex h-screen bg-gray-200">
        <!-- Sidebar -->
        <div class="flex flex-col w-64 h-screen px-4 py-8 bg-gray-900 border-r">
            <h2 class="text-3xl font-semibold text-white mx-auto">voidcoffee</h2>
            <div class="flex flex-col justify-between mt-6">
                <aside>
                    <ul>
                        <li>
                            <a href="/admin/Dashboard" class="flex items-center px-4 py-2 text-gray-200 hover:bg-gray-700 rounded-md" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M10 3a7 7 0 11-7 7 7 7 0 017-7m0-2a9 9 0 100 18 9 9 0 000-18z"/>
                                </svg>
                                <span class="mx-4 font-medium">Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="/admin/Data" class="flex items-center px-4 py-2 mt-5 text-gray-200 rounded-md hover:bg-gray-700" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M3 3h14a2 2 0 012 2v1a2 2 0 01-2 2H3a2 2 0 01-2-2V5a2 2 0 012-2zm0 4h14v6H3V7zm0 8h14a2 2 0 012 2v1a2 2 0 01-2 2H3a2 2 0 01-2-2v-1a2 2 0 012-2z"/>
                                </svg>
                                <span class="mx-4 font-medium">Data Admin</span>
                            </a>
                        </li>
                        <li>
                            <a href="/admin/Barang" class="flex items-center px-4 py-2 mt-5 text-gray-200 rounded-md hover:bg-gray-700" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M5 4h10a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5a1 1 0 011-1zm0 8h10a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1v-2a1 1 0 011-1z"/>
                                </svg>
                                <span class="mx-4 font-medium">Data Barang</span>
                            </a>
                        </li>
                        <li>
                            <a href="/admin/orderan" class="flex items-center px-4 py-2 mt-5 text-gray-200 rounded-md hover:bg-gray-700" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M8.707 13.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H15a1 1 0 010 2H5.414l3.293 3.293a1 1 0 010 1.414z"/>
                                </svg>
                                <span class="mx-4 font-medium">Data Pesanan</span>
                            </a>
                        </li>
                        <li>
                            <a href="/admin/Komentar" class="flex items-center px-4 py-2 mt-5 text-gray-200 rounded-md hover:bg-gray-700" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M8 9a3 3 0 113-3 3 3 0 01-3 3zM2 18a1 1 0 011-1h12a1 1 0 011 1v1H2z"/>
                                </svg>
                                <span class="mx-4 font-medium">Komentar</span>
                            </a>
                        </li>
                    </ul>
                </aside>
            </div>
        </div>

        <!-- Main content -->
            <div class="flex-1 bg-base-co">
                <div class="navbar bg-base-300 shadow-lg relative">
                    <div class="flex justify-between items-center w-full px-4 py-2">
                        <div>
                            <h1 class="text-xl font-bold text-white">Hello Admin👋</h1>
                            <p class="text-sm text-white">Welcome to your dashboard</p>
                        </div>
                        <div class="flex items-center space-x-4">
                            <div class="relative">
                                <input type="text" placeholder="Search" class="pl-10 pr-4 py-2 rounded-md bg-gray-700 text-white focus:outline-none">
                                <span class="absolute inset-y-0 left-0 pl-3 flex items-center">
                                    <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35m1.18-5.82A7.5 7.5 0 1115 7.5 7.5 7.5 0 0117.83 12.83z"/>
                                    </svg>
                                </span>
                            </div>
                            <div class="justify-center">
                    <div class="flex-none">
                        <div class="dropdown dropdown-down">
                            <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                                <div class="w-10 rounded-full">
                                    <img alt="Tailwind CSS Navbar component" src="/image/gojoadmin.png"/>
                                </div>
                            </div>
                            <div tabindex="0" class="dropdown-content mb-6 z-[1] p-2 shadow bg-base-100 rounded-box w-52 -translate-x-36 mt-4">
                                <div class="bg-green-400 p-4 rounded-t-lg">
                                    <div class="flex flex-col items-center">
                                        <img src="/image/gojoadmin.png" alt="Profile" class="w-24 h-24 rounded-full border-4 border-white">
                                        @if(Auth::check())
                                        <p class="text-white mt-2">{{ Auth::user()->name }}</p>
                                        @else
                                        <p class="text-white mt-2">Guest</p>
                                        @endif
                                    </div>
                                </div>

                                <ul class="menu menu-sm p-2">
                                    <li><a href="/admin/akunAdmin" class="text-white mx-auto">Profile</a></li>
                                    <li><a href="/login" class="text-white mx-auto">Logout</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

            @yield('content')
</div>
</div>
</body>

</html>