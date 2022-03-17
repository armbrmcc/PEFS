<?php
    /* 
    * M_pef_assessor_position
    * Model for table pef_assessor_position
    * @author Thitima Popila 
    * @Create Date 256-03-09 
    */
?>

<?php
include_once("Da_pef_group_assessor.php");

class M_pef_assessor_position extends Da_pef_group_assessor
{
    /*
	* get_position_all
	* get position to promote list
	* @input  -
	* @output  position to promote all 
	* @author  Thitima Popila
	* @Create  Date 2565-03-09
    */
    public function get_position_all()
    {

        $sql = "SELECT * FROM pefs_database.pef_assessor_position  AS aspos
                INNER JOIN dbmc.position AS pos
                ON aspos.gap_promote = pos.Position_ID";    
        $query = $this->db->query($sql);
        return $query;
    }//คืนค่าข้อมูลกลุ่มการประเมินของกรรมการ
}