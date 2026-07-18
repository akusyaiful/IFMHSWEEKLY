<?php
  require 'function.php';

  if(isset($_POST['submit'])){
    if(addData($_POST, $_FILES['foto']) > 0){
      echo "<script>
        alert('Data berhasil ditambahkan');
        window.location.href='characters.php';
        </script>";
    }else{
      echo "<script>alert('Data gagal ditambahkan');</script>";
    }
  }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Pirata+One&family=Cinzel:wght@700;900&family=Crimson+Text:ital,wght@0,400;0,600;1,400;1,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="./assets/styles/add-data.css" />
    <title>Add Data - One Piece</title>
  </head>
  <body>
    <div class="ocean-bg">
      <div class="wave wave1"></div>
      <div class="wave wave2"></div>
    </div>

    <div class="jolly-roger-deco">☠</div>

    <header>
      <div class="header-top">
        <span class="skull-icon">☠</span>
        <h1>Add Characters</h1>
        <span class="skull-icon">☠</span>
      </div>
      <nav>
        <table cellspacing="0" cellpadding="0">
          <tr>
            <td><a href="index.php">Home</a></td>
            <td><a href="characters.php">Characters</a></td>
            <td><a href="about.php">About</a></td>
            <td><a href="seasons.php">Seasons</a></td>
            <td><a href="login.php">Login</a></td>
            <td><a href="logout.php">Logout</a></td>
          </tr>
        </table>
      </nav>
    </header>

    <main>
      <form action="" method="post" enctype="multipart/form-data">
        <table cellpadding="5" align="center">
          <tr>
            <td><label for="nama">Nama</label></td>
            <td>:</td>
            <td><input type="text" name="nama" id="nama" required /></td>
          </tr>
          <tr>
            <td><label for="nim">NIM</label></td>
            <td>:</td>
            <td><input type="text" name="nim" id="nim" required /></td>
          </tr>
          <tr>
            <td><label for="program_studi">Program Studi</label></td>
            <td>:</td>
            <td><input type="text" name="program_studi" id="program_studi" required /></td>
          </tr>
          <tr>
            <td><label for="email">Email</label></td>
            <td>:</td>
            <td><input type="email" name="email" id="email" /></td>
          </tr>
          <tr>
            <td><label for="nomor_hp">Nomor HP/Phone</label></td>
            <td>:</td>
            <td><input type="number" name="nomor_hp" id="nomor_hp" required /></td>
          </tr>
          <tr>
            <td><label for="foto">Foto</label></td>
            <td>:</td>
            <td><input type="file" name="foto" id="foto" required /></td>
          </tr>
          <tr>
            <td colspan="3">
              <button type="submit" name="submit">Add</button>
            </td>
          </tr>
        </table>
      </form>
    </main>
  </body>
</html>
