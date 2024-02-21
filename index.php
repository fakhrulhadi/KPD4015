<?php
include_once("config.php");
?>
<html>
<head>
<title>Sistem Pekerja</title>
</head>
<body>
<center>
<h2>SISTEM PEKERJA</h2>
<fieldset>
<table width='80%' border=0>
   <tr bgcolor = '#CCCCCC'>
	   <td>Id Pekerja</td>
	   <td>Nama</td>
	</tr>
<?php

   $papar = mysqli_query("SELECT *FROM pekerja");
	while($row = mysqli_fetch_array($row)) {
		echo "<td>".$row['id_pekerja']."</td>";
		echo "<td>".$row['nama']."</td>";
		echo "<td><a href=\"delete.php?id=$row[id_pekerja]\" onClick=\"return confirm('Adakah anda pasti?')\">hapus</a></td>";
	
	}
?>
</table>
   <br><a href=" add.php">Daftar Baru</a>
</center>
   </fieldset>
</body>
</html>   
