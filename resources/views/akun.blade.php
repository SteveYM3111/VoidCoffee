@extends('layout.mainUser')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Profile</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-black-100">

<div class="max-w-3xl mx-auto mt-10">
  <div class="bg-gray-200 p-6 rounded-lg shadow-lg">
    <h2 class="text-2xl font-bold mb-6">User Profile</h2>

    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Username</label>
      <p id="name" class="bg-gray-100 p-2 rounded-md">{{ $user->name }}</p>
    </div>

    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email</label>
      <p id="email" class="bg-gray-100 p-2 rounded-md">{{ $user->email }}</p>
    </div>

    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="phone">Phone Number</label>
      <p id="phone" class="bg-gray-100 p-2 rounded-md">{{ $user->phone }}</p>
    </div>

    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="password">Password</label>
      <p id="password" class="bg-gray-100 p-2 rounded-md">{{ $user->password }}</p>
    </div>

    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="username">Role</label>
      <p id="username" class="bg-gray-100 p-2 rounded-md">{{ $user->role }}</p>
    </div>


</body>
</html>


@endsection