<?php
/*
* MainCcontroller
* @input  -
* @output -
* @author Team 6
* @Update Date 2564-10-15
*/

defined('BASEPATH') or exit('No direct script access allowed');

class MainController extends CI_Controller
{

	public function test()
	{
		$this->output('consent/v_test');
	}

	public function output($view, $data=null)
	{
		$this->load->view('includes/template/header');
		$this->load->view('includes/template/sidebar');
		$this->load->view('includes/template/topbar');
		$this->load->view($view, $data);
		$this->load->view('includes/template/javascript');
		$this->load->view('includes/template/footer');
	}

	public function login()
	{
		$this->output('auth/v_user_login');
	}

	public function login2()
	{
		$this->output('auth/v_user_login2');
	}
	// public function __construct()
	// {
	// 	parent::__construct();
	// 	$this->load->library('excel');
	// 	date_default_timezone_set('Asia/Bangkok');
	// }

	// public function header()
	// {
	// 	$this->load->view('includes/template/header');
	// }

	// public function javascript()
	// {
	// 	$this->load->view('includes/template/javascript');
	// }

	// public function footer()
	// {
	// 	$this->load->view('includes/template/footer');
	// }

	// public function topbar()
	// {
	// 	$this->load->model('M_ttp_request', 'medit');
	// 	$this->medit->req_emp_id = $_SESSION["UsEmp_ID"];
	// 	$this->medit->req_edit_count = 3;
	// 	$data['arr_nofi'] = $this->medit->get_all_nofi()->result();
	// 	$data['arr_edit'] = sizeof($this->medit->get_all_nofi()->result());
	// 	$this->load->view('includes/template/topbar', $data);
	// }

	// public function sidebar()
	// {
	// 	if ($_SESSION["Usrole"] == 1) {
	// 		$this->load->model('M_ttp_request', 'mreq');
	// 		$this->mreq->app_supervisor_id = $_SESSION["UsEmp_ID"];
	// 		$this->mreq->req_status = 1;
	// 		$data['arr_req'] = sizeof($this->mreq->get_all_sup()->result());
	// 		$this->load->view('includes/template/sidebar', $data);
	// 	} else if ($_SESSION["Usrole"] == 2) {
	// 		$this->load->model('M_ttp_request', 'mreq');
	// 		$this->mreq->app_supervisor_id = $_SESSION["UsEmp_ID"];
	// 		$this->mreq->req_status = 1;
	// 		$data['arr_req_supervisor'] = sizeof($this->mreq->get_all_sup()->result());
	// 		$this->load->view('includes/template/sidebar', $data);
	// 	} else if ($_SESSION["Usrole"] == 3) {
	// 		$this->load->model('M_ttp_approve_form', 'req');
	// 		$this->req->app_hr_id = $_SESSION["UsEmp_ID"];
	// 		$this->req->req_status = 2;
	// 		$data['arr_req_hr'] = sizeof($this->req->get_all_hr()->result());

	// 		$this->load->model('M_ttp_request', 'msup');
	// 		$this->msup->app_supervisor_id = $_SESSION["UsEmp_ID"];
	// 		$this->msup->req_status = 1;
	// 		$data['arr_req_supervisor'] = sizeof($this->msup->get_all_sup()->result());
	// 		$this->load->view('includes/template/sidebar', $data);
	// 	} else if ($_SESSION["Usrole"] == 4) {
	// 		$this->load->model('M_ttp_approve_form', 'req');
	// 		$this->req->app_approve_plant_id = $_SESSION["UsEmp_ID"];
	// 		$this->req->req_status = 3;
	// 		$data['arr_req_plant'] = sizeof($this->req->get_all_plant()->result());

	// 		$this->load->model('M_ttp_request', 'msup');
	// 		$this->msup->app_supervisor_id = $_SESSION["UsEmp_ID"];
	// 		$this->msup->req_status = 1;
	// 		$data['arr_req_supervisor'] = sizeof($this->msup->get_all_sup()->result());

	// 		$this->load->view('includes/template/sidebar', $data);
	// 	} else {
	// 		$this->load->view('includes/template/sidebar');
	// 	}
	// }

	// public function output($body, $data = '')
	// {
	// 	$this->load->model('M_ttp_licence', 'lin');
	// 	$this->load->model('M_ttp_plant_list', 'pla');
	// 	$data['plant'] = $this->pla->get_plant()->result();
	// 	for ($i = 0; $i < sizeof($this->pla->get_plant()->result()); $i++) {
	// 		if (sizeof($this->lin->get_form_by_plant($data['plant'][$i]->pla_plant_id)->result()) == 0) {
	// 			$this->pla->pla_plant_id = $data['plant'][$i]->pla_plant_id;
	// 			$this->pla->pla_status = 1;
	// 			$this->pla->update_status();
	// 		} else {
	// 			$this->pla->pla_plant_id = $data['plant'][$i]->pla_plant_id;
	// 			$this->pla->pla_status = 2;
	// 			$this->pla->update_status();
	// 		}
	// 	}

	// 	$this->header();
	// 	$this->sidebar($data);
	// 	$this->topbar();
	// 	$this->load->view($body, $data);
	// 	$this->javascript();
	// 	$this->footer();
	// }
	// public function output_login($body, $data = '')
	// {

	// 	$this->header();
	// 	$this->load->view($body, $data);
	// 	$this->javascript();
	// 	$this->footer();
	// }
}
