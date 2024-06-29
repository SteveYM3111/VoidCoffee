@extends('layout.mainAdmin')
@section('content')

  <!-- Main Content -->
  <div class="flex-1 p-10">
    <div class="bg-white p-6 rounded-lg shadow-lg">
      <h2 class="text-2xl font-bold mb-6">Admin Profile</h2>

      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Name</label>
        <p id="name" class="bg-gray-100 p-2 rounded-md">{{ Auth::user()->name }}</p>
      </div>

      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email</label>
        <p id="email" class="bg-gray-100 p-2 rounded-md">{{ Auth::user()->email }}</p>
      </div>

      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="phone">Phone Number</label>
        <p id="phone" class="bg-gray-100 p-2 rounded-md">{{ Auth::user()->phone }}</p>
      </div>

      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="password">Password</label>
        <p id="password" class="bg-gray-100 p-2 rounded-md">{{ Auth::user()->password }}</p>
      </div>

      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="username">Role</label>
        <p id="username" class="bg-gray-100 p-2 rounded-md">{{ Auth::user()->role }}</p>
      </div>
    </div>
  </div>
</div>

</body>
</html>
@endsection