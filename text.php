<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kullaniciAdi = $_POST["kullanici_adi"];
    $parola = $_POST["parola"];

    // Kullanıcı adı ve parolayı doğrula
    if ($kullaniciAdi == "B231210370" && $parola == "38437615658253421Bjk@") {
        echo "Hoş geldiniz!";
    } else {
        header("Location: index.html"); // Yanlış giriş durumunda login.php sayfasına yönlendir
        exit; // Yönlendirmeden sonra işlemi sonlandır
    }
}
?>
