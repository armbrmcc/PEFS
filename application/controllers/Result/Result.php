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
	* @author  Phatchara Khongthandee and Ponprapai Atsawanurak
	* @Create  Date 2565-01-25
    */
    public function show_result_group()
    {
        $ass_id = '03695';
        $this->load->model('M_pef_assessor', 'pef');
        $data['grass_list'] = $this->pef->get_assessor_by_id($ass_id)->result();
        $data['grass_detail'] = $this->pef->get_assessor_detail($ass_id)->result();
        $this->output('consent/v_result_group', $data);
    }
    //show_result_group

    /*
	* show_result_list
	* display view result list
	* @input  -
	* @output  result list
	* @author  Phatchara Khongthandee and Ponprapai Atsawanurak
	* @Create  Date 2565-01-25
    */
    public function show_result_list($group_id, $group_ass)
    {
        $ass_id = '03695';
        $this->load->model('M_pef_assessor', 'pef');
        $this->load->model('M_pef_group_assessor', 'pefs');
        $this->load->model('M_pef_group_nominee', 'nominee');
        $data['groupass_detail'] = $this->pef->get_assessor_by_id($ass_id)->result();
        $data['group_detail'] = $this->pefs->get_group_assessor($group_id, $group_ass)->result();
        $data['arr_nominee'] = $this->nominee->get_group_nominee_detail($group_id)->result();
        // echo "<pre>";
        //     print_r($data['nominee']);
        // echo "</pre>";
        $this->output('consent/v_result_list', $data);
    } //show_result_list

    /*
	* show_Result_detail
	* display view result detail
	* @input  -
	* @output  result detail
	* @author  Ponprapai Atsawanurak and Phatchara Khongthandee
	* @Create  Date 2565-01-25
    */
    public function show_result_detail()
    {
        $this->output('consent/v_result_detail');
    } //show_result_detail

    /*
	* show_result_evaluation
	* display view Result evaluation
	* @input  -
	* @output  eesult evaluation
	* @author  Ponprapai Atsawanurak and Phatchara Khongthandee
	* @Create  Date 2565-01-25
    */
    public function show_result_evaluation()
    {
        $this->output('consent/v_result_evaluation');
    } //show_result_evaluation
}//End class Result