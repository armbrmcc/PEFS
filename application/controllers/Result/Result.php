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
    * @Update  Date 2565-04-12
    * Update By Thitima Popila
    */
    public function show_result_group()
    {
        $ass_id = $_SESSION['UsEmp_ID'];
        $this->load->model('M_pef_assessor_promote', 'as_group');
        $data['arr_assessor_group'] = $this->as_group->get_assessor_group_by_id($ass_id)->result();
        
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
    * @Update  Date 2565-04-12
    * Update By Thitima Popila
    */
    public function show_result_list($group_id)
    {
        $this->load->model('M_pef_group_nominee', 'nominee');
        $data['arr_nominee'] = $this->nominee->get_nominee_detail($group_id)->result();
        // echo "<pre>";
        //     print_r($data['arr_nominee']);
        // echo "</pre>";
        $this->output('consent/v_result_list', $data);
    } //show_result_list

    /*
	* show_result_evaluation
	* display view Result evaluation of round 1
	* @input  -
	* @output  eesult evaluation
	* @author  Ponprapai Atsawanurak and Phatchara Khongthandee
	* @Create  Date 2565-01-25
    */
    public function show_result_evaluation_type1()
    {
        $this->output('consent/v_result_evaluation');
    } //show_result_evaluation_type1

    /*
	* show_result_evaluation
	* display view Result evaluation of round 2
	* @input  -
	* @output  eesult evaluation
	* @author  Ponprapai Atsawanurak and Thitima Popila
	* @Create  Date 2565-04-13
    */
    public function show_result_evaluation_type2()
    {
        $this->output('consent/v_result_evaluation');
    } //show_result_evaluation_type2
}//End class Result