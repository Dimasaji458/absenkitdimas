<!DOCTYPE html>
<html>
<head>
	<title>Halaman admin</title>
</head>
<body bgcolor="FF B6 C1">
	<?php 
	session_start();

	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}

	?>
	<h1>Halaman Admin</h1>

	<p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>
	<h4>Tabel Admin</h4>
	<TABLE BORDER = "1">
		<TR><TH>No</TH><TH>nama_admin</TH><TH>alamat</TH></TR>
		<TR><TD>1</TD><TD>andi</TD><TH>semarang</TH></TR>
		<TR><TD>2</TD><TD>doni</TD><TH>semarang</TH></TR>
		<TR><TD>3</TD><TD>wahyu</TD><TH>semarang</TH></TR>
		<TR><TD>4</TD><TD>robert</TD><TH>semarang</TH></TR>
		<TR><TD>5</TD><TD>kaka</TD><TH>semarang</TH></TR>
</TABLE>
<h4>Tabel Guru</h4>
	<TABLE BORDER = "1">
		<TR><TH>No</TH><TH>nama_guru</TH><TH>mapel</TH></TR>
		<TR><TD>1</TD><TD>andi</TD><TH>PAI</TH></TR>
		<TR><TD>2</TD><TD>doni</TD><TH>TIK</TH></TR>
		<TR><TD>3</TD><TD>wahyu</TD><TH>PAI</TH></TR>
		<TR><TD>4</TD><TD>robert</TD><TH>IPA</TH></TR>
		<TR><TD>5</TD><TD>kaka</TD><TH>TIK</TH></TR>
</TABLE>
<h4>Tabel Siswa</h4>
	<TABLE BORDER = "1">
		<TR><TH>No</TH><TH>nama_siswa</TH><TH>jurusan</TH></TR>
		<TR><TD>1</TD><TD>andi</TD><TH>tkj</TH></TR>
		<TR><TD>2</TD><TD>doni</TD><TH>tkj</TH></TR>
		<TR><TD>3</TD><TD>wahyu</TD><TH>tkj</TH></TR>
		<TR><TD>4</TD><TD>robert</TD><TH>tkj</TH></TR>
		<TR><TD>5</TD><TD>kaka</TD><TH>tkj</TH></TR>
</TABLE>
<br>
	<a href="logout.php">LogOut</a>

	<br/>
	<br/>
</body>
</html>