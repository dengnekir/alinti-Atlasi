<?php
include("alintiatlasi_kayit.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Kullanıcı bilgilerini çek
    $secQuery = "SELECT * FROM kayitoll WHERE id = $id";
    $secSonuc = $baglan->query($secQuery);

    if ($secSonuc->num_rows > 0) {
        $kullanici = $secSonuc->fetch_assoc();
?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Kullanıcı Güncelleme</title>
            <style>
                body{
                    background-color:grey;
                }
                h1{
                    font-size: 2rem;
                    display: flex;
                    align-content: center;
                    justify-content: center; 
                  }
                  form{
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                  }
                  input{
                    font-size: 1.2rem;
                    border-radius: 5px;
                  }
                  label{
                    font-size: 1.4rem;
                    display: flex;
        
                    justify-content: left;
                  }
                  button{
                    padding: 0.7rem 2rem;
                    text-decoration: none;
                    font-size: 1.5rem;
                    border: #030303 solid;
                    border-radius: 2rem;
                    color: #fff;
                    cursor: pointer;
                    background-color: #000000;
                  }
                  button:hover{
                    transition: .9s;
                    background-color: #fff;
                    color: #000000;
                  }
            </style>
        </head>

        <body>
            <h1>Kullanıcı Güncelleme</h1>
            <form action="veri-guncelle.php" method="post">
                <input type="hidden" name="id" value="<?php echo $kullanici['id']; ?>">

                <label for="adsoyad">Ad Soyad:</label>
                <input type="text" id="adsoyad" name="adsoyad" value="<?php echo $kullanici['adsoyad']; ?>" required><br>

                <label for="kullaniciAdi">Kullanıcı Adı:</label>
                <input type="text" id="kullaniciAdi" name="kullaniciAdi" value="<?php echo $kullanici['kullaniciAdi']; ?>" required><br>

                <label for="email">E-Mail:</label>
                <input type="email" id="email" name="email" value="<?php echo $kullanici['email']; ?>" required><br>

                <label for="telefon">Telefon:</label>
                <input type="tel" id="telefon" name="telefon" value="<?php echo $kullanici['telefon']; ?>" required><br>

                <label for="sifre">Şifre:</label>
                <input type="password" id="sifre" name="sifre" required><br>

                <label for="dogumTarihi">Doğum Tarihi:</label>
                <input type="date" id="dogumTarihi" name="dogumTarihi" value="<?php echo $kullanici['dogumTarihi']; ?>" required><br>

                <!-- Diğer input alanları için benzer şekilde devam edebilirsiniz -->

                <button type="submit">Güncelle</button>
            </form>
        </body>

        </html>
<?php
    } else {
        echo "Kullanıcı bulunamadı.";
    }
} elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Güncelleme formu gönderildiyse
    $id = $_POST['id'];
    $adsoyad = $_POST['adsoyad'];
    $kullaniciAdi = $_POST['kullaniciAdi'];
    $email = $_POST['email'];
    $telefon = $_POST['telefon'];
    $sifre = $_POST['sifre'];
    $dogumTarihi = $_POST['dogumTarihi'];
    // Diğer input alanları için benzer şekilde devam edebilirsiniz

    $guncelleQuery = "UPDATE kayitoll SET adsoyad = '$adsoyad', kullaniciAdi = '$kullaniciAdi', email = '$email', telefon = '$telefon', sifre = '$sifre', dogumTarihi = '$dogumTarihi' WHERE id = $id";
    if ($baglan->query($guncelleQuery)) {
        echo "<script>alert('Kullanıcı başarıyla güncellendi.');</script>";
        echo "<script>window.location.href='veritabani.php'</script>";
    } else {
        echo "<script>alert('Güncelleme işlemi başarısız.');</script>";
    }
} else {
    echo "Geçersiz istek.";
}
?>
