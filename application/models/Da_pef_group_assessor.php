<?php
    /* 
    * M_pef_assessor
    * Model for 
    * @author Phatchara Khongthandee and Ponprapai Atsawanurak
    * @Create Date 2565-03-04
    */
?>

<?php
include_once("pefs_model.php");

class Da_pef_group_assessor extends pefs_model
{

    function construct()
    {
        parent::__construct();
    }


    // *insert
    // *insert group_assessor in database
    // *@input gro_asp_id
    // *@output -
    // *@author Apinya Phadungkit
    // *@Create Date 30/03/2022
    public function insert()
    {
        $sql = "INSERT INTO pefs_database.pef_group_assessor(gro_asp_id) 
                VALUES (?)";
        $this->db->query($sql, array($this->gro_asp_id));
    }

}