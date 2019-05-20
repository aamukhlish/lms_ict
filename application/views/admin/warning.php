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
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Severity
        <small>Warning</small>
      </h1>
    </section>
    
    <section class="content">
    </section>
    
  </div>
  <!-- /.content-wrapper -->

  <?php $this->load->view('admin/footer') ?>
</body>
</html>