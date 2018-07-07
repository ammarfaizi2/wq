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
          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Ganti Password</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form action="<?php echo base_url();?>dashboard/proses_ganti" method="POST">
                <label>Ganti Password</label>
                <input type="text" class="form-control" name="password">
              </form>
            
                   
              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
       

      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
     <!-- Load file process.js -->