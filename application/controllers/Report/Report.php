<?php
/*
* Report
* @input  -   
* @output -
* @author Chakrit and Nattakorn
* @Create Date 2565-01-27
*/
?>
<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once(dirname(__FILE__) . "/../MainController.php");

class Report extends MainController
{
    public function __construct()
    {
        parent::__construct();
    }
    public function show_report_all()
    {
        $this->output('consent/v_report_all');
    }
    public function show_report_group()
    {
        $this->output('consent/v_report_group');
    }

    public function show_report_person()
    {
        $this->output('consent/v_report_person');
    }
}