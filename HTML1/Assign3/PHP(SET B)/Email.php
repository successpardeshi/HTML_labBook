<html>
<head>
    <title>Email Validation</title>
</head>
<body>
    <form method="POST" action="">
        <label for="email">Enter Email ID:</label>
        <input type="email" id="email" name="email" required>
        <br>
        <button type="submit">Submit</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST["email"];
        
        // Regular expression for email validation
        $pattern = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";
        
        if (preg_match($pattern, $email)) {
            echo "<h1>Valid Email ID</h1>";
        } else {
            echo "<h1>Invalid Email ID</h1>";
        }
    }
    ?>
</body>
</html>