<html>
<head>
    <title>PAN Number Validation</title>
</head>
<body>
    <h2>Check PAN Number Validity</h2>

    <form action="" method="POST">
        <label for="pan_number">Enter PAN Number: </label>
        <input type="text" id="pan_number" name="pan_number" required>
        <input type="submit" value="Check Validity">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $pan_number = $_POST['pan_number'];

        $pattern = "/^[A-Z]{5}[0-9]{4}[A-Z]{1}$/";

        if (preg_match($pattern, $pan_number)) {
            echo "<h3>The PAN number <strong>$pan_number</strong> is valid.</h3>";
        } else {
            echo "<h3>The PAN number <strong>$pan_number</strong> is invalid. Please enter a valid PAN number.</h3>";
        }
    }
    ?>
</body>
</html>
