<html>
<head>
<script type = "text/javascript" src="jscript/jquery.1.js"></script>
<script type="text/javascript">
	
</script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
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
  $pass =$_SESSION['pos']['pass'];
  $confirmpassword =$_SESSION['pos']['confirmpass']; 
else:
  $npm   ='';
  $nama   ='';
  $tgl_lahir ='';
  $pass ='';
  $confirmpassword ='';
endif;
?>


<?php
include "koneksidb.php";
$query = mysqli_query($connection,"SELECT * FROM tbl_biodata ORDER BY id asc");
?>

<title>TABEL BIODATA</title>


<center>
<h1>TABEL BIODATA</h1>
<table border="1" class="table table-striped table-dark" >
  <thead>
<tr>
<td>NO</td>
<td>NPM</td>
<td>NAMA</td>
<td>TGL LAHIR</td>
<td>PASSWORD</td>
<td>ACTION</td>
</tr>
</thead>


<?php if(mysqli_num_rows($query)>0){ ?>
        <?php
            $no = 1;
            while($data = mysqli_fetch_array($query)){
        ?>
        <tbody>
        <tr>
            <td><?php echo $no ?></td>
            <td><?php echo $data["npm"];?></td>
            <td><?php echo $data["nama"];?></td>
            <td><?php echo $data["tgl_lahir"];?></td>
            <td><?php echo $data["password"];?></td>
            <td>
                <a href="delete.php?id=<?php echo $data['id'];?>">Delete</a> 
            </td>
        </tr>
      </tbody>

      <?php $no++; } ?>
        <?php } ?>

</table>



<br>
<form method="post" name="frm" action="tambah.php">
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
<td><input type="text" name="tgl_lahir" value="<?php echo $tgl_lahir; ?>" id = "lahir"/></td>
</tr>

<tr>
<td>PASSWORD :</td>
<td><input type="password" name = "password" value="<?php echo $pass; ?>" id = "pass"/></td>
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


</script>
</form>
</center>
</body>
</html>