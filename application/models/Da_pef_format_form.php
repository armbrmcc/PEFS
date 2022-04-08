<?php
    /* 
    * Da_pef_format_form
    * Model for 
    * @author Phatchara Khongthandee and Ponprapai Atsawanurak
    * @Create Date 2565-03-04
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


    function insert_format_form()
    {
        $sql = "INSERT INTO pefs_database.pef_format_form(for_des_id,for_item_id,for_pos_id) 
        VALUES (?,?,?)";

        $this->db->query($sql, array($this->for_des_id, $this->for_item_id, $this->for_pos_id));

    }//เพิ่มข้อมูล for_des_id, for_item_id, for_pos_id \
    
    function delete_format_form()
    {
        $sql = "DELETE FROM pefs_database.pef_format_form WHERE for_pos_id = ?;";
        $query = $this->db->query($sql, array($this->for_pos_id));
        return $query;
    }
}