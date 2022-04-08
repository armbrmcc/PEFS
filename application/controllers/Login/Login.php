<?php
/*
    * Login
    * Controller for Login module
    * @author Chakrit Boonprasert
    * @Create Date 2565-03-31
    */
?>

<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once(dirname(__FILE__) . "/../MainController.php");

class Login extends MainController
{

    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Bangkok');
    }

    /*
    * show_user_login
    * show login
    * @input  -
    * @output show display login for user
    * @author Chakrit Boonprasert
    * @Create Date 2565-03-31
    */
    public function show_user_login()
    { //show login
        $this->output_login("auth/v_user_login");
    } //end show_user_login

    /*
    * show_user_home
    * show login
    * @input  Emp_ID
    * @output show display home for user
    * @author Chakrit Boonprasert
    * @Create Date 2565-03-31
    */
    public function show_user_home($User_emp_id)
    { //show home
        $this->load->model('M_pef_user_login', 'mlog');
        $this->mlog->Emp_ID  = $User_emp_id;
        $data['Emp_ID'] = $this->mlog->get_emp()->row();

        $temp = $data['Emp_ID'];
        $this->session->set_userdata('UsEmp_ID', $temp->Emp_ID);
		$this->session->set_userdata('UsName_EN', $temp->Empname_eng." ".$temp->Empsurname_eng);
		$this->session->set_userdata('UsName_TH', $temp->Empname_th." ".$temp->Empsurname_th);
		$this->session->set_userdata('UsDepartment', $temp->Department);
		$this->session->set_userdata('Usrole', $temp->User_Role);
        $this->check_role();
    } //end show_user_home

    /*
    * login
    * Login for user
    * @input  User_login and Pass_login
    * @output -
    * @author Chakrit Boonprasert
    * @Create Date 2565-03-31
    */
    public function login()
    { //login for user
        $User_login = $this->input->POST('User_login');
        $User_pass_login = $this->input->POST('User_pass_login');

        $this->load->model('M_pef_user_login', 'mlog');

        $userlogin = $this->mlog->check_login($User_login, $User_pass_login)->row();
        if (count($userlogin) == 1) {
            $data = $userlogin;
            echo json_encode($data);
        } else {
            $data = [];
            echo json_encode($data);
        }
    } //end login

    /*
    * check_role
    * check role for user
    * @input  UsEmp_ID  and Usrole
    * @output show display home for role
    * @author Chakrit Boonprasert
    * @Create Date 2565-03-31
    */
    public function check_role()
    { // check role
        if (!empty($this->session->userdata('UsEmp_ID'))) {
            if ($_SESSION['Usrole'] == 1) {
                redirect('Evaluation/Evaluation/show_evaluation_list', 'refresh');
            } else if ($_SESSION['Usrole'] == 2) {
                redirect('Group_management/Group_management/show_group_management', 'refresh');
            }
        }
        // if
        else {
            redirect('Login/Login/show_user_login', 'refresh');
        }
        // else
    } //end check_role

    /*
    * main
    * Login for user
    * @input  User_login and Pass_login
    * @output -
    * @author Chakrit Boonprasert
    * @Create Date 2565-03-31
    */
    public function logout()
    { //logout to user login page
        $this->session->unset_userdata('UsEmp_ID');
        $this->session->unset_userdata('UsName_EN');
        $this->session->unset_userdata('UsName_TH');
        $this->session->unset_userdata('UsDepartment');
        redirect('Login/Login/show_user_login', 'refresh');
    } //end logout
}
