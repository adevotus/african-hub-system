<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Verification</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            margin: 0;
            padding: 0;
            background-color: #dddddd;
        }
        .email-container {
            max-width: 600px;
            margin: 20px auto;
            padding: 30px;
            background-color: #ffffff;
            border-radius: 12px;
            /*box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);*/
            border: 1px solid #e0e0e0;
        }
        .logo {
            display: block;
            margin: 0 auto 20px;
            max-width: 120px;
            height: auto;
        }
        h1 {
            font-size: 26px;
            color: #333;
            text-align: center;
            margin-bottom: 20px;
            font-weight: 600;
        }
        p {
            font-size: 16px;
            color: #555;
            text-align: center;
            margin-bottom: 20px;
            line-height: 1.6;
        }
        .button {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            color: #000000;
            background-color: rgba(225, 82, 7, 0.44);
            border-radius: 8px;
            text-decoration: none;
            margin: 20px auto;
            text-align: center;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }
        .button:hover {
            color: rgba(214, 98, 38, 0.44);
            border-color:rgba(214, 98, 38, 0.44);
            background-color: #f2f2f2;
            transform: translateY(-2px);
        }
        .footer {
            font-size: 14px;
            color: #777;
            margin-top: 30px;
            border-top: 1px solid #eee;
            padding-top: 20px;
            text-align: center;
        }
        .footer a {
            color: #007bff;
            text-decoration: none;
        }
        .footer a:hover {
            text-decoration: underline;
        }
        .code {
            font-size: 20px;
            font-weight: bold;
            color: #007bff;
            text-align: center;
            margin: 20px 0;
        }
        .highlight {
            color: #007bff;
            font-weight: bold;
        }
    </style>
</head>
<body>
<div class="email-container">
    <!-- Logo -->
    <img src="https://africanhub.netlify.app/assets/img/logo/logd-01.png" alt="Company Logo" class="logo" width="120" height="auto">

    <h1 style="text-align: center; font-weight: 800">Verify Your Email Address</h1>

    <p style="text-align: center">Thank you for signing up with <span class="highlight">{{ config('app.name') }}</span>. To complete your registration, please verify your email address by clicking the button below:</p>

    <!-- Verification Button -->
    <div style="text-align: center;">
        <a href="{{$actionUrl}}" class="button" style="color: #000000">Verify Email Address</a>
    </div>

    <p style="text-align: center">If you did not create an account with us, please ignore this email.</p>

    <div class="footer">
        <p style="margin-top: 5px">Copyright © 2024 <span class="highlight">{{ config('app.name') }}</span>. All rights reserved.</p>
        <p>Our mailing address: <a href="mailto:info@africanhub.co.tz">info@africanhub.co.tz</a></p>
    </div>
</div>
</body>
</html>
