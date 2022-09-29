<?php include ('config.php'); 
session_start();

if(isset($_SESSION['nip'])){
	header('Location:app/home.php');
  }
  
  if (isset($_POST['login'])){
	  $nip = $_POST['nip'];
	  $password = $_POST['password'];
	  
	  
	  // var_dump($password);
	  $query = mysqli_query($koneksi, "SELECT * FROM officer WHERE nip='$nip' AND password='$password'");
	  $data = mysqli_fetch_assoc($query);
  
	  if($data){
		$_SESSION['nip'] = $nip;
		$_SESSION['name'] = $data['name'];
		$_SESSION['addres'] = $data['addres'];
		  echo $data['nip'];
		  header('Location:app/home.php');
		}else if($nip == '' || $password ==''){
		  header('Location:index.php?error=2');
	  } 
	  else {
		  header('Location:index.php?error=1');
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
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="asset/images/library.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" method="POST">
					<span class="login100-form-title">
						Admin Perpustakaan
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Isi dulu nip">
						<input class="input100" type="text" placeholder="nip" name="nip">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password diisi dulu">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="login">
							Login
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Lupa
						</span>
						<a class="txt2" href="#">
							Username / Password?
						</a>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="index2.php">
							Bukan Admin ? Login disini
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
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="asset/js/main.js"></script>
	<!-- SCRIPT SWEETALERT -->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script>

</body>
<?php
if(isset ($_GET['error'])){
  $x = ($_GET['error']);
  if($x==1){
    echo "
    <script>var Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });
    Toast.fire({
      icon: 'error',
      title: 'Passwordmu Salah'
    })</script>";
  } 
  else if($x==2){
    echo "
    <script>var Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });
    Toast.fire({
      icon: 'warning',
      title: 'Silahkan diisi Username dan Passwordnya dulu'
    })</script>";
  }
  else {
    echo '';
  }
}
?>
</html>