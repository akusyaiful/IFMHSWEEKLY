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

  function addData($data, $file){
    global $connection;

    $nama = htmlspecialchars($data['nama']);
    $nim = htmlspecialchars($data['nim']);
    $program_studi = htmlspecialchars($data['program_studi']);
    $email = htmlspecialchars($data['email']); 
    $nomor_hp = htmlspecialchars($data['nomor_hp']);
    $foto = $file['name'];
    $formatted_foto = date('dmYhis_').$foto;
    $foto_tmp = $file['tmp_name'];
    $foto_dir = './assets/images/';
    if(move_uploaded_file($foto_tmp, $foto_dir . $formatted_foto)){
      $query = "INSERT INTO mahasiswa (nama, nim, program_studi, email, nomor_hp, foto) VALUES ('$nama', '$nim', '$program_studi', '$email', '$nomor_hp', '$formatted_foto')";
      mysqli_query($connection, $query);
    }

    return mysqli_affected_rows($connection);
  }

  function deleteData($id){
    global $connection;
    $query = "DELETE FROM mahasiswa WHERE id = $id";
    mysqli_query($connection, $query);

    return mysqli_affected_rows($connection);
  }

  function updateData($data, $file){
    global $connection;

    $id = $data['id'];
    $nama = htmlspecialchars($data['nama']);
    $nim = htmlspecialchars($data['nim']);
    $program_studi = htmlspecialchars($data['program_studi']);
    $email = htmlspecialchars($data['email']);
    $nomor_hp = htmlspecialchars($data['nomor_hp']);

    // Get current photo from database
    $result = mysqli_query($connection, "SELECT foto FROM mahasiswa WHERE id = $id");
    $row = mysqli_fetch_assoc($result);
    $current_foto = $row['foto'];

    $foto_to_save = $current_foto; // Default to current photo

    // Check if a new file was uploaded
    if ($file['error'] === 0) {
        $foto = $file['name'];
        $formatted_foto = date('dmYhis_').$foto;
        $foto_tmp = $file['tmp_name'];
        $foto_dir = './assets/images/';

        if(move_uploaded_file($foto_tmp, $foto_dir . $formatted_foto)){
            $foto_to_save = $formatted_foto;
        } else {
            // Log error if file move fails, but proceed with other updates
            error_log("Failed to move uploaded file for ID: $id");
        }
    }

    $query = "UPDATE mahasiswa SET
                nama = '$nama',
                nim = '$nim',
                program_studi = '$program_studi',
                email = '$email',
                nomor_hp = '$nomor_hp',
                foto = '$foto_to_save'
              WHERE id = $id";

    mysqli_query($connection, $query);

    return mysqli_affected_rows($connection);
  }
?>