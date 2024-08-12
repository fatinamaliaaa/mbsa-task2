<l?php
    include("connection.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BORANG PENDAFTARAN</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
      <header>
            <img src="image/logo_MBSA.png" alt="Logo">
            <div class="header-text">
                <p><h1>MAJLIS BANDARAYA SHAH ALAM</h1></p>
                <p>JABATAN DIGITAL DAN TEKNOLOGI MAKLUMAT (JDTM)</p>
                <p>TINGKAT 1, WISMA MBSA,</p>
                <p>PERSIARAN PERBANDARAN,</p>
                <p>40000 SHAH ALAM, SELANGOR</p>
                <p>Tel : 03-5510 5133 samb. 1617 Faks : 03-5512 1503 Emel : ict@mbsa.gov.my</p>
            </div>
        </header>
      
    <div id="form">
        <h1 id="heading">Borang Pendaftaran Akaun Pengguna</h1><br>
        <form name="form" action="register.php" method="POST">
          <i class="fa-solid fa-user"></i>
          <input type="text" id="user" name="user" placeholder="Nama Penuh" required><br><br>
          <i class="fa-solid fa-envelope"></i>
          <input type="email" id="email" name="email" placeholder="Enter Email" required><br><br>
          <i class="fa-solid fa-address-card"></i>
          <input type="text" id="IC" name="IC" placeholder="No. Kad Pengenalan" required><br><br>
          <label for="Taraf Jawatan">Taraf Jawatan: </label><br>
          <label><input type="radio" name="radio-group" value="tetap"> Tetap</label>
          <label><input type="radio" name="radio-group" value="kontrak"> Kontrak</label>
          <label><input type="radio" name="radio-group" value="sambilan"> Sambilan</label><br><br>
          <input type="text" id="jabatan" name="jabatan" placeholder="Jabatan/Bahagian/Agensi" required><br><br>
          <input type="tel" id="phone" name="phone" placeholder="No. Telefon" required><br><br>
          <input type="submit" id="btn" value="Register" name="submit" >
       
        </form>

    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>