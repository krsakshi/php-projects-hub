<?php
function generatePassword($length = 12) {
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_=+<>?';
    $password = '';
    $charactersLength = strlen($characters);

    for ($i = 0; $i < $length; $i++) {
        $password .= $characters[rand(0, $charactersLength - 1)];
    }

    return $password;
}

$password = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $length = isset($_POST['length']) ? intval($_POST['length']) : 12;
    if ($length > 0) {
        $password = generatePassword($length);
    } else {
        $password = "Please enter a valid length!";
    }
}
?>
