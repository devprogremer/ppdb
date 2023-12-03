<?php 
    session_start();
?>
<?php

    include "koneksi.php";
?>
	

<!DOCTYPE html>
<html>
<head>
	<title>Halaman admin</title>
</head>
<body>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="../vendors/images/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="../vendors/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="../vendors/images/favicon-16x16.png">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="../vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="../vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="../vendors/src/plugins/datatables/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="../vendors/src/plugins/datatables/css/responsive.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="../vendors/styles/style.css">
    <link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css"/>
    
	<link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css"/>
<script type="text/javascript" src="DataTables/datatables.min.js"></script>
<script>
$(document).ready( function () {
    $('#table_id').DataTable();
} );



	</script>
</head>
<body>
	
	<!-- Header Admin -->
	<div class="header">
	<div class="header-left">
	<div class="menu-icon dw dw-menu"></div>
	<div class="search-toggle-icon dw dw-search2" data-toggle="header_search"></div>
	<div class="header-search">
		<form>
		<form>
	</div>
	</div>
	<div class="header-right">
	<div class="dashboard-setting user-notification">
	<div class="dropdown">
		<a class="dropdown-toggle no-arrow" href="javascript:;" data-toggle="right-sidebar">
		<i class="dw dw-settings2"></i>
	</a>
	</div>
	</div>

	<!-- Pesan -->
	<div class="user-notification">
	<div class="dropdown">
		<a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown"></a>
					<div class="dropdown-menu dropdown-menu-right">
						<div class="notification-list mx-h-350 customscroll">
							
						</div>
					</div>
				</div>
			</div>
			<div class="user-info-dropdown">
				<div class="dropdown">
					<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
						<span class="user-icon">
							<img src="../vendors/images/tyy.jpg" alt="">
						</span>
						<span class="user-name">Riyanti</span>
					</a>
					<br>
					<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
						<a class="dropdown-item" href="profile.html"><i class="dw dw-settings2"></i> Setting</a>
						<a class="dropdown-item" href="logout.php"><i class="dw dw-logout"></i> Log Out</a>
					</div>
				</div>
			</div>
			<div class="github-link">
				<a href="https://github.com/riyantiii" target="_blank"><img src="../vendors/images/github.svg" alt=""></a>
			</div>
		</div>
	</div>

<!-- Pengaturan Tampilan Header Admin -->
	<div class="right-sidebar">
		<div class="sidebar-title">
			<h3 class="weight-600 font-16 text-blue">
			Pengaturan
				<span class="btn-block font-weight-400 font-12">User Interface Settings</span>
			</h3>
			<div class="close-sidebar" data-toggle="right-sidebar-close">
				<i class="icon-copy ion-close-round"></i>
			</div>
		</div>
		<div class="right-sidebar-body customscroll">
			<div class="right-sidebar-body-content">
				<h4 class="weight-600 font-18 pb-10">Header Background</h4>
				<div class="sidebar-btn-group pb-30 mb-10">
					<a href="javascript:void(0);" class="btn btn-outline-primary header-white active">White</a>
					<a href="javascript:void(0);" class="btn btn-outline-primary header-dark">Dark</a>
				</div>

				<h4 class="weight-600 font-18 pb-10">Sidebar Background</h4>
				<div class="sidebar-btn-group pb-30 mb-10">
					<a href="javascript:void(0);" class="btn btn-outline-primary sidebar-light ">White</a>
					<a href="javascript:void(0);" class="btn btn-outline-primary sidebar-dark active">Dark</a>
				</div>

				<h4 class="weight-600 font-18 pb-10">Menu Dropdown Icon</h4>
				<div class="sidebar-radio-group pb-10 mb-10">
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebaricon-1" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-1" checked="">
						<label class="custom-control-label" for="sidebaricon-1"><i class="fa fa-angle-down"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebaricon-2" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-2">
						<label class="custom-control-label" for="sidebaricon-2"><i class="ion-plus-round"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebaricon-3" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-3">
						<label class="custom-control-label" for="sidebaricon-3"><i class="fa fa-angle-double-right"></i></label>
					</div>
				</div>

			
				<div class="reset-options pt-30 text-center">
					<button class="btn btn-danger" id="reset-settings">Reset Settings</button>
				</div>
			</div>
		</div>
	</div>
