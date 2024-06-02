<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Character Case Checker</title>
</head>

<body>
    <h2>Character Case Result</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $inputString = $_POST['inputString'];

        if (!empty($inputString)) {
            echo "<p>Input String: " . htmlspecialchars($inputString) . "</p>";
            echo "<ul>";

            for ($i = 0; $i < strlen($inputString); $i++) {
                $char = $inputString[$i];
                if (ctype_upper($char)) {
                    echo "<li>'" . htmlspecialchars($char) . "' is <strong>uppercase</strong>.</li>";
                } elseif (ctype_lower($char)) {
                    echo "<li>'" . htmlspecialchars($char) . "' is <strong>lowercase</strong>.</li>";
                } else {
                    echo "<li>'" . htmlspecialchars($char) . "' is neither uppercase nor lowercase.</li>";
                }
            }

            echo "</ul>";
        } else {
            echo "<p>Please enter a valid string.</p>";
        }
    }
    ?>
    <br>
    <a href="index.php">Go back</a>
</body>

</html>