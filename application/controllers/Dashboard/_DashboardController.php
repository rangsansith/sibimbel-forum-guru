<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class _DashboardController extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->library('CheckSession');
    $this->checksession->check_session($this->session->id_admin,$this->session->nama);
    $this->load->model('Dashboard/DashboardModel');
  }
  public function index()
  {
    $data['title'] = "Dashboard";
    $this->load->view('Dashboard/index', $data);
  }
}
?>
