<html>
<title>Website dengan Tailwind CSS</title>
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/daisyui@4.10.2/dist/full.min.css" rel="stylesheet" type="text/css" />
<script src="https://cdn.tailwindcss.com"></script>

<style>
    /* Tambahkan styling CSS tambahan */
    .fixed-navbar {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        z-index: 1000; /* Pastikan navbar muncul di atas konten lain */
    }
    /* Tambahkan margin top ke konten setara dengan tinggi navbar untuk mencegah konten terpotong */
    .main-content {
        margin-top: 80px; /* Sesuaikan dengan tinggi navbar */
    }
    /* Atur font dan ukuran untuk teks "Jelajahi Aroma dan Cita Rasa Terbaik" */
    .explore-text {
        font-family: 'Poppins', sans-serif;
        font-size: 55px;
        font-weight: bold;
        color: #006041; /* Ubah warna teks menjadi hijau */
    }
    /* Hapus latar belakang pada ikon pengguna */
    .user-icon {
        background-color: transparent !important;
    }
    /* Atur warna ikon pengguna menjadi hitam */
    .user-icon i {
        color: black;
    }
    /* Atur font dan ukuran untuk teks tambahan */
    .additional-text {
        font-family: 'Poppins', sans-serif;
        font-size: 20px;
        color: #006041; /* Ubah warna teks menjadi hijau */
    }
</style>
<!-- Tambahkan font Poppins -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
</head>

<body class="bg-gray-100">
<!-- Tambahkan kelas "fixed-navbar" pada nav -->
<nav class="fixed-navbar bg-white shadow-md p-5">
        <div class="container mx-auto">
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <span class="text-xl font-semibold">Logo</span>
                    <div class="ml-5">
                    <a href="/beranda" class="mr-5">Beranda</a>
                        <a href="/produk" class="mr-5">Produk</a>
                        <a href="/tentang" class="mr-5">Tentang</a>
                        <a href="/lokasi" class="mr-5">Lokasi</a>
                        <a href="layout/admin" class="mr-5">admin</a>
                    </div>
                </div>
                <div class="flex justify-center items-center w-1/3">
                    <div class="relative flex items-center"> <!-- Menambahkan kelas flex untuk mengatur posisi ikon dan input -->
                        <input type="text" placeholder="Search" class="border border-gray-300 rounded-md py-1 px-3 w-full sm:w-64 focus:outline-none focus:border-blue-500 pr-10">
                        <div class="absolute inset-y-0 right-0 flex items-center mr-3 pointer-events-none">
                            <i class="fas fa-search text-gray-400"></i> <!-- Ikon pencarian -->
                            <button class="flex items-center py-1 px-3 rounded-md ml-2 user-icon"> <!-- Tombol pengguna -->
                                <i class="fas fa-user text-black"></i> <!-- Ikon pengguna -->
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>



<!-- Tambahkan kelas "main-content" pada konten utama -->
<div class="main-content container mx-auto p-4 flex flex-wrap justify-between">

<div class="card w-96 bg-base-100 shadow-xl">
  <figure class="px-10 pt-10">
    <img src="{{ asset('image/produk.jpeg') }}" alt="" class="rounded-xl" />
  </figure>
  <div class="card-body items-center text-center">
    <h2 class="card-title">Kopi Gayo</h2>
    <p>Kopi Gayo adalah kopi yang di produksi di indonesia yaitu di aceh</p>

    
    <!-- Open the modal using ID.showModal() method -->
<button class="btn" onclick="my_modal_5.showModal()">RP:20.000</button>
<dialog id="my_modal_5" class="modal modal-bottom sm:modal-middle">
  <div class="modal-box">
    <div class="w-36 h-36 mx-auto">
      <img src="/image/QR CODE VoidCoffee.jpg" alt="">
    </div>

<label class="input input-bordered flex items-center gap-2 m-5">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4 opacity-70"><path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6ZM12.735 14c.618 0 1.093-.561.872-1.139a6.002 6.002 0 0 0-11.215 0c-.22.578.254 1.139.872 1.139h9.47Z" /></svg>
  <input type="text" class="grow" placeholder="Username" />
</label>

    
<label class="input input-bordered flex items-center gap-2 m-5">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4 opacity-70"><path d="M2.5 3A1.5 1.5 0 0 0 1 4.5v.793c.026.009.051.02.076.032L7.674 8.51c.206.1.446.1.652 0l6.598-3.185A.755.755 0 0 1 15 5.293V4.5A1.5 1.5 0 0 0 13.5 3h-11Z" /><path d="M15 6.954 8.978 9.86a2.25 2.25 0 0 1-1.956 0L1 6.954V11.5A1.5 1.5 0 0 0 2.5 13h11a1.5 1.5 0 0 0 1.5-1.5V6.954Z" /></svg>
  <input type="text" class="grow" placeholder="Email" />
</label>

<label class="input input-bordered flex items-center gap-2 m-5">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"  class="w-4 h-4 opacity-70"><path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7 .9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/></svg>
  <input type="text" class="grow" placeholder="NO Whatsapp" />
</label>

