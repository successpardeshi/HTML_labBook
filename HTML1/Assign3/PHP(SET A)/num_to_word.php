<html>
<head>
    <title>Number to Words</title>
</head>
<body>
    <h2>Convert Number Digits to Words</h2>

    <form action="" method="POST">
        <label for="number">Enter a number: </label>
        <input type="number" id="number" name="number" required>
        <input type="submit" value="Convert">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST['number'];

        $digit_to_word = array(
            0 => "Zero", 1 => "One", 2 => "Two", 3 => "Three",
            4 => "Four", 5 => "Five", 6 => "Six", 7 => "Seven",
            8 => "Eight", 9 => "Nine"
        );

        $number_str = strval($number);

        echo "<h3>Digits in words:</h3>";
        foreach (str_split($number_str) as $digit) {
            echo $digit_to_word[$digit] . " ";
        }
    }
    ?>
</body>
</html>