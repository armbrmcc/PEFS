<?php
/*
	* Da_pef_login.php
    * Da_pef_login เข้าสู่ระบบ
    * @author : Chakrit Boonprasert
    * @Create : Date 2565-03-31
*/
defined('BASEPATH') OR exit('No direct script access allowed');

include_once('pefs_model.php');

class Da_pef_user_login extends pefs_model 
{//class Da_pef_user_login
    

	public function __construct()
	{//construct
        parent::__construct();
	}//end construct

    // *insert_login
    // *insert assessor in database
    // *@input User_login,User_emp_id,User_pass_login,User_Role
    // *@output -
    // *@author Chakrit Boonprasert
    // *@Create Date 2565-04-28
    public function insert_login()
    {
        $sql = "INSERT INTO pefs_database.pef_user_login(User_login,User_emp_id,User_pass_login,User_Role) 
                VALUES (?,?,?,?)";
        $this->db->query($sql, array($this->User_login, $this->User_emp_id, $this->User_pass_login, $this->User_Role));
    }

}//end class Da_pef_user_login