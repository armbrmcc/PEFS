<?php
/*
* Assessor_management
* Controller for Group Assessor module   
* @author Thitima Popila and Apinya Phadungkit
* @Create Date 2565-01-25
* @Update Date 2565-03-04
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
        $this->load->model('M_pef_group_assessor', 'mpef');
        $data['arr_group'] = $this->mpef->get_group_assessor_all()->result();
        // print_r($data);
        $this->output('consent/v_assessor_management', $data);
        
    }

    public function show_assessor_management_detail($id) // มาจาก gro_ase_id
    {
        // echo $id; 
        $this->load->model('M_pef_group_assessor', 'gass');
        $data['arr_ass'] = $this->gass->get_assessor_list($id)->result();
        $this->output('consent/v_assessor_management_detail', $data);
    }

    public function delete_group_assessor($id)
    {
        $this->load->model('Da_pef_group_assessor', 'dpef');
        $this->dpef->gro_id = $id;
        $this->dpef->delete();
        echo $id;
        // redirect('Plant_management/Plant_list/index');
    }
}