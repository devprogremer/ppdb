<?php
 session_start();
include "../koneksi.php";
$sqlm = mysqli_query($koneksi,"SELECT * From tbl_register")

?>

<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>member </title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Studies Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->

	<!-- Custom-Files -->
	<link href="" rel="shortcut icon" type="image/x-icon"/>
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Bootstrap-Core-CSS -->
	<link href="css/css_slider.css" type="text/css" rel="stylesheet" media="all">
	<!-- banner slider -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //Custom-Files -->

	<!-- Web-Fonts -->
	<link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext"
	 rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=latin-ext"
	 rel="stylesheet">
	<!-- //Web-Fonts -->
</head>

<body>
	
	<!-- header -->
	 <!--Navbar-->
	 <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow">
      <div class="container">
		<!-- logo -->
		<h1 class="logo-style-res float-left">
				<a class="navbar-brand" href="index.php">
					<img src="../img/heroo.png" alt="" class="img-fluid " style="width:85px;">
				</a>
			</h1>
			<!-- //logo -->
       <!-- navigation -->
	<div class="main-top">
		<div class="container d-lg-flex">
			
			<li><a href="?page=halaman_home" class="active fa fa-home text-light">Home</a></li>
            </li>
            <li class="nav-item">
			<a href="index.php" class="fa fa-list-alt text-light">Data Pendaftaran</a></li>
            <li class="nav-item">
			<a href="?page=pengumuman_lulus&id=<?= $_SESSION['idregis'] ?>" class="fa fa-bullhorn text-light">Pengumuman</a></li>
            <li class="nav-item">
			<a href="logout.php" class="fa fa-sign-out text-light">Keluar</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!--Akhir navbar-->
			<!-- nav -->
			<div class="nav_w3ls mx-lg-auto">
				<nav>
					</ul>
				</nav>
			</div>
			<!-- //nav -->
		</div>
	</div>
	<!-- //navigation -->
	<!-- //header 2 -->


<?php

include "content.php";
?>

	
	<!-- copyright -->
	<div class="copyright-w3ls py-4">
		<div class="container">
			<div class="row">
				<!-- copyright -->
				<p class="col-lg-8 copy-right-grids text-bl text-lg-left text-center mt-lg-2">© 2023
					<a href="https://w3layouts.com/" target="_blank" class="text-colors">Rynti</a>
				</p>
				<!-- //copyright -->
				<!-- social icons -->
				<div class="col-lg-4 w3social-icons text-lg-right text-center mt-lg-0 mt-3">
					<ul>
						<li>
							<a href="#" class="rounded-circle">
								<span class="fa fa-facebook-f"></span>
							</a>
						</li>
						<li class="px-2">
							<a href="#" class="rounded-circle">
								<span class="fa fa-google-plus"></span>
							</a>
						</li>
						<li>
							<a href="#" class="rounded-circle">
								<span class="fa fa-twitter"></span>
							</a>
						</li>
						<li class="pl-2">
							<a href="#" class="rounded-circle">
								<span class="fa fa-dribbble"></span>
							</a>
						</li>
					</ul>
				</div>
				<!-- //social icons -->
			</div>
		</div>
	</div>
	<!-- //copyright -->
	<!-- move top icon -->
	<a href="#home" class="move-top text-center"></a>
	<!-- //move top icon -->

</body>

</html>