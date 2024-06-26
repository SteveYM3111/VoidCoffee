@extends('layout.mainAdmin')
@section('content')
<div class="flex ms-8 mt-5">
    <!-- Open the modal using ID.showModal() method -->
    <button class="btn" onclick="my_modal_create.showModal()">+ Tambah Barang</button>

    <dialog id="my_modal_create" class="modal modal-bottom sm:modal-middle">
        <div class="modal-box">
            <h3 class="font-bold text-lg py-4">Please fill out the form below!</h3>
            <form action="{{ route('barang.create') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div>
                    <input type="text" placeholder="Name" class="input input-bordered w-full max-w-xs mb-5" name="name" value="{{ old('name') }}" />
                    @error('name')
                        <div class="text-red-500">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <input type="text" placeholder="Qty" class="input input-bordered w-full max-w-xs mb-5" name="qty" value="{{ old('qty') }}" />
                    @error('qty')
                        <div class="text-red-500">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <input type="text" placeholder="Price" class="input input-bordered w-full max-w-xs mb-5" name="price" value="{{ old('price') }}" />
                    @error('price')
                        <div class="text-red-500">{{ $message }}</div>      
                    @enderror
                </div>
                <div>
                    <input type="text" placeholder="deskripsi" class="input input-bordered w-full max-w-xs mb-5" name="description" value="{{ old('description') }}" />
                    @error('description')
                        <div class="text-red-500">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <input type="text" placeholder="status" class="input input-bordered w-full max-w-xs mb-5" name="status" value="{{ old('status') }}" />
                    @error('status')
                        <div class="text-red-500">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <input type="file" class="file-input file-input-bordered w-full max-w-xs mb-5" name="picture"/>
                    @error('picture')
                        <div class="text-red-500">{{ $message }}</div>
                    @enderror
                </div>
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
                <th class="text-black">Foto</th>
                <th class="text-black">Name/Brand</th>
                <th class="text-black">Harga</th>
                <th class="text-black">Status</th>
                <th class="text-black">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($barang as $brg)
            <tr>
                <td>
                    <div class="flex gap-3">
                        <div class="avatar">
                            <div class="w-24 h-24">
                                <img src="{{ asset($brg->picture) }}" alt="Avatar Tailwind CSS Component" />
                            </div>
                        </div>
                    </div>
                </td>
                <td class="text-black">{{ $brg -> name }}</td>
                <td class="text-black">{{ $brg -> price }}</td>
                <td class="text-black">{{ $brg -> status }}</td>
                <th>
                    <!-- You can open the modal using ID.showModal() method -->
                    <button class="btn btn-error btn-xs rounded-sm text-white" onclick="my_modal_4{{$brg->id_barang}}.showModal()">Delete</button>
                    <dialog id="my_modal_4{{$brg->id_barang}}" class="modal">
                        <div class="modal-box">
                            <h3 class="font-bold text-lg">
                                <center>Are you sure you want to delete this Item?</center>
                            </h3>
                            <div class="flex gap-4 justify-center my-5">
                                <form method="dialog">
                                    <button class="btn rounded-sm btn-info text-white btn-sm">Cancel</button>
                                </form>
                                <form action="{{ route('barang.delete', $brg->id_barang) }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('delete')
                                <button class="btn rounded-sm btn-error text-white btn-sm">Delete</button>
                                </form>
                            </div>
                        </div>
                    </dialog>

                    <button class="btn btn-info rounded-none btn-xs text-gray-200" onclick="my_modal_edit{{ $brg->id_barang }}.showModal()">Edit</button>
                    <dialog id="my_modal_edit{{ $brg->id_barang }}" class="modal">
                        <div class="modal-box">
                        <form action="{{ route('barang.update', $brg->id_barang) }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('patch')
                                <div>
                                    <input type="text" placeholder="Name" class="input input-bordered w-full max-w-xs mb-5" name="name" value="{{ old('name', $brg->name) }}" />
                                    @error('name')
                                        <div class="text-red-500">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div>
                                    <input type="text" placeholder="Qty" class="input input-bordered w-full max-w-xs mb-5" name="qty" value="{{ old('qty', $brg->qty) }}" />
                                    @error('qty')
                                        <div class="text-red-500">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div>
                                    <input type="text" placeholder="Price" class="input input-bordered w-full max-w-xs mb-5" name="price" value="{{ old('price', $brg->price) }}" />
                                    @error('price')
                                        <div class="text-red-500">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div>
                                    <input type="text" placeholder="deskripsi" class="input input-bordered w-full max-w-xs mb-5" name="description" value="{{ old('description', $brg->description) }}" />
                                    @error('description')
                                        <div class="text-red-500">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div>
                                    <input type="text" placeholder="status" class="input input-bordered w-full max-w-xs mb-5" name="status" value="{{ old('status', $brg->status) }}" />
                                    @error('status')
                                        <div class="text-red-500">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div>
                                    <input type="file" class="file-input file-input-bordered w-full max-w-xs mb-5" name="picture"/>
                                    @error('picture')
                                        <div class="text-red-500">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="flex justify-end">
                                    <form method="dialog">
                                        <button class="btn btn-sm btn-error text-white w-xs right-2 top-2">Cancel</button>
                                    </form>
                                    <button class="ms-2 btn btn-sm btn-success text-white w-xs right-2 top-2">Edit</button>
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