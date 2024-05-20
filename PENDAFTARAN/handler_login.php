<?php 
 $id = $_post['id'];
 $nama = $_post['nama'];
 $email = $_post['email'];
 $password = $_POST['password'];
 
 $koneksi = new mysqll('localhost', 'roat','', 'db_pplg1');
 if ($koneksi){
     echon"koneksi berhasil";
 }else{
     echo $koneksi->error;
 }
 
 $insert = $koneksi->quary("INSERT INTO var
 (id,nama,email,password)
 values
 ($id, '$nama', '$emaill', '$password')
 ");
 
 if  ($insert){
     echo "insert data berhasil";
 }else{
     echo "gagal insert data";
 }

?>