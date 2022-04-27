<?php
/*
    * Result
    * Controller for Result module
    * @author Ponprapai Atsawanurak and Phatchara Khongthandee
    * @Create Date 2565-01-25
*/
?>

<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once(dirname(__FILE__) . "/../MainController.php");

//Start class Result
class Result extends MainController
{

    public function __construct()
    {
        parent::__construct();
    }
    /*
	* show_result_group
	* display view result group
	* @input  -
	* @output  Result group
	* @author  Thitima Popila and Ponprapai Atsawanurak
	* @Create  Date 2565-01-25
    * @Update  Date 2565-04-12
    */
    public function show_result_group()
    {
        $ass_id = $_SESSION['UsEmp_ID'];
        $this->load->model('M_pef_group', 'pef');
        $this->load->model('M_pef_group_schedule', 'date');
        $data['arr_group'] = $this->pef->get_group_evaluation_by_id($ass_id)->result();
        $data['obj_date'] = $this->date->get_date_evaluation($ass_id)->result();
        // echo "<pre>";
        //     print_r($data['arr_group']);
        // echo "</pre>";

        $this->output('consent/v_result_group_assessor', $data);
    }
    //show_result_group

    /*
	* show_result_list
	* display view result list
	* @input  -
	* @output  result list
	* @author  Thitima Popila and Ponprapai Atsawanurak
	* @Create  Date 2565-01-25
    * @Update  Date 2565-04-12
    */
    public function show_result_list($ass_id, $group_id)
    {
        $this->load->model('M_pef_group_nominee', 'nominee');
        $this->load->model('M_pef_performance_form', 'per');
        $data['obj_per'] = $this->per->get_performance_admin($group_id )->result();
        $data['arr_nominee'] = $this->nominee->get_nominee_detail($ass_id, $group_id)->result();
        // echo "<pre>";
        //     print_r($data['arr_nominee']);
        // echo "</pre>";
        $this->output('consent/v_result_list_assessor', $data);
    } //show_result_list

    /*
	* show_result_evaluation
	* display view Result evaluation of round 1
	* @input  -
	* @output  eesult evaluation
	* @author  Thitima Popila and Ponprapai Atsawanurak
	* @Create  Date 2565-01-25
    */
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
        
        $this->output('consent/v_result_evaluation_assessor_round1', $data);
    }  
    /*
	* show_result_evaluation_type2_1
	* display view Result evaluation of round 2/1
	* @input  -
	* @output  result evaluation
	* @author  Thitima Popila and Ponprapai Atsawanurak
	* @Create  Date 2565-04-13
    */
    public function show_result_evaluation_type2_1($group_id, $id_assessor, $id_nominee, $promote, $nor_id)
    {
        $this->load->model('M_pef_assessor', 'assessor');
        $this->load->model('M_pef_group', 'pef');
        $this->load->model('M_pef_group_nominee', 'nominee');
        $this->load->model('M_pef_format_form', 'form');
        $this->load->model('M_pef_performance_form', 'per');
        $this->load->model('M_pef_point_form', 'point');
        $this->load->model('M_pef_file', 'file');
        $this->load->model('M_pef_description_form', 'des');
        $this->load->model('M_pef_item_form', 'item');

        
        $this->pos_id =$promote;
        $this->pos_year = date("Y");
        
        $data['arr_item'] = $this->item->get_item_evaluation_by_id()->result();
    
        $data['arr_des'] = $this->des->get_description_evaluation_by_id()->result();
        $data['arr_nominee'] = $this->nominee->get_nominee_detail_by_id($id_assessor, $group_id)->result();
        $data['obj_date'] = $this->pef->get_group_date_round($group_id)->result();
        $data['obj_assessor'] = $this->assessor->get_assessor_by_id($id_assessor)->result();
        $data['obj_group_ass'] = $this->assessor->get_assessor_detail($group_id)->result();
        $data['obj_nominee'] = $this->nominee->get_nominee_by_id($id_nominee)->result();
        $data['obj_file'] = $this->file->get_file_present_nominee($id_nominee)->result();
        $data['obj_promote'] = $this->nominee->get_promote_to($id_nominee)->result();
        $data['arr_form'] = $this->form->get_evaluation_form($promote)->result();
        $data['arr_date'] = $this->nominee->get_nominee_date($group_id)->result();
        $date = $data['arr_date'][0]->grp_date;
        // print_r($date);
        // print_r($id_assessor);
        // print_r($nor_id);
            $data['arr_per'] = $this->per->get_performance($nor_id, $id_assessor, $date)->result();
            // print_r($data['arr_per']);
            $per_get =  $data['arr_per'][0]->per_id;
            // print_r($per_get);
            
            $data['arr_point'] = $this->point->get_point_list($per_get)->result();

        $this->output('consent/v_result_evaluation_assessor_round2_1', $data);
    } //show_result_evaluation_type2_1

    /*
	* show_result_evaluation_type2_2
	* display view Result evaluation of round 2/2
	* @input  -
	* @output  result evaluation
	* @author  Thitima Popila and Ponprapai Atsawanurak
	* @Create  Date 2565-04-13
    */
    public function show_result_evaluation_type2_2($Emp_ID, $ase_id, $date,$group_id)
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
        $this->output('consent/v_result_evaluation_assessor_round2_2', $data);
    } //show_result_evaluation_type2_2

}//End class Result