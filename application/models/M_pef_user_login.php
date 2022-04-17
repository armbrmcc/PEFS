<?php
/*
	* M_pef_login.php
    * M_pef_login เข้าสู่ระบบ
    * @author : Chakrit Boonprasert
    * @Create : Date 2565-03-31
*/
defined('BASEPATH') or exit('No direct script access allowed');

include_once("Da_pef_user_login.php");


class M_pef_user_login extends Da_pef_user_login
{ //class M_pef_login

    public function __construct()
    {
        parent::__construct();
    } //function construct

    /*
    * check_login
    * Check User_login and Pass_login in database
    * @input User_login and Pass_loginn
    * @output - 
    * @author Chakrit Boonprasert
    * @Create @Create Date 2565-03-31
    */
    public function check_login($User_login, $User_pass_login)
    { //check User_login and Pass_login in database
        $sql = "SELECT *
			FROM pefs_database.pef_user_login AS ulog 
			WHERE ulog.User_login='$User_login' 
			AND ulog.User_pass_login = '$User_pass_login'";
        $query = $this->db->query($sql);
        return $query;
    } //end check_login


    /*
    * get_emp
    * get Emp_ID in database
    * @input  -
    * @output - 
    * @author Chakrit Boonprasert
    * @Create Date 2565-04-10
    */
    public function get_emp()
    { //get Emp_ID
        $sql = "SELECT * 
        FROM dbmc.employee AS emp
        INNER JOIN dbmc.group_secname AS gsec 
        ON gsec.Sectioncode = emp.Sectioncode_ID
        INNER JOIN dbmc.position AS pos
        ON pos.Position_ID = emp.Position_ID
        INNER JOIN dbmc.sectioncode AS sec
        ON sec.Sectioncode = emp.Sectioncode_ID
        INNER JOIN pefs_database.pef_user_login AS ulog
        ON emp.Emp_ID = ulog.User_emp_id
        WHERE emp.Emp_ID=?";
        $query = $this->db->query($sql, array($this->Emp_ID));
        return $query;
    } //end get_emp

}//end class M_pef_login