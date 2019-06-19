<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//nama controler depan harus kapital
class Admin extends CI_Controller{
  //__construct itu kayak autoload,
  // library/helper yang dijalanin setiap kali ngankses controler ini
  public function __construct()
  {
    parent::__construct();
    $this->load->model('admin_model');
  }

  public function sevEmergency()
  {
    $this->load->view('admin/emergency');
  }

  public function sevAlert()
  {
    $this->load->view('admin/alert');
  }

  public function sevCritical()
  {
    $this->load->view('admin/critical');
  }

  public function sevError()
  {
    $this->load->view('admin/error');
  }

  public function sevWarning()
  {
    $this->load->view('admin/warning');
  }

  public function sevNotif()
  {
    $this->load->view('admin/notif');
  }

  public function sevInfo()
  {
    $this->load->view('admin/info');
  }

  public function sevDebug()
  {
    $this->load->view('admin/debug');
  }

  public function blok()
  {
    $this->load->view('admin/blok');
  }
  
  public function host()
  {
    $this->load->view('admin/host');
  }
  
  // public function downloadReport()
  // {
  //   $data['parklist'] = $this->admin_model->getParkList();
  //   $filename = 'Laporan Parkir '.date('Y').".xls";
  //   $this->admin_model->downloadReport($filename, $data['parklist']);
  // }
}

 ?>