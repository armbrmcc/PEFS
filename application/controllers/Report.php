<?php
/*
* PEFS_Controller
* @input  -   
* @output -
* @author Team 6
* @Create Date 2564-10-15
*/
?>
<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once(dirname(__FILE__) . "/MainController.php");

class Report extends MainController
{

    // /*
    // * index
    // * 
    // * @input 
    // * @output 
    // * @author 	Kunanya Singmee
    // * @Create Date 2564-7-10
    // */
    function index()
    {
        // $this->output('Main_index');
        $this->output("consent/v_test_report");
    }
    // function index()

    function show_detail_report()
    {
        // $this->output('Main_index');
        $this->output("consent/v_detail_report");
    }

    function show_report_asse_detail()
    {
        // $this->output('Main_index');
        $this->output("consent/v_report_asse_detail");
    }
}
// 