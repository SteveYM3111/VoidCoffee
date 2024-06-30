<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Receipt</title>
    <style>
        body {
            font-family: 'Arial, sans-serif';
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
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
        .details p {
            margin: 5px 0;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Receipt</h1>
        </div>
        <div class="details">
            <p><strong>Name:</strong> {{ $orderDetails['name'] }}</p>
            <p><strong>Email:</strong> {{ $orderDetails['email'] }}</p>
            <p><strong>WhatsApp:</strong> {{ $orderDetails['whatsapp'] }}</p>
            <p><strong>Product:</strong> {{ $orderDetails['product'] }}</p>
            <p><strong>Price:</strong> Rp.{{ number_format($orderDetails['price'], 2) }}</p>
        </div>
        <div class="footer">
            <p>Thank you for your purchase!</p>
        </div>
    </div>
</body>
</html>
