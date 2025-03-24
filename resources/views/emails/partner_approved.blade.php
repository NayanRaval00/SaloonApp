<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barber Registration Invitation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #333;
            text-align: center;
        }
        p {
            color: #555;
            font-size: 16px;
            line-height: 1.6;
        }
        .button {
            display: block;
            width: 100%;
            text-align: center;
            margin: 20px 0;
        }
        .button a {
            background-color: #28a745;
            color: #ffffff;
            padding: 12px 20px;
            text-decoration: none;
            font-size: 18px;
            border-radius: 5px;
            display: inline-block;
        }
        .button a:hover {
            background-color: #218838;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: #888;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>🎉 Congratulations, {{ $partner->name }}! 🎉</h2>
        <p>We are pleased to inform you that your inquiry has been <strong>approved</strong>. You are now eligible to register as a barber on our platform.</p>
        
        <p>To complete your registration, please click the button below:</p>

        <div class="button">
            <a href="{{ $registrationLink }}">Register as a Barber</a>
        </div>

        <p>If you have any questions, feel free to contact our support team.</p>

        <div class="footer">
            <p>Thank you for choosing our platform! 🚀</p>
        </div>
    </div>
</body>

</html>
