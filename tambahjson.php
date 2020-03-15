<html>
<head>
<title>Rest Web Services</title>
</head>
<body>
<?php
if (isset ($_POST['nim'])) {
$url = 'http://retnadr.000webhostapp.com/jsonmhsw.php'; // ganti pake alamat website mu
//$data = "[{\"nim\":\".$_POST['nim'].\",\"nama\":\".$_POST['nama'].\",\"progdi\":\".$_POST['progdi'].\"}]";//
$data="{\"nim\":\"".$_POST['nim']."\",\"nama\":\"".$_POST['nama']."\",\"progdi\":\"".$_POST['progdi']."\"}";
echo "datanya <br/>".$data;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$response = curl_exec($ch);
echo "<br/>response ".$response;
curl_close($ch);
}
?>
<form method="POST" action="tambahjson.php">
<table>
<tr>
<td>NIM</td>
<td><input type="text" name="nim" id="nim"></td>
</tr>
<tr>
<td>Nama</td>
<td><input type="text" name="nama" id="nama"></td>
</tr>
<tr>
<td>Progdi</td>
<td><input type="text" name="progdi" id="progdi"></td>
</tr>
<tr>
<tr>
<td><input type="submit" name="submit" id="submit" value="Tambah"></td>
<td></td>
</tr>
</table>
</form>
</body>
</html>