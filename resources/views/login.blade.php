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
  <div class="flex space-x-8">
    <div class="card lg:card-side bg-white shadow-xl w-3/12 h-6/12">
      <div class="card-body">
        @if($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach($errors->all() as $item)
                <li>{{$item}}</li>
              @endforeach
            </ul>
          </div>
        @endif
        <form action="/login" method="POST" class="w-full max-w-xs">
          @csrf
          <label class="form-control w-full h-120">
            <p class="text-xl justify-end">Welcome Back Admin!</p>
            <div class="label">
              <span class="label-text text-xl">Email</span>
            </div>
            <input type="text" value="{{old('email')}}" name="email" placeholder="Email" class="input input-bordered w-full max-w-xs" />
            <div class="label">
              <span class="label-text text-xl">Password</span>
            </div>
            <input type="password" name="password" placeholder="Password" class="input input-bordered w-full max-w-xs" />
          </label>
          <div class="form-control">
            <label class="label cursor-pointer">
              <span class="label-text">Remember me</span>
              <input type="checkbox" class="toggle" checked />
            </label>
          </div>
          <div class="card-actions justify-start">
            <button type="submit" class="btn btn-primary">Login</button>
          </div>
        </form>
      </div>
    </div>
    <div class="flex items-center justify-center bg-gradient-to-b from-teal-400 to-teal-700 p-8">
      <figure>
        <img src="{{ asset('image/Coffee.svg') }}" alt="Coffee"/>
      </figure>
    </div>
  </div>
</body>
</html>
