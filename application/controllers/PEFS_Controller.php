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

class PEFS_Controller extends MainController
{

	/*
	* index
	* @input  -
	* @output -
	* @author Chakrit Boonprasert
	* @Create Date 2565-03-31
	*/
	function index()
	{
		$this->output_login('auth/v_user_login');
	}
	// function index()


}
// 