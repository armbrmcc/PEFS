<!--
    /*
    * Evaluation
    * Controller for Evaluation module
    * @author Phatchara Khongthandee and Pontakon Mujit 
    * @Create Date 2564-08-14
    */
-->
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
	* แสดงหน้าจอ v_evaluation_list
	* @input  -
	* @output  Evaluation list
	* @author  Phatchara Khongthandee and Pontakon Mujit
	* @Create  Date 2564-08-14
    */
    public function show_evaluation_list()
    {
        $this->output('consent/v_evaluation_list');
    } //show_evaluation_list

    /*
	* show_evaluation_detail
	* แสดงหน้าจอ v_evaluation_list
	* @input  -
	* @output  Evaluation detail
	* @author  Phatchara Khongthandee and Pontakon Mujit
	* @Create  Date 2564-08-14
    */
    public function show_evaluation_detail()
    {
        $this->output('consent/v_evaluation_detail');
    } //show_evaluation_detail

}//End class Evaluation