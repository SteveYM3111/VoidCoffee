@extends('layout.mainAdmin')

@section('content')
<div class="overflow-x-auto ms-8 mt-5 border rounded">
    <table class="table">
        <!-- head -->
        <thead>
            <tr>
                <th>Foto</th>
                <th>Name/Brand</th>
                <th>Harga</th>
                <th>Status</th>
                <th>Actions</th>
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
                <td>{{ $ord->name }}</td>
                <td>{{ $ord->email }}</td>
                <td>{{ $ord->whatsapp }}</td>
                <td><!-- Actions column, add your actions here --></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
