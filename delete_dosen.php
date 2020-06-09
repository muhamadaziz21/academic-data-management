<?
include 'koneksi_db.php';

$nip = $_GET['nip'];

//Delete
$result = mysql_query($connection, "DELETE FROM dosen WHERE nip='$nip'");

header("location: index.php");
?>