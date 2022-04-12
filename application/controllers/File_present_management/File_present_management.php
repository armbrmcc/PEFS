<?php
/*
* File_present_management
* @input  -   
* @output -
* @author Chakrit
* @Create Date 2565-01-27
*/
?>
<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once(dirname(__FILE__) . "/../MainController.php");

class File_present_management extends MainController
{
    public function __construct()
    {
        parent::__construct();
    }
    public function show_file_present()
    {
        $id = $_SESSION['UsEmp_ID'];
        $this->load->model('M_pef_file', 'list');

        $this->load->model('M_pef_group_nominee', 'nom');
        $data['emp_file'] = $this->list->get_file_nominee()->result();
        $data['emp_nominee'] = $this->nom->get_nominee()->result();
        $this->output('consent/v_add_file_present', $data);
    }
}