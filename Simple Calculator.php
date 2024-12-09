<?php
$result = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];

    if (is_numeric($num1) && is_numeric($num2)) {
        switch ($operation) {
            case "add":
                $result = $num1 + $num2;
                break;
            case "subtract":
                $result = $num1 - $num2;
                break;
            case "multiply":
                $result = $num1 * $num2;
                break;
            case "divide":
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    $result = "Division by zero error!";
                }
                break;
            default:
                $result = "Invalid operation.";
        }
    } else {
        $result = "Please enter valid numbers.";
    }
}
?>
