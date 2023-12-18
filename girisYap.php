<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- css -->
    <link rel="stylesheet" href="header-footer.css" />
    <!-- document icon -->
    <link
      rel="shortcut icon"
      href="../img/alıntıatlası.png"
      type="image/x-icon"
    />
    <link rel="shortcut icon" href="img/alıntıatlası.png" type="image/x-icon" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Giriş Yap</title>
    <!-- icon kütüphanesi -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    />
    <style>
      body {
        font-size: 62.5%;
        margin: 0;
      }
      main {
        height: 80vh;
        background-image: linear-gradient(#fff, #d9d9d9);
        margin-top: 10rem;
      }
      .h1 {
        text-align: center;
        font-size: 2rem;
        margin-top: 20rem;
      }
      .bilgiler {
        font-size: 2rem;
        font-weight: 600;
        width: 30%;
        margin: auto;
        display: block;
        margin-top: 2rem;
      }
      p {
        font-size: 1.4rem;
      }
      a {
        color: red;
        text-decoration: none;
      }
      a:hover {
        color: rgb(91, 90, 90);
      }
      #email,
      #password {
        width: 100%;
        border: 2px solid rgb(175, 174, 174);
        padding: 1rem 1.5rem;
        border-radius: 2rem;
      }
      #email:focus,
      #password:focus {
        background-color: rgb(193, 192, 192);
        color: white;
      }
      button {
        color: #000;
        padding: 0.9 1.8rem;
        border-radius: 1.5rem;
        margin: 2rem 0rem 5rem 1.3rem;
      }
      button:hover {
        color: white;
        background-color: gray;
        transition: 0.5s;
        transform: translateY(10px);
      }
      #checkbox {
        display: flex;
      }
      .farkli-giris {
        text-align: center;
        font-size: 1.2rem;
      }
      .giris {
        border-radius: 4rem;
        padding: 0rem 3rem;
      }
      .b1 {
        background-image: linear-gradient(white, #ffe6e6);
      }
      .b1:hover {
        background-image: linear-gradient(#f4bdbd, black);
        transform: translateY(-5px);
        transition: 0.5s;
      }
      .b2 {
        background-image: linear-gradient(white, #99d6ff);
      }
      .b2:hover {
        background-image: linear-gradient(#7bc5f7, black);
        transform: translateY(-5px);
        transition: 0.5s;
      }
      #a-sifreunutma {
        font-size: 1.5rem;
        color: rgb(53, 51, 51);
      }
      #a {
        color: black;
      }
      #a:hover {
        color: white;
      }

      @media (max-width: 576px) {
        button {
          margin: 0;
          padding: 1px;
        }
        .h1 {
          font-size: 1rem;
        }
        .bilgiler {
          width: 50%;
          font-size: 1rem;
          margin-top: 1rem;
        }
        p {
          font-size: 1rem;
        }
        .farkli-giris {
          text-align: center;
          font-size: 0.3rem;
        }
        .giris {
          padding: 0rem 1rem;
        }
        h4 {
          font-size: 0.6rem;
        }
      }
      @media (min-width: 577px) and (max-width: 992px) {
        button {
          margin: 0;
          padding: 1px;
        }
        .h1 {
          font-size: 1.5rem;
        }
        .bilgiler {
          width: 40%;
          font-size: 1.5rem;
          margin-top: 1.5rem;
        }
        p {
          font-size: 1.2rem;
        }
        .farkli-giris {
          text-align: center;
          font-size: 0.8rem;
        }
        .giris {
          padding: 0rem 2rem;
        }
        h4 {
          font-size: 0.9rem;
        }
      }
    </style>
  </head>
  <body>
    <header>
      <div class="row">
        <div class="col col-1">
          <a href="index.php">
            <img class="logo" src="img/alıntıatlası.png" alt=""
          /></a>
          <div class="col col-2">
            <h1 class="head">Alıntı Atlası</h1>
          </div>
        </div>
        <div class="col col-4">
          <ul class="kayitol" id="kayitol">
            <a href="kayitol.php"><li>Kayıt ol</li></a>
            <a href="#"> <li>Giriş Yap</li></a>
          </ul>
        </div>
      </div>
      <div class="row-2">
        <div class="col col-3">
          <ul class="item">
            <a href="index.html #bolum2"> <li>Keşfet</li></a>
            <a class="hakkimizda" href="#footer"><li>Hakkımızda</li></a>
            <a href="header/alintilarVeSozler.html">Alıntılar ve Sözler</a>
            <a href="header/yazarVeSairler.html"> <li>Yazarlar ve Şairler</li></a>
            <a href="header/klasikKitapZirvesi.html"> <li>Kitap Zirvesi</li></a>
          </ul>
        </div>
      </div>
    </header>

    <main>
      <div class="h1">
        <h1>Giriş Bilgileri</h1>
      </div>
      <form action="girisYap.php" method="post" class="signin-formu">
        <div class="bilgiler">
          <h3>E-posta</h3>
        </div>
        <div class="bilgiler">
          <input type="email" id="email" required name="email" />
        </div>
        <div class="bilgiler">
          <h3>Şifreniz</h3>
        </div>
        <div class="bilgiler">
          <input type="password" id="password" required name="password" />
        </div>
        <div class="bilgiler" id="checkbox">
          <input type="checkbox" id="benihatırla" />
          <h5>Beni Hatırla</h5>
        </div>
        <div class="bilgiler">
          <button type="submit">Giriş Yap</button>
          <label for="sifremiunuttum"
            ><a href="../index.php" id="a-sifreunutma"
              >Şifremi unuttum</a
            ></label
          >
        </div>
        <div class="bilgiler">
          <p>
            Bu form alıntıatlası tarafından korunmaktadır ve onun
            <a href="../footer/gizlilikPolitikasi.html">Gizlilik Politikası </a>
            ve
            <a href="../footer/kullaniciSozlesmesi.html">Hizmet Şartları</a>
            geçerlidir.
          </p>
        </div>
      </form>
      <div class="farkli-giris">
        <button class="giris b1">
          <a href="../index.html.html" id="a"> <h4>Google İle Giriş Yap</h4></a>
        </button>
        <button class="giris b2">
          <a href="../index.html.html" id="a"> <h4>Meta İle Giriş Yap</h4></a>
        </button>
      </div>
    </main>

    <footer id="footer">
      <div class="footer-genel">
        <div class="footer">
          <ul id="logo2-ul">
            <li id="logo2">
              <!-- logo footer sayfa -->
              <a class="img-logo" href="index.html">
                <img
                  class="img-logo2"
                  src="img/fuuter.png"
                  alt="Logo"
                  width="150"
                  height="150"
              /></a>
              <h4 id="footer-h4">
                © 2023 Alıntı Atlası. Tüm Hakları Saklıdır.
              </h4>
            </li>
          </ul>
        </div>
        <div class="footer">
          <ul id="sss-ul">
            <h3 class="h3-sss">SSS</h3>
            <li class="sss-li">
              <a href="../footer/hakkimizda.html">Hakkımızda</a>
            </li>
            <li class="sss-li">
              <a href="../footer/iletisim.html">İletişim</a>
            </li>
            <li class="sss-li">
              <a href="..7footer/kullaniciSozlesmesi.html"
                >Kullanıcı Sözleşmesi</a
              >
            </li>
            <li class="sss-li">
              <a href="../footer/gizlilikPolitikasi.html"
                >Gizlilik Politikası</a
              >
            </li>
          </ul>
        </div>
        <div class="footer">
          <ul id="sss-ul">
            <h3 class="h3-sss">Bizi Takip Edin</h3>
            <li class="takipet-li">
              <a href="https://instagram.com/dengnekir_?igshid=YTQwZjQ0NmI0OA=="
                ><i class="fa-brands fa-instagram fa-2xl"></i
              ></a>
            </li>
            <li class="takipet-li">
              <a href="https://web.telegram.org/k/"
                ><i class="fa-brands fa-telegram fa-2xl"></i
              ></a>
            </li>
            <li class="takipet-li">
              <a href="https://twitter.com/">
                <i class="fa-brands fa-x-twitter fa-2xl"></i
              ></a>
            </li>
            <ul class="iletisim">
              <li class="iletisim-footer">
                <i class="fa-solid fa-envelope"></i>
              </li>
              <li class="iletisim-footer">ferhatuslu@stu.topkapi.edu.tr</li>
            </ul>
          </ul>
        </div>
      </div>
    </footer>
  </body>
</html>
<?php
include("alintiatlasi_kayit.php");

if(isset($_POST["email"], $_POST["password"])){
    $kullaniciMail = $_POST["email"];
    $sifre = $_POST["password"];

    // Kullanıcıyı veritabanında kontrol et
    $sorgu = "SELECT * FROM kayitoll WHERE email='$kullaniciMail' AND sifre='$sifre'";
    $sonuc = $baglan->query($sorgu);

    if($sonuc->num_rows > 0){
        // Giriş başarılı
        echo "<script>alert('Giriş başarılı')</script>";
    } else {
        // Kullanıcı bulunamadı veya şifre hatalı
        echo "<script>alert('Giriş başarısız. Kullanıcı adı veya şifre hatalı')</script>";
    }
}
?>
