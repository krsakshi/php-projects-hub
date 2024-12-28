<!DOCTYPE html>
<html>
<head>
    <title>Prime Number Checker</title>
</head>
<body>
    <h1>Prime Number Checker</h1>
    <form method="POST">
        <label for="number">Enter a number:</label>
        <input type="number" name="number" id="number" required>
        <button type="submit">Check</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST["number"];

        function isPrime($num) {
            if ($num <= 1) return false; // 0 and 1 are not prime
            for ($i = 2; $i <= sqrt($num); $i++) {
                if ($num % $i == 0) return false; // Divisible by another number
            }
            return true; // It's prime
        }

        if (is_numeric($number)) {
            if (isPrime($number)) {
                echo "<p>$number is a <strong>prime number</strong>.</p>";
            } else {
                echo "<p>$number is <strong>not a prime number</strong>.</p>";
            }
        } else {
            echo "<p>Please enter a valid number.</p>";
        }
    }
    ?>
</body>
</html>
