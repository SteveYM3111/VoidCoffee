@extends('layout.mainUser')
@section('content')

<!-- Header Section -->
<header class="bg-cover bg-center py-16" style="background-image: url('/path/to/your/image.jpg');">
        <div class="container mx-auto text-center">
            <h1 class="text-4xl font-bold text-white">Jelajahi Aroma dan Citra Rasa Terbaik</h1>
            <p class="text-lg text-white mt-4">Selamat datang di voidcoffee store, destinasi utama para pecinta kopi dengan kualitas premium</p>
            <a href="/newproduk" class="mt-8 inline-block bg-green-500 text-white py-2 px-4 rounded">Shop Now</a>
        </div>
    </header>

    <!-- Coffee Types Section -->
    <section class="py-16">
        <div class="container px-24 mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center">
                    <img src="/image/kopi200.png" alt="Typica" class="w-full h-48 object-cover rounded">
                    <h2 class="text-xl font-bold mt-4">Typica</h2>
                    <p class="mt-2">Description for Typica</p>
                </div>
                <div class="text-center">
                    <img src="/image/kopi300.png" alt="Espresso" class="w-full h-48 object-cover rounded">
                    <h2 class="text-xl font-bold mt-4">Espresso</h2>
                    <p class="mt-2">Description for Espresso</p>
                </div>
                <div class="text-center">
                    <img src="/image/kopi400.png" alt="Robusta" class="w-full h-48 object-cover rounded">
                    <h2 class="text-xl font-bold mt-4">Robusta</h2>
                    <p class="mt-2">Description for Robusta</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Feature Section -->
    <section class="py-16 bg-gray-100">
        <div class="container mx-auto flex flex-col md:flex-row items-center">
            <img src="/image/kopi500.png" alt="Feature Coffee" class="w-full md:w-56 rounded">
            <div class="md:ml-8 mt-8 md:mt-0">
                <h2 class="text-3xl font-bold">Selamat datang di voidcoffee</h2>
                <p class="mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ultricies malesuada quam, sit amet ullamcorper mi. Integer sit amet consectetur eros. Phasellus in quam sed purus volutpat volutpat. In non tincidunt arcu. Nulla euismod, erat a lobortis suscipit, augue nisl lacinia erat, vitae consectetur urna elit id urna.</p>
                <a href="#" class="mt-4 inline-block bg-green-500 text-white py-2 px-4 rounded">Read More</a>
            </div>
        </div>
    </section>

    <!-- Categories Section -->
    <section class="py-16">
        <div class="container mx-auto px-24">
            <h2 class="text-3xl font-bold text-center">Kategori Kopi</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-8">
                <div class="text-center">
                    <img src="/image/kopi200.png" alt="Robusta" class="w-full h-48 object-cover rounded">
                    <h3 class="text-xl font-bold mt-4">Robusta</h3>
                </div>
                <div class="text-center">
                    <img src="/image/kopi400.png" alt="Arabica" class="w-full h-48 object-cover rounded">
                    <h3 class="text-xl font-bold mt-4">Arabica</h3>
                </div>
            </div>
        </div>
    </section>

@endsection