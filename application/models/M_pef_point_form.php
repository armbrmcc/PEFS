<?php
    /* 
    * M_pef_group_assessor
    * Model for 
    * @author Phatchara Khongthandee and 
    * @Create Date 2564-08-14  
    */
?>

<?php
include_once("Da_pef_point_form.php");

class M_pef_point_form extends Da_pef_point_form
{

/*
	* get_point
	* คืนค่าคะแนนของฟอร์ม
	* @input   position
	* @output  ข้อมูลคะแนนของฟอร์ม
	* @author  Phatchara Khongthandee and Pontakon Mujit 
	* @Create  Date 2564-08-18 
	* @Update  Date 2564-08-19
	*/
    function get_point()
    {
        $sql = "SELECT MAX(per_id) AS max_id
        FROM pefs_database.pef_performance_form";

        $query = $this->db->query($sql);
        return $query;
    }
}