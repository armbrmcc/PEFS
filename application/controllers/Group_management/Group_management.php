<?php
/*
* Group_management
* @input  -   
* @output -
* @author Jirayut Saifah
* @Create Date 2565-01-26
*/
?>
<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once(dirname(__FILE__) . "/../MainController.php");

class Group_management extends MainController
{
    /**
     * This function displays the group management page
     */
    public function show_group_management()
    {
        $this->output('consent/v_group_management');
    }
    /**
     * This function is used to add a new group
     */
    public function add_group()
    {
        $this->load->model('M_employee', 'emp');
        $position_level_id = 1;
        $this->emp->position_level_id = $position_level_id;
        $data['employee'] = $this->emp->get_position()->result();
        print_r($data);
        // $this->output('consent/v_group_management_add_group', $data);
        //$this->output('consent/v_group_management_add_group');
    }
}