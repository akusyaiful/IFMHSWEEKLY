<?php
  $connection = mysqli_connect('localhost', 'root', 'syaiful29', 'mhsweekly');
  
  function showData($query){
    global $connection;
    $result = mysqli_query($connection, $query);

    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
      $rows[] = $row;
    }
    return $rows;
  }

  function addData($data){
    global $connection;

    $nama = $data['nama'];
    $nim = $data['nim'];
    $program_studi = $data['program_studi'];
    $email = $data['email'];
    $nomor_hp = $data['nomor_hp'];
    $foto = $data['foto'];
    $query = "INSERT INTO mahasiswa (nama, nim, program_studi, email, nomor_hp, foto) VALUES ('$nama', '$nim', '$program_studi', '$email', '$nomor_hp', '$foto')";
    mysqli_query($connection, $query);

    return mysqli_affected_rows($connection);
  }
?>