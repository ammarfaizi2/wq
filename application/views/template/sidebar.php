<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url('assets/'); ?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata('nama'); ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li  class="<?php if($this->uri->segment(1) == "dashboard" && $this->uri->segment(2) == "" ){ echo 'active'; }?>">
          <a href="<?php echo base_url();?>dashboard">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
           
          </a>
          
        </li>
        <li class="treeview <?php if($this->uri->segment(1) == "turunan"){ echo 'active'; }?>">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Data Turunan</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="<?php if($this->uri->segment(1) == "turunan"  && $this->uri->segment(2) == "" ){ echo 'active'; }?>"><a href="<?php echo base_url();?>turunan"><i class="fa fa-circle-o"></i> Data Turunan</a></li>
            <li  class="<?php if($this->uri->segment(2) == "hirikari_turunan"){ echo 'active'; }?>"><a href="<?php echo base_url();?>turunan/hirikari_turunan"><i class="fa fa-circle-o"></i> Hirikari All Turunan</a></li>
            <li class="<?php if($this->uri->segment(2) == "cari_data"){ echo 'active'; }?>"><a href="<?php echo base_url();?>turunan/cari_data"><i class="fa fa-circle-o"></i> Search Turunan</a></li>
           
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
