<!DOCTYPE html>
<html>
<head>
    <title>Africanhub | Verification</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .header h1 {
            color: #333333;
        }
        .content {
            padding: 20px;
            background-color: #ffffff;
            border-radius: 4px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .text-center {
            text-align: center;
        }
        .text-black-50 {
            color: #555555;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #89842c !important;
            color: #ffffff;
            text-decoration: none;
            border-radius: 4px;
        }
        .btn:hover {
            background-color: #89842c;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            color: #888888;
        }
        .social-icons {
            margin-top: 20px;
        }
        .social-icons img {
            width: 30px;
            margin: 0 5px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="header">
        <img src="https://tsa.co.tz/web/images/logo1.png" alt="Logo" style="width: 150px;">
        <h1>TSA Publication</h1>
    </div>
    <div class="content">
        <p>Hello <strong>{{ $userName }}</strong>,</p>
        <p>Thank you for downloading <b>{{ $publicationTitle }}</b>. Here is your document:</p>

        <div class="text-center">

            <a href="http://127.0.0.1:8000/storage/{{ $documentLink }}" class="btn" style="color:#ffffff">View Document</a>
        </div>
        <p>If you have any questions or need assistance, feel free to contact us at <a href="mailto:info@tsa.co.tz">info@tsa.co.tz</a></p>
    </div>
    <div class="footer">


        <div class="social-icons">
            <img src="http://127.0.0.1:8000/web/images/social/facebook.png" alt="Social Media Icon">
            <img src="http://127.0.0.1:8000/web/images/social/instagram.png" alt="Social Media Icon">
            <img src="http://127.0.0.1:8000/web/images/social/linkedin.png" alt="Social Media Icon">

            <img src="http://127.0.0.1:8000/web/images/social/twitter.png" alt="Social Media Icon">


            <!-- Add more social media icons as needed -->
        </div>
        <div class="header">
            <img src="https://tsa.co.tz/web/images/logo1.png" alt="Logo" style="width: 100px;">
        </div>
        <p  style="color:#000000">Copyright(C) 2024 Tanzania Startup Association(TSA).All right reserved.</p>
        <p  style="color:#000000">Our mailing address is:  </p>

        <p style="color:#000000">Tanzania Startup Association, 9th Floor, TAN House Tower, Plot 34/1 - Ursino South,
            New Bagamoyo Road,Dar es Salaam, Tanzania</p>
    </div>
</div>
</body>
</html>
