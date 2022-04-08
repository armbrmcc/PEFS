<?php
    /* 
    * M_pef_section
    * Model for 
    * @author  
    * @Create Date  
    */
?>

<?php
include_once("Da_pef_section.php");

class M_pef_section extends Da_pef_section
{
    /*
	* get_all_section
	* get 
	* @input  -
	* @output -
	* @author  
	* @Create Date  
    */
    public function get_all_section()
    {
        $sql = "SELECT * FROM pefs_database.pef_section ";
        $query = $this->db->query($sql);
        return $query;
    } //คืนค่าข้อมูลรายละเอียดของหัวข้อ

    public function get_position_by_section()
    {
        $sql = "SELECT * 
        FROM dbmc.position AS pos
        WHERE pos.position_level_id=?";
        $query = $this->db->query($sql,array($this->position_level_id));
        return $query;
    }
}