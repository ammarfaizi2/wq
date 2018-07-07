    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Turunan
        <small>All tables</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Turunan</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
       
        <div class="col-xs-12">
          
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Turunan</h3> <a href="<?php echo base_url();?>turunan/tambah_data"  class="btn bg-green btn-flat margin"><i class="fa fa-plus"></i> Tambah Data</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nama Lengkap</th>
                  <th>Nama istri</th>
                  <th>Alamat</th>
                  <th>Anak Dari</th>
                  <th>Turunan Ke</th>
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>

                  <?php 
function chek($id) {
                            $CI = get_instance();
                            $result = $CI->db->get_where('tb_turunan', array('id' => $id))->row_array();
                            return $result['nama'];
                        }
        
                       
                  foreach ($data as $value) {
                   $anak_dari = $value->parent == 0 ? 'Keturunan Pertama' : chek($value->parent); ?>
                    
              
                <tr>
                  <td><?php echo $value->nama;?></td>
                  <td><?php echo $value->nama_istri;?></td>
                  <td><?php echo $value->alamat;?></td>
                  <td><?php echo $anak_dari;?></td>
                  <td><?php echo $value->turunan_ke;?></td>
                  <td> <a href="<?php echo base_url();?>turunan/edit_data/<?php echo $value->id;?>"  class="btn bg-orange btn-flat margin"><i class="fa fa-edit"></i>  </a> <a href="<?php echo base_url();?>turunan/hapus_data/<?php echo $value->id;?>" id
                    class="btn bg-red btn-flat margin" onclick="javascript: return confirm('Anda yakin hapus ?')"><i class="fa fa-trash"></i> </a></td>
                </tr>
                <?php    }
                  ?>
                </tbody>
              
              </table>
       
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->