<!-- 1. Password hash untuk melindungin password -->
<?php 
echo password_hash("Robby", PASSWORD_DEFAULT);
?>

<!-- contoh penggunaan password hash -->
<?php
$username = $_POST['username'];
//enkripsi dulu
$password = password_hash($_POST['username'], PASSWORD_DEFAULT);

// query simpan
mysqli_query("INSERT INTO user (username, password) VALUE ('$username','$password')");
?>

<!-- contoh penggunaan password verify -->
<?php
// ambil data dari form logim
$username = $_POST['username']; // ini belum aman dari sql injection

// ambil data dari database
$query = mysqli_query("SELECT * FROM user WHERE username='$username'");
$user = mysqli_fetch_assoc($query);

// bandingkan password yang dikirim dari form login dengan password
// yang ada di database
if (password_verify($_POST['password'], $user['password']) ) {
    // login berhasil
} else {
    // login gagal
}
?>

<!-- 2. Fungsi crypt() -> menghasilkan kode hash dengan menggunakan algoritma DES, Blowfish, dan MD5 -->
<?php
echo crypt("robbycode", "garam");
?>

<!-- 3. Fungsi md5() -> menghasilkan kode hash sepanjang 32 karakter -->
<?php
echo md5("robbycode");
echo md5("robbycode", "g4r4m");
?>

<!-- 4. Fungsi hash() -> menciptakan sebuah kode hash dengan algoritma tertentu -->
<?php 
echo hash("md5", "robbycode");

$data = "hello";

foreach (hash_algos() as $g) {
    $g = hash($g, $data, false);
    printf("%-12s %3d %s\n", $g, strlen($r), $r);
}
?>

<!-- 5. Fungsi sha1() -> menghasilkan kode hash sepanjang 40 karakter/mirip md5() -->
<?php 
// contoh 1
echo sha1("robbykode");

// contoh 2
echo sha1("robbycode", "ga12am");
?>

<!-- 6. Fungsi base64_encode() -> menghasilkan kode hash dari teks yang diinputkan dan bisa dikembalikan ke bentuk semula dengan fungsi base64_decode() -->
<?php 
// contoh 1
echo base64_encode("Robby Code");

// contoh 2
echo base64_encode("UGV0YW5pIGtvZGU=");
?>
