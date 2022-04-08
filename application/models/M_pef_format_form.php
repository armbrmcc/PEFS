<?php
    /* 
    * M_pef_format_form
    * Model for 
    * @author Phatchara Khongthandee and Ponprapai Atsawanurak 
    * @Create Date 2565-03-04  
    */
?>

<?php
include_once("Da_pef_format_form.php");

class M_pef_format_form extends Da_pef_format_form
{
    /*
    * get_evaluation_form
	* get form evaluation by position
	* @input  -
	* @output form evaluation
	* @author Phatchara Khongthandee and Ponprapai Atsawanurak 
	* @Create Date 2565-03-04
	*/
    public function get_evaluation_form($promote){
        $sql = "SELECT *
                FROM  pefs_database.pef_format_form AS form
                INNER JOIN pefs_database.pef_item_form AS item
                ON form.for_item_id = item.itm_id
                INNER JOIN pefs_database.pef_description_form AS desform
                ON item.itm_id = desform.des_item_id
                WHERE form.for_pos_id = '$promote'";
        $query = $this->db->query($sql);
        return $query;
    }

}