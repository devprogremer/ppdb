<?php
include "koneksi.php";
$sqlp = mysqli_query($koneksi,"SELECT * FROM tbl_pendaftar");
$jmlm = 0;
while($rm = mysqli_fetch_array($sqlp)){
  $jmlm++;
}
$sql = mysqli_query($koneksi,"SELECT * FROM tbl_pendaftar WHERE konfirmasi='LULUS'");
$jmll = 0;
while($rm = mysqli_fetch_array($sql)){
  $jmll++;
}
$sql = mysqli_query($koneksi,"SELECT * FROM tbl_pendaftar WHERE konfirmasi='TIDAK LULUS'");
$jmlt = 0;
while($rm = mysqli_fetch_array($sql)){
  $jmlt++;

}
$sql = mysqli_query($koneksi,"SELECT * FROM tbl_admin");
$jmla = 0;
while($rm = mysqli_fetch_array($sql)){
  $jmla++;
}
$sql = mysqli_query($koneksi,"SELECT * FROM tbl_register");
$jmlr = 0;
while($rm = mysqli_fetch_array($sql)){
  $jmlr++;
}
?>
           	<div class="pd-ltr-10">
			<div class="card-box pd-20 height-100-p mb-30">
				<div class="row align-items-center">
					<div class="col-md-4">
						<img src="../vendors/images/banner-img.png" alt="">
					</div>
					<div class="col-md-8">
						<h4 class="font-20 weight-500 mb-10 text-capitalize">
							Selamat Datang <div class="weight-600 font-30 text-blue">Riyanti!</div>
						</h4>
					<p class="font-18 max-width-600">Anda login sebagai admin, anda memiliki hak penuh terhadap sistem.</p>
					</div>
				</div>
			</div>
			

 <div class="row">
  <div class="col-sm-6 mb-3 mb-sm-0">
    <div class="card">
      <div class="card-body btn btn-warning">
	  <div class="social-icon">
        <i class="fa fa-users text-dark icon-xlg pull-right"></i>
         </div>
	  	<h2 class="counttype text-dark">Jumlah Pendaftar</h2>
		  <span class="percent">5% increase from last week</span>
		<h3 class="number_counter bold count text-dark start_timer counted"><?php echo "$jmlm" ?></h3>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body btn btn-primary">
	  <div class="social-icon">
        <i class="fa fa-users text-light icon-xlg pull-right"></i>
        </div>
		<h2 class="counttype text-light">Siswa DI Terima</h2>
		<span class="percent">2% increase from last week</span>
		<h3 class="number_counter bold count text-light start_timer counted"><?php echo "$jmll" ?></h3>
      </div>
    </div>
  </div>
</div>
<br>
<div class="row">
  <div class="col-sm-6 mb-3 mb-sm-0">
    <div class="card">
      <div class="card-body btn btn-info">
	  <div class="social-icon">
        <i class="fa fa-users text-dark icon-xlg pull-right"></i>
         </div>
	  	<h2 class="counttype text-dark">Siswa Di Tolak</h2>
		  <span class="percent">2% increase from last week</span>
		  <h3 class="number_counter bold count text-light start_timer counted"><?php echo "$jmlt" ?></h3>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body btn btn-danger">
	  <div class="social-icon">
        <i class="fa fa-users text-light icon-xlg pull-right"></i>
        </div>
		<h2 class="counttype text-light">Data Petugas</h2>
		<span class="percent">7% increase from last week</span>
		<h3 class="number_counter bold count text-light start_timer counted"><?php echo "$jmla" ?></h3>
      </div>
    </div>
  </div>
</div>
<br>
<div class="row">
  <div class="col-sm-6 mb-3 mb-sm-0">
    <div class="card">
      <div class="card-body btn btn-warning">
	  <div class="social-icon">
        <i class="fa fa-users text-dark icon-xlg pull-right"></i>
         </div>
	  	<h2 class="counttype text-dark">Jumlah Member</h2>
		  <span class="percent">5% increase from last week</span>
		<h3 class="number_counter bold count text-dark start_timer counted"><?php echo "$jmlr" ?></h3>
      </div>
    </div>
  </div>