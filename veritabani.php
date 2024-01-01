<!DOCTYPE html>
<html>
  <head>
  <title>Veritabani</title>
  <link rel="shortcut icon" href="img/alıntıatlası.png" type="image/x-icon" />
    <style>
      h1{
        text-align: center;
      }
      a{
        
        color: #000;
        font-size: 1rem;
        font-weight: bold;
        text-decoration: none;
      }
      #customers {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
      }

      #customers td,
      #customers th {
        border: 1px solid #ddd;
        padding: 8px;
      }

      #customers tr:nth-child(even) {
        background-color: #f2f2f2;
      }

      #customers tr:hover {
        background-color: #ddd;
      }

      #customers th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #04aa6d;
        color: white;
      }
    </style>
  </head>
  <body>
    <h1>Kayıtlı Kullanıcı Bilgiler</h1>

    <table id="customers">
      <tr>
        <th>Ad Soyad</th>
        <th>Kullanıcı Adı</th>
        <th>E-Mail</th>
        <th>Telefon</th>
        <th>Şifre</th>
        <th>Doğum Tarihi</th>
      </tr>
      <?php
      session_start();
      if($_SESSION["user"]==""){
        echo"<script>window.location.href='veritabani_cikis.php'</script>";
      }
      else{
        echo"<a href='veritabani_cikis.php'>Çıkış Yap</a><br>";
        include("alintiatlasi_kayit.php");

        $sec=" Select * From kayitoll";
        $sonuc=$baglan->query($sec);
        
        if($sonuc->num_rows>0){
        while($cek=$sonuc->fetch_assoc()){
           echo"
           <tr>
                <td>".$cek['adsoyad']."</td>
                <td>".$cek['kullaniciAdi']."</td> 
                <td>".$cek['email']."</td>
                <td>".$cek['telefon']."</td>
                <td>".$cek['sifre']."</td>
                <td>".$cek['dogumTarihi']."</td>
                <td>
                <a href='veri-guncelle.php?id=" . $cek['id'] . "'>Güncelle</a>
                <a href='veritabani.php?sil=" . $cek['id'] . "' onclick='return confirm(\"Bu kaydı silmek istediğinizden emin misiniz?\")'>Sil</a>
            </td>
              </tr>
           ";
        }
        }
        else{
        echo"Veri Bulunamadı";
        }
        
      }
      if (isset($_GET['sil'])) {
        $silId = $_GET['sil'];
        $silQuery = "DELETE FROM kayitoll WHERE id = $silId";
        if ($baglan->query($silQuery)) {
            echo "<script>alert('Kullanıcı başarıyla silindi.');</script>";
            echo "<script>window.location.href='veritabani.php'</script>";
        } else {
            echo "<script>alert('Silme işlemi başarısız.');</script>";
        }
    }
?>
      
    </table>
  </body>
</html>
