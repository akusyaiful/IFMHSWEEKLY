<?php

  require 'function.php';
  $id = $_GET['id'];

  $deleted_rows = deleteData($id);
  if($deleted_rows > 0){
    echo "<script>
      alert('Data berhasil dihapus');
      window.location.href='characters.php';
      </script>";
  }else{
    echo "<script>
      alert('Data gagal dihapus');
      window.location.href='characters.php';
      </script>";
  }
?>