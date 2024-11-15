<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Information Form</title>
    <style>
        /* Basic reset */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f2f5f7;
        }

        /* Form container */
        .form-container {
            background-color: #ffffff;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }

        h2 {
            text-align: center;
            color: #333333;
            margin-bottom: 1.5rem;
        }

        label {
            display: block;
            margin-bottom: 0.5rem;
            color: #555555;
        }

        input[type="text"] {
            width: 100%;
            padding: 0.75rem;
            margin-bottom: 1rem;
            border: 1px solid #cccccc;
            border-radius: 5px;
            font-size: 1rem;
            transition: border-color 0.3s ease;
        }

        input[type="text"]:focus {
            border-color: #0077cc;
            outline: none;
        }

        button[type="submit"] {
            width: 100%;
            padding: 0.75rem;
            background-color: #0077cc;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 1rem;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button[type="submit"]:hover {
            background-color: #005fa3;
        }
    </style>
</head>
<body>

    <div class="form-container">
        <h2>Eligibility Check</h2>

        <form action="submit-form.php" method="POST">
            <!-- Company Number Field -->
            <label for="company-number">Company Number:</label>
            <input type="text" id="company-number" name="company_number" required>

            <!-- Name Field -->
            <label for="name">Your Name:</label>
            <input type="text" id="name" name="name" required>

            <!-- Submit Button -->
            <button type="submit">Submit</button>
        </form>
    </div>

</body>
</html>