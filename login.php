<?php
session_start();
require 'function.php';

// Redirect if already logged in
if(isset($_SESSION['login'])){
  header("Location: index.php");
  exit();
}

if(isset($_POST['login'])){
  $result = loginUser($_POST);

  if($result > 0){
    header("Location: index.php");
    exit();
  } elseif($result == -1) {
    $error = 'Email tidak terdaftar!';
  } elseif($result == -2) {
    $error = 'Password salah!';
  } else {
    $error = 'Login gagal, silakan coba lagi.';
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
    <link rel="stylesheet" href="./assets/styles/login.css" />
    <title>Login - One Piece</title>
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
        <h1>One Piece Login</h1>
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
          <h2>Masuk ke Armada</h2>
          <p>Bergabunglah dalam petualangan besar!</p>
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
                  <label for="email">Email</label>
                  <input type="email" name="email" id="email" placeholder="Masukkan email" required />
                </td>
              </tr>
              <tr>
                <td>
                  <label for="password">Password</label>
                  <input type="password" name="password" id="password" placeholder="Masukkan password" required />
                </td>
              </tr>
              <tr>
                <td>
                  <button type="submit" name="login" class="btn-auth">☠ Masuk</button>
                </td>
              </tr>
            </table>
          </form>
        </div>
        <div class="auth-footer">
          <p>Belum punya akun? <a href="register.php">Daftar Sekarang</a></p>
        </div>
      </div>

      <div class="divider"><span>⚓</span></div>
    </main>
  </body>
</html>
