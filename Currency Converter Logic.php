<?php
$result = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $amount = $_POST['amount'];
    $fromCurrency = $_POST['from_currency'];
    $toCurrency = $_POST['to_currency'];

    // Conversion rates (example rates, can be updated dynamically)
    $exchangeRates = [
        "USD_TO_EUR" => 0.85,
        "USD_TO_INR" => 74.5,
        "EUR_TO_USD" => 1.18,
        "EUR_TO_INR" => 87.8,
        "INR_TO_USD" => 0.013,
        "INR_TO_EUR" => 0.011,
    ];

    $conversionKey = $fromCurrency . "_TO_" . $toCurrency;

    if (is_numeric($amount) && isset($exchangeRates[$conversionKey])) {
        $convertedAmount = $amount * $exchangeRates[$conversionKey];
        $result = "$amount $fromCurrency is equal to " . round($convertedAmount, 2) . " $toCurrency.";
    } else {
        $result = "Invalid input or conversion not supported.";
    }
}
?>
