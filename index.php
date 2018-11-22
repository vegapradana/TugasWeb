<html>
<head>
<script type = "text/javascript" src="jscript/jquery.1.js"></script>
<script type="text/javascript">
	
</script>

<link rel = "stylesheet" type="text/css" href="style.css">

</head>
<body>

  <?php
if(isset($_POST['btn'])):
  
  $_SESSION['pos']=$_POST;

endif;

if(isset($_SESSION['pos'])):
  $npm   =$_SESSION['pos']['npm'];
  $nama   =$_SESSION['pos']['nama'];
  $tgl_lahir =$_SESSION['pos']['lahir'];
  $password =$_SESSION['pos']['pass'];
  $confirmpassword =$_SESSION['pos']['confirmpass']; 
else:
  $npm   ='';
  $nama   ='';
  $tgl_lahir ='';
  $password ='';
  $confirmpassword ='';
endif;
?>



<title>TABEL BIODATA</title>


<center>
<h1>TABEL BIODATA</h1>
<table border="1">
<tr>
<td>NPM</td>
<td>NAMA</td>
<td>TGL LAHIR</td>
</tr>
<tr>
<td>17115008</td>
<td>Vega Pradana</td>
<td>20 Agustus 1997</td>
</tr>
<tr>
<td>16115374</td>
<td>Sandro Sipangkar</td>
<td>30 Desember 1996</td>
</tr>
<tr>
<td>16115237</td>
<td>Rofinesi</td>
<td>10 April 1997</td>
</tr>
<tr>
<td>11115070</td>
<td>Arya Eka</td>
<td>12 Januari 1997</td>
</tr>
<tr>
<td>151159019</td>
<td>Budi</td>
<td>4 Maret 1997</td>
</tr>
</table>
<br>
<form method="post" name="frm" action="">
<p>FORM</p>
<table border="0">
<tr>
<td>NPM :</td>
<td><input type="text" name="npm" value="<?php echo $npm; ?>" id = "npm"/></td>
</tr>

<tr>
<td>NAMA :</td>
<td><input type="text" name="nama" value="<?php echo $nama; ?>" id = "nama"/></td>
</tr>

<tr>
<td>TGL LAHIR :</td>
<td><input type="text" name="lahir" value="<?php echo $tgl_lahir; ?>" id = "lahir"/></td>
</tr>

<tr>
<td>PASSWORD :</td>
<td><input type="password" name = "pass" value="<?php echo $password; ?>" id = "pass"/></td>
</tr>

<tr>
<td>CONFIRM PASSWORD :</td>
<td><input type="password" name="confirmpass" value="<?php echo $confirmpassword; ?>" id = "confirmpass"/></td>
</tr>

</table>
<input type = "submit" name="btn" onclick = "button()" value = "SUBMIT">

<script type="text/javascript">
function button(){
 	
 	var u = document.getElementById('pass');
 	var v = document.getElementById('confirmpass');
 	var x = document.getElementById('npm');
 	var y = document.getElementById('nama');
 	var z = document.getElementById('lahir');

 	if(u.value == "" && v.value == "" && x.value == "" && y.value == "" && z.value == ""){
  		alert("Data Input Masih Kosong, Harap Isi Dahulu ");
      x.focus();
  }
 	
 	else if(x.value == ""){
  		alert("NPM masih kosong ");
      x.focus();
 	}
 	
 	else if(y.value == ""){
  		alert("Nama masih kosong ");
      y.focus();
 	}
 	
 	else if(z.value == ""){
  		alert("Tanggal Lahir masih kosong ");
      z.focus();
 	}
  	
  	else if(u.value == ""){
  		alert("Password masih kosong ");
      u.focus();
  	}
  	
  	else if(v.value == ""){
  		alert("Confirm Password masih kosong ");
      v.focus();
  	}
  	
  	else if(u.value != v.value){
  		alert("Password Tidak Serupa!");
  	}
 	
 	else{

  		alert("Sudah Terisi"); }
  		 
}

</script>
</form>
</center>
</body>
</html>