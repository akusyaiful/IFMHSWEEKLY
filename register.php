<?php
session_start();
require 'function.php';

if(isset($_POST['register'])){
  $result = registerUser($_POST);

  if($result > 0){
    echo "<script>
      alert('Registrasi berhasil! Silakan login.');
      window.location.href='login.php';
      </script>";
  } elseif($result == -1) {
    $error = 'Email sudah terdaftar!';
  } elseif($result == -2) {
    $error = 'Konfirmasi password tidak cocok!';
  } else {
    $error = 'Registrasi gagal, silakan coba lagi.';
  }
}
?>
<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Pirata+One&family=Cinzel:wght@400;700;900&family=Crimson+Text:ital,wght@0,400;0,600;1,400&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="./assets/styles/register.css" />
    <title>Register - One Piece</title>
  </head>
  <body>
    <div class="ocean-bg">
      <div class="wave wave1"></div>
      <div class="wave wave2"></div>
    </div>

    <div class="jolly-roger-deco">☠</div>

    <header>
      <div class="header-top">
        <div class="skull-icon">☠</div>
        <h1>One Piece Register</h1>
        <div class="skull-icon">☠</div>
      </div>
      <nav>
        <table cellspacing="0" cellpadding="10">
          <tr>
            <td><a href="index.php">Home</a></td>
            <td><a href="characters.php">Characters</a></td>
            <td><a href="about.php">About</a></td>
            <td><a href="seasons.php">Seasons</a></td>
            <td><a href="login.php">Login</a></td>
          </tr>
        </table>
      </nav>
    </header>

    <main>
      <div class="divider"><span>⚓</span></div>

      <div class="auth-card">
        <div class="auth-header">
          <div class="auth-icon">🏴‍☠️</div>
          <h2>Daftar Kru Baru</h2>
          <p>Siap berlayar bersama Topi Jerami?</p>
        </div>
        <div class="auth-body">
          <?php if(isset($error)): ?>
            <div class="auth-error">
              <p><?= $error ?></p>
            </div>
          <?php endif; ?>
          <form action="" method="post">
            <table>
              <tr>
                <td>
                  <label for="username">Username</label>
                  <input type="text" name="username" id="username" placeholder="Nama kru" required />
                </td>
              </tr>
              <tr>
                <td>
                  <label for="email">Email</label>
                  <input type="email" name="email" id="email" placeholder="Alamat email" required />
                </td>
              </tr>
              <tr>
                <td>
                  <label for="password">Password</label>
                  <input type="password" name="password" id="password" placeholder="Buat password" required />
                </td>
              </tr>
              <tr>
                <td>
                  <label for="password_confirm">Konfirmasi Password</label>
                  <input type="password" name="password_confirm" id="password_confirm" placeholder="Ulangi password" required />
                </td>
              </tr>
              <tr>
                <td>
                  <button type="submit" name="register" class="btn-auth">☠ Daftar</button>
                </td>
              </tr>
            </table>
          </form>
        </div>
        <div class="auth-footer">
          <p>Sudah punya akun? <a href="login.php">Masuk di sini</a></p>
        </div>
      </div>

      <div class="divider"><span>⚓</span></div>
    </main>
  </body>
</html>
