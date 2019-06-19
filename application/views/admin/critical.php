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
        <small>Critical</small>
      </h1>
    </section>
    
    <section class="content">
      <iframe src="http://10.37.19.174:8080/app/kibana#/dashboard/bdd38200-8ce7-11e9-a25b-dba521888637?embed=true&_g=()" height="600" width="100%"></iframe>
    </section>
    
  </div>
  <!-- /.content-wrapper -->

  <?php $this->load->view('admin/footer') ?>
</body>
</html>