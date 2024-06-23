@extends('layout.mainAdmin')
@section('content')

<div class="flex ms-8 mt-5">


    <!-- Open the modal using ID.showModal() method -->
<button class="btn" onclick="my_modal_create.showModal()">+ Tambah Data</button>

<dialog id="my_modal_create" class="modal modal-bottom sm:modal-middle">
  <div class="modal-box">
    <h3 class="font-bold text-lg py-4">Please fill the collums below!</h3>
    <form action="{{ route('data.create') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" placeholder="Name" class="input input-bordered w-full max-w-xl mb-5" name="name"/>
        <input type="text" placeholder="Email" class="input input-bordered w-full max-w-xl mb-5" name="email"/>
        <input type="text" placeholder="Password" class="input input-bordered w-full max-w-xl mb-5" name="password"/>
        <input type="text" placeholder="Phone" class="input input-bordered w-full max-w-xl mb-5" name="phone"/>
        <select class="input input-bordered w-full max-w-xs mb-5" name="role">
            <option selected disabled>Pilih kontol</option>
            <option value="admin">Admin</option>
            <option value="user">User</option>
        </select>
        <input type="file" class="file-input file-input-bordered w-full max-w-xs mb-5" name="picture"/>
        <div class="py-2"><button type="submit" class="btn btn-primary">Submit</button></div>
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
                <th>Role</th>
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
                <!-- <td>{{ $dt -> password }}</td> -->
                <td>{{ $dt -> phone }}</td>
                <td>{{ $dt -> role }}</td>
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
                                <input type="text" placeholder="Name" class="input input-bordered w-full max-w-xs mb-5" name="name" value="{{ $dt->name }}"/>
                                <input type="email" placeholder="Email" class="input input-bordered w-full max-w-xs mb-5" name="email" value="{{ $dt->email }}"/>
                                <input type="text" placeholder="Phone" class="input input-bordered w-full max-w-xs mb-5" name="phone" value="{{ $dt->phone }}"/>
                                <input type="password" placeholder="Password" class="input input-bordered w-full max-w-xs mb-5" name="password" value="{{ $dt->password }}"/>
                                <select class="input input-bordered w-full max-w-xs mb-5" name="role">
                                    <option selected disabled>Pilih role</option>
                                    <option value="admin" {{ $dt->role == 'admin' ? 'selected' : '' }}>Admin</option>
                                    <option value="user" {{ $dt->role == 'user' ? 'selected' : '' }}>User</option>
                                </select>
                                <input type="file" class="file-input file-input-bordered w-full max-w-xs mb-5" name="picture"/>

                                <div class="flex justify-end">
                                    <button type="button" class="btn btn-sm btn-error text-white w-xs right-2 top-2" onclick="closeModal('my_modal_5{{$dt->id}}')">Batal</button>
                                    <button type="submit" class="ms-2 btn btn-sm btn-success text-white w-xs right-2 top-2">Edit</button>
                                </div>
                            </form>
                        </div>
                    </dialog>

                </th>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection