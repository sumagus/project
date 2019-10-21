

 <!-- TABLE -->
     <div class="row">
        <div class="col-xs-12">
       <div class="box">
            <!-- /.box-header -->
            <div class="row">
            <div class="box-body form">
            <!--  <?php echo form_open('admin/absen/getAbsenPer',array('method'=>'POST'))?>
            <label for ="Nama">Nama</label>
              <?php echo form_error('Name')?>
              <select name ="name", class="form-control" value="<?=set_select('name')?>" >
                <option value="">- Pilih -</option>
             <?php foreach ($pilihUser as $tampil) :?>
              <option value="<?php echo $tampil->name?>"><?php echo $tampil->name?></option>
              <?php endforeach?>
              </select>-->

               <div class="form-group">
                    <label for="start" class="col-sm-2 control-label">Dari</label>
                    <div class="col-sm-10">
                         <input type="date"  name="start" class="form-control" id="start" >
                          <?=form_error('start')?>
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="end" class="col-sm-2 control-label">Sampai</label>
                    <div class="col-sm-10">
                         <input type="date"  name="end" class= "form-control" id="end" >
                          <?=form_error('end')?>     
                    </div> -->
                      <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" id="filter" class="btn btn-danger">Submit</button>
                    </div>
                  </div>
                     <?php echo form_close()?>
                  </div>
            </div>
            <!-- -->
            </div><!-- box body-->

           
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<!--<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
<script type='text/javascript' src='//code.jquery.com/jquery-1.8.3.js'></script>
<script type='text/javascript' src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.min.js"></script>
   


              
            