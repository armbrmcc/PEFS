<?php
/*
* Assessor_management
* Controller for Group Assessor module   
* @author Thitima Popila and Apinya Phadungkit
* @Create Date 2565-01-25
* @Update Date 2565-03-04
*/
?>
<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once(dirname(__FILE__) . "/../MainController.php");

class Assessor_management extends MainController
{
    public function __construct()
    {
        parent::__construct();
    }

    /*
	* show_assessor_management
	* display view assessor group management
	* @input  -
	* @output  Assessor group list
	* @author  Thitima Popila
	* @Create  Date 2565-01-25
    * @Update  Date 2565-03-09
    */
    public function show_assessor_management()
    {
        $this->load->model('M_pef_group_assessor', 'mpef');
        $this->load->model('M_pef_assessor_position', 'map');
        $data['arr_group'] = $this->mpef->get_group_assessor_all()->result();
        $data['arr_position'] = $this->map->get_position_all()->result();
        // print_r($data['arr_position']);
        // print_r($data);
        $this->output('consent/v_assessor_management', $data);
        
    }

    public function show_assessor_management_detail($id) // มาจาก gro_ase_id
    {
        // echo $id; 
        $this->load->model('M_pef_group_assessor', 'gass');
        $data['arr_ass'] = $this->gass->get_assessor_list($id)->result();
        $this->output('consent/v_assessor_management_detail', $data);
    }

    /*
	* delete_group_assesso
	* delete group_assessor
	* @input   id
	* @output  All group assessor list 
	* @author  Thitima Popila
	* @Create  Date 2565-03-08
    * @Update  Date 2565-03-08
    */
    public function delete_group_assessor($id)
    {
        $this->load->model('Da_pef_group_assessor', 'dpef');
        $this->dpef->gro_id = $id;
        $this->dpef->delete();
        // echo $id;
        redirect('Assessor_management/Assessor_management/show_assessor_management');
    }


        /*
	* search_by_employee_id
	* search employee detail by ase_emp_id
	* @input ase_emp_id
	* @output employee detail
	* @author Apinya Phadungkit
	* @Create Date 2566-02-30
	*/
    function search_by_employee_id()
    {

        $ase_emp_id = $this->input->post('ase_emp_id');
        $this->load->model('M_pef_assessor', 'emp');
        $this->emp->Emp_ID = $ase_emp_id;
        $data = $this->emp->get_name_emp()->result();

        echo json_encode($data);
    }


        /*
	* add_assessor
	* add_assessor data into model
	* @input Emp_ID,plant_name,plant_No,plant_ID 
	* @output -
	* @author ApinyaPhadungkit
	* @Create Date 2565-03-30
	*/
    function add_assessor($ase_gro_id)
    {//insert
        $this->load->model('Da_pef_assessor', 'dass');
        $this->dass->ase_year = $this->input->post('ase_year');
        $this->dass->ase_emp_id = $this->input->post('ase_emp_id');
        $this->dass->ase_gro_id = $this->input->post('group_id');
        $this->dass->ase_sec_id = $this->input->post('sec_id');
        $this->dass->insert();

        // print_r($this->input->post('sec_id'));
        redirect('Assessor_management/Assessor_management/show_assessor_management_detail/'.$ase_gro_id);
    }//end insert
    
    /*
	* delete_assessor
	* delete_assessor
	* @input   emp_id
	* @output  assessor list 
	* @author  Apinya Phadungkit
	* @Create  Date 2565-04-11
    * @Update  Date 2565-04-11
    */
    public function delete_assessor($emp_id,$ase_gro_id)
    {
        // $ase_gro_id = $this->input->post('group_id');
        $this->load->model('Da_pef_assessor', 'dpef');
        $this->dpef->ase_emp_id = $emp_id;
        $this->dpef->delete();
        // echo $emp_id;
        redirect('Assessor_management/Assessor_management/show_assessor_management_detail/'.$ase_gro_id);
    }



            /*
	* add_group_assessor
	* add_group_assessor data into model
	* @input Emp_ID,plant_name,plant_No,plant_ID 
	* @output -
	* @author ApinyaPhadungkit
	* @Create Date 2565-04-15
	*/
    function add_group_assessor($ase_gro_id)
    {//insert
        $this->load->model('Da_pef_group_assessor', 'dass');
        $this->dass->asp_name = $this->input->post('group_name');
        $this->dass->asp_level = $this->input->post('year');
        // $this->dass->asp_type = $this->input->post('group_type');
        $this->dass->asp_status = $this->input->post('group_status');

        if ($this->input->post('year') <= 4) {
            $this->dass->asp_type = '2';
            // $this->ped->insert_group_schedule();
        } else {
            $this->dass->asp_type = '1';
            // $this->ped->insert_group_schedule();
        }




        // $this->dass->insert();

        print_r($this->input->post('group_name'));
        print_r($this->input->post('year'));
        print_r($this->dass->asp_type);
        print_r($this->input->post('group_status'));
        // redirect('Assessor_management/Assessor_management/show_assessor_management_detail/'.$ase_gro_id);
    }//end insert


}