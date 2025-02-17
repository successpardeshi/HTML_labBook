<html>
<head>
    <title>Multiplication Table</title>
</head>
<body>
    <?php
        $number = 5; 
        
        echo "<h1>Multiplication Table of $number</h1>";
        echo "<table border='1' cellpadding='5' cellspacing='0'>";
        for ($i = 1; $i <= 10; $i++) {
            echo "<tr><td>$number x $i</td><td>" . ($number * $i) . "</td></tr>";
        }
        echo "</table>";
    ?>
</body>
</html>
