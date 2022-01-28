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
        $this->output('consent/v_evaluation_list');
    } //show_evaluation_list

    /*
	* show_evaluation_detail
	* display view evaluation detail
	* @input  -
	* @output  Evaluation detail
	* @author  Phatchara Khongthandee and Ponprapai Atsawanurak
	* @Create  Date 2565-01-25
    */
    public function show_evaluation_detail()
    {
        $this->output('consent/v_evaluation_detail');
    } //show_evaluation_detail

    /*
	* show_evaluation_form_round_1
	* display view evaluation form 1 round
	* @input  -
	* @output  Evaluation form 1 round
	* @author  Phatchara Khongthandee and Ponprapai Atsawanurak
	* @Create  Date 2565-01-26
    */
    public function show_evaluation_form_round_1()
    {
        $this->output('consent/v_evaluation_form_round_1');
    } //show_evaluation_detail

    /*
	* show_evaluation_form_round_2
	* display view evaluation form 2 round
	* @input  -
	* @output  Evaluation form 2 round
	* @author  Phatchara Khongthandee and Ponprapai Atsawanurak
	* @Create  Date 2565-01-26
    */
    public function show_evaluation_form_round_2()
    {
        $this->output('consent/v_evaluation_form_round_2');
    } //show_evaluation_detail

}//End class Evaluation