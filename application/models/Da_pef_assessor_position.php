<?php
    /* 
    * Da_pef_assessor_position
    * Model for 
    * @author Apinya Phadungkit
    * @Create Date 2565-04-16
    */
?>

<?php
include_once("pefs_model.php");

class Da_pef_assessor_position extends pefs_model
{

    function construct()
    {
        parent::__construct();
    }

    // *insert
    // *insert group_assessor in database
    // *@input gap_asp_id,gap_pomote
    // *@output -
    // *@author Apinya Phadungkit
    // *@Create Date 16/04/2022
    public function insert()
    {
        $sql = "INSERT INTO pefs_database.pef_assessor_position(gap_asp_id,gap_promote) 
                VALUES (?,?)";
        $this->db->query($sql, array($this->gap_asp_id, $this->gap_promote));
    }

        /*
	* delete
	* delete group_assessor
	* @input   gro_id
	* @output  - 
	* @author  Thitima Popila
	* @Create  Date 2565-03-08
    * @Update  Date 2565-03-08
    */
    public function delete()
    {
        $sql =
            "DELETE FROM pefs_database.pef_assessor_position
            WHERE gap_asp_id=?";
        $this->db->query($sql, array($this->gap_asp_id));
    }

}