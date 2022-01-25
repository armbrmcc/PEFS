<?php
    /*
    * Score Management
    * Controller for Score Management module
    * @author Jaraspon Seallo and Nipat 
    * @Create Date 2565-01-26
    */
?>

<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once(dirname(__FILE__) . "/../MainController.php");

//Start class Score Management
class Score_management extends MainController
{

    public function __construct()
    {
        parent::__construct();
    }

    /*
	* show_score_management_list
	* display view Score Management list
	* @input  -
	* @output  Score Management list
	* @author  Jaraspon Seallo
	* @Create  Date 2565-01-23
    */
    public function show_score_management_list()
    {
        $this->output('consent/v_score_management');
    } //show_score_management_list

}//End class Score_management