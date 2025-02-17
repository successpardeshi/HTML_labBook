<html>
<head>
    <title>Sum of Digits</title>
</head>
<body>
    <form method="POST" action="">
        <label for="number">Enter a Number:</label>
        <input type="number" id="number" name="number" required>
        <br>
        <button type="submit">Calculate Sum</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST["number"];
        $sum = 0;
        
        while ($number > 0) {
            $sum += $number % 10;
            $number = floor($number / 10);
        }
        
        echo "<h1>Sum of Digits: $sum</h1>";
    }
    ?>
</body>
</html>
