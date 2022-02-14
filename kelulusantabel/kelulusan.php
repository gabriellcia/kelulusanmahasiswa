<?php
include "koneksi.php";
?>
 
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Belajar PHP </title>
</head>
<body>
 
<h1>DATA KELULUSAN MAHASISWA</h1>
 
<p>Menampilkan isi database Mahasiswa </p>
 
 
<table border="1">
<tr>
<th>Nama</th>
<th>Jenis Kelamin</th>
<th>Status Mahasiswa</th>
<th>Umur</th>
<th>Status Nikah</th>
<th>IPS 2</th>
<th>IPS 3</th>
<th>IPS 5</th>
<th>Status Kelulusan</th>
<th>Data Akurat</th>
 
</tr>
 
<?php
 
// menampilkan seluruh isi database
$query ="select * from mahasiswa";
$hasil = mysqli_query($koneksi, $query);
 
while($data = mysqli_fetch_array($hasil))
{
  echo "<tr>";
  echo "<td>$data[nama]</td>";
  echo "<td>$data[jeniskelamin]</td>";
  echo "<td>$data[statusmahasiswa]</td>";
  echo "<td>$data[umur]</td>";
  echo "<td>$data[statusnikah]</td>";
  echo "<td>$data[ips2]</td>";
  echo "<td>$data[ips3]</td>";
  echo "<td>$data[ips5]</td>";
  echo "<td>$data[statuskelulusan]</td>";
  echo "<td>$data[dataakurat]</td>";
  echo "</tr>";
}
?>
</table>
</body>
</html>
