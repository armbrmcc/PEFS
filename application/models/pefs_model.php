<?php
/*
* pef_model
* -
* @author JIRAYUT SAIFAH
* @Create Date 2565-03-31
*/ ?>
<?php
class pefs_model extends CI_Model
{

	function __construct()
	{
		parent::__construct();
		$this->pefs = $this->load->database('pefs', TRUE);
	}
}