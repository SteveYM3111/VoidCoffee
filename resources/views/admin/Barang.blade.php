@extends('layout.mainAdmin')
@section('content')
<div class="flex ms-8 mt-5">


    <!-- Open the modal using ID.showModal() method -->
<button class="btn" onclick="my_modal_create.showModal()">+ Tambah Barang</button>

<dialog id="my_modal_create" class="modal modal-bottom sm:modal-middle">
  <div class="modal-box">
    <h3 class="font-bold text-lg">Please add the details of your Item.</h3>
    <p class="py-4">Press ESC key to close</p>
    <form action="{{ route('barang.create') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" placeholder="Name" class="input input-bordered w-full max-w-xs mb-5" name="name" />
        <input type="text" placeholder="Quantity" class="input input-bordered w-full max-w-xs mb-5" name="qty"/>
        <input type="text" placeholder="Price" class="input input-bordered w-full max-w-xs mb-5" name="price"/>
        <input type="text" placeholder="Description" class="input input-bordered w-full max-w-xs mb-5" name="description" />
        <input type="text" placeholder="Status" class="input input-bordered w-full max-w-xs mb-5" name="status" />   
        <input type="file" class="file-input file-input-bordered w-full max-w-xs mb-5" name="picture"/>
            <div class="ml-36 mt-4"><button type="submit" class="btn btn-primary w-48">Submit your Item</button></div>
    </form> 
  </div>
</dialog>
<input class="h-12 ms-4 pl-10 pr-4 text-base placeholder-gray-500 border rounded-full focus:shadow-outline" type="search" placeholder="Search">
</div>
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
            <!-- row 1 -->
            @foreach($barang as $brg)
            <tr>
                <td>
                    <div class="flex gap-3">
                        <div class="avatar">
                            <div class=" w-24 h-24">
                                <img src="{{ asset($brg->picture) }}" alt="Avatar Tailwind CSS Component" />
                            </div>
                        </div>
                    </div>
                </td>
                <td>{{ $brg -> name }}</td>
                <td>{{ $brg -> price }}</td>
                <td>{{ $brg -> status }}</td>
                <th>
                    <!-- You can open the modal using ID.showModal() method -->
                    <button class="btn btn-error btn-xs rounded-sm text-white" onclick="my_modal_4{{$brg->id}}.showModal()">Delete</button>
                    <dialog id="my_modal_4{{$brg->id}}" class="modal">
                        <div class="modal-box">
                            <h3 class="font-bold text-lg">
                                <center>Are you sure you want to delete this Item?</center>
                            </h3>
                            <div class="flex gap-4 justify-center my-5">
                                <form method="dialog">
                                    <button class="btn rounded-sm btn-info text-white btn-sm">Cancel</button>
                                </form>
                                <form action="{{ route('barang.delete', $brg->id) }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('delete')
                                <button class="btn rounded-sm btn-error text-white btn-sm">Delete</button>
                                </form>
                            </div>
                        </div>
                    </dialog>
                    <button class="btn btn-info rounded-none btn-xs text-gray-200" onclick="my_modal_5{{$brg->id}}.showModal()">Edit</button>
                    <dialog id="my_modal_5{{$brg->id}}" class="modal">
                        <div class="modal-box">
                        <form action="{{ route('barang.update', $brg->id) }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('patch')
                                    <input type="text" placeholder="Name" class="input input-bordered w-full max-w-xs mb-5" name="name" />
                                    <input type="text" placeholder="Quantity" class="input input-bordered w-full max-w-xs mb-5" name="qty"/>
                                    <input type="text" placeholder="Price" class="input input-bordered w-full max-w-xs mb-5" name="price"/>
                                    <input type="text" placeholder="Description" class="input input-bordered w-full max-w-xs mb-5" name="description" />
                                    <input type="text" placeholder="Status" class="input input-bordered w-full max-w-xs mb-5" name="status"/> 
                                    <input type="file" class="file-input file-input-bordered w-full max-w-xs mb-5" name="picture"/>
                            <input id="file-upload" type="file" class="hidden"/>
                            <div class="flex justify-end">
                                <form method="dialog">
                                    <button class=" btn btn-sm btn-error text-white w-xs right-2 top-2">Cancel</button>
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