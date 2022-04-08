<?php
    /* 
    * M_pef_group
    * Model for 
    * @author Phatchara Khongthandee and Ponprapai Atsawanurak
    * @Create Date 2565-03-04
    */
?>

<?php
include_once("pefs_model.php");

class Da_pef_group extends pefs_model
{

    function construct()
    {
        parent::__construct();
    }
    public function insert_group()
    {
        $sql = "INSERT INTO pefs_database.pef_group(grp_date,grp_position_group) 
                VALUES (?,?)";
        $this->db->query(
            $sql,
            array($this->grp_date, $this->grp_position_group)
        );
    }
    public function insert_assessor()
    {
        $sql = "INSERT INTO pefs_database.pef_group_assessor(gro_grp_id,gro_ase_id) 
                VALUES (?,?)";
        $this->db->query(
            $sql,
            array($this->gro_grp_id, $this->gro_ase_id)
        );
    }
    public function insert_nominee()
    {
        $sql = "INSERT INTO pefs_database.pef_group_nominee(grn_promote_to,grn_status,grn_emp_id,grn_grp_id) 
                VALUES (?,?,?,?)";
        $this->db->query(
            $sql,
            array($this->grn_promote_to, $this->grn_status, $this->grn_emp_id, $this->grn_grp_id)
        );
    }
}