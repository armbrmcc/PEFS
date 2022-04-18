<?php
/*
* File_present_management
* @input  -   
* @output -
* @author Chakrit
* @Create Date 2565-01-27
*/
?>
<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once(dirname(__FILE__) . "/../MainController.php");

class File_present_management extends MainController
{
    public function __construct()
    {
        parent::__construct();
    }
    public function show_list_nominee()
    {
        $id = $_SESSION['UsEmp_ID'];
        $this->load->model('M_pef_file', 'list');

        $this->load->model('M_pef_group_nominee', 'nom');
        $data['emp_file'] = $this->list->get_file_nominee()->result();
        $data['emp_nominee'] = $this->nom->get_nominee()->result();
        $this->output('consent/v_add_file_present', $data);
    }
    function insert_file_nominee()
    { //apply DateTime.
        $currentDate = new DateTime();
        //Get the year by using the format method.
        $year = $currentDate->format("Y");
        //Printing that out
        $pefs_file =  $_FILES['fil']['tmp_name'];
        $fil_name = iconv("UTF-8", "TIS-620", $_FILES['fil']['name']);
        $Emp_ID = $this->input->post("Emp_ID");

        $this->load->model('Da_pef_file', 'pef');
        $this->pef->fil_location = $Emp_ID . "_" . $fil_name;
        $this->pef->fil_emp_id = $Emp_ID;
        $this->pef->fil_year = $year;
        $this->pef->insert_file(); // add file to table pef_file
        copy($pefs_file, 'assests/template/soft-ui-dashboard-main/assets/upload/' . $Emp_ID . "_" . $fil_name); // add file to floder upload
        // $this->show_list_nominee();
        redirect('/File_present_management/File_present_management/show_list_nominee');
    }

    /*
	* edit_file_nominee
	* edit fil_name to model and save file in folder upload
	* @input    file name (fil_name) and Id nominee (Emp_ID)
	* @output   status file
	* @author   Ponprapai and Thitima
	* @Create Date 2564-08-14 
	*/
    function edit_file_nominee()
    {
        $pefs_file =  $_FILES['fil']['tmp_name'];
        $fil_name =  $_FILES['fil']['name'];
        $Emp_ID = $this->input->post("Emp_ID");

        $this->load->model('Da_pef_file', 'pef');
        $this->pef->fil_location = $Emp_ID . "_" . $fil_name;
        $this->pef->fil_emp_id = $Emp_ID;

        $this->pef->update_file(); // update file to table pef_file
        copy($pefs_file, 'assests/template/soft-ui-dashboard-main/assets/upload/' . $Emp_ID . "_" . $fil_name); // add file to floder upload
        // $this->show_list_nominee();
        redirect('/File_present_management/File_present_management/show_list_nominee');
    }
}