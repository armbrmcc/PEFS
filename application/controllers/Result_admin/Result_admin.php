<?php
/*
    * Result_admin
    * Controller for Result_admin module
    * @author Pontakon M.
    * @Create Date 2565-04-14
*/
?>

<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once(dirname(__FILE__) . "/../MainController.php");

//Start class Result
class Result_admin extends MainController
{

    public function __construct()
    {
        parent::__construct();
    }
    /*
	* show_result_admin
	* display view result admin list
	* @input  -
	* @output result_admin_list
    * @author Pontakon M.
    * @Create Date 2565-04-14
    * @Update Date 2565-04-15
    */
    public function show_result_admin()
    {
         
        $this->load->model('M_pef_group', 'as_group');
        $this->load->model('M_pef_group_schedule', 'date');
        
        $data['arr_group'] = $this->as_group->get_all_group_and_position()->result();
        $this->output('consent/v_result_admin_list', $data);
    }
    //show_result_admin_list

    /*
	* show_result_list
	* display view result admin list to show nominee in this group
	* @input  -
	* @output  result_list_nominee
    * @author Pontakon M.
    * @Create Date 2565-04-14
    * @Update Date 2565-04-15
    */
    public function show_result_list($group_id)
    {
        $this->load->model('M_pef_group_nominee', 'nominee');
        $data['arr_nominee'] = $this->nominee->get_nominee_detail_admin($group_id)->result();
        $this->output('consent/v_result_list_nominee', $data);
    } //show_result_list_nominee



    /*
	* show_result_all_assessor
	* display view result admin list to show nominee in this group
	* @input  employee_id,group_id
	* @output result_list_all_assessor
    * @author Pontakon M.
    * @Create Date 2565-04-14
    * @Update Date 2565-04-15
    */
    public function show_result_all_assessor($Emp_ID,$grp_id)
    {
        $this->load->model('M_pef_group_assessor', 'assessor');
        $this->load->model('M_pef_employee', 'emp');
        $this->load->model('M_pef_assessor_promote', 'pro');
        $this->load->model('M_pef_performance_form', 'per');


        $date = date("Y-m-d");
        $data['obj_per'] = $this->per->get_performance_admin($grp_id )->result();
        $data['arr_assessor'] = $this->assessor->get_group_all_assessor_by_id($grp_id)->result();
        $data['arr_emp'] = $this->emp->get_emp_detail($Emp_ID)->result();
        $data['arr_pro'] = $this->pro->get_promote_by_id_group($grp_id)->result();
        
        $this->output('consent/v_result_list_all_assessor', $data);
    } //show_result_list_all_assessor'








    
    /*
	* show_result_evaluation_type1
	* display view show form result admin type_1 
	* @input  employee_id,assessor_id,date of eveluation,group_id
	* @output result_list_all_assessor
    * @author Pontakon M.
    * @Create Date 2565-04-14
    * @Update Date 2565-04-15
    */
    public function show_result_evaluation_type1($Emp_ID, $ase_id, $date,$group_id)
    {
         
        $this->load->model('M_pef_group_nominee', 'nominee');
        $this->load->model('M_pef_format_form', 'form');
        $this->load->model('M_pef_group', 'group');
        $this->load->model('M_pef_assessor', 'assessor');
        $this->load->model('M_pef_performance_form', 'per');
        $this->load->model('M_pef_point_form', 'point');
        $this->load->model('M_pef_file', 'file');
         $this->load->model('M_pef_description_form', 'des');
        $this->load->model('M_pef_item_form', 'item');

        
       
        $data['arr_file'] = $this->file->get_file_by_id($Emp_ID)->result();
        $data['arr_nominee'] = $this->nominee->get_nominee_by_employee_id($Emp_ID)->result();
        $data['arr_promote'] = $this->nominee->get_promote_to_by_nominee_and_group_id($Emp_ID,$group_id)->result();
        
        $promote = $data['arr_promote'][0]->grn_promote_to;
        $data['arr_form'] = $this->form->get_evaluation_form($promote)->result();
        $this->pos_id =$promote;
        $this->pos_year = date("Y");
        
        $data['arr_item'] = $this->item->get_item_evaluation_by_id()->result();
    
        $data['arr_des'] = $this->des->get_description_evaluation_by_id()->result();
        $id_nominee = $data['arr_nominee'][0]->grn_id;
        //get data assessor
        $data['obj_assessor'] = $this->assessor->get_assessor_by_id($ase_id)->result();
        $data['obj_group'] = $this->group->get_group_by_group_id($group_id)->result();
        $data['obj_group_ass'] = $this->assessor->get_assessor_detail($group_id)->result();
        $data['obj_promote'] = $this->nominee->get_promote_to($id_nominee)->result();

        //get point round 1
        $data['arr_per'] = $this->per->get_performance_result($Emp_ID, $ase_id, $date)->result();
        $per_get =  $data['arr_per'][0]->per_id;
        $data['arr_point'] = $this->point->get_point_list($per_get)->result();
        
        $this->output('consent/v_result_admin_detail_from_1', $data);
    }  


