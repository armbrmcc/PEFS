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
        $this->load->model('M_pef_employee', 'emp');
        $position_level_id = 1;
        $this->emp->position_level_id = $position_level_id;
        $data['employee'] = $this->emp->get_position()->result();
        //print_r($data);
        $this->output('consent/v_group_management_add_group', $data);
        //$this->output('consent/v_group_management_add_group');
    }
    /*
	* insert
	* insert group to database
    * @input information data
	* @output -
	* @author Jirayut Saifah
	* @Create Date 2564-8-13
	*/
    function insert()
    {
        $this->load->model('Da_pef_group', 'pefd');
        $this->load->model('M_pef_group', 'pef');
        $date[0] = $this->input->post('date');
        $position_group = $this->input->post('position_group');
        $assessor = $this->input->post('emp_assessor');
        $nominee = $this->input->post('emp_nominee');
        $pos_id = $this->input->post('pos_id');
        $this->pefd->grp_date = $date;
        $this->pefd->grp_year = $this->input->post('year');
        $this->pefd->grp_position_group = $position_group;
        $this->pefd->insert_group();
        $group_id = $this->pef->get_group_id()->result();
        if ($this->input->post('date2') == "") {
            $this->pefd->grd_grp_id = $group_id[0]->grp_id;
            $this->pefd->grd_date = $date[0];
            $this->pefd->grd_round = '1';
            $this->pefd->insert_group_schedule();
        } else {
            $date[1] = $this->input->post('date2');
            for ($i = 0; $i <= 1; $i++) {
                $this->pefd->grd_grp_id = $group_id[0]->grp_id;
                $this->pefd->grd_date = $date[$i];
                $this->pefd->grd_round = $i + 1;
                $this->pefd->insert_group_schedule();
            }
        }

        for ($i = 0; $i < sizeof($assessor); $i++) {
            $this->pefd->gro_grp_id = $group_id[0]->grp_id;
            $this->pefd->gro_ase_id = $assessor[$i];
            $this->pefd->insert_assessor();
        }
        for ($i = 0; $i < sizeof($nominee); $i++) {
            $this->pefd->grn_grp_id = $group_id[0]->grp_id;
            $this->pefd->grn_emp_id = $nominee[$i];
            $this->pefd->grn_promote_to = $pos_id[$i];
            $this->pefd->insert_nominee();
        }
        // $data['obj_sec'] = $this->pef->get_section()->result();
        // $this->output('consent/v_group_list', $data);
        $data = "insert_success";
        echo json_encode($data);
    }
}