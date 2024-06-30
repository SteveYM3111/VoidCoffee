@extends('layout.mainUser')
@section('content')
<div class="overflow-x-auto ms-8 mt-5 border rounded">
    <table class="table">
        <!-- head -->
        <thead>
            <tr>
                <th class="text-White">Produk</th>
                <th class="text-White">Gambar Produk</th>
                <th class="text-White">Harga</th>
                <th class="text-White">Nama Pembeli</th>
                <th class="text-White">Email</th>
                <th class="text-White">WhatsApp</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orderan as $ord)
            <tr>
                <td class="text-White">{{ $ord->id_barang }}</td>
                <td class="text-White">{{ $ord->harga }}</td>
                <td class="text-White">{{ $ord->name }}</td>
                <td class="text-White">{{ $ord->email }}</td>
                <td class="text-White">{{ $ord->whatsapp }}</td>
            </tr>
            @endforeach
        </tbody>
        
@endsection