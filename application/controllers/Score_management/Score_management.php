<?php
    /*
    * Score Management
    * Controller for Score Management module
    * @author Jaraspon Seallo and Nipat 
    * @Create Date 2565-01-26
    */
?>

<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once(dirname(__FILE__) . "/../MainController.php");

//Start class Score Management
class Score_management extends MainController
{

    public function __construct()
    {
        parent::__construct();
    }

    /*
	* show_score_management_list
	* display view Score Management list
	* @input  -
	* @output  Score Management list
	* @author  Jaraspon Seallo
	* @Create  Date 2565-01-23
    */
    public function show_score_management_list()
    {
        $this->load->model('M_pef_score_management', 'psm');
        $data['as_group'] = $this->psm->get_score_management_list()->result();
        $data['as_group_date'] = $this->psm->get_score_management_list_date()->result();
     
    for ($i=0; $i < count($data["as_group"]) ; $i++) { 
        $a=array();
        for ($j=0; $j < count($data["as_group_date"]) ; $j++) {
        //   $date_sql =  $data['as_group'][$i]
        // var_dump($data["as_group_date"][$j]->grp_date);
        // echo "<pre/>";
       
    
     
            if($data["as_group_date"][$j]->grp_id == $data["as_group"][$i]->gap_id){
                // var_dump($data['as_group_date'][$j] );
           
                array_push($a,$data['as_group_date'][$j]);
            
                $data_all[$i] = [
                    'data' =>$data['as_group'][$i],
                    'date' =>  $a 
                ];
            }
        }
    }
    
    $data['data_all'] = $data_all;

//  echo "<pre>";
 
//  var_dump($data["data_all"]);
//  echo "</pre>";
//  echo "<br/>";
//  echo "<pre>";
 
//  var_dump($data_all);
//  echo "</pre>";
//  echo "<br/>";
// var_dump($data["as_group"][0]);
// var_export($data);

        $this->output('consent/v_score_management', $data);
    } //show_score_management_list

/*
* show_score_management_detail
* display view score management detail
* @input  -
* @output  Score Management Detail
* @author  Niphat Kuhoksiw
* @Create  Date 2565-04-10
*/
    public function show_score_management_detail($id)
    {
        $this->load->model('M_pef_score_management', 'pef');
        // echo $id;
        $data['count'] = '';
        $num_ass = $this->pef->get_assessor($id)->result();
        $data['assessor'] = $this->pef->get_assessor($id)->result();
        $data['form'] = $this->pef->get_form($id)->result();
        $data['nominee'] = $this->pef->get_nominee($id)->result();
        $data['group'] = $this->pef->get_group_by_id($id)->result();
        $data['ass_data'] = $this->pef->get_ass_by_grp_id($id)->result();
        $data['point_data'] = $this->pef->get_data_point_by_grp_id($id)->result();
        // $data['sec_data'] = $this->pef->get_data_by_id($id)->result();

        for ($i = 0; $i < count($data['nominee']); $i++) {
            $data['per'] = $this->pef->get_evaluation($data['nominee'][$i]->Emp_ID)->result();
            $num = 0;
            for ($j = 0; $j < count($data['per']); $j++) {

                if ($data['nominee'][$i]->Emp_ID == $data['per'][$j]->per_emp_id && $data['group'][0]->grp_date == $data['per'][$j]->per_date) {
                    $num++;
                }
            }
            $data['count'][$i] = $num;
        }
        $this->output('consent/v_score_management_detail', $data);
    }
    /*
	* review
	* display review
	* @input  -
	* @output  review
	* @author  Niphat Kuhoksiw
	* @Create  Date 2565-04-10
    */
    public function review()
    {
        $date = $this->input->post('date');
        $emp  = $this->input->post('emp');
        $emp_id  = $this->input->post('emp_id');
        $grp_id = $this->input->post('grp_id');
        $pos = $this->input->post('pos');
        $group = $this->input->post('group');
        echo $group;
        $this->load->model('Da_pef_group', 'pefd');
        $this->load->model('M_pef_group', 'pef');
        $this->load->model('M_pef_score_management', 'pefs');
        $this->pefd->grp_date = $date;
        $this->pefd->grp_position_group = $group;
        $this->ped->grp_year = $this->input->post('year');
        $this->pefd->insert_group();
        $group_id = $this->pef->get_group_id()->result();
        $data['assessor'] = $this->pefs->get_assessor($grp_id)->result();
        // print_r($data['assessor']);
        $this->pefd->grn_grp_id = $group_id[0]->grp_id;
        $this->pefd->grn_emp_id = $emp;
        $this->pefd->grn_status = -1;
        $this->pefd->grn_promote_to = $pos;
        $this->pefd->insert_nominee();
        for ($i = 0; $i < count($data['assessor']); $i++) {
            $this->pefd->gro_grp_id = $group_id[0]->grp_id;
            $this->pefd->gro_ase_id = $data['assessor'][$i]->gro_ase_id;
            $this->pefd->insert_assessor();
        }
        $this->pefd->per_date = $date;
        $this->pefd->per_emp_id = $emp;
        $this->pefd->delete_performance();
        $this->pefd->ptf_date = $date;
        $this->pefd->ptf_emp_id = $emp_id;
        $this->pefd->delete_point();
        $this->pefd->grn_grp_id = $grp_id;
        $this->pefd->grn_emp_id = $emp;
        $this->pefd->delete_nominee();
        // $this->load->model('M_pef_summary', 'pef');

        Redirect('/Score_management/Score_management/show_score_management_detail/' . $grp_id);
    }
    /*
	*  get_group
	* display  get_group
	* @input  -
	* @output   get_group
	* @author  Niphat Kuhoksiw
	* @Create  Date 2565-04-10
    */
    public function get_group()
    {
        $date = $this->input->post('date');
        $this->load->model('M_pef_score_management', 'pef');
        $this->pef->grp_date = $date;
        $data = $this->pef->get_group()->result();
        echo json_encode($data);
    }
    public function get_section()
    {
        $this->load->model('M_pef_report', 'pef');
        $data = $this->pef->get_all_section()->result();
        echo json_encode($data);
    }
    /*
	* get_evaluation
	* display  get_evaluation
	* @input  -
	* @output  get_evaluation
	* @author  Niphat Kuhoksiw
	* @Create  Date 2565-04-10
    */
    public function get_evaluation()
    {
        $id = $this->input->post('emp');
        $this->load->model('M_pef_score_management', 'pef');
        $data = $this->pef->get_evaluation($id)->result();
        echo json_encode($data);
    }

}//End class Score_management