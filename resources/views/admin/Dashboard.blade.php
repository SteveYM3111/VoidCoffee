@extends('layout.mainAdmin')

@section('content')
<body class="bg-gray-100 font-sans leading-normal tracking-normal">
    <div class="p-6">
        <!-- Cards -->
        <div class="grid grid-cols-6 gap-48 mb-6 ml-64 mt-56">
            <div class="bg-blue-600 text-white p-4 w-32 h-32 rounded-lg shadow transform transition duration-500 hover:scale-105 cursor-pointer hover:bg-blue-900">
                <a href="/admin/Data"><img class="mx-auto" src="{{ asset('image/flame.svg') }}" alt="Coffee"/>
                <h3 class="text-xl font-semibold ml-5 mt-4">Data Admin</h3></a>
            </div>
            <div class="bg-orange-600 text-white p-4 w-32 h-32 rounded-lg shadow transform transition duration-500 hover:scale-105 cursor-pointer hover:bg-orange-900">
                <a href="/admin/Barang"><img class="mx-auto" src="{{ asset('image/Folder-content.svg') }}" alt="Coffee"/>
                <h3 class="text-xl font-semibold ml-5 mt-5">Data Barang</h3></a>
            </div>
            <div class="bg-green-600 text-white p-4 w-32 h-32 rounded-lg shadow transform transition duration-500 hover:scale-105 cursor-pointer hover:bg-green-900">
                <a href="/admin/orderan"><img class="mx-auto mt-1" src="{{ asset('image/Icon.svg') }}" alt="Coffee"/>
                <h3 class="text-xl font-semibold ml-4 mt-7">Data Pesanan</h3></a>
            </div>
            <div class="bg-purple-600 text-white p-4 w-32 h-32 rounded-lg shadow transform transition duration-500 hover:scale-105 cursor-pointer hover:bg-purple-900">
                <a href="/admin/Komentar"><img class="mx-auto mt-1 w-6 h-6" src="{{ asset('image/fi-rr-bell.svg') }}" alt="Coffee"/>
                <h3 class="text-xl font-semibold ml-1 mt-7">Komentar</h3></a>
            </div>
        </div>
    </div>
</body>
@endsection
