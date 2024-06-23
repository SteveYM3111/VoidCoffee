@extends('layout.mainAdmin')
@section('content')
<div class="ml-4 mt-4">


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
      <input type="text" placeholder="Phone" class="input input-bordered w-full max-w-xl mb-5" name="phone"/>
      <select name="description" class="input input-bordered w-full max-w-xl mb-5">
        <option value="Admin">Admin</option>
        <option value="User">User</option>
      </select>
      <select name="status" class="input input-bordered w-full max-w-xl mb-5">
        <option value="Active">Active</option>
        <option value="Not Active">Not Active</option>
      </select>
   
        <div class="ml-48 mt-4"><button type="submit">Upload</button></div>
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
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Description</th>
                <th>Status</th>
                <th>Created At</th>
            </tr>
        </thead>
        <tbody>
            <!-- row 1 -->
            @foreach($data as $dt)
                <tr>
                    <td>{{ $dt->name }}</td>
                    <td>{{ $dt->email }}</td>
                    <td>{{ $dt->phone }}</td>
                    <td>{{ $dt->description }}</td>
                    <td>{{ $dt->status }}</td>
                    <td>{{ $dt->created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection