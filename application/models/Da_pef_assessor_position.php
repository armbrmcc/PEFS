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
        $sql = "INSERT INTO pefs_database.pef_assessor_position(gap_asp_id,gap_pomote) 
                VALUES (?,?)";
        $this->db->query($sql, array($this->gro_grp_id, $this->gap_asp_id, $this->gap_pomote));
    }

}