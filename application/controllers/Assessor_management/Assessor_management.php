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
        // $this->load->model('M_pef_group_assessor', 'mpef');
        $this->load->model('M_pef_assessor_promote', 'mpo');

        $this->load->model('M_pef_assessor_position', 'map');
        $data['arr_group'] = $this->mpo->get_group_assessor_all()->result();
        $data['arr_position'] = $this->map->get_position_all()->result();
        // print_r($data['arr_position']);
        // print_r($data);
        $this->output('consent/v_assessor_management', $data);
        
    }

    public function show_assessor_management_detail($id) // มาจาก asp_id
    {
        // echo $id; 
        $this->load->model('M_pef_assessor_promote', 'gass');
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
        $this->load->model('Da_pef_assessor_promote', 'dpef');
        $this->dpef->asp_id = $id;
        $this->dpef->delete();


        $this->load->model('Da_pef_assessor_position', 'dpo');
        $this->dpo->gap_asp_id = $id;
        $this->dpo->delete();

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
    function add_group_assessor()
    {//insert
        $this->load->model('Da_pef_group_assessor', 'dass');
        $this->load->model('Da_pef_assessor_promote', 'dpro');
        $this->load->model('Da_pef_assessor_position', 'dpos');

        $group_name = $this->input->post('group_name');
        $group_level = $this->input->post('group_level');
        $group_type = $this->input->post('group_type');
        $pos = $this->input->post('pos');
        $count_pos = $this->input->post('count_pos');

        // echo $group_name;
        // echo $group_level;
        // echo $group_type;
        // print_r($pos);
        // echo $count_pos;

        if($group_type == "Type 2: (2 round evaluation)"){
            $type = '2';
        }else {
            $type = '1';
        }

        $this->dpro->asp_name = $group_name;
        $this->dpro->asp_level = $group_level;
        $this->dpro->asp_type = $type;
        $this->dpro->insert();

        $this->load->model('M_pef_assessor_promote', 'pas');
        $max = $this->pas->get_id_max()->row();

        // $this->dpos->gap_asp_id = $max->asp_id;

        echo $group_name;
        echo $group_level;
        echo $type;
    
        for ($i = 0; $i < sizeof($pos); $i++) {
            
            $this->dpos->gap_asp_id = $max->asp_id;
            $this->dpos->gap_promote = $pos[$i];

            // print_r(sizeof($pos));

            // print_r($pos[$i]);

            $this->dpos->insert();
        }

        $data = "insert_success";
        echo json_encode($data);

    }//end insert


}