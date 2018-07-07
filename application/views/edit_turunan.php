

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
               <?=form_open_multipart('turunan/proses_update')?>  
               <?php 

               $query = $this->db->query("SELECT * FROM tb_turunan");
               $data = $query->result();
$total = $query->num_rows();
 if($total>1){
  ?>
   <div class="form-group">
                  <label>Anak Dari</label>
                 <select class="form-control select2" name="anak_dari" style="width: 100%;">
                  <option selected="selected">Select Anak Dari</option>
                  <?php
                                    foreach ($data as $k) {
                                        echo "<option value='$k->id'";
                                        echo $result->parent == $k->id ? 'selected' : '';
                                        echo">$k->nama</option>";
                                    }
                                    ?>
                 
                </select>
                </div>
<?php }


               ?>    
               <input type="text" name="id" value="<?php echo $result->id;?>" hidden>          <!-- text input -->
               
                <div class="form-group">
                  <label>Nama Lengkap</label>
                  <input type="text" name="nama_lengkap" class="form-control" placeholder="Nama Lengkap..." value="<?php echo $result->nama;?>">
                </div>
                <div class="form-group">
                  <label>Nama Panggilan</label>
                  <input type="text" name="nama_panggilan" class="form-control" placeholder="Nama Panggilan ..." value="<?php echo $result->panggilan;?>">
                </div>
                <div class="form-group">
                  <label>Nama Istri</label>
                  <input type="text" name="nama_istri" class="form-control" placeholder="Nama Istri ..." value="<?php echo $result->nama_istri;?>">
                </div>
                

                <!-- textarea -->
                <div class="form-group">
                  <label>Alamat</label>
                  <textarea class="form-control" rows="3" name="alamat" placeholder="Alamat ..."><?php echo $result->alamat;?></textarea>
                </div>
                <div class="form-group">
                  <label>Kota</label>
                  <input type="text" name="kota" class="form-control" placeholder="Kota ..." value="<?php echo $result->kota;?>">
                </div>
                <div class="form-group">
                  <label>No Telp</label>
                  <input type="text" name="no_telp" class="form-control" placeholder="No Telepon ..." value="<?php echo $result->no_telp;?>">
                </div>
                <div class="form-group">
                  <label>No HP</label>
                  <input type="text" name="no_hp" class="form-control" placeholder="No HP ..." value="<?php echo $result->no_hp;?>">
                </div>
                <div class="form-group">

                  <img src="<?php echo base_url();?>/assets/images/<?php echo $result->foto;?>">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="remove_photo" value="<?php echo $result->foto;?>">
                      Hapus Photo
                    </label>
                  </div>
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