<?php
/* 
    * M_pef_group_assessor
    * Model for 
    * @author Phatchara Khongthandee and Ponprapai Atsawanurak 
    * @Create Date 2564-08-14  
    */
?>

<?php
include_once("Da_pef_point_form.php");

class M_pef_point_form extends Da_pef_point_form
{

    /*
	* get_point
	* get point form evaluation
	* @input  -
	* @output point form
	* @author Phatchara Khongthandee and Ponprapai Atsawanurak 
	* @Create Date 2565-03-10 
	*/
    function get_point()
    {
        $sql = "SELECT MAX(per_id) AS max_id
        FROM pefs_database.pef_performance_form";

        $query = $this->db->query($sql);
        return $query;
    }

    /* Report
    * get_data_point
    * get data section, point_form, nominee, group
    * @input    -
    * @output   get data section, point_form, nominee, group
    * @author   Chakrit
    * @Create Date 2565-04-11
    */
    public function get_data_point()
    {
        $sql = "SELECT * 
                FROM pefs_database.pef_point_form AS poi
                INNER JOIN pefs_database.pef_performance_form AS pfm
                ON poi.ptf_per_id = pfm.per_id
                INNER JOIN pefs_database.pef_group_nominee AS grn
                ON pfm.per_emp_id = grn.grn_emp_id
                INNER JOIN pefs_database.pef_group AS grp
                ON grp.grp_id = grn.grn_grp_id
                INNER JOIN pefs_database.pef_section AS sec
                ON sec.sec_id = grp.grp_position_group
                WHERE sec.sec_id = ?";
        $query = $this->db->query($sql, array($this->sec_id));
        return $query;
    }

    /* Report
    * get_data_point_by_nor_id
    * get data point_form, nominee, group, section
    * @input    -
    * @output   get data point_form, nominee, group, section
    * @author   Chakrit
    * @Create Date 2565-04-12
    */
    public function get_data_point_by_nor_id()
    {
        $sql = "SELECT * 
                FROM pefs_database.pef_point_form AS poi
                INNER JOIN pefs_database.pef_performance_form AS pfm
                ON poi.ptf_per_id = pfm.per_id
                INNER JOIN pefs_database.pef_group_nominee AS grn
                ON pfm.per_emp_id = grn.grn_emp_id
                INNER JOIN pefs_database.pef_group AS grp
                ON grp.grp_id = grn.grn_grp_id
                INNER JOIN pefs_database.pef_section AS sec
                ON sec.sec_id = grp.grp_position_group
                WHERE grn.grn_id = ?";
        $query = $this->db->query($sql, array($this->grn_id));
        return $query;
    }

    /*
	* get_point_list
	* คืนค่าคะแนนของแต่ละฟอร์ม
	* @input 	$per_id
	* @output 	คืนค่าคะแนนของแต่ละฟอร์ม
	* @author 	Phatchara Khongthandee and Pontakon Mujit 
	* @Create   Date 2564-08-18 
	* @Update   Date 2564-08-19
	*/
    function get_point_list($per_id)
    {
        $sql = "SELECT *
            FROM  pefs_database.pef_point_form
            WHERE pef_point_form.ptf_per_id = '$per_id' ";

        $query = $this->db->query($sql);
        return $query;
    }
    /*
	* get_point_list_round1
	* คืนค่าคะแนนของแต่ละฟอร์ม
	* @input 	$per_id
	* @output 	คืนค่าคะแนนของแต่ละฟอร์ม
	* @author 	Thitima Popila 
	* @Create   Date 2564-04-15 
	*/
    function get_point_list_round1($per_id)
    {
        $sql = "SELECT *
            FROM  pefs_database.pef_point_form
            WHERE pef_point_form.ptf_per_id = '$per_id' AND pef_point_form.ptf_round = 1";

        $query = $this->db->query($sql);
        return $query;
    }

    /*
	* get_point_list_round2
	* คืนค่าคะแนนของแต่ละฟอร์ม
	* @input 	$per_id
	* @output 	คืนค่าคะแนนของแต่ละฟอร์ม
	* @author 	Thitima Popila 
	* @Create   Date 2564-04-15 
	*/
    function get_point_list_round2($per_id)
    {
        $sql = "SELECT *
            FROM  pefs_database.pef_point_form
            WHERE pef_point_form.ptf_per_id = '$per_id' AND pef_point_form.ptf_round = 2";

        $query = $this->db->query($sql);
        return $query;
    }
}
