<html>
<head>
    <title>Base64 Encode and Decode</title>
</head>
<body>
    <h2>Base64 Encode and Decode</h2>

    <form action="" method="POST">
        <label for="input_string">Enter a string: </label>
        <input type="text" id="input_string" name="input_string" required>
        <input type="submit" value="Process">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $input_string = $_POST['input_string'];

        $encoded_string = base64_encode($input_string);

        $decoded_string = base64_decode($encoded_string);

        echo "<h3>Original String: $input_string</h3>";
        echo "<h3>Encoded (Base64) String: $encoded_string</h3>";
        echo "<h3>Decoded String: $decoded_string</h3>";
    }
    ?>
</body>
</html>