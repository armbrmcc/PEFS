<?php
/*
    * M_pef_item_form
    * Model for item form
    * @author Pontakon M.
    * @Create Date 2565-04-08
*/
?>

<?php
include_once("Da_pef_item_form.php");

class M_pef_item_form extends Da_pef_item_form
{
    /*
	* get_item_form_by_id
	* get item detail
	* @input  id_position,item_yaer
	* @output get item detail
	* @author Pontakon M.
	* @Create date 2565-04-08
    */
    public function get_item_form_by_id()
    {
        $sql = "SELECT * FROM dbmc.position AS pos
        INNER JOIN pefs_database.pef_item_form AS itm
        ON pos.Position_ID = itm.itm_promote
        WHERE  pos.Position_ID = ?
        AND  itm.itm_year =?";
        $query = $this->db->query($sql, array($this->pos_id,$this->pos_year));
        return $query;
    } //คืนค่าข้อมูลรายละเอียดของหัวข้อ
    

    /*
	* get_item_evaluation_by_id
	* get item detail but use in evaluation
	* @input  id_position,item_yaer
	* @output get item detail
	* @author Pontakon M.
	* @Create date 2565-04-12
    */
    public function get_item_evaluation_by_id()
    {
        $sql = "SELECT itm.itm_id   , itm.itm_name , itm.itm_item_detail
        FROM  pefs_database.pef_format_form AS form
        INNER JOIN pefs_database.pef_item_form AS itm
        ON form.for_item_id = itm.itm_id 
        WHERE  form.for_pos_id = ?
        AND  itm.itm_year =?";

        $query = $this->db->query($sql, array($this->pos_id, $this->pos_year));
        return $query;
    } //คืนค่าข้อมูลรายละเอียดของหัวข้อ

}