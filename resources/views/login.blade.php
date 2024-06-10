<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/daisyui@4.10.2/dist/full.min.css" rel="stylesheet" type="text/css" />
<script src="https://cdn.tailwindcss.com"></script>
  <style>
    .container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .card {
      margin-right: 2rem;
    }
    .coffee-image {
      background: linear-gradient(0deg, #4FD1C5 100%, #286B65 100%);
      padding: 2rem;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="card lg:card-side bg-white shadow-xl w-3/12 h-6/12"> <!-- Changed bg-base-100 to bg-white -->
      <div class="card-body">
        <label class="form-control w-full max-w-xs h-120">
          <p class="text-xl justify-end">Welcome Back Admin!</p>
          <div class="label">
            <span class="label-text text-xl">Username</span>
          </div>
          <input type="text" placeholder="Username" class="input input-bordered w-full max-w-xs" />
          <div class="label">
            <span class="label-text text-xl">Password</span>
          </div>
          <input type="text" placeholder="Password" class="input input-bordered w-full max-w-xs" />
        </label>
        <div class="form-control">
          <label class="label cursor-pointer">
            <span class="label-text">Remember me</span>
            <input type="checkbox" class="toggle" checked />
          </label>
        </div>
        <div class="card-actions justify-start">
          <a href="/beranda"><button class="btn btn-primary">Login</button></a>
        </div>
      </div>
    </div>
    <div class="coffee-image">
      <figure>
        <img src="{{ asset('image/Coffee.svg') }}" alt="Coffee"/>
      </figure>
    </div>
  </div>
</body>
</html>
