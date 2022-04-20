<?php
    /*
    * Evaluation
    * Controller for Evaluation module
    * @author Phatchara Khongthandee and Ponprapai Atsawanurak
    * @Create Date 2565-01-25
    */
?>

<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once(dirname(__FILE__) . "/../MainController.php");

//Start class Evaluation
class Evaluation extends MainController
{

    public function __construct()
    {
        parent::__construct();
    }

    /*
	* show_evaluation_list
	* display view evaluation list
	* @input  -
	* @output Evaluation list
	* @author Phatchara Khongthandee and Ponprapai Atsawanurak
	* @Create Date 2565-01-25
    * @Update Date 2565-03-04
    * @Update Date 2565-03-12
    */
    public function show_evaluation_list()
    {
        $ass_id = $_SESSION['UsEmp_ID'];
        $this->load->model('M_pef_group', 'pef');
        $this->load->model('M_pef_group_schedule', 'date');
        $data['arr_group'] = $this->pef->get_group_evaluation($ass_id)->result();
        $data['obj_date'] = $this->date->get_date_evaluation($ass_id)->result();
        // echo "<pre>";
        //     print_r($data['arr_group']);
        // echo "</pre>";
        $this->output('consent/v_evaluation_list', $data);
    } //end show_evaluation_list

    /*
	* show_evaluation_detail
	* display view evaluation detail
	* @input  $ass_id, $group_id
	* @output Evaluation detail
	* @author Phatchara Khongthandee and Ponprapai Atsawanurak
	* @Create Date 2565-01-25
    * @Update Date 2565-03-04
    * @Update Date 2565-03-12
    */
    public function show_evaluation_detail($ass_id, $group_id)
    {
        $this->load->model('M_pef_group', 'pef');
        $this->load->model('M_pef_group_nominee', 'nominee');
        $this->load->model('M_pef_file', 'file');
        $this->load->model('M_pef_performance_form', 'per');
        $date = date("Y-m-d");
        $data['arr_group'] = $this->pef->get_group_by_group_id($group_id)->result();
        $data['obj_date'] = $this->pef->get_group_date_round($group_id)->result();
        // print_r($data['obj_date']);
        $data['arr_nominee'] = $this->nominee->get_nominee_detail($group_id)->result();
        $data['obj_file'] = $this->file->get_file_nominee()->result();
        $data['obj_per'] = $this->per->get_performance_detail($group_id, $date)->result();
        // print_r($data['obj_per']);

        $this->output('consent/v_evaluation_detail', $data);
    } //end show_evaluation_detail

    /*
	* show_evaluation_form_round_1
	* display view evaluation form 1 round
	* @input  $group_id, $id_assessor, $id_nominee, $promote
	* @output Evaluation form 1 round
	* @author Phatchara Khongthandee and Ponprapai Atsawanurak
	* @Create Date 2565-01-26
    * @Update Date 2565-03-04
    * @Update Date 2565-03-10
    */
    public function show_evaluation_form_round_1($group_id, $id_assessor, $id_nominee, $promote)
    {
        $this->load->model('M_pef_assessor', 'assessor');
        $this->load->model('M_pef_group_nominee', 'nominee');
        $this->load->model('M_pef_format_form', 'form');
        $this->load->model('M_pef_file', 'file');

        $this->load->model('M_pef_description_form', 'des');
        $this->load->model('M_pef_item_form', 'item');

        
        $this->pos_id =$promote;
        $this->pos_year = date("Y");
        
        $data['arr_item'] = $this->item->get_item_evaluation_by_id()->result();
    
        $data['arr_des'] = $this->des->get_description_evaluation_by_id()->result();
        
        $data['arr_nominee'] = $this->nominee->get_nominee_detail($group_id)->result();
        $data['obj_assessor'] = $this->assessor->get_assessor_by_id($id_assessor)->result();
        $data['obj_group_ass'] = $this->assessor->get_assessor_detail($group_id)->result();
        $data['obj_file'] = $this->file->get_file_present_nominee($id_nominee)->result();
        $data['obj_nominee'] = $this->nominee->get_nominee_by_id($id_nominee)->result();
        $data['obj_promote'] = $this->nominee->get_promote_to($id_nominee)->result();
        $data['arr_form'] = $this->form->get_evaluation_form($promote)->result();
        $this->output('consent/v_evaluation_form_round_1', $data);
    } //end show_evaluation_form_round_1

    /*
	* show_evaluation_form_round_2
	* display view evaluation form 2 round
	* @input  $group_id, $id_assessor, $id_nominee, $promote
	* @output Evaluation form 2 round
	* @author Phatchara Khongthandee and Ponprapai Atsawanurak
	* @Create Date 2565-01-26
    * @Update Date 2565-03-03
    * @Update Date 2565-03-05
    * @Update Date 2565-03-10
    */
    public function show_evaluation_form_round_2($group_id, $id_assessor, $id_nominee, $promote)
    {
        $this->load->model('M_pef_assessor', 'assessor');
        $this->load->model('M_pef_group', 'pef');
        $this->load->model('M_pef_group_nominee', 'nominee');
        $this->load->model('M_pef_format_form', 'form');
        $this->load->model('M_pef_item_form', 'item');
        $this->load->model('M_pef_description_form', 'des');
        $this->load->model('M_pef_file', 'file');

        
        $this->pos_id =$promote;
        $this->pos_year = date("Y");
        
        $data['arr_item'] = $this->item->get_item_evaluation_by_id()->result();
    
        $data['arr_des'] = $this->des->get_description_evaluation_by_id()->result();
        

        $data['arr_nominee'] = $this->nominee->get_nominee_detail($group_id)->result();
        $data['obj_date'] = $this->pef->get_group_date_round($group_id)->result();
        $data['obj_assessor'] = $this->assessor->get_assessor_by_id($id_assessor)->result();
        $data['obj_group_ass'] = $this->assessor->get_assessor_detail($group_id)->result();
        $data['obj_file'] = $this->file->get_file_present_nominee($id_nominee)->result();
        $data['obj_nominee'] = $this->nominee->get_nominee_by_id($id_nominee)->result();
        $data['obj_promote'] = $this->nominee->get_promote_to($id_nominee)->result();

        $data['arr_form'] = $this->form->get_evaluation_form($promote)->result();

        $this->output('consent/v_evaluation_form_round_2', $data);
    } //end show_evaluation_form_round_2

    /*
	* show_evaluation_form_round_2_2
	* display view evaluation form 2 round 2
	* @input  $group_id, $id_assessor, $id_nominee, $promote, $nor_id
	* @output Evaluation form 2 round
	* @author Phatchara Khongthandee and Ponprapai Atsawanurak
	* @Create Date 2565-01-26
    * @Update Date 2565-03-03
    * @Update Date 2565-03-05
    * @Update Date 2565-03-10
    */
    public function show_evaluation_form_round_2_2($group_id, $id_assessor, $id_nominee, $promote, $nor_id)
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
        $data['arr_nominee'] = $this->nominee->get_nominee_detail($group_id)->result();
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

