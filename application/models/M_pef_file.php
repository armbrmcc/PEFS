<?php
    /* 
    * M_pef_file
    * Model for pef_file
    * @author Phatchara Khongthandee and Ponprapai Atsawanurak
    * @Create Date 2565-03-12
    */
?>

<?php
include_once("Da_pef_file.php");

class M_pef_file extends Da_pef_file
{

    /*
	* get_file
	* get data file Nominee from database
	* @input  -
	* @output -
	* @author Phatchara Khongthandee and Ponprapai Atsawanurak
	* @Create Date 2565-03-12
    */
    public function get_file_nominee()
    {
        $sql = "SELECT *
                FROM pefs_database.pef_file";
        $query = $this->db->query($sql);
        return $query;
    }


    /*
	* get_file_by_id
	* get data file Nominee from database
	* @input  -
	* @output -
	* @author pontakon
	* @Create Date 2565-04-18
    */
    public function get_file_by_id($Emp_ID)
    {
        $sql = "SELECT * FROM pefs_database.pef_file WHERE fil_emp_id = '$Emp_ID'";
        $query = $this->db->query($sql);
        return $query;
    }

    /*
    * get_file_present_nominee
    * คืนค่าไฟล์นำเสนอ Nominee
    * @input    $emp_id (รหัส Nominee)
    * @output   ไฟล์นำเสนอ Nominee
    * @author   Phatchara Khongthandee and Pontakon Mujit 
    * @Create   Date 2564-08-15
    * @Update   Date 2564-08-16
    */
    public function get_file_present_nominee($id_nominee)
    {
        $sql = "SELECT * 
                FROM pefs_database.pef_file AS nofile
                INNER JOIN pefs_database.pef_group_nominee AS groupno
                ON nofile.fil_emp_id = groupno.grn_emp_id
                WHERE groupno.grn_id = $id_nominee";

        $query = $this->db->query($sql);
        return $query;
    }
    

}