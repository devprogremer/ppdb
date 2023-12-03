<script> </script>
   <?php 
       include "koneksi.php";
       include "tglindo.php";
    ?>
    <tr  align="center">
      <table style="width:98%" border="0">
      <th><img src="../img/heroo.png" width="150px" height="150px" align="left"> </th>
      <td align="center" colspan="3"><h4>PEMERINTAH KOTA CIREBON<br>DINAS PENDIDIKAN DAN KEBUDAYAAN<br> SMK BINA CENDEKIA CIREBON<br>
            </h6>Jl. KH Wahid Hasyim Desa. Mertapada Wetan Kecamatan. Astanajapura Kabupaten. Cirebon Jawa Barat 45181
            </td>
                <th><img width="150px" height="150px" src="../img/header/logo.jpg" align="right"></th>
      </table>
              <hr>
              </br>
              <center><h3 >Kartu Bukti Pendaftaran</h3></center>
                
    <table class="table-bordered table table-striped " border="0" cellspacing="0"cellpadding="8" align="center" width="60%">
         <?php
            $id = $_GET['id'];  
            $sql= mysqli_query($koneksi,"SELECT * From tbl_pendaftar  WHERE id_pendaftaran='$id'" );
            $no=1;
                    while ($data = mysqli_fetch_array($sql)){	
         ?>
          <tr>
            <td>Nomor Pendaftaran</td>
            <td>:</td>
            <td><?= $data['no_pendaftaran'];?></td>
            <td rowspan="7" align="right"><img src="images/<?= $data['pas_foto'];?>" width="100px" height="130px"  alt=""></td>
          </tr>

          <tr>
            <td>Nama Pendaftar</td>
            <td>:</td>
            <td><?= $data['nama'];?></td>
          </tr>

          <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td><?= TanggalIndo($data['tgl_lahir']);?></td>
          </tr>

          <tr>
            <td>Asal Sekolah</td>
            <td>:</td>
            <td><?= $data['asal_sekolah'];?></td>
          </tr>

          <tr>
            <td>Alamat Siswa</td>
            <td>:</td>
            <td><?= $data['alamat'];?></td>
          </tr>

          <tr>
            <td>No Telp</td>
            <td>:</td>
            <td><?= $data['no_tlp'];?></td>
          </tr>

          <tr>
            <td>Dinyatakan</td>
            <td>:</td>
            <td><?= $data['konfirmasi'];?></td>
          </tr>   
    </table>
            <table style="width: 60%" align="center" > 
              <!-- Tr atau TABLE ROW, untuk membuat baris di dalam kolom -->
              


                <tr align="center" >
                  <!-- td atau TABEL DATA, untuk membuat kolom table -->
                
                </br>
                    <td rowspan="4"><b></br>Pendaftar </b>
                </br>
                </br>
                </br> 
                </br>
                <hr style="width: 60%" />
                <p><?= $data['nama'];?></p>
                
                <?php } ?>
                </td>
                  <td width="200px"></td>
                    <td width="200px"></td>
                  
                    <td rowspan="3" align="center">Cirebon, <?php echo date('d-M-Y');?> </br><br> <b>Administrasi</b>
                </br>
                </br>
                </br> 
                </br>
                <hr style="width: 60%" />
                ........................
                  </td>
                </tr>
            </body>


