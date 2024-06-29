@extends('layout.mainAdmin')
@section('content')

<div class="flex ms-8 mt-5">
    <!-- Button to open modal -->
    <button class="btn" onclick="document.getElementById('my_modal_create').showModal()">+ Add Data</button>

    <!-- Modal for adding data -->
    <dialog id="my_modal_create" class="modal modal-bottom sm:modal-middle">
        <div class="modal-box">
            <h3 class="font-bold text-lg">Please add your Credential!</h3>
            <p class="py-4">You may close this page by pressing Esc or by filling the form below.</p>
            <form action="{{ route('data.create') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="text" placeholder="Name" class="input input-bordered w-full max-w-xl mb-5" name="name" required />
                <input type="email" placeholder="Email" class="input input-bordered w-full max-w-xl mb-5" name="email" required />
                <input type="password" placeholder="Password" class="input input-bordered w-full max-w-xl mb-5" name="password" required />
                <input type="text" placeholder="Phone" class="input input-bordered w-full max-w-xl mb-5" name="phone" required />
                <select name="role" class="input input-bordered w-full max-w-xl mb-5" required>
                    <option selected disabled>Please choose</option>
                    <option value="admin">Admin</option>
                    <option value="user">User</option>
                </select>
                <div class="flex justify-end mt-4">
                    <button type="button" class="btn btn-sm btn-error text-white" onclick="document.getElementById('my_modal_create').close()">Cancel</button>
                    <button type="submit" class="btn btn-sm btn-success text-white">Upload</button>
                </div>
            </form>  
        </div>
    </dialog>   
    <input class="h-12 ms-4 pl-10 pr-4 text-base placeholder-gray-500 border rounded-full focus:shadow-outline" type="search" placeholder="Search Data">
</div>

<div class="overflow-x-auto ms-8 mt-5 border rounded">
    <table class="table">
        <!-- Table header -->
        <thead>
            <tr>
                <th class="text-black">Name</th>
                <th class="text-black">Email</th>
                <th class="text-black">Phone</th>
                <th class="text-black">Role</th>
                <th class="text-black">Actions</th>
            </tr>
        </thead>
        <tbody>
            <!-- Table rows -->
            @foreach($data as $dt)
            <tr>
                <td class="text-black">{{ $dt->name }}</td>
                <td class="text-black">{{ $dt->email }}</td>
                <td class="text-black">{{ $dt->phone }}</td>
                <td class="text-black">{{ $dt->role }}</td>
                <td>
                    <!-- Delete button -->
                    <button class="btn btn-error btn-xs rounded-sm text-white" onclick="document.getElementById('delete-form-{{ $dt->id_user }}').submit();">Delete</button>
                    <form id="delete-form-{{ $dt->id_user }}" action="{{ route('data.delete', $dt->id_user) }}" method="POST" style="display: none;">
                        @csrf
                        @method('DELETE')
                    </form>

                    <!-- Edit button -->
                    <button class="btn btn-info rounded-none btn-xs text-gray-200" onclick="document.getElementById('my_modal_edit_{{ $dt->id_user }}').showModal()">Edit</button>
                    <dialog id="my_modal_edit_{{ $dt->id_user }}" class="modal">
                        <div class="modal-box">
                            <form action="{{ route('data.update', $dt->id_user) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <input type="text" placeholder="Name" class="input input-bordered w-full max-w-xs mb-5" name="name" value="{{ $dt->name }}"/>
                                <input type="email" placeholder="Email" class="input input-bordered w-full max-w-xs mb-5" name="email" value="{{ $dt->email }}"/>
                                <input type="text" placeholder="Phone" class="input input-bordered w-full max-w-xs mb-5" name="phone" value="{{ $dt->phone }}"/>
                                <input type="password" placeholder="Password" class="input input-bordered w-full max-w-xs mb-5" name="password" value=""/>
                                <select class="input input-bordered w-full max-w-xs mb-5" name="role">
                                    <option selected disabled>Choose role</option>
                                    <option value="admin" {{ $dt->role == 'admin' ? 'selected' : '' }}>Admin</option>
                                    <option value="user" {{ $dt->role == 'user' ? 'selected' : '' }}>User</option>
                                </select>
                                <div class="flex justify-end">
                                    <button type="button" class="btn btn-sm btn-error text-white w-xs right-2 top-2" onclick="document.getElementById('my_modal_edit_{{ $dt->id_user }}').close()">Cancel</button>
                                    <button type="submit" class="btn btn-sm btn-success text-white w-xs right-2 top-2">Edit</button>
                                </div>
                            </form>
                        </div>
                    </dialog>
                </td>
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
