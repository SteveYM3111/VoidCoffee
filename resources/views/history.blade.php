@extends('layout.mainUser')
@section('content')
<div class="overflow-x-auto ms-8 mt-5 border rounded">
    <table class="table">
        <!-- head -->
        <thead>
            <tr>
                <th class="text-White">Produk</th>
                <th class="text-White">Gambar Barang</th>
                <th class="text-White">Gambar Resi</th>
                <th class="text-White">Harga</th>
                <th class="text-White">Nama Pembeli</th>
                <th class="text-White">Email</th>
                <th class="text-White">WhatsApp</th>
                <th class="text-White">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orderan as $ord)
            <tr>
                <td class="text-White">{{ $ord->id_barang }}</td>
                <td class="text-White">
                    <div class="flex gap-3">
                        <div class="avatar">
                            <div class="w-24 h-24">
                                <img src="{{ asset($ord->barang->picture) }}" alt="Avatar Tailwind CSS Component" />
                            </div>
                        </div>
                    </div>
                </td>
                <td class="text-White">
                    <div class="flex gap-3">
                        <div class="avatar">
                            <div class="w-24 h-24">
                                <img src="{{ asset($ord->picture) }}" alt="Avatar Tailwind CSS Component" />
                            </div>
                        </div>
                    </div>
                </td>
                <td class="text-White">{{ $ord->price }}</td>
                <td class="text-White">{{ $ord->name }}</td>
                <td class="text-White">{{ $ord->email }}</td>
                <td class="text-White">{{ $ord->whatsapp }}</td>
                <td class="text-White">
                    <form action="{{ route('orderan.cetakResi', ['id_orderan' => $ord->id_orderan]) }}" method="post">
                        @csrf
                        @method('POST')
                        <button type="submit" class="btn btn-sm btn-primary">Cetak Resi</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>

@endsection
