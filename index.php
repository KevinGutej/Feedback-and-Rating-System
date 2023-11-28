<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback and Rating System</title>
</head>

<body>


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