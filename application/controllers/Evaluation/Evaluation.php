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
    */
    public function show_evaluation_list()
    {
        $ass_id = '03695';
        $this->load->model('M_pef_group', 'pef');
        $data['arr_group'] = $this->pef-> get_group_evaluation($ass_id)->result();
        // echo "<pre>";
        //     print_r($data['arr_group']);
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
    * @Update Date 2565-03-04
    */
    public function show_evaluation_detail($ass_id, $group_id)
    {
        $this->load->model('M_pef_group', 'pef');
        $this->load->model('M_pef_group_nominee', 'nominee');
        $data['arr_group'] = $this->pef-> get_group_evaluation($ass_id)->result();
        $data['arr_nominee'] = $this->nominee->get_nominee_detail($group_id)->result();
        // echo "<pre>";
        //     print_r($data['arr_group']);
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
    * @Update Date 2565-03-04
    */
    public function show_evaluation_form_round_1($group_id, $id_assessor, $id_nominee)
    {
        $this->load->model('M_pef_assessor', 'assessor');
        $this->load->model('M_pef_group_nominee', 'nominee');
        $data['arr_nominee'] = $this->nominee->get_nominee_detail($group_id)->result();
        $data['obj_assessor'] = $this->assessor->get_assessor_by_id($id_assessor)->result();
        $data['obj_nominee'] = $this->nominee->get_nominee_by_id($id_nominee)->result();
        $data['obj_promote'] = $this->nominee-> get_promote_to($id_nominee)->result();
        // echo "<pre>";
        //     print_r($data['obj_nominee']);
        // echo "</pre>";
        $this->output('consent/v_evaluation_form_round_1', $data);
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