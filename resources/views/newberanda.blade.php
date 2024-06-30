@extends('layout.mainUser')
@section('content')
<div class="flex whitespace-nowrap mt-2">
  <div class="relative flex-none bg-cover bg-center" style="background-image: url('/image/1.jpg'); width:33vw; height: 100vh;">
    <div class="absolute left-0 right-0 top-1/2 transform -translate-y-1/2 flex justify-center">
      <div class="text-center text-white">
      <h1>Welcome, {{ $user->name }}</h1>
        <p class="text-6xl font-bold">Void</p>
        <p class="text-6xl font-bold">Coffee</p>
        <p class="text-xl mt-6">Destinasi Utama</p>
        <p class="text-xl">Bagi Para Pecinta Kopi</p>
        <a href="/newproduk" class="mt-8 inline-block bg-green-500 text-white py-2 px-4 rounded">Shop Now</a>

      </div>
    </div>
  </div>
  <div class="relative flex-none bg-cover bg-center" style="background-image: url('/image/2.jpg'); width:33vw; height: 100vh;">
    <div class="absolute left-0 right-0 top-1/2 transform -translate-y-1/2 flex justify-center">
    </div>
  </div>
  <div class="relative flex-none bg-cover bg-center" style="background-image: url('/image/3.jpg'); width:33vw; height: 100vh;">
    <div class="absolute left-0 right-0 top-1/2 transform -translate-y-1/2 flex justify-center">
    </div>
  </div>
</div>
@endsection