    /*
	* show_result_evaluation_type2
	* display view show form result admin type_2 
	* @input  employee_id,assessor_id,date of eveluation,group_id
	* @output result_list_all_assessor
    * @author Pontakon M.
    * @Create Date 2565-04-14
    * @Update Date 2565-04-15
    */
    public function show_result_evaluation_type2($Emp_ID, $ase_id, $date,$group_id)
    {
        $this->load->model('M_pef_group_nominee', 'nominee');
        $this->load->model('M_pef_format_form', 'form');
        $this->load->model('M_pef_group', 'group');
        $this->load->model('M_pef_assessor', 'assessor');
        $this->load->model('M_pef_performance_form', 'per');
        $this->load->model('M_pef_point_form', 'point');
        $this->load->model('M_pef_group_schedule', 'schedule');
        $this->load->model('M_pef_file', 'file');
        $this->load->model('M_pef_description_form', 'des');
        $this->load->model('M_pef_item_form', 'item');
        
        $data['arr_file'] = $this->file->get_file_by_id($Emp_ID)->result();
        $data['arr_nominee'] = $this->nominee->get_nominee_by_employee_id($Emp_ID)->result();
        $data['arr_promote'] = $this->nominee->get_promote_to_by_nominee_and_group_id($Emp_ID,$group_id)->result();
        
        $promote = $data['arr_promote'][0]->grn_promote_to;
        $data['arr_form'] = $this->form->get_evaluation_form($promote)->result();
        $this->pos_id =$promote;
        $this->pos_year = date("Y");
        
        $data['arr_item'] = $this->item->get_item_evaluation_by_id()->result();
    
        $data['arr_des'] = $this->des->get_description_evaluation_by_id()->result();
        //find group id
        $id_nominee = $data['arr_nominee'][0]->grn_id;
        //get data assessor
        $data['obj_assessor'] = $this->assessor->get_assessor_by_id($ase_id)->result();
        $data['obj_group'] = $this->group->get_group_by_group_id($group_id)->result();
        $data['obj_group_ass'] = $this->assessor->get_assessor_detail($group_id)->result();
        $data['obj_promote'] = $this->nominee->get_promote_to($id_nominee)->result();

        //get point round 1
        $data['arr_per'] = $this->per->get_performance_result($Emp_ID, $ase_id, $date)->result();
        $per_get =  $data['arr_per'][0]->per_id;
        $data['arr_point'] = $this->point->get_point_list($per_get)->result();
        

        //get point round 2
        $data['date_2'] = $this->schedule->get_date_rourd_2($group_id)->result();
        
        $date_2 =  $data['date_2'][0]->grd_date;
        $data['arr_per2'] = $this->per->get_performance_result($Emp_ID, $ase_id, $date_2)->result();
        $per_get2 =  $data['arr_per2'][0]->per_id;
        $data['arr_point_2'] = $this->point->get_point_list_round_2_admin($per_get2,$Emp_ID, $ase_id, $date_2)->result();
        // echo $per_get2.'<br>'.$Emp_ID.'<br>'. $ase_id.'<br>'. $date_2;
        $this->output('consent/v_result_admin_detail_from_2', $data);
    } //show_result_evaluation_type2
}//End class Result admin