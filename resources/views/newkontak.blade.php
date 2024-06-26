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
            <p id="additional-text" class="mt-4 hidden">Here is some additional hidden text that will be revealed when the Read More button is clicked.</p>
            <button id="read-more-btn" class="mt-4 inline-block bg-green-500 text-white py-2 px-4 rounded">Read More</button>
        </div>
    </div>
</section>

<script>
    document.getElementById('read-more-btn').addEventListener('click', function() {
        document.getElementById('additional-text').classList.remove('hidden');
        this.classList.add('hidden');
    });
</script>
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

<div class="card card-side bg-base-100 shadow-xl">
  <figure>
    <img
      class="w-40 h-40 ml-6"
      src="/image/woman1.png"
      alt="Movie" />
  </figure>
  <div class="card-body">
    <h2 class="card-title">New movie is released!</h2>
    <p>Click the button to watch on Jetflix app.</p>
    <div class="card-actions justify-end">
      <!-- You can open the modal using ID.showModal() method -->
      <button class="btn" onclick="document.getElementById('my_modal_create').showModal()">+ Komentar</button>
        <dialog id="my_modal_create" class="modal modal-bottom sm:modal-middle">
            <div class="modal-box">
            <h3 class="font-bold text-lg py-4">Please fill out the form below!</h3>
            <form action="{{ route('komentar.create') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div>
                    <input type="text" placeholder="Name" class="input input-bordered w-full max-w-xs mb-5" name="name" value="{{ old('name') }}" />
                    @error('name')
                        <div class="text-red-500">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <input type="text" placeholder="Email" class="input input-bordered w-full max-w-xs mb-5" email="email" value="{{ old('email') }}" />
                    @error('email')
                        <div class="text-red-500">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <input type="text" placeholder="Komentar" class="input input-bordered w-full max-w-xs mb-5" komentar="komentar" value="{{ old('komentar') }}" />
                    @error('komentar')
                        <div class="text-red-500">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mt-4 ml-48">
                    <button type="submit" class="btn btn-sm btn-success text-white">Upload</button>
                </div>  
            </div>
        </dialog>

    </div>
  </div>
</div>                

@endsection