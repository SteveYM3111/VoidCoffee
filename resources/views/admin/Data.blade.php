@extends('layout.mainAdmin')
@section('content')

<div class="flex ms-8 mt-5">


    <!-- Open the modal using ID.showModal() method -->
<button class="btn" onclick="my_modal_create.showModal()">+ Tambah Data</button>

<dialog id="my_modal_create" class="modal modal-bottom sm:modal-middle">
  <div class="modal-box">
    <h3 class="font-bold text-lg">Hello!</h3>
    <p class="py-4">Press ESC key or click the button below to close</p>
    <form action="{{ route('data.create') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" placeholder="Name" class="input input-bordered w-full max-w-xs mb-5" name="name" />
        <input type="text" placeholder="Email" class="input input-bordered w-full max-w-xs mb-5" name="email"/>
        <input type="text" placeholder="Phone" class="input input-bordered w-full max-w-xs mb-5" name="phone"/>
        <input type="text" placeholder="Description" class="input input-bordered w-full max-w-xs mb-5" name="description" />
        <input type="text" placeholder="Status" class="input input-bordered w-full max-w-xs mb-5" name="status" />   
        <input type="file" class="file-input file-input-bordered w-full max-w-xs mb-5" name="picture"/>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    
  </div>
  </dialog>
    <input class="h-12 ms-4 pl-10 pr-4 text-base placeholder-gray-500 border rounded-full focus:shadow-outline" type="search" placeholder="Cari Barang">
</div>
<div class="overflow-x-auto ms-8 mt-5 border rounded">
    <table class="table">
        <!-- head -->
        <thead>
            <tr>
                <th>Foto</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Description</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <!-- row 1 -->
            @foreach($data as $dt)
            <tr>
                <td>
                    <div class="flex gap-3">
                        <div class="avatar">
                            <div class=" w-24 h-24">
                                <img src="{{ asset($dt->picture) }}" alt="Avatar Tailwind CSS Component" />
                            </div>
                        </div>
                    </div>
                </td>
                <td>{{ $dt -> name }}</td>
                <td>{{ $dt -> email }}</td>
                <td>{{ $dt -> phone }}</td>
                <td>{{ $dt -> status }}</td>
                <th>
                    <!-- You can open the modal using ID.showModal() method -->
                    <button class="btn btn-error btn-xs rounded-sm text-white" onclick="my_modal_4{{$dt->id}}.showModal()">Hapus</button>
                    <dialog id="my_modal_4{{$dt->id}}" class="modal">
                        <div class="modal-box">
                            <h3 class="font-bold text-lg">
                                <center>Anda yakin ingin menghapus?</center>
                            </h3>
                            <div class="flex gap-4 justify-center my-5">
                                <form method="dialog">
                                    <button class="btn rounded-sm btn-info text-white btn-sm">Batal</button>
                                </form>
                                <form action="{{ route('data.delete', $dt->id) }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('delete')
                                <button class="btn rounded-sm btn-error text-white btn-sm">Hapus</button>
                                </form>
                            </div>
                        </div>
                    </dialog>
                    <button class="btn btn-info rounded-none btn-xs text-gray-200" onclick="my_modal_5{{$dt->id}}.showModal()">Edit</button>
                    <dialog id="my_modal_5{{$dt->id}}" class="modal">
                        <div class="modal-box">
                                <form action="{{ route('data.update', $dt->id) }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('patch')
                                    <input type="text" placeholder="Name" class="input input-bordered w-full max-w-xs mb-5" name="name" />
                                    <input type="text" placeholder="Email" class="input input-bordered w-full max-w-xs mb-5" name="email"/>
                                    <input type="text" placeholder="Phone" class="input input-bordered w-full max-w-xs mb-5" name="phone"/>
                                    <input type="text" placeholder="Description" class="input input-bordered w-full max-w-xs mb-5" name="description" />
                                    <input type="text" placeholder="Status" class="input input-bordered w-full max-w-xs mb-5" name="status" /> 
                                    <input id="file-upload" type="file" class="hidden" />

                            <div class="flex justify-end">
                                <form method="dialog">
                                    <button class=" btn btn-sm btn-error text-white w-xs right-2 top-2">Batal</button>
                                </form>
                               
                                <button class="ms-2 btn btn-sm btn-success text-white w-xs right-2 top-2">Edit</button>
                            </div>
                        </div>
                    </dialog>
                </th>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection