<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-trransitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Studi Kasus 1</title>
</head>
<body>

	<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
	 Pilihan Buku
	 <select name="Buku">
		<option value="Metodologi Penelitian"
		<?php
		if($_POST['Buku'] == 'Metodologi Penelitian'){
		echo 'selected="seleted"';
	}
	?>
	/>Metodologi Penelitian
		<option value="Statistik"
		<?php
		if($_POST['Buku'] == 'Statistik'){
		echo 'selected="seleted"';
	}
	?>
	/>Statistik
		<option value="PPKI"
		<?php
		if($_POST['Buku'] == 'PPKI'){
		echo 'selected="seleted"';
	}
	?>
	/>PPKI
	 </select>
	 <input type="submit" name='submit' value="OK" />
</form>

<?php
	if(isset($_POST['Buku']))
	{
		echo $_POST['Buku'];
	}
?>

</body>
</html>