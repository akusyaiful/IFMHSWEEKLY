<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Pirata+One&family=Cinzel:wght@400;700;900&family=Crimson+Text:ital,wght@0,400;0,600;1,400&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="./assets/styles/characters.css" />
    <title>Characters - One Piece</title>
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
        <h1>One Piece Characters</h1>
        <div class="skull-icon">☠</div>
      </div>
      <nav>
        <table cellspacing="0" cellpadding="10" align="center">
          <tr>
            <td><a href="index.php">Home</a></td>
            <td><a href="characters.php">Characters</a></td>
            <td><a href="about.php">About</a></td>
            <td><a href="seasons.php">Seasons</a></td>
          </tr>
        </table>
      </nav> 
    </header>

    <main>
      <div class="add-btn-wrap">
        <a href="add-data.html" class="btn-add">
          <span class="btn-icon">＋</span> Add Character
        </a>
      </div>
  
      <div class="table-wrap">
        <table class="char-table">
          <thead>
            <tr>
              <th class="th-no">No</th>
              <th class="th-name">Name</th>
              <th class="th-nim">NIM</th>
              <th class="th-prodi">Program Studi</th>
              <th class="th-email">Email</th>
              <th class="th-phone">Nomor HP</th>
              <th class="th-photo">Foto</th>
              <th class="th-action">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td class="td-name">Muhammad Syaifullah</td>
              <td class="td-nim">2023010101</td>
              <td class="td-prodi">Informatika</td>
              <td class="td-email">msyaifullah13@gmail.com</td>
              <td class="td-phone">081234567890</td>
              <td class="td-photo">
                <div class="photo-frame">
                  <img src="assets/images/muhammad.jpg" alt="muhammad"/>
                </div>
              </td>
              <td class="td-action">
                <a href="edit-data.html" class="btn-edit">Edit</a>
                <a href="delete-data.html" class="btn-delete">Delete</a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
  
      <div class="divider"><span>⚓</span></div>
  
      <div class="section-label">Secret Log</div>
  
      <div class="table-wrap">
        <table class="mystery-table">
          <tbody>
            <tr>
              <td>1,1</td>
              <td>1,2</td>
              <td>1,3</td>
              <td>1,4</td>
            </tr>
            <tr>
              <td>2,1</td>
              <td colspan="2" rowspan="2" class="td-mystery">?</td>
              <td>2,4</td>
            </tr>
            <tr>
              <td>3,1</td>
              <td>3,4</td>
            </tr>
            <tr>
              <td>4,1</td>
              <td>4,2</td>
              <td>4,3</td>
              <td>4,4</td>
            </tr>
          </tbody>
        </table>
      </div>
    </main>
  </body>
</html>
