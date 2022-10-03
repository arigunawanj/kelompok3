<?php include ('config.php'); 
session_start();

if(isset($_SESSION['nis'])){
	header('Location:app/home_siswa.php?page=utama');
  }
  
  if (isset($_POST['login2'])){
	  $nis = $_POST['nis'];
	  
	  
	  // var_dump($password);
	  $query = mysqli_query($db, "SELECT * FROM student WHERE nis='$nis'");
	  $data = mysqli_fetch_assoc($query);
  
	  if($data){
		$_SESSION['nis'] = $nis;
		$_SESSION['nama'] = $data['nama'];
		$_SESSION['alamat'] = $data['alamat'];
		  echo $data['nis'];
		  header('Location:app/home_siswa.php?page=utama');
		}else if($username == ''){
		  header('Location:index2.php?error=2');
	  } 
	  else {
		  header('Location:index2.php?error=1');
	  }
  }
  
  
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Perpustakaan Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="asset/images/icons/library.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="asset/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="asset/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="asset/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="asset/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="asset/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="asset/css/util.css">
	<link rel="stylesheet" type="text/css" href="asset/css/main.css">
<!--===============================================================================================-->
	<link rel="stylesheet" href="asset/css/style.css">
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="asset/images/register.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" method="POST">
					<span class="login100-form-title">
						Login Siswa
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Isi dulu NISnya">
						<input class="input100" type="text" placeholder="NIS" name="nis">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					
					

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="login2">
							Login
						</button>
					</div>

				

					<div class="text-center p-t-136">
						<a class="txt2" href="index.php">
							Bukan Siswa ? Login disini
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="asset/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="asset/vendor/bootstrap/js/popper.js"></script>
	<script src="asset/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="asset/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="asset/vendor/tilt/tilt.jquery.min.js"></script>
	<!-- SCRIPT SWEETALERT -->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="asset/js/main.js"></script>
	<script>
	document.getElementById('showPassword').onclick = function() {
    if ( this.checked ) {
       document.getElementById('password').type = "text";
       document.getElementById('passwordc').type = "text";
    } else {
       document.getElementById('password').type = "password";
       document.getElementById('passwordc').type = "password";
    }
};
</script>
</body>
</html>