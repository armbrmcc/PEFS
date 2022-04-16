<?php
    /* 
    * M_pef_description_form
    * Model for 
    * @author  
    * @Create Date  
    */
?>

<?php
include_once("Da_pef_description_form.php");

class M_pef_description_form extends Da_pef_description_form
{
    /*
	* get_description_form_by_id
	* get 
	* @input  -
	* @output -
	* @author  
	* @Create Date  
    */
    public function get_description_form_by_id()
    {
        $sql = "SELECT des.des_id , des.des_description_eng , des.des_description_th , des.des_weight , des.des_item_id   
        FROM dbmc.position AS pos
        INNER JOIN pefs_database.pef_item_form AS itm
        ON pos.Position_ID = itm.itm_promote
        INNER JOIN pefs_database.pef_description_form AS des 
        ON itm.itm_id = des.des_item_id
        WHERE  pos.Position_ID = ?";
        $query = $this->db->query($sql, array($this->pos_id));
        return $query;
    } //คืนค่าข้อมูลรายละเอียดของหัวข้อ


    /*
	* get_description_evaluation_by_id
	* get 
	* @input  -
	* @output -
	* @author  
	* @Create Date  
    */
    public function get_description_evaluation_by_id()
    {
        $sql = "SELECT des.des_id , des.des_description_eng , des.des_description_th , des.des_weight , des.des_item_id   
        FROM  pefs_database.pef_format_form AS form
        INNER JOIN pefs_database.pef_item_form AS item
        ON form.for_item_id = item.itm_id
        INNER JOIN pefs_database.pef_description_form AS des
        ON  item.itm_id = des.des_item_id
        WHERE form.for_pos_id = ?";
        $query = $this->db->query($sql, array($this->pos_id));
        return $query;
    } //คืนค่าข้อมูลรายละเอียดของหัวข้อ

}