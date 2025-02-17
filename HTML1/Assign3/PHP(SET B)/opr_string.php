<html>
<head>
    <title>String Operations</title>
</head>
<body>
    <form method="POST" action="">
        <label for="string1">Enter First String:</label>
        <input type="text" id="string1" name="string1" required>
        <br>
        <label for="string2">Enter Second String:</label>
        <input type="text" id="string2" name="string2" required>
        <br>
        <label>Select Operation:</label>
        <br>
        <input type="radio" name="operation" value="compare" required> Compare Strings
        <br>
        <input type="radio" name="operation" value="uppercase"> Convert to Uppercase
        <br>
        <input type="radio" name="operation" value="lowercase"> Convert to Lowercase
        <br>
        <button type="submit">Submit</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $string1 = $_POST["string1"];
        $string2 = $_POST["string2"];
        $operation = $_POST["operation"];
        
        if ($operation == "compare") {
            if ($string1 == $string2) {
                echo "<h1>Strings are equal</h1>";
            } else {
                echo "<h1>Strings are not equal</h1>";
            }
        } elseif ($operation == "uppercase") {
            echo "<h1>First String in Uppercase: " . strtoupper($string1) . "</h1>";
            echo "<h1>Second String in Uppercase: " . strtoupper($string2) . "</h1>";
        } elseif ($operation == "lowercase") {
            echo "<h1>First String in Lowercase: " . strtolower($string1) . "</h1>";
            echo "<h1>Second String in Lowercase: " . strtolower($string2) . "</h1>";
        }
    }
    ?>
</body>
</html>