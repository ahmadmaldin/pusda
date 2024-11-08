<?php
require_once "config/database.php"; // Memanggil file koneksi dengan database
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>LibriHub</title>

  <link rel="shortcut icon" href="assets/img/Alecive.png">

  <!-- Bootstrap -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/datepicker.min.css" rel="stylesheet">

  <!-- styles -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- Fungsi untuk membatasi karakter yang diinputkan -->
  <script language="javascript">
    function getkey(e) {
      if (window.event)
        return window.event.keyCode;
      else if (e)
        return e.which;
      else
        return null;
    }

    function goodchars(e, goods, field) {
      var key, keychar;
      key = getkey(e);
      if (key == null) return true;

      keychar = String.fromCharCode(key);
      keychar = keychar.toLowerCase();
      goods = goods.toLowerCase();

      // check goodkeys
      if (goods.indexOf(keychar) != -1)
        return true;
      // control keys
      if (key == null || key == 0 || key == 8 || key == 9 || key == 27)
        return true;

      if (key == 13) {
        var i;
        for (i = 0; i < field.form.elements.length; i++)
          if (field == field.form.elements[i])
            break;
        i = (i + 1) % field.form.elements.length;
        field.form.elements[i].focus();
        return false;
      };
      // else return false
      return false;
    }
  </script>

  <!--- untuk menghilangkan beberapa komponen yang tidak diperlukan saat menggunakan fitur print -->
  <style>
    @media print {
      .print {
        display: none;
      }
    }
  </style>

</head>

<body>
  <!--- untuk mengecek sesi di index -->
  <?php
  session_start();

  // jika tidak ada level yang ditemukan pada sesi login, maka akan diarahkan ke halaman login.php dengan tambahan pesan gagal.
  // fitur ini digunakan agar yang belum login tidak dapat masuk ke dalam aplikasi.
  if ($_SESSION['level'] == "") {
    header("location:login.php?pesan=gagal");
  }
  ?>

  <nav class="navbar navbar-default navbar-fixed-top">

    <!--- untuk menampilkan menu sesuai dengan level -->
    <?php
    if ($_SESSION['level'] == "Admin") {
      include 'menu/menu-admin.php'; // Jika level pengguna yang login @Admin, maka akan memanggil file menu-admin.php yang terdapat pada folder menu.


    } else if ($_SESSION['level'] == "Anggota") {
      include 'menu/menu-anggota.php'; // Jika level pengguna yang login @Anggota, maka akan memanggil file menu-admin.php yang terdapat pada folder menu.
    }
    ?>
  </nav>

  <div class="container-fluid">
    <!--- untuk menampilkan routes sesuai dengan level -->
    <?php
    if ($_SESSION['level'] == "Admin") {
      include 'routes/admin-routes.php'; // jika level pengguna yang login @Admin, maka akan dipanggil file admin-routes.php yang berada pada folder routes.

    } else if ($_SESSION['level'] == "User") {
      include 'routes/user-routes.php'; // jika level pengguna yang login @User, maka akan dipanggil file user-routes.php yang berada pada folder routes.

    } else if ($_SESSION['level'] == "") {
      include 'routes/other.php'; // jika level pengguna yang login bukan siapa-siapa, maka akan dipanggil file other.php
    }
    ?>
  </div>

  <!--- Footer / kaki -->
  <footer class="footer">
    <div class="container-fluid">
      <p class="text-muted pull-left">LibriHub</p>
      <p class="text-muted pull-right print">By <a href="http://www.instagram.com/mmmaldin" target="_blank">Us</a></p>
    </div>
  </footer>

  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/bootstrap-datepicker.min.js"></script>

  <script type="text/javascript">
    $(function() {

      //datepicker plugin
      $('.date-picker').datepicker({
        autoclose: true,
        todayHighlight: true
      });

      // toolip
      $('[data-toggle="tooltip"]').tooltip();
    })
  </script>

</body>

</html>