<!-- end Pengaturan Tampilan Header Admin -->

<form class="navbar-form navbar-right">
              <input type="text" class="form-control" value="Search..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search...';}">
            </form>
	<div class="left-side-bar">
		<div class="brand-logo">
			<a href="index.php">
			<p <li class="fa fa-user"> SMK BC </p>
			</a>
			<div class="close-sidebar" data-toggle="left-sidebar-close">
				<i class="ion-close-round"></i>
			</div>
		</div>
		<div class="menu-block customscroll">
			<div class="sidebar-menu">
				<ul id="accordion-menu">
                <li>
						<a href="?page=home" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-house"></span><span class="mtext">Dashboard</span>
						</a>
						<li>
						<?php 
                                if($_SESSION['level']== 'admin'){

                            ?>
					<li>
						<a href="?page=data_admin" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-user"></span><span class="mtext">Data Petugas</span>
						</a>
						<li>
						<a href="?page=data_member" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-invoice"></span><span class="mtext">Data Member</span>
						</a>


					<li>
						<a href="?page=data_pendaftar" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-user"></span><span class="mtext">Data Pendaftar</span>
						</a>
					</li>
					<li>
						<a href="?page=data_lulus" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-books"></span><span class="mtext">Data Siswa Yang Lulus</span>
						</a>
					</li>
					<li>
						<a href="?page=data_t_lulus" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-books"></span><span class="mtext"> Siswa Yang Tidak Lulus</span>
						</a>
					</li>

                     <!-- /.nav-second-level -->
                     <?php } ?>
                             <?php 
                               //admin di ambil dari database         //Pimpinan di ambil dari database
                                if($_SESSION['level'] == 'admin' or $_SESSION['level']=='operator'){

                             ?>

						<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-book"></span><span class="mtext">Laporan</span>
						</a>
						<ul class="submenu">
						<li>
						<a href="?page=laporan_perpriode" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-books"></span><span class="mtext">Siswa Di Terima</span>
						</a>
					</li>

                    <li>
                    <li>
						<a href="?page=laporan_tidak_lulus" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-books"></span><span class="mtext">Siswa Di Tolak</span>
						</a>
					</li>

						</ul>
					</li>

                        
					 <!-- /.nav-second-level -->
                     </li>
                        <?php } ?>
                        
                        <li>
                              <li>
                              </nav>
      
							
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="main-container">
		
			<div class="card-box pd-40 height-200-p mb-90">
					
			</div>
			<div class="row">

					  <!-- /.navbar-static-side -->
                      </nav>
        <div id="page-wrapper">
        <div class="graphs">
    <?php
            include "konten.php"
    ?>
    <div class="copy_layout">
		<br>
            <p><b><i><center>Copyright © 2023 SMK BINA CENDEKIA | Design by <a href="" target="_blank">Riyanti</a></a>
             </p>
    </div>
        </div>
            <div class="clearfix"> </div>
        </div>
		</div>
       </div>
      <!-- /#page-wrapper -->   
	
        
	<!-- js -->
	<script src="../vendors/scripts/core.js"></script>
	<script src="../vendors/scripts/script.min.js"></script>
	<script src="../vendors/scripts/process.js"></script>
	<script src="../vendors/scripts/layout-settings.js"></script>
	<script src="../vendors/src/plugins/apexcharts/apexcharts.min.js"></script>
	<script src="../vendors/src/plugins/datatables/js/jquery.dataTables.min.js"></script>
	<script src="../vendors/src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
	<script src="../vendors/src/plugins/datatables/js/dataTables.responsive.min.js"></script>
	<script src="../vendors/src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
	<script src="../vendors/scripts/dashboard.js"></script>

	 <!-- Bootstrap Core JavaScript -->
	 <script src="js/bootstrap.min.js"></script>
</body>
</html>