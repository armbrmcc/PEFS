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
class Result_admin extends MainController
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
    public function show_result_admin()
    {
         
        $this->load->model('M_pef_group', 'as_group');
        $data['arr_group'] = $this->as_group->get_all_group_and_position()->result();
        
        $this->output('consent/v_result_admin_list', $data);
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
    public function show_result_list($group_id)
    {
        $this->load->model('M_pef_group_nominee', 'nominee');
        $data['arr_nominee'] = $this->nominee->get_nominee_detail_admin($group_id)->result();
        $this->output('consent/v_result_list_nominee', $data);
    } //show_result_list



    /*
	* show_result_list
	* display view result list
	* @input  -
	* @output  result list
	* @author  Thitima Popila and Ponprapai Atsawanurak
	* @Create  Date 2565-01-25
    * @Update  Date 2565-04-12
    */
    public function show_result_all_assessor($Emp_ID,$grp_id)
    {
        $this->load->model('M_pef_group_assessor', 'assessor');
        $this->load->model('M_pef_employee', 'emp');
        $this->load->model('M_pef_assessor_promote', 'pro');
        
        $data['arr_assessor'] = $this->assessor->get_group_all_assessor_by_id($grp_id)->result();
        $data['arr_emp'] = $this->emp->get_emp_detail($Emp_ID)->result();
        $data['arr_pro'] = $this->pro->get_promote_by_id_group($grp_id)->result();
        
        $this->output('consent/v_result_list_all_assessor', $data);
    } //show_result_list








    
    /*
	* show_result_evaluation
	* display view Result evaluation of round 1
	* @input  -
	* @output  eesult evaluation
	* @author  Thitima Popila and Ponprapai Atsawanurak
	* @Create  Date 2565-01-25
    */
    public function show_result_evaluation_type1($Emp_ID, $ase_id, $date,$group_id)
    {
         
        $this->load->model('M_pef_group_nominee', 'nominee');
        $this->load->model('M_pef_format_form', 'form');
        $this->load->model('M_pef_group', 'group');
        $this->load->model('M_pef_assessor', 'assessor');

        $this->load->model('M_pef_performance_form', 'per');
        $this->load->model('M_pef_point_form', 'point');

        $data['arr_nominee'] = $this->nominee->get_nominee_by_employee_id($Emp_ID)->result();
        $data['arr_promote'] = $this->nominee->get_promote_to_by_nominee_and_group_id($Emp_ID,$group_id)->result();
        
        $promote = $data['arr_promote'][0]->grn_promote_to;
        $data['arr_form'] = $this->form->get_evaluation_form($promote)->result();

        $id_nominee = $data['arr_nominee'][0]->grn_id;

        $data['obj_assessor'] = $this->assessor->get_assessor_by_id($ase_id)->result();
        $data['obj_group'] = $this->group->get_group_by_group_id($group_id)->result();
        $data['obj_group_ass'] = $this->assessor->get_assessor_detail($group_id)->result();
        $data['obj_promote'] = $this->nominee->get_promote_to($id_nominee)->result();

        $data['arr_per'] = $this->per->get_performance_result($Emp_ID, $ase_id, $date)->result();
        $per_get =  $data['arr_per'][0]->per_id;
        $data['arr_point'] = $this->point->get_point_list($per_get)->result();
        
        $this->output('consent/v_result_admin_detail_from_1', $data);
    }  






    /*
	* show_result_evaluation
	* display view Result evaluation of round 2
	* @input  -
	* @output  result evaluation
	* @author  Thitima Popila and Ponprapai Atsawanurak
	* @Create  Date 2565-04-13
    */
    public function show_result_evaluation_type2($Emp_ID, $ase_id, $date,$group_id)
    {
        $this->load->model('M_pef_group_nominee', 'nominee');
        $this->load->model('M_pef_format_form', 'form');
        $this->load->model('M_pef_group', 'group');
        $this->load->model('M_pef_assessor', 'assessor');

        $this->load->model('M_pef_performance_form', 'per');
        $this->load->model('M_pef_point_form', 'point');
        $this->load->model('M_pef_point_form', 'point');

        $this->load->model('M_pef_group_schedule', 'schedule');

        $data['arr_nominee'] = $this->nominee->get_nominee_by_employee_id($Emp_ID)->result();
        $data['arr_promote'] = $this->nominee->get_promote_to_by_nominee_and_group_id($Emp_ID,$group_id)->result();
        
        $promote = $data['arr_promote'][0]->grn_promote_to;
        $data['arr_form'] = $this->form->get_evaluation_form($promote)->result();

        $id_nominee = $data['arr_nominee'][0]->grn_id;

        $data['obj_assessor'] = $this->assessor->get_assessor_by_id($ase_id)->result();
        $data['obj_group'] = $this->group->get_group_by_group_id($group_id)->result();
        $data['obj_group_ass'] = $this->assessor->get_assessor_detail($group_id)->result();
        $data['obj_promote'] = $this->nominee->get_promote_to($id_nominee)->result();

        $data['arr_per'] = $this->per->get_performance_result($Emp_ID, $ase_id, $date)->result();
        $per_get =  $data['arr_per'][0]->per_id;
        $data['arr_point'] = $this->point->get_point_list($per_get)->result();
        
        $data['date_2'] = $this->schedule->get_date_rourd_2($group_id)->result();
        $date_2 =  $data['date_2'][0]->grd_date;
        $data['arr_point_2'] = $this->point->get_point_list_round_2_admin($per_get,$Emp_ID, $ase_id, $date_2)->result();
        
        $this->output('consent/v_result_admin_detail_from_2', $data);
    } //show_result_evaluation_type2
}//End class Result