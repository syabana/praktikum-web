<!DOCTYPE html
	PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Studi Kasus 2</title> 
</head>

<body>

	<form action="<?php $_SERVER['PHP SELF'];?>" method="post">
	 Pilihan Buku = 
	 <input type="checkbox" name="Buku[]" value="Metodologi Penelitian"
	 <option value="Metodologi Penelitian"
		<?php
		if($_POST['Buku'] == 'Metodologi Penelitian'){
		echo 'selected="seleted"';
		}
	 ?>
	 />Metodologi Penelitian
	 
	 <input type="checkbox" name="Buku[]" value="Statistik"
	 <option value="Statistik"
		<?php
		if($_POST['Buku'] == 'Statistik'){
		echo 'selected="seleted"';
		}
	 ?>
	 />Statistik
	 
	 <input type="checkbox" name="Buku[]" value="PPKI"
	 <option value="PPKI"
		<?php
		if($_POST['Buku'] == 'PPKI'){
		echo 'selected="seleted"';
		}
	 ?>
	 />PPKI	 
	 <input type="submit" value="OK" >
</form>

<?php 
// Ekstraksi nilai 
if (isset($_POST['Buku'])) { 
  foreach ($_POST['Buku'] as $key => $val) { 
    echo $key . ' = ' .$val . '<br />'; 
  } 
} 
?> 
 
</body> 
 
</html> 