@extends('layout.mainAdmin')

@section('content')
<body class="bg-gray-100 font-sans leading-normal tracking-normal">
    <div class="p-6">
        <!-- Cards -->
        <div class="grid grid-cols-6 gap-6 mb-6">
            <div class="bg-blue-600 text-white p-4 h-32 rounded-lg shadow transform transition duration-500 hover:scale-105 cursor-pointer hover:bg-blue-900">
                <img class="mx-auto" src="{{ asset('image/flame.svg') }}" alt="Coffee"/>
                <h3 class="text-xl font-semibold ml-7 mt-4">Total Sale</h3>
            </div>
            <div class="bg-orange-600 text-white p-4 h-32 rounded-lg shadow transform transition duration-500 hover:scale-105 cursor-pointer hover:bg-orange-900">
                <img class="mx-auto" src="{{ asset('image/Folder-content.svg') }}" alt="Coffee"/>
                <h3 class="text-xl font-semibold ml-7 mt-5">Daily Sale</h3>
            </div>
            <div class="bg-green-600 text-white p-4 h-32 rounded-lg shadow transform transition duration-500 hover:scale-105 cursor-pointer hover:bg-green-900">
                <img class="mx-auto mt-1" src="{{ asset('image/Icon.svg') }}" alt="Coffee"/>
                <h3 class="text-xl font-semibold ml-7 mt-7">Total Sale</h3>
            </div>
            <div class="col-span-2 flex justify-end items-end w-60 ml-60">
                <div class="bg-orange-500 text-white p-4 rounded-lg w-full shadow">
                    <h3 class="text-2xl font-bold">$ 9.470</h3>
                    <p class="text-sm">Active Balance</p>
                    <div class="mt-4">
                        <div class="flex justify-between items-center mb-2">
                            <div class="flex items-center">
                                <img class="mx-auto" src="{{ asset('image/Arrow atas.svg') }}" alt="Arrow up"/>
                                <span class="ml-2">Pemasukan</span>
                            </div>
                            <span>Rp.3000</span>
                        </div>
                        <div class="flex justify-between items-center mb-2">
                            <div class="flex items-center">
                                <img class="mx-auto" src="{{ asset('image/Arrow bawah.svg') }}" alt="Arrow down"/>
                                <span class="ml-2">Pengeluaran</span>
                            </div>
                            <span>- Rp.1000</span>
                        </div>
                        <div class="flex justify-between items-center mb-4">
                            <div class="flex items-center">
                                <img class="mx-auto" src="{{ asset('image/Arrow bawah.svg') }}" alt="Arrow down"/>
                                <span class="ml-2">Taxes</span>
                            </div>
                            <span>- Rp.20</span>
                        </div>
                        <button class="w-full bg-white text-orange-500 py-2 rounded-lg">Add Virtual Card</button>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 lg:gap-11">
            <!-- Chart -->
            <div class="bg-white p-6 rounded-lg shadow lg:col-span-2">
                <h2 class="text-xl font-semibold mb-4">Primary Sales</h2>
                <div class="w-full h-40 bg-gray-200 rounded-lg"></div>
            </div>

            <!-- Upcoming Payments -->
            <div class="bg-white p-6 rounded-lg shadow lg:w-auto lg:h-auto">
                <h2 class="text-xl font-semibold mb-4">Pembayaran</h2>
                <ul>
                    <li class="flex justify-between py-1">
                        <span>Pemasukan</span>
                        <span class="text-red-600">Rp727.000</span>
                    </li>
                    <li class="flex justify-between py-1">
                        <span>Pengeluaran</span>
                        <span class="text-red-600">Rp5.000</span>
                    </li>
                    <li class="flex justify-between py-1">
                        <span>Pajak</span>
                        <span class="text-red-600">Rp.3.500</span>
                    </li>
                </ul>
                <div class="mt-4">
                    <button class="w-full bg-orange-500 text-white py-2 rounded-lg hover:scale-105 cursor-pointer hover:bg-orange-900">Add Virtual Card</button>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection
