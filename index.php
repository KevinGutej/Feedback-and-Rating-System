<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback and Rating System</title>
</head>

<body>
<style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .feedback-container {
            width: 60%;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2, h3 {
            text-align: center;
            color: #333;
        }

        .feedback-form label {
            display: block;
            margin-top: 10px;
            color: #555;
        }

        .feedback-form textarea,
        .feedback-form select {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .feedback-form input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .feedback-form input[type="submit"]:hover {
            background-color: #45a049;
        }

        .feedback-display p {
            background-color: #f9f9f9;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 15px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }
    </style>

    <div class="feedback-container">
        <h2>Kevin's Feedback and Rating System</h2>
        <div class="feedback-form">
            <form action="process_feedback.php" method="post">
                <label for="feedback">Your Feedback:</label>
                <textarea id="feedback" name="feedback" rows="4" required></textarea>

                <label for="rating">Rating:</label>
                <select id="rating" name="rating" required>
                    <option value="1">1 - Poor</option>
                    <option value="2">2 - Fair</option>
                    <option value="3">3 - Average</option>
                    <option value="4">4 - Good</option>
                    <option value="5">5 - Excellent</option>
                </select>

                <input type="submit" value="Submit Feedback">
            </form>
        </div>

</body>

</html>