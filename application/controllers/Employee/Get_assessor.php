<?php
/*
* Employee
* Employee detail
* @author Jirayut Saifah
* @Create Date 2564-8-13
*/
?>
<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once(dirname(__FILE__) . "/../MainController.php");

class Get_assessor extends MainController
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */

    /*
	* get_nominee_by_id
	* search nominee detail by group
	* @input group id
	* @output nominee detail
	* @author Jirayut Saifah
	* @Create Date 2564-8-15
	*/
    function get_assessor_by_year()
    {

        $this->load->model('M_pef_assessor', 'ass');
        $this->ass->ase_year = $this->input->post('years');
        $data = $this->ass->get_assessor_by_year()->result();
        // echo $data['assessor'];
        echo json_encode($data);
    }
}
// 