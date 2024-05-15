<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kullaniciAdi = $_POST["kullanici_adi"];
    $parola = $_POST["parola"];

    // Kullanıcı adı ve parolayı doğrula
    if ($kullaniciAdi == "B231210370@sakarya.edu.tr" && $parola == "38437615658253421Bjk@") {
        echo "Hoş geldiniz!";
    } else {
        echo "Kullanıcı adı veya parola yanlış!";
        // Yönlendirmeden sonra işlemi sonlandır
        header("Refresh: 2; URL=index.html");
        exit;
    }
}
?>
