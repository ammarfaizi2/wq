

                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Dashboard
                        <small>Version 2.0</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Dashboard</li>
                    </ol>
                </section>
                <section class="content">
                  <div class="row">
                    <div class="col-xs-12">
                      <div class="box box-warning">
                        <div class="box-header with-border">
                          <h3 class="box-title">General Elements</h3>
                        </div>
            <!-- /.box-header -->
            <div class="box-body">
               <?=form_open_multipart('turunan/proses_input')?>  
               <?php 

               $query = $this->db->query("SELECT * FROM tb_turunan");
               $data = $query->result();
$total = $query->num_rows();
 if($total>0){
  ?>
   <div class="form-group">
                  <label>Anak Dari</label>
                 <select class="form-control select2" name="parent" style="width: 100%;" required="">
                  <option selected="selected">Select Anak Dari</option>
                  <?php 
                  foreach ($data as $value) {?>
                    <option value="<?php echo $value->id;?>"><?php echo $value->nama;?></option> 
               <?php   } ?>
                </select>
                </div>
<?php }


               ?>              <!-- text input -->
               
                <div class="form-group">
                  <label>Nama Lengkap</label>
                  <input type="text" name="nama_lengkap" class="form-control" placeholder="Nama Lengkap...">
                </div>
                <div class="form-group">
                  <label>Nama Panggilan</label>
                  <input type="text" name="nama_panggilan" class="form-control" placeholder="Nama Panggilan ...">
                </div>
                <div class="form-group">
                  <label>Nama Istri</label>
                  <input type="text" name="nama_istri" class="form-control" placeholder="Nama Istri ...">
                </div>
                

                <!-- textarea -->
                <div class="form-group">
                  <label>Alamat</label>
                  <textarea class="form-control" rows="3" name="alamat" placeholder="Alamat ..."></textarea>
                </div>
                <div class="form-group">
                  <label>Kota</label>
                  <input type="text" name="kota" class="form-control" placeholder="Kota ...">
                </div>
                <div class="form-group">
                  <label>No Telp</label>
                  <input type="text" name="no_telp" class="form-control" placeholder="No Telepon ...">
                </div>
                <div class="form-group">
                  <label>No HP</label>
                  <input type="text" name="no_hp" class="form-control" placeholder="No HP ...">
                </div>
                <div class="form-group">
                  <label>Foto</label>
                  <input type="file" name="photo" class="form-control" >
                </div>
                

              

              
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
          </div>
        </div>
        </form>
      </div>
    </section>