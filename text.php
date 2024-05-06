<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kullaniciAdi = $_POST["kullanici_adi"];
    $parola = $_POST["parola"];

    // Kullanıcı adı ve parolayı doğrula
    if ($kullaniciAdi == "dodo" && $parola == "1234") {
        echo "Hoş geldiniz!";
    } else {
        echo "Lütfen doğru kullanıcı adı ve parolayı girin.";
    }
}
?>
