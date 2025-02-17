<html>
<head>
    <title>Armstrong Number Checker</title>
</head>
<body>
    <h2>Check if a number is Armstrong's Number</h2>

    <form action="" method="POST">
        <label for="number">Enter a number: </label>
        <input type="number" id="number" name="number" required>
        <input type="submit" value="Check">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST['number'];

        $num_str = strval($number);
        $num_digits = strlen($num_str);

        $sum = 0;
        for ($i = 0; $i < $num_digits; $i++) {
            $sum += pow((int)$num_str[$i], $num_digits);
        }

        if ($sum == $number) {
            echo "<h3>$number is an Armstrong number!</h3>";
        } else {
            echo "<h3>$number is not an Armstrong number.</h3>";
        }
    }
    ?>
</body>
</html>
