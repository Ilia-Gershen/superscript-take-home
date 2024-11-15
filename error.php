<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message</title>
    <style>
        /* Center the content on the screen */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        .message-container {
            text-align: center;
            background-color: #ffffff;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .message {
            font-size: 1.5rem;
            color: #333;
            margin-bottom: 1rem;
        }

        .back-button {
            padding: 0.5rem 1rem;
            font-size: 1rem;
            color: #ffffff;
            background-color: #007bff;
            border: none;
            border-radius: 4px;
            text-decoration: none;
            cursor: pointer;
        }

        .back-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

    <div class="message-container">
        <div class="message">An error occurred while processing your request. Please try again later.</div>
        <a href="index.php" class="back-button">Back</a>
    </div>

</body>
</html>