        $this->output('consent/v_evaluation_form_round_2_2', $data);
    } //end show_evaluation_form_round_2_2

    /*
	* insert_evaluation_form
	* insert data form go to database
	* @input  per, QnA, comment, ase_id, emp_id, point, form
	* @output -
	* @author Phatchara Khongthandee and Pontakon Mujit
	* @Create Date 2565-03-03
    * @Update Date 2565-03-05
    * @Update Date 2565-03-08
    * @Update Date 2565-03-10
    * @Update Date 2565-04-11
    * @Update Date 2565-04-12
    * @Update Date 2565-04-13
    */
    function insert_evaluation_form()
    {
        // echo "<pre>";
        // print_r($this->input->post());
        // echo "</pre>";
        $date = date("Y-m-d");
        //insert data to database pef_performance_form
        $this->load->model('Da_pef_performance_form', 'per');
        $this->per->per_q_and_a = $this->input->post('QnA');
        $this->per->per_comment = $this->input->post('comment');
        $this->per->per_date = $date;
        $this->per->per_ase_id = (int) $this->input->post('ase_id');
        $this->per->per_emp_id = $this->input->post('emp_id');
        $this->per->insert_performance_form();
    
        //insert data to database pef_point_form
        $this->load->model('Da_pef_point_form', 'point');
        $this->point->ptf_point = $this->input->post('point');
        $this->point->ptf_date = $date; 
        $this->point->ptf_for_id = $this->input->post('form');
        $this->point->row = $this->input->post('row');
        $this->load->model('M_pef_point_form', 'pef');
        $max = $this->pef->get_point()->row();
        $this->point->ptf_per_id = $max->max_id;
        $this->point->ptf_round = 1;
        $this->point->insert_point();

        //update status to database pef_group
        $this->load->model('Da_pef_group', 'group');
        $this->group->grp_id = $this->input->post('group_id');
        $this->group->grp_status = 1;
        $this->group->update_status_group();

        // update status assessor to database pef_assessor_promote
        $this->load->model('Da_pef_assessor_promote', 'ass');
        $this->ass->asp_id = $this->input->post('asp_id');
        $this->ass->asp_status = 1;
        $this->ass->update_status_assessor();

        //update status done to database pef_group_nominee
        $this->load->model('Da_pef_group_nominee', 'nomi');
        $this->nomi->grn_emp_id = $this->input->post('emp_id');
        $this->nomi->grn_status_done = 0;
        $this->nomi->update_status_done();
        
        $data['message'] = 'Success';

        echo json_encode($data);
        
    }//end insert_evaluation_form_round_1

    /*
	* insert_evaluation_form
	* insert data form go to database
	* @input  per, QnA, comment, ase_id, emp_id, point, form
	* @output -
	* @author Phatchara Khongthandee and Pontakon Mujit
	* @Create Date 2565-03-03
    * @Update Date 2565-03-05
    * @Update Date 2565-03-08
    * @Update Date 2565-03-10
    * @Update Date 2565-04-11
    * @Update Date 2565-04-12
    * @Update Date 2565-04-13
    */
    function insert_evaluation_form_2()
    {
        // echo "<pre>";
        // print_r($this->input->post());
        // echo "</pre>";
        $date = date("Y-m-d");
        //insert data to database pef_performance_form
        $this->load->model('Da_pef_performance_form', 'per');
        $this->per->per_q_and_a = $this->input->post('QnA');
        $this->per->per_comment = $this->input->post('comment');
        $this->per->per_date = $date;
        $this->per->per_ase_id = (int) $this->input->post('ase_id');
        $this->per->per_emp_id = $this->input->post('emp_id');
        $this->per->insert_performance_form();
    
        //insert data to database pef_point_form
        $this->load->model('Da_pef_point_form', 'point');
        $this->point->ptf_point = $this->input->post('point');
        $this->point->ptf_date = $date; 
        $this->point->ptf_for_id = $this->input->post('form');
        $this->point->row = $this->input->post('row');
        $this->load->model('M_pef_point_form', 'pef');
        $max = $this->pef->get_point()->row();
        $this->point->ptf_per_id = $max->max_id;
        $this->point->ptf_round = 1;
        $this->point->insert_point_round_2();

        // update status to database pef_group
        $this->load->model('Da_pef_group', 'group');
        $this->group->grp_id = $this->input->post('group_id');
        $this->group->grp_status = 1;
        $this->group->update_status_group();

        // update status assessor to database pef_assessor_promote
        $this->load->model('Da_pef_assessor_promote', 'ass');
        $this->ass->asp_id = $this->input->post('asp_id');
        $this->ass->asp_status = 1;
        $this->ass->update_status_assessor();

        // update status done to database pef_group_nominee
        $this->load->model('Da_pef_group_nominee', 'nomi');
        $this->nomi->grn_emp_id = $this->input->post('emp_id');
        $this->nomi->grn_status_done = 1;
        $this->nomi->update_status_done();
        
        $data['message'] = 'Success';

        echo json_encode($data);
        
    }//end insert_evaluation_form_round_1

}//End class Evaluation