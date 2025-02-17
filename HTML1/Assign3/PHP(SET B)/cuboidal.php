<html>
<head>
    <title>Cuboid Calculator</title>
</head>
<body>
    <form method="POST" action="">
        <label for="length">Enter Length:</label>
        <input type="number" id="length" name="length" required>
        <br>
        <label for="breadth">Enter Breadth:</label>
        <input type="number" id="breadth" name="breadth" required>
        <br>
        <label for="height">Enter Height:</label>
        <input type="number" id="height" name="height" required>
        <br>
        <button type="submit">Calculate</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $length = $_POST["length"];
        $breadth = $_POST["breadth"];
        $height = $_POST["height"];
        
        $surface_area = 2 * ($length * $breadth + $length * $height + $breadth * $height);
        $volume = $length * $breadth * $height;
        
        echo "<h1>Surface Area: $surface_area</h1>";
        echo "<h1>Volume: $volume</h1>";
    }
    ?>
</body>
</html>