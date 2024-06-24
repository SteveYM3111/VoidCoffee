@extends('layout.mainUser')
@section('content')
<div class="main-content container mx-auto p-4 flex flex-wrap justify-between">
@foreach($barang as $brg)
<div class="card w-96 bg-base-100 shadow-xl mb-5">
  <figure class="px-10 pt-10">
    <img src="{{ asset($brg->picture) }}" alt="" class="rounded-xl w-64 h-64" />
  </figure>
  <div class="card-body items-center text-center">
    <h2 class="card-title">{{ $brg->name }}</h2>
    <p>{{ $brg->description }}</p>

    <button class="btn" onclick="document.getElementById('my_modal_create{{ $brg->id_barang }}').showModal()">Rp.{{ $brg->price }}</button>
    <dialog id="my_modal_create{{ $brg->id_barang }}" class="modal modal-bottom sm:modal-middle">
        <div class="modal-box">
            <div class="w-36 h-36 mx-auto">
                <img src="/image/QR CODE VoidCoffee.jpg" alt="">
            </div>
            <h3 class="font-bold text-lg py-4">Please fill out the form below!</h3>
            <form action="{{ route('orderan.create', ['id_barang' => $brg->id_barang]) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div>
                    <input type="text" placeholder="Name" class="input input-bordered w-full max-w-xs mb-5" name="name" value="{{ old('name') }}" />
                    @error('name')
                        <div class="text-red-500">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <input type="text" placeholder="Email" class="input input-bordered w-full max-w-xs mb-5" name="email" value="{{ old('email') }}" />
                    @error('email')
                        <div class="text-red-500">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <input type="text" placeholder="No Whatsapp" class="input input-bordered w-full max-w-xs mb-5" name="whatsapp" value="{{ old('whatsapp') }}" />
                    @error('whatsapp')
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
  </div>
</div>
@endforeach
@endsection
