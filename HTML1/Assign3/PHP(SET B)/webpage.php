<html>
<head>
    <title>User Information Form</title>
</head>
<body>
    <form method="POST" action="">
        <label>Enter your name:</label>
        <input type="text" name="name" required>
        <br>
        <label>Select your City:</label>
        <select name="city">
            <option value="Pune">Pune</option>
            <option value="Mumbai">Mumbai</option>
            <option value="Delhi">Delhi</option>
        </select>
        <br>
        <label>Which Operating System do you have used:</label>
        <br>
        <input type="checkbox" name="os[]" value="Windows"> Windows
        <input type="checkbox" name="os[]" value="Linux"> Linux
        <input type="checkbox" name="os[]" value="Mac"> Mac
        <br>
        <label>Gender:</label>
        <input type="radio" name="gender" value="Male"> Male
        <input type="radio" name="gender" value="Female"> Female
        <br>
        <button type="submit">Submit</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST["name"]);
        $city = htmlspecialchars($_POST["city"]);
        $gender = isset($_POST["gender"]) ? htmlspecialchars($_POST["gender"]) : "Not specified";
        $os = isset($_POST["os"]) ? implode(", ", $_POST["os"]) : "None";
        
        echo "<h2>Submitted Information</h2>";
        echo "<p><strong>Name:</strong> $name</p>";
        echo "<p><strong>City:</strong> $city</p>";
        echo "<p><strong>Operating Systems Used:</strong> $os</p>";
        echo "<p><strong>Gender:</strong> $gender</p>";
    }
    ?>
</body>
</html>