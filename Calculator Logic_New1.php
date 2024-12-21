<?php
$result = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = isset($_POST['num1']) ? (float) $_POST['num1'] : 0;
    $num2 = isset($_POST['num2']) ? (float) $_POST['num2'] : 0;
    $operation = isset($_POST['operation']) ? $_POST['operation'] : '';

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
                $result = "Error: Division by zero.";
            }
            break;
        default:
            $result = "Please select an operation.";
            break;
    }
}
?>
