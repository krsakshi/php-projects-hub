<?php
function generatePassword($length = 12) {
    // Characters to use in the password
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+-=';
    $charactersLength = strlen($characters);
    $password = '';

    // Generate random characters for the password
    for ($i = 0; $i < $length; $i++) {
        $password .= $characters[rand(0, $charactersLength - 1)];
    }

    return $password;
}

// Generate a password of desired length
$password = generatePassword(16);
echo "Your generated password is: <strong>$password</strong>";
?>
