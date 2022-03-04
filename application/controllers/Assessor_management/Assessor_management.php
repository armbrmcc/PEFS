<?php
/*
* Assessor_management
* @input  -   
* @output -
* @author Thitima Popila and Apinya Phadungkit
* @Create Date 2565-01-25
*/
?>
<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once(dirname(__FILE__) . "/../MainController.php");

class Assessor_management extends MainController
{
    public function __construct()
    {
        parent::__construct();
    }

    /*
	* show_assessor_management
	* display view assessor group management
	* @input  -
	* @output  Assessor group list
	* @author  Thitima Popila
	* @Create  Date 2565-01-25
    */
    public function show_assessor_management()
    {
        $this->load->model('M_pef_group_assessor', 'pef');
        $data['as_group'] = $this->pef->get_group_assessor_all()->result();
        // print_r($data);
        $this->output('consent/v_assessor_management', $data);
        
    }

    public function show_assessor_management_detail($id)
    {
        echo $id;
        $this->output('consent/v_assessor_management_detail');
    }
}