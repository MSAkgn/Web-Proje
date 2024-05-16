<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Kullanıcı adı ve şifre POST parametrelerinden alınır
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Geçerli e-posta adresi mi kontrol edilir
    if (!filter_var($username, FILTER_VALIDATE_EMAIL)) {
        echo "Geçersiz kullanıcı adı";
        exit;
    }

    // Öğrenci numarası çıkarılır
    $studentNumber = explode('@', $username)[0];
    $studentNumber = preg_replace('/[^0-9]/', '', $studentNumber);

    // Kullanıcı adı ve şifre eşleşiyor mu kontrol edilir
    if ($username === 'b231210032@sakarya.edu.tr' && $password === 'b231210032') {
        echo "<script>alert('Hoşgeldiniz $studentNumber'); window.location.href = 'index.html';</script>";
    } else {
        echo "<script>alert('Giriş başarısız. Lütfen tekrar deneyin.'); window.location.href = 'giris.html';</script>";
    }
}
?>
