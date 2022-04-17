<?php
    /* 
    * Da_pef_format_form
    * Model for format_form
    * @author Pontakon M.
    * @Create Date 2565-04-14
*/
?>

<?php
include_once("pefs_model.php");

class Da_pef_format_form extends pefs_model
{

    function construct()
    {
        parent::__construct();
    }

    /*
	* insert_format_form 
	* insert_format_form
	* @input  for_des_id,for_item_id,for_pos_id
	* @output nominee_detail
	* @author Pontakon M.
	* @Create date 2565-04-08
    */
    function insert_format_form()
    {
        $sql = "INSERT INTO pefs_database.pef_format_form(for_des_id,for_item_id,for_pos_id) 
        VALUES (?,?,?)";

        $this->db->query($sql, array($this->for_des_id, $this->for_item_id, $this->for_pos_id));

    }//เพิ่มข้อมูล for_des_id, for_item_id, for_pos_id 
    

    /*
	* delete_format_form 
	* delete_format_form
	* @input  for_pos_id 
	* @output -
	* @author Pontakon M.
	* @Create date 2565-04-08
    */
    function delete_format_form()
    {
        $sql = "DELETE FROM pefs_database.pef_format_form WHERE for_pos_id = ?;";
        $query = $this->db->query($sql, array($this->for_pos_id));
        return $query;
    }
}