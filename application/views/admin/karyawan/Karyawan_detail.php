
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        User Profile
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">User profile</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url();?>asset/dist/img/avatar3.png" alt="User profile picture">
              <h3 class="profile-username text-center">$karyawan->id</h3>
              <p class="text-muted text-center">$karyawan->jabatan</p>


              <a href="#biodata" class="btn btn-primary btn-block" data-toggle="tab"><b>Personal Detail</b></a>
              <a href="#kontak" class="btn btn-primary btn-block" data-toggle="tab"><b>Kontak</b></a>
              <a href="#pengalaman" class="btn btn-primary btn-block" data-toggle="tab"><b>Pengalaman</b></a>
              <a href="#pendidikan" class="btn btn-primary btn-block" data-toggle="tab"><b>Pendidikan</b></a>
              <a href="#keluarga" class="btn btn-primary btn-block" data-toggle="tab"><b>Keluarga</b></a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
         
        </div>
        <!-- TABS --> 
           <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#biodata" data-toggle="tab"> Master Data Karyawan</a></li>
            </ul>
            <div class="tab-content">
              <!-------------------------------------------------------------- BIODATA --------------------------------------------------> 
              <div class="tab-pane" id="biodata">
                <form class="form-horizontal">
                  <div class="form-group">
                    <?php echo form_open($form_action,$atr="form_biodata")?>
                    <label for="id_karyawan" class="col-sm-2 control-label">ID</label>
                    <?php echo form_error('id_karyawan')?>
                    <div class="col-sm-10">
                      <input type="text" name="nama" class="form-control" id="id_karyawan" placeholder="ID">
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="Nama" class="col-sm-2 control-label">Nama</label>
                    <?php echo form_error('nama')?>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="Nama" placeholder="Nama">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="NIK" class="col-sm-2 control-label">NIK</label>
                    <?php echo form_error('nik')?>
                    <div class="col-sm-10">
                      <input type="text" name="nik" class="form-control" id="nik" placeholder="NIK">
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="tgl_lahir" class="col-sm-2 control-label">Tanggal Lahir</label>
                    <?php echo form_error('tgl_lahir')?>
                    <div class="col-sm-10">
                      <input type="text" name="tgl_lahir" class="form-control" id="tgl_lahir" placeholder="tgl_lahir">
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="gender" class="col-sm-2 control-label">Gender</label>
                    <?php echo form_error('gender')?>
                    <div class="col-sm-10">
                     <input type="radio" name="gender" value="L"> Laki Laki
                     <input type="radio" name="gender" value="P"> Perempuan
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="Marital Status" class="col-sm-2 control-label">Marital Status</label>
                   <?php echo form_error('marital_status')?>
                    <div class="col-sm-10">
                      <input type="radio" name="marital-status" value="Single"> Single
                      <input type="radio" name ="marital_status" value="Married"> Married
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="Anak" class="col-sm-2 control-label">Anak</label>
                    <?php echo form_error('anak')?>
                    <div class="col-sm-10">
                     <select name="Anak">
                       <option value="T0">T0</option>
                       <option value="T1">T1</option>
                       <option value="T2">T2</option>
                       <option value="T3">T3</option>
                       <option value="T4"></option>
                       <option value="T>4"></option>
                     </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="tgl_masuk" class="col-sm-2 control-label">Tanggal Masuk</label>
                    <?php echo form_error('tgl_masuk')?>
                    <div class="col-sm-10">
                      <input type="text" name="tgl_masuk" class="form-control" id="tgl_masuk" placeholder="tgl_masuk">
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" id="" class="btn btn-danger">Submit</button>
                    </div>
                  </div>
                  <?php echo form_close()?>
                </form>
              </div>
              <!-- /.tab-pane -->
              
              <!-- KONTAK --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
              <div class="tab-pane" id="kontak">
                <form class="form-horizontal">
                  <div class="form-group">
                    <label for="Alamat" class="col-sm-2 control-label">Alamat</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="alamat" id="Alamat" placeholder="Alamat">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="Email" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="email" id="Email" placeholder="Email">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="Telp" class="col-sm-2 control-label">Telp</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="Telp" placeholder="No - Telp">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="HP" class="col-sm-2 control-label">NO HP</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="HP" placeholder="NO HP">
                    </div>
                  </div> 
                   <button class="btn btn-success btn-sm" id="PlusPendidikan"><i class="fa fa-plus"></i></button>
                   <button class="btn btn-success btn-sm" id="minPendidikan"><i class="fa fa-minus"></i></button>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-danger">Submit</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.tab-pane -->

              <!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------PENGALAMAN-------------------------------------------------------- ----------------------------------------------------------->

             <div class="tab-pane" id="pengalaman">
                <form class="form-horizontal">
                  <div class="form-group">
                    <label for="Perusahaan" class="col-sm-2 control-label">Perusahaan</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name ="perusahaan[]" id="perusahaan" placeholder="perusahaan">
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="Posisi" class="col-sm-2 control-label">Posisi</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name ="posisi[]" id="Posisi" placeholder="Posisi">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="Thn_Masuk" class="col-sm-2 control-label">Tahun Masuk</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name ="thn_masuk[]" id="thn_masuk" placeholder="Tahun Masuk">
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="Thn_Keluar" class="col-sm-2 control-label">Tahun Keluar</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name ="thn_keluar[]" id="thn_keluar" placeholder="Tahun Keluar">
                    </div>
                  </div>
                  <button class="btn btn-success btn-sm" id="plusPengalaman"><i class="fa fa-plus"></i></button>
                  <button class="btn btn-success btn-sm" id="minPengalaman" onclick="$(this).parents('.item').remove()"><i class="fa fa-minus"></i></button>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" id="jumlah-formpengalaman" class="btn btn-danger">Submit</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.tab-pane -->

              <!---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------PENDIDIKAN------------------------------------------------------>
              <div class="tab-pane" id="pendidikan">
                <form class="form-horizontal">
                  <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Skills</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="" placeholder="">
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Skills</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="" placeholder="">
                    </div>
                  </div>
                  <button class="btn btn-success btn-sm" id="PlusPendidikan"><i class="fa fa-plus"></i></button>
                  <button class="btn btn-success btn-sm" id="minPendidikan"><i class="fa fa-minus"></i></button>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" id="jumlah-formPendidikan" class="btn btn-danger">Submit</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.tab-pane -->

              <!-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------KELUARGA------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------>
              
              <div class="tab-pane" id="keluarga">
                <form class="form-horizontal">
                  <div class="form-group">
                    <label for="" class="col-sm-2 control-label">keluarga</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="" placeholder="Skills">
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="" class="col-sm-2 control-label">keluarga</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="" placeholder="Skills">
                    </div>
                  </div>
                  <button class="btn btn-success btn-sm" id="plusKeluarga"><i class="fa fa-plus"></i></button>
                  <button class="btn btn-success btn-sm" id="minKeluarga"><i class="fa fa-minus"></i></button>   
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-danger">Submit</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.tab-pane -->

            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
       
            </div>

      </div><!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.8
    </div>
    <strong>Indo Mega Vision .</strong> All rights
    reserved.
  </footer>
</div>
<!-- ./wrapper -->
<!-- Jquery --->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
 </script>

<!-- add form pengalaman-->
   <script>
 $.(document).ready(function(){
 $('#addPengalaman').createRepeater();
 $('#pengalaman').on('submit',function(event){
  event.prevenDefault();
  $.ajax({
    url:"karyawan/create",
    method:"post",
    data:$($this).serialize(),  
    success:function(data)
    {
      $('#pengalaman')[0].reset();
      $('#addPengalaman').createRepeater();
      $('$success_result').html(data);
    }
  })

 });
 });

  </script>


<!-- ADD New form pendidikan -->
<script>
     <script>
  $(document).ready(function(){ // Ketika halaman sudah diload dan siap
    $("#plusPendidikan").click(function(){ // Ketika tombol Tambah Data Form di klik
      var jumlah = parseInt($("#jumlah-formPendidikan").val()); // Ambil jumlah data form pada textbox jumlah-form
      var nextform = jumlah + 1; // Tambah 1 untuk jumlah form nya
      
      // Kita akan menambahkan form dengan menggunakan append
      // pada sebuah tag div yg kita beri id insert-form
      $("#insert-formPendidikan").append("<b>Data ke " + nextform + " :</b>" +
        "<table>" +
        "<tr>" +
        "<td>Jenjang Pendidikan</td>" +
        "<td><input type='text' name='jenjang[]' required></td>" +
        "</tr>" +
        "<tr>" +
        "<td>institusi</td>" +
        "<td><input type='text' name='institusi[]' required></td>" +
        "</tr>" +
        "<tr>" +
        "<td>jurusan</td>" +
        "<td><input type='text' name='jurusan[]' required></td>" +
        "</tr>" +
        "<tr>" +
        "<td>fakultas</td>" +
        "<td><input type='text' name='fakultas[]' required></td>" +
        "</tr>" +
        "<tr>" +
        "<td>Thn_Masuk</td>" +
        "<td><input type='text' name='thn_masuk[]' required></td>" +
        "</tr>" +
        "<tr>" +
        "<td>Thn_Lulus</td>" +
        "<td><input type='text' name='thn_lulus[]' required></td>" +
        "</tr>" +
        "<tr>" +
        "<td>Nilai</td>" +
        "<td><input type='text' name='nilai[]' required></td>" +
        "</tr>" +
        "</table>" +
        "<br><br>");
      
      $("#jumlah-formPendidikan").val(nextform); // Ubah value textbox jumlah-form dengan variabel nextform
    });
</script>

<!-- ADD New form Keluarga -->
<script>
     <script>
  $(document).ready(function(){ // Ketika halaman sudah diload dan siap
    $("#plusPendidikan").click(function(){ // Ketika tombol Tambah Data Form di klik
      var jumlah = parseInt($("#jumlah-formPendidikan").val()); // Ambil jumlah data form pada textbox jumlah-form
      var nextform = jumlah + 1; // Tambah 1 untuk jumlah form nya
      
      // Kita akan menambahkan form dengan menggunakan append
      // pada sebuah tag div yg kita beri id insert-form
      $("#insert-formPendidikan").append("<b>Data ke " + nextform + " :</b>" +
        "<table>" +
        "<tr>" +
        "<td>Jenjang Pendidikan</td>" +
        "<td><input type='text' name='jenjang[]' required></td>" +
        "</tr>" +
        "<tr>" +
        "<td>institusi</td>" +
        "<td><input type='text' name='institusi[]' required></td>" +
        "</tr>" +
        "<tr>" +
        "<td>jurusan</td>" +
        "<td><input type='text' name='jurusan[]' required></td>" +
        "</tr>" +
        "<tr>" +
        "<td>fakultas</td>" +
        "<td><input type='text' name='fakultas[]' required></td>" +
        "</tr>" +
        "<tr>" +
        "<td>Thn_Masuk</td>" +
        "<td><input type='text' name='thn_masuk[]' required></td>" +
        "</tr>" +
        "<tr>" +
        "<td>Thn_Lulus</td>" +
        "<td><input type='text' name='thn_lulus[]' required></td>" +
        "</tr>" +
        "<tr>" +
        "<td>Nilai</td>" +
        "<td><input type='text' name='nilai[]' required></td>" +
        "</tr>" +
        "</table>" +
        "<br><br>");
      
      $("#jumlah-formPendidikan").val(nextform); // Ubah value textbox jumlah-form dengan variabel nextform
    });
</script>
<!-- ADD New form pendidikan -->
<script>
     <script>
  $(document).ready(function(){ // Ketika halaman sudah diload dan siap
    $("#pluskeluarga").click(function(){ // Ketika tombol Tambah Data Form di klik
      var jumlah = parseInt($("#jumlah-formKeluarga").val()); // Ambil jumlah data form pada textbox jumlah-form
      var nextform = jumlah + 1; // Tambah 1 untuk jumlah form nya
      
      // Kita akan menambahkan form dengan menggunakan append
      // pada sebuah tag div yg kita beri id insert-form
      $("#insert-formKeluarga").append("<b>Data ke " + nextform + " :</b>" +
        "<table>" +
        "<tr>" +
        "<td>Nama</td>" +
        "<td><input type='text' name='nama[]' required></td>" +
        "</tr>" +
        "<tr>" +
        "<td>status</td>" +
        "<td><input type='text' name='status[]' required></td>" +
        "</tr>" +
        "<tr>" +
        "<td>gender</td>" +
        "<td><input type='text' name='gender[]' required></td>" +
        "</tr>" +
        "<tr>" +
        "<td>pendidikan</td>" +
        "<td><input type='text' name='pendidikan[]' required></td>" +
        "</tr>" +
        "<tr>" +
        "<td>alamat</td>" +
 tton> "<td><input type='text' name='alamat[]' required></td>" +
        "</tr>" +
        "<tr>" +
        "<td>Kontak</td>" +
        "<td><input type='text' name='kontak[]' required></td>" +
        "</tr>" +
        "<tr>" +
        "<td>Pekerjaan</td>" +
        "<td><input type='text' name='pekerjaan[]' required></td>" +
        "</tr>" +
        "</table>" +
        "<br><br>");
      
      $("#jumlah-formKeluarga").val(nextform); // Ubah value textbox jumlah-form dengan variabel nextform
    });
</script>



  