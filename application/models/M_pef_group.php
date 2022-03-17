<?php
    /* 
    * M_pef_assessor
    * Model for 
    * @author Phatchara Khongthandee and Ponprapai Atsawanurak
    * @Create Date 2565-03-04
    */
?>

<?php
include_once("Da_pef_group.php");

class M_pef_group extends Da_pef_group
{
    /*
	* get_group_evaluation
	* get 
	* @input  -
	* @output -
	* @author Phatchara Khongthandee and Ponprapai Atsawanurak
	* @Create Date 2565-03-03
    */
    public function get_group_evaluation($ass_id)
    {
        $sql = "SELECT * FROM pefs_database.pef_group AS gr
                    INNER JOIN pefs_database.pef_group_assessor AS grass
                    ON gr.grp_id = grass.gro_grp_id
                    INNER JOIN pefs_database.pef_assessor AS ass
                    ON grass.gro_ase_id = ass.ase_id
                    INNER JOIN pefs_database.pef_assessor_promote AS promote
                    ON grass.gro_asp_id = promote.asp_id
                    INNER JOIN pefs_database.pef_assessor_position AS position
                    ON promote.asp_id = position.gap_asp_id
                    WHERE  ass.ase_emp_id = '$ass_id'";
        $query = $this->db->query($sql);
        return $query;
    } //คืนค่าข้อมูลรายละเอียดของกลุ่มการประเมิน

}