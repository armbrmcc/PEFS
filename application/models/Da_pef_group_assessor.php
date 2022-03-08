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

    public function delete()
    {
        $sql =
            "DELETE FROM pefs_database.pef_group_assessor
            WHERE gro_grp_id=?";
        $this->db->query($sql, array($this->gro_grp_id));
    }

}