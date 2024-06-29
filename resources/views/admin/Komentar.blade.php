@extends('layout.mainAdmin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="text-black">Name</th>
                            <th class="text-black">Email</th>
                            <th class="text-black">Comment</th>
                            <th class="text-black">Created At</th>
                            </tr>
                    </thead>
                    @foreach($komentar as $kt)
                        <tr>
                            <td class="text-black">{{ $kt->name }}</td>
                            <td class="text-black">{{ $kt->email }}</td>
                            <td class="text-black">{{ $kt->komentar }}</td>
                            <td>
                    @endforeach
                        </tr>
                </table>
        </div>
    </div>
</div>                           
@endsection