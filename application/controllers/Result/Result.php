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
	* show_Result_group
	* display view Result group
	* @input  -
	* @output  Result group
	* @author  Phatchara Khongthandee and Ponprapai Atsawanurak
	* @Create  Date 2565-01-25
    */
    public function show_Result_group()
    {
        $this->output('consent/v_result_group');
    }
    //show_Result_group

    /*
	* show_Result_list
	* display view Result list
	* @input  -
	* @output  Result list
	* @author  Phatchara Khongthandee and Ponprapai Atsawanurak
	* @Create  Date 2565-01-25
    */
    public function show_Result_list()
    {
        $this->output('consent/v_result_list');
    } //show_Result_list

    /*
	* show_Result_detail
	* display view Result detail
	* @input  -
	* @output  Result detail
	* @author  Ponprapai Atsawanurak and Phatchara Khongthandee
	* @Create  Date 2565-01-25
    */
    public function show_Result_detail()
    {
        $this->output('consent/v_result_detail');
    } //show_Result_detail

}//End class Result