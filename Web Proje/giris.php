<?php

$username = $_POST['username'];
$password = $_POST['password'];


if (!filter_var($username, FILTER_VALIDATE_EMAIL)) {
    header("Location: giris.html");
    exit;
}


$studentNumber = explode('@', $username)[0];
$studentNumber = preg_replace('/[^0-9]/', '', $studentNumber);


if (empty($studentNumber) || empty($password)) {
    header("Location: giris.html");
    exit;
}

if ($studentNumber === $password) {
    
    echo "Hoşgeldiniz $studentNumber";
} else {
    
    header("Location: giris.html");
    exit;
}
?>
