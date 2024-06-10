<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Order</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/daisyui@4.10.2/dist/full.min.css" rel="stylesheet" type="text/css" />
<script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-4">
    <div class="max-w-md mx-auto bg-white shadow-lg rounded-lg p-6">
        <div class="flex items-center space-x-4 mb-4">
            <div>
                <img src="https://via.placeholder.com/50" alt="Product Image" class="rounded-full">
            </div>
            <div>
                <h2 class="text-xl font-semibold">ORDER: 686Q31EQ9XWX1</h2>
                <p class="text-sm text-gray-500">Kopi Bali - 800g (Strong)</p>
                <p class="text-sm text-gray-500">ID: 359351611</p>
                <p class="text-sm text-gray-500">Server: 9649</p>
            </div>
        </div>
        <div class="mb-4">
            <h3 class="text-lg font-medium">Detail Pembayaran</h3>
            <p class="text-gray-700"><span class="font-semibold">Metode Pembayaran:</span> Qris</p>
            <p class="text-gray-700"><span class="font-semibold">Nominal Pembayaran:</span> Rp 85,000.0</p>
        </div>
        <div class="flex justify-center mb-4">
            <img src="https://via.placeholder.com/150" alt="QR Code" class="border p-2">
        </div>
        <div class="flex justify-center mb-4">
            <button class="btn btn-primary">Download QR Code</button>
        </div>
        <div class="text-center mb-4">
            <a href="#" class="text-blue-500">Lihat Petunjuk Pembayaran</a>
        </div>
        <div class="mb-4">
            <h3 class="text-lg font-medium">Detail Pembayaran</h3>
            <p class="text-gray-700"><span class="font-semibold">ID:</span> 359351612</p>
            <p class="text-gray-700"><span class="font-semibold">Waktu Pemesanan:</span> 24 Mei 2024 22:42:32</p>
            <p class="text-gray-700"><span class="font-semibold">Kopi Bali - 800g (Strong)</span> Rp 85,000.0</p>
            <p class="text-gray-700"><span class="font-semibold">Total Pembayaran:</span> Rp 85,000.0</p>
        </div>
        <div>
            <h3 class="text-lg font-medium">Petunjuk Pembayaran</h3>
            <details class="mb-2">
                <summary class="cursor-pointer">Qris</summary>
                <p class="ml-4 text-gray-600">Instruction content for Qris.</p>
            </details>
            <details class="mb-2">
                <summary class="cursor-pointer">Qris Bila Hanya Punya 1 Hp</summary>
                <p class="ml-4 text-gray-600">Instruction content for single device payment.</p>
            </details>
            <details>
                <summary class="cursor-pointer">Screenshot Qris</summary>
                <p class="ml-4 text-gray-600">Instruction content for screenshot Qris.</p>
            </details>
        </div>
    </div>
</body>
</html>
