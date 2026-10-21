<?php

$message = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $ratingInput = $_POST["rating"] ?? "";

    if ($ratingInput === "") {
        $message = "Please enter a rating.";
    } elseif (
        !ctype_digit($ratingInput) ||
        (int)$ratingInput < 1 ||
        (int)$ratingInput > 5
    ) {
        $message = "Rating must be a whole number between 1 and 5.";
    } else {
        $rating = (int)$ratingInput;
        $message = "Valid rating: " . $rating;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rating Validation Test</title>
</head>
<body>

    <h2>Test StudyCircle Rating</h2>

    <form method="POST">
        <label for="rating">Rating (1–5):</label>

        <input
            type="number"
            id="rating"
            name="rating"
            min="1"
            max="5"
            step="1"
            required
        >

        <button type="submit">Submit Rating</button>
    </form>

    <p>
        <?= htmlspecialchars($message, ENT_QUOTES, "UTF-8") ?>
    </p>

</body>
</html>
