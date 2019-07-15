<?php if(!$this->session->userdata['login']){redirect(base_url('login'));} ?>
<!DOCTYPE html>
<html>
  <?php $this->load->view('admin/head') ?>
<body class="hold-transition skin-purple sidebar-mini">
<div class="wrapper">

  <?php $this->load->view('admin/header') ?>
  <!-- Left side column. contains the logo and sidebar -->
  <?php $this->load->view('admin/leftbar') ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <iframe class="respon-iframe"  src="http://10.37.19.174:8080/app/kibana#/dashboard/2ee44050-8ce9-11e9-a25b-dba521888637?embed=true&_g=(refreshInterval%3A(pause%3A!f%2Cvalue%3A60000)%2Ctime%3A(from%3Anow-24h%2Cmode%3Aquick%2Cto%3Anow))"></iframe>
  </div>
  <!-- /.content-wrapper -->

  <?php $this->load->view('admin/footer') ?>
</body>
</html>
