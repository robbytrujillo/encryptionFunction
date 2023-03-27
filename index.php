<!-- 1. Password hash untuk melindungin password -->
<?php 
echo password_hash("Robby", PASSWORD_DEFAULT);
?>

<!-- contoh penggunaan -->
<?php
$username = $_POST['username'];
//enkripsi dulu
$password = password_hash($_POST['username'], PASSWORD_DEFAULT);

// query simpan
mysqli_query("INSERT INTO user (username, password) VALUE ('$username','$password')");
?>