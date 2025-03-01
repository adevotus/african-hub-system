<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unauthorized Access</title>
    <style>
        /* General Reset */
        body, html {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Container Styling */
        .unauthorized-container {
            text-align: center;
            background-color: #ffffff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }

        /* Icon Styling */
        .unauthorized-icon {
            font-size: 64px;
            color: #dc3545; /* Red color for warning */
            margin-bottom: 20px;
        }

        /* Heading Styling */
        h1 {
            font-size: 24px;
            color: #343a40;
            margin-bottom: 10px;
        }

        /* Paragraph Styling */
        p {
            font-size: 16px;
            color: #6c757d;
            margin-bottom: 20px;
        }

        /* Button Styling */
        .home-button {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            color: #000000;
            background-color: #c14d0e;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .home-button:hover {
            background-color: #82a4ca;
        }
    </style>
</head>
<body>
<div class="unauthorized-container">
    <!-- Icon (You can replace this with an image or custom icon) -->
    <div class="unauthorized-icon">🚫</div>

    <!-- Heading -->
    <h1>Unauthorized Access</h1>
    <p>You have reached the maximum allowed devices. Remove an old device to log in. Please contact the administrator.</p>
    <a href="/" class="home-button">Go to Homepage</a>
</div>
</body>
</html>
