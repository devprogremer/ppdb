<!DOCTYPE html>
<html>
<head>
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

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>



<body class="wide comments example dt-example-bootstrap">
	<a name="top" id="top"></a>
	<div class="fw-background">
		<div></div>
	</div>
	<div class="fw-container">
		<div class="fw-header">
			<div class="nav-search">
				<div class="nav-item i-user">
					<div class="account"></div>
				</div>
			</div>
		</div>
		<div class="fw-body">
			<div class="content">
			<?php
				include "koneksi.php";
				$sqlt = mysqli_query($koneksi, "select * from tbl_pendaftar");
				$no=1;
			?>
			<tr>
				<h3>Data Siswa  Lulus<br><br></h3> 
			</tr>
				<table  id="table_id"  class="table hover multiple-select-row data-table-export nowrap">
					<thead>
						<tr>
						<th>No</th>
						<th>NISN </th>
						<th>Nama </th>
						<th>Tanggal Lahir</th>
						<th>Asal Sekolah</th>
						<th>Nama Orang Tua</th>
						<th>Pas Foto</th>
						</tr>
					</thead>

					<?php
					include "koneksi.php";
						$sql = mysqli_query($koneksi,"SELECT * FROM tbl_pendaftar WHERE konfirmasi='LULUS' ORDER BY id_pendaftaran");
						$no=1;
					while($dat = mysqli_fetch_array($sql)){

				?>
				<tr>
					<td><?php echo $no++ ?></td>
					<td><?php echo $dat['NISN']; ?></td>
					<td><?php echo $dat['nama']; ?></td>
					<td><?php echo $dat['tgl_lahir']; ?></td>
					<td><?php echo $dat['asal_sekolah']; ?></td>
					<td><?php echo $dat['nm_ayah']; ?></td>
					<td><img src="../../member/images/<?php echo $dat['pas_foto'] ;?>" alt="tidak muncul " width="50px"></td>
				</tr>

				<?php } ?>
		</table>
	</body>
	<!-- js -->
<script src="../vendors/scripts/core.js"></script>
	<script src="../vendors/scripts/script.min.js"></script>
	<script src="../vendors/scripts/process.js"></script>
	<script src="../vendors/scripts/layout-settings.js"></script>
	<script src="../vendors/src/plugins/datatables/js/jquery.dataTables.min.js"></script>
	<script src="../vendors/src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
	<script src="../vendors/src/plugins/datatables/js/dataTables.responsive.min.js"></script>
	<script src="../vendors/src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
	<!-- buttons for Export datatable -->
	<script src="../vendors/src/plugins/datatables/js/dataTables.buttons.min.js"></script>
	<script src="../vendors/src/plugins/datatables/js/buttons.bootstrap4.min.js"></script>
	<script src="../vendors/src/plugins/datatables/js/buttons.print.min.js"></script>
	<script src="../vendors/src/plugins/datatables/js/buttons.html5.min.js"></script>
	<script src="../vendors/src/plugins/datatables/js/buttons.flash.min.js"></script>
	<script src="../vendors/src/plugins/datatables/js/pdfmake.min.js"></script>
	<script src="../vendors/src/plugins/datatables/js/vfs_fonts.js"></script>
	<!-- Datatable Setting js -->
	<script src="../vendors/scripts/datatable-setting.js"></script></body>
</html>