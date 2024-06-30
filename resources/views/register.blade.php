<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/daisyui@4.10.2/dist/full.min.css" rel="stylesheet" type="text/css" />
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center min-h-screen bg-black-100 ">
<div class="flex card w-full bg-base-100 shadow-xl image-full">
  <figure><img src="/pictures/robin.png" alt="Background" /></figure>
  <div class="card-body">
    <div class="flex space-x-8 ml-36">
      <div class="card lg:card-side bg-white shadow-xl w-3/12 h-auto mt-24">
        <div class="card-body">
          @if($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif
          <form action="{{ route('register') }}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="text" name="role" value="user" hidden>
            <div>
                <label for="name" class="text-black">Name</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" class="input input-bordered w-full max-w-xs mb-5 text-white">
                @error('name')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="email" class="text-black">Email</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" class="input input-bordered w-full max-w-xs mb-5 text-white">
                @error('email')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="phone" class="text-black">Phone</label>
                <input type="number" id="phone" name="phone" class="input input-bordered w-full max-w-xs mb-5 text-white">
                @error('phone')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="password" class="text-black">Password</label>
                <input type="password" id="password" name="password" class="input input-bordered w-full max-w-xs mb-5 text-white">
                @error('password')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="password_confirmation" class="text-black">Confirm Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" class="input input-bordered w-full max-w-xs mb-5 text-white">
                @error('password_confirmation')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary w-full" class="text-black">Register</button>
          </form>
        </div>
      </div>
      <div class="border flex items-center justify-center p-4">
        <figure>
          <img src="{{ asset('image/Logo VoidCoffee.jpg') }}" alt="Coffee"/>
        </figure>
      </div>
    </div>
  </div>
</div>
</body>
</html>