<div tabindex="0" class="collapse collapse-arrow border border-base-300 bg-base-200">
  <div class="collapse-title text-xl font-medium">
    Focus me to see content
  </div>
  <div class="collapse-content"> 
    <p>tabindex="0" attribute is necessary to make the div focusable</p>
  </div>
</div>

    <div class="modal-action">
      <form method="dialog">
        <!-- if there is a button in form, it will close the modal -->
        <button class="btn">Close</button>
        <button class="btn">Beli</button>
      </form>
    </div>
  </div>
</dialog>
  </div>
</div>


<div class="card w-96 bg-base-100 shadow-xl">
  <figure class="px-10 pt-10">
    <img src="{{ asset('image/produk.jpeg') }}" alt="" class="rounded-xl" />
  </figure>
  <div class="card-body items-center text-center">
    <h2 class="card-title">Kopi Bali</h2>
    <p>Kopi Bali adalah biji kopi yang berasal dari pegunungan Kintamani di Bali pada ketinggian ±1500 masl</p>
    <div class="card-actions">
      <button class="btn btn-primary">Beli</button>
    </div>
  </div>
</div>
<div class="card w-96 bg-base-100 shadow-xl">
  <figure class="px-10 pt-10">
    <img src="{{ asset('image/produk.jpeg') }}" alt="" class="rounded-xl" />
  </figure>
  <div class="card-body items-center text-center">
    <h2 class="card-title">Kopi hawai</h2>
    <p>kopi hawai adalah kopi yang di produksi dari kepulauan riau tepatnya di Bintan</p>
    <div class="card-actions">
      <button class="btn btn-primary">Beli</button>
    </div>
  </div>
</div>
<div class="card w-96 bg-base-100 shadow-xl mt-5">
  <figure class="px-10 pt-10">
    <img src="{{ asset('image/produk.jpeg') }}" alt="" class="rounded-xl" />
  </figure>
  <div class="card-body items-center text-center">
    <h2 class="card-title">Kopi hawai</h2>
    <p>kopi hawai adalah kopi yang di produksi dari kepulauan riau tepatnya di Bintan</p>
    <div class="card-actions">
      <button class="btn btn-primary">Beli</button>
    </div>
  </div>
</div>
<div class="card w-96 bg-base-100 shadow-xl mt-5">
  <figure class="px-10 pt-10">
    <img src="{{ asset('image/produk.jpeg') }}" alt="" class="rounded-xl" />
  </figure>
  <div class="card-body items-center text-center">
    <h2 class="card-title">Kopi hawai</h2>
    <p>kopi hawai adalah kopi yang di produksi dari kepulauan riau tepatnya di Bintan</p>
    <div class="card-actions">
      <button class="btn btn-primary">Beli</button>
    </div>
  </div>
</div>
<div class="card w-96 bg-base-100 shadow-xl mt-5">
  <figure class="px-10 pt-10">
    <img src="{{ asset('image/produk.jpeg') }}" alt="" class="rounded-xl" />
  </figure>
  <div class="card-body items-center text-center">
    <h2 class="card-title">Kopi hawai</h2>
    <p>kopi hawai adalah kopi yang di produksi dari kepulauan riau tepatnya di Bintan</p>
    <div class="card-actions">
      <button class="btn btn-primary">Beli</button>
    </div>
  </div>
</div>
  </div>
<footer class="footer p-10 bg-neutral text-neutral-content">
  <aside>
    <svg width="50" height="50" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" class="fill-current"><path d="M22.672 15.226l-2.432.811.841 2.515c.33 1.019-.209 2.127-1.23 2.456-1.15.325-2.148-.321-2.463-1.226l-.84-2.518-5.013 1.677.84 2.517c.391 1.203-.434 2.542-1.831 2.542-.88 0-1.601-.564-1.86-1.314l-.842-2.516-2.431.809c-1.135.328-2.145-.317-2.463-1.229-.329-1.018.211-2.127 1.231-2.456l2.432-.809-1.621-4.823-2.432.808c-1.355.384-2.558-.59-2.558-1.839 0-.817.509-1.582 1.327-1.846l2.433-.809-.842-2.515c-.33-1.02.211-2.129 1.232-2.458 1.02-.329 2.13.209 2.461 1.229l.842 2.515 5.011-1.677-.839-2.517c-.403-1.238.484-2.553 1.843-2.553.819 0 1.585.509 1.85 1.326l.841 2.517 2.431-.81c1.02-.33 2.131.211 2.461 1.229.332 1.018-.21 2.126-1.23 2.456l-2.433.809 1.622 4.823 2.433-.809c1.242-.401 2.557.484 2.557 1.838 0 .819-.51 1.583-1.328 1.847m-8.992-6.428l-5.01 1.675 1.619 4.828 5.011-1.674-1.62-4.829z"></path></svg>
    <p>VoidCoffe<br>Grand KDA jalan parkit 6 no 6</p>
  </aside> 
  <nav>
    <h6 class="footer-title">Social</h6> 
    <div class="grid grid-flow-col gap-4">
      <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path></svg></a>
      <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"></path></svg></a>
      <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"></path></svg></a>
    </div>
  </nav>
</footer>


</html>