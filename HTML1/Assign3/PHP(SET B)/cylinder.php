<html>
<head>
    <title>Cylinder Calculator</title>
</head>
<body>
    <form method="POST" action="">
        <label for="radius">Enter Radius:</label>
        <input type="number" id="radius" name="radius" step="any" required>
        <br>
        <label for="height">Enter Height:</label>
        <input type="number" id="height" name="height" step="any" required>
        <br>
        <button type="submit">Calculate</button>
    </form>

    <?php
    function calculateCylinder($radius, $height) {
        $pi = 3.1416;
        $surface_area = 2 * $pi * $radius * ($radius + $height);
        $volume = $pi * $radius * $radius * $height;
        return array($surface_area, $volume);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $radius = $_POST["radius"];
        $height = $_POST["height"];
        list($surface_area, $volume) = calculateCylinder($radius, $height);
        
        echo "<h1>Surface Area: $surface_area</h1>";
        echo "<h1>Volume: $volume</h1>";
    }
    ?>
</body>
</html>
