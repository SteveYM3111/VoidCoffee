@extends('layout.mainAdmin')

@section('content')
<div class="overflow-x-auto ms-8 mt-5 border rounded">
    <table class="table">
        <!-- head -->
        <thead>
            <tr>
                <th class="text-black">Foto</th>
                <th class="text-black">Name</th>
                <th class="text-black">Email</th>
                <th class="text-black">Harga</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orderan as $ord)
            <tr>
                <td>
                    <div class="flex gap-3">
                        <div class="avatar">
                            <div class="w-24 h-24">
                                <img src="{{ asset($ord->picture) }}" alt="Avatar Tailwind CSS Component" />
                            </div>
                        </div>
                    </div>
                </td>
                <td class="text-black">{{ $ord->name }}</td>
                <td class="text-black">{{ $ord->email }}</td>
                <td class="text-black">{{ $ord->whatsapp }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
