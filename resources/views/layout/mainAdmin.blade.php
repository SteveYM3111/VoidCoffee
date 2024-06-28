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

<!-- Header -->

<body>
    <div class="flex h-screen bg-gray-200">
        <!-- Sidebar -->
        <div class="flex flex-col w-64 bg-green-800 border-r text-neutral">
            <div class="flex items-center justify-center h-16">
                <span class="text-lg font-semibold"><img src="/image/Logo.png" class="w-20 h-20" alt=""></span>
            </div>
            <div class="font-bold divider mb-2 text-white">VOIDCOFFEE</div>

            <!-- Sidebar items -->
            <ul class="menu w-full rounded-box text-white">
                <li><a href="/admin/Dashboard"><i class="fas fa-tachometer-alt mr-2"></i>Dashboard</a></li>
                <li><a href="/admin/Data"><i class="fas fa-user-shield mr-2"></i>Data Admin</a></li>
                <li><a href="/admin/Barang"><i class="fa-solid fa-boxes-stacked mr-2"></i>Data Barang</a></li>
                <li><a href="/admin/orderan"><i class="fa-solid fa-boxes-stacked mr-2"></i>Data Pesanan</a></li>
                <li><a href="/admin/Komentar"><i class="fa-solid fa-comment mr-2"></i>Komentar</a></li>
            </ul>
            
            <div class="justify-center translate-y-96 ml-24">
                <div class="flex-none">
                    <div class="dropdown dropdown-top">
                        <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                            <div class="w-10 rounded-full">
                                <img alt="Tailwind CSS Navbar component" src="/image/gojoadmin.png"/>
                            </div>
                        </div>
                        <div tabindex="0" class="dropdown-content mb-6 z-[1] p-2 shadow bg-base-100 rounded-box w-52 -translate-x-20">
                            <div class="bg-green-400 p-4 rounded-t-lg">
                                <div class="flex flex-col items-center">
                                    <img src="/image/gojoadmin.png" alt="Profile" class="w-24 h-24 rounded-full border-4 border-white">
                                    @if(Auth::check())
                                    <p class="text-white mt-2">{{ Auth::user()->nama }}</p>
                                    @else
                                    <p class="text-white mt-2">Guest</p>
                                    @endif
                                </div>
                            </div>

                            <ul class="menu menu-sm p-2">
                                <li><a href="/akun" class="text-white">Profile</a></li>
                                <li><a href="/login" class="text-white">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main content -->
        <div class="flex-1 bg-base-co">
                <div class="navbar bg-base-300 relative">
                    <!-- <label class="cursor-pointer grid place-items-center absolute right-4 top-1/2 transform -translate-y-1/2">
                        <input type="checkbox" value="synthwave" class="toggle theme-controller bg-base-content row-start-1 col-start-1 col-span-2"/>
                        <svg class="col-start-1 row-start-1 stroke-base-100 fill-base-100" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="5"/><path d="M12 1v2M12 21v2M4.2 4.2l1.4 1.4M18.4 18.4l1.4 1.4M1 12h2M21 12h2M4.2 19.8l1.4-1.4M18.4 5.6l1.4-1.4"/></svg>
                        <svg class="col-start-2 row-start-1 stroke-base-100 fill-base-100" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path></svg>
                    </label> -->
                </div>
            @yield('content')
        </div>
    </div>
</body>

</html>