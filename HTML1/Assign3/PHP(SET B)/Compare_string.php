<html>
<head>
    <title>String Operations</title>
</head>
<body>
    <form method="POST" action="">
        <label for="string1">Enter Large String:</label>
        <input type="text" id="string1" name="string1" required>
        <br>
        <label for="string2">Enter Small String:</label>
        <input type="text" id="string2" name="string2" required>
        <br>
        <label for="n">Enter Number of Characters to Compare:</label>
        <input type="number" id="n" name="n" required>
        <br>
        <button type="submit">Submit</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $string1 = $_POST["string1"];
        $string2 = $_POST["string2"];
        $n = intval($_POST["n"]);

        if (strpos($string1, $string2) === 0) {
            echo "<h1>The small string appears at the start of the large string.</h1>";
        } else {
            echo "<h1>The small string does not appear at the start of the large string.</h1>";
        }

        $position = strpos($string1, $string2);
        if ($position !== false) {
            echo "<h1>Position of small string in large string: $position</h1>";
        } else {
            echo "<h1>Small string not found in large string.</h1>";
        }

        if (strncasecmp($string1, $string2, $n) == 0) {
            echo "<h1>The first $n characters of both strings are equal (case insensitive).</h1>";
        } else {
            echo "<h1>The first $n characters of both strings are not equal.</h1>";
        }
    }
    ?>
</body>
</html>