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
	* @output  Evaluation list
	* @author  Phatchara Khongthandee and Ponprapai Atsawanurak
	* @Create  Date 2565-01-25
    */
    public function show_evaluation_list()
    {
        $ass_id = '03695';
        $this->load->model('M_pef_assessor', 'pef');
        $data['grass_list'] = $this->pef->get_assessor_by_id($ass_id)->result();
        $data['grass_detail'] = $this->pef->get_assessor_detail($ass_id)->result();
        // echo "<pre>";
        //     print_r($data['grass_list']);
        // echo "</pre>";
        $this->output('consent/v_evaluation_list', $data);
    } //show_evaluation_list

    /*
	* show_evaluation_detail
	* display view evaluation detail
	* @input  -
	* @output Evaluation detail
	* @author Phatchara Khongthandee and Ponprapai Atsawanurak
	* @Create Date 2565-01-25
    */
    public function show_evaluation_detail($group_id, $group_ass)
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
        $this->output('consent/v_evaluation_detail', $data);
    } //show_evaluation_detail

    /*
	* show_evaluation_form_round_1
	* display view evaluation form 1 round
	* @input  -
	* @output Evaluation form 1 round
	* @author Phatchara Khongthandee and Ponprapai Atsawanurak
	* @Create Date 2565-01-26
    */
    public function show_evaluation_form_round_1()
    {
        $this->output('consent/v_evaluation_form_round_1');
    } //show_evaluation_detail

    /*
	* show_evaluation_form_round_2
	* display view evaluation form 2 round
	* @input  -
	* @output Evaluation form 2 round
	* @author Phatchara Khongthandee and Ponprapai Atsawanurak
	* @Create Date 2565-01-26
    */
    public function show_evaluation_form_round_2()
    {
        $this->output('consent/v_evaluation_form_round_2');
    } //show_evaluation_detail

}//End class Evaluation