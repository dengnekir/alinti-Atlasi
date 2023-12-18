<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş Veritabanı</title>
    <link rel="shortcut icon" href="img/alıntıatlası.png" type="image/x-icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body{
       margin: 0;
           
        }
        .bilgiler {
        font-size: 2rem;
        font-weight: 600;
        width: 50%;
        margin: auto;
        display: block;
        margin-top: 4rem;
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
    </style>
</head>
<body>
<form action="veritabani_giris.php" method="post" class="signin-formu">
        <div class="bilgiler">
          <h3>Kullanıcı İsim</h3>
        </div>
        <div class="bilgiler">
          <input type="text" id="email" required name="isim" />
        </div>
        <div class="bilgiler">
          <h3>Şifreniz</h3>
        </div>
        <div class="bilgiler">
          <input type="password" id="password" required name="password" />
        </div>
        <div class="bilgiler">
          <button type="submit">Giriş Yap</button>
        </div>
      </form>
</body>
</html><?php
session_start();

if (isset($_POST["isim"], $_POST["password"])) {
    if ($_POST["isim"] == "admin" && $_POST["password"] == "2137311alibaba") {
        $_SESSION["user"] = $_POST["isim"];
        header("location: veritabani.php");
        exit;
    } else {
        echo "<script>alert('isim veya Şifre yanlış')</script>";
    }
}
?>
