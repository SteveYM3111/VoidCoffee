<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="VoidCoffee - The best coffee in town">
    <title>VoidCoffee</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.10.1/dist/full.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <nav class="bg-transparent">
        <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
            <div class="relative flex h-16 items-center justify-between">
                <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                    <div class="font-bold text-2xl mt-2 -translate-x-24">VoidCoffee</div>
                    <div class="hidden sm:ml-72 sm:block -translate-x-8">
                        <div class="flex space-x-12 mt-2">
                            <a href="/newberanda" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white transform transition-transform hover:scale-110">Home</a>
                            <a href="/newkontak" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white transform transition-transform hover:scale-110">About Us</a>
                            <a href="/newlokasi" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white transform transition-transform hover:scale-110">Location</a>
                            <a href="/newproduk" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white transform transition-transform hover:scale-110">Products</a>
                            <a href="/history" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white transform transition-transform hover:scale-110">History</a>
                        </div>
                    </div>
                </div>
                <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0 space-x-4">
                    <!-- Profile dropdown -->
                    <div class="dropdown">
                        <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                            <div class="mt-2 w-10 rounded-full transform transition-transform hover:scale-110">
                                <img alt="Profile" src="/image/gojoadmin.png"/>
                            </div>
                        </div>
                        <div tabindex="0" class="dropdown-content mt-6 z-[1] p-2 shadow bg-base-100 rounded-box w-52 -translate-x-32">
                            <div class="bg-purple-900 p-4 rounded-t-lg animate-colorShift">
                                <div class="flex flex-col items-center">
                                    <img src="/image/gojoadmin.png" alt="Profile" class="w-24 h-24 rounded-full border-4 border-white">
                                    <p class="text-white mt-2">{{ $user->name }}</p>
                                </div>
                            </div>
                            <ul class="menu menu-sm p-2">
                                <li class="mx-auto"><a href="/akun" class="text-white">Profile</a></li>
                                <li class="mx-auto"><a href="/login" class="text-white">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="overflow-hidden container">
        @yield('content')
    </div>

    <footer class="footer bg-neutral text-neutral-content p-10 w-">
        <aside>
            <svg width="50" height="50" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" class="fill-current">
                <path d="M22.672 15.226l-2.432.811.841 2.515c.33 1.019-.209 2.127-1.23 2.456-1.15.325-2.148-.321-2.463-1.226l-.84-2.518-5.013 1.677.84 2.517c.391 1.203-.434 2.542-1.831 2.542-.88 0-1.601-.564-1.86-1.314l-.842-2.516-2.431.809c-1.135.328-2.145-.317-2.463-1.229-.329-1.018.211-2.127 1.231-2.456l2.432-.809-1.621-4.823-2.432.808c-1.355.384-2.558-.59-2.558-1.839 0-.817.509-1.582 1.327-1.846l2.433-.809-.842-2.515c-.33-1.02.211-2.129 1.232-2.458 1.02-.329 2.13.209 2.461 1.229l.842 2.515 5.011-1.677-.839-2.517c-.403-1.238.484-2.553 1.843-2.553.819 0 1.585.509 1.85 1.326l.841 2.517 2.431-.81c1.02-.329 2.13.209 2.461 1.229.329 1.02-.21 2.129-1.23 2.458l-2.431.81 1.62 4.824 2.432-.809c1.354-.384 2.558.59 2.558 1.839 0 .817-.509 1.582-1.328 1.846zm-11.314-2.153l4.455-1.49-1.619-4.824-4.455 1.491 1.619 4.823zm-.875 6.104l-1.618-4.823-4.455 1.49 1.619 4.824 4.454-1.491zm10.59-3.54l-4.453 1.49 1.617 4.824 4.456-1.491-1.62-4.823zm-3.3-9.842l-4.456 1.491 1.618 4.823 4.455-1.49-1.617-4.824zm-14.41 4.825l4.454-1.491-1.618-4.823-4.454 1.491 1.618 4.823z"></path>
            </svg>
            <p>VoidCoffee Ltd.<br />Providing reliable tech since 1992</p>
        </aside>
        <div class="translate-x-24">
            <span class="footer-title">Business Hours</span>
            <p>Mon - Fri: 8 AM - 8 PM</p>
            <p>Sat: 9 AM - 5 PM</p>
            <p>Sun: Closed</p>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
