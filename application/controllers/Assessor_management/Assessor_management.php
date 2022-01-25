<?php
/*
* Assessor_management
* @input  -   
* @output -
* @author Thitima and Apinya
* @Create Date 2565-01-25
*/
?>
<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once(dirname(__FILE__) . "/../MainController.php");

class Assessor_management extends MainController
{
    public function show_assessor_management()
    {
        $this->output('consent/v_assessor_management');
    }

    public function show_assessor_management_detail()
    {
        $this->output('consent/v_assessor_management_detail');
    }
}