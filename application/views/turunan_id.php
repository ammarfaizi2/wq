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
              <h3 class="box-title">Semua Data Turunan</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="chart" id="OrganiseChart1"></div>
    <script>
      var config = {
        container: "#OrganiseChart1",
        rootOrientation:  'NORTH', // NORTH || EAST || WEST || SOUTH
        // levelSeparation: 30,
        siblingSeparation:   20,
        subTeeSeparation:    60,
        scrollbar: "fancy",
        
        connectors: {
            type: 'step'
        },
        node: {
            HTMLclass: 'nodeExample1'
        }
    },
     <?php foreach ($data as $value) {?>
      
  
    <?php echo "T".$value->id;?> = {
        <?php if($value->anak_dari==$id){?>
            
          <?php }else {?>
             parent: <?php echo "T".$value->parent;?>,
        <?php  }?>
        text: {
        
          
            name: "<?php  echo $value->nama; ?>",
            title: "<?php  echo $value->panggilan; ?>r",
            contact: "<?php  echo $value->no_hp; ?>",
        },
        link: {
            href: "<?php echo base_url(); echo"turunan/search_by_id/"; echo $value->anak_dari; ?>"
        },
        image: "<?php echo base_url('assets'); echo"/images/"; echo $value->foto; ?>",
        HTMLid: "<?php echo "T".$value->id;?>"
    },
<?php  } ?>
    

    ALTERNATIVE = [
        config,
       <?php foreach ($data as $value) {?>
<?php echo "T".$value->id.",";?>
        <?php  } ?>
    ];
   
    </script>
    
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
  
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->