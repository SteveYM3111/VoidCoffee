@extends('layout.mainAdmin')
@section('content')

<div class="flex ms-8 mt-5">
    <!-- Open the modal using ID.showModal() method -->
    <button class="btn" onclick="my_modal_create.showModal()">+ Add Data</button>

    <dialog id="my_modal_create" class="modal modal-bottom sm:modal-middle">
        <div class="modal-box">
            <h3 class="font-bold text-lg">Please add your Credential!</h3>
            <p class="py-4">You may close this page by pressing Esc or by filling the form below.</p>
            <form action="{{ route('data.create') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="text" placeholder="Name" class="input input-bordered w-full max-w-xl mb-5" name="name" />
                <input type="text" placeholder="Email" class="input input-bordered w-full max-w-xl mb-5" name="email"/>
                <input type="text" placeholder="Password" class="input input-bordered w-full max-w-xl mb-5" name="password"/>
                <input type="text" placeholder="Phone" class="input input-bordered w-full max-w-xl mb-5" name="phone"/>
                <select name="description" class="input input-bordered w-full max-w-xl mb-5">
                    <option selected disabled>Please choose</option>
                    <option value="Admin">Admin</option>
                    <option value="User">User</option>
                </select>
                <div class="ml-48 mt-4"><button type="submit">Upload</button></div>
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
                <td>{{ $dt->name }}</td>
                <td>{{ $dt->email }}</td>
                <td>{{ $dt->phone }}</td>
                <td>{{ $dt->role }}</td>
                <th>
                    <!-- Delete button -->
                    <button class="btn btn-error btn-xs rounded-sm text-white" onclick="document.getElementById('delete-form-{{ $dt->id_user }}').submit();">Hapus</button>
                    <form id="delete-form-{{ $dt->id_user }}" action="{{ route('data.delete', $dt->id_user) }}" method="POST" style="display: none;">
                        @csrf
                        @method('DELETE')
                    </form>


                    <!-- Edit button -->
                    <button class="btn btn-info rounded-none btn-xs text-gray-200" onclick="my_modal_5{{$dt->id_user}}.showModal()">Edit</button>
                    <dialog id="my_modal_5{{$dt->id_user}}" class="modal">
                        <div class="modal-box">
                            <form action="{{ route('data.update', $dt->id_user) }}" method="post" enctype="multipart/form-data">
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
                                    <button type="button" class="btn btn-sm btn-error text-white w-xs right-2 top-2" onclick="closeModal('my_modal_5{{$dt->id_user}}')">Batal</button>
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

<script>
    function closeModal(id) {
        document.getElementById(id).close();
    }
</script>
