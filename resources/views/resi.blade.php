<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 14px;
            margin: 20px;
            padding: 0;
            color: #333;
        }
        .container {
            width: 100%;
            margin: auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .header h1 {
            margin: 0;
            font-size: 24px;
        }
        .details {
            margin-bottom: 20px;
        }
        .details .detail-item {
            margin-bottom: 10px;
        }
        .details .label {
            font-weight: bold;
        }
        .footer {
            text-align: center;
            margin-top: 30px;
            font-size: 12px;
            color: #777;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="header">
        <h1>Resi Pembelian</h1>
    </div>
    <div class="details">
        <div class="detail-item">
            <span class="label">No Pesanan:</span> {{ $no_pesanan }}
        </div>
        <div class="detail-item">
            <span class="label">Nama Pembeli:</span> {{ $nama_pembeli }}
        </div>
        <div class="detail-item">
            <span class="label">No Handphone:</span> {{ $no_handphone }}
        </div>
        <div class="detail-item">
            <span class="label">Barang:</span> {{ $barang }}
        </div>
        <div class="detail-item">
            <span class="label">Tanggal Pembelian:</span> {{ \Carbon\Carbon::parse($tanggal_pembelian)->format('d-m-Y') }}
        </div>
        <div class="detail-item">
            <span class="label">Total Harga:</span> Rp{{ number_format($harga, 0, ',', '.') }}
        </div>
        <div class="detail-item">
            <span class="label">No Resi:</span> {{ $no_resi }}
        </div>
    </div>
    <div class="footer">
        <p>Terima kasih telah menggunakan layanan kami.</p>
    </div>
</div>
</body>
</html>
