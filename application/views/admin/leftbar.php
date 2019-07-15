<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo base_url('assets/template/back/dist') ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo $this->session->userdata['fullname']?></p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MAIN MENU</li>
      <li>
        <a href="<?php echo base_url('home')?>">
          <i class="fa fa-th"></i> <span>System Overview</span>
        </a>
      </li>

      <li class="treeview">
        <a href="#">
          <i class="fa fa-warning"></i>
          <span>Severity</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo base_url('sevEmergency');?>"><i class="fa fa-circle-o text-black"></i> Emergency</a></li>
          <li><a href="<?php echo base_url('sevAlert');?>"><i class="fa fa-circle-o text-red"></i> Alert</a></li>
          <li><a href="<?php echo base_url('sevCritical');?>"><i class="fa fa-circle-o text-orange"></i> Critical</a></li>
          <li><a href="<?php echo base_url('sevError');?>"><i class="fa fa-circle-o text-jingga"></i> Error</a></li>
          <li><a href="<?php echo base_url('sevWarning');?>"><i class="fa fa-circle-o text-yellow"></i> Warning</a></li>
          <li><a href="<?php echo base_url('sevNotif');?>"><i class="fa fa-circle-o text-green"></i> Notification</a></li>
          <li><a href="<?php echo base_url('sevInfo');?>"><i class="fa fa-circle-o text-blue"></i> Information</a></li>
         <!--  <li><a href="<?php echo base_url('sevDebug');?>"><i class="fa fa-circle-o text-aqua"></i> Debug</a></li> -->
        </ul>
      </li>
      <li>
        <a href="<?php echo base_url('blok')?>">
          <i class="fa fa-th"></i> <span>Unit</span>
        </a>
      </li>
      <li>
        <a href="<?php echo base_url('host')?>">
          <i class="fa fa-home"></i> <span>Device</span>
        </a>
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
