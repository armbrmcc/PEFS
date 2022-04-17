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
        $sql = "INSERT INTO pefs_database.pef_group(grp_date,grp_year,grp_position_group) 
                VALUES (?,?,?)";
        $this->db->query(
            $sql,
            array($this->grp_date, $this->grp_year, $this->grp_position_group)
        );
    }
    public function insert_group_schedule()
    {
        $sql = "INSERT INTO pefs_database.pef_group_schedule(grd_date,grd_round,grd_grp_id) 
                VALUES (?,?,?)";
        $this->db->query(
            $sql,
            array($this->grd_date, $this->grd_round, $this->grd_grp_id)
        );
    }
    public function insert_assessor()
    {
        $sql = "INSERT INTO pefs_database.pef_group_assessor(gro_grp_id,gro_ase_id,gro_asp_id) 
                VALUES (?,?,?)";
        $this->db->query(
            $sql,
            array($this->gro_grp_id, $this->gro_ase_id, $this->gro_asp_id)
        );
    }
    public function insert_nominee()
    {
        $sql = "INSERT INTO pefs_database.pef_group_nominee(grn_promote_to,grn_emp_id,grn_grp_id,grn_status_done,grn_status_result) 
                VALUES (?,?,?,-1,-1)";
        $this->db->query(
            $sql,
            array($this->grn_promote_to, $this->grn_emp_id, $this->grn_grp_id, $this->grn_status_done, $this->grn_status_result)
        );
    }
    /*
    * delete_group
    * delete group from database
    * @input grp_id
    * @output 
    * @author Jirayut Saifah
    * @Create Date 2564-08-13
    */
    public function delete_group()
    {
        $sql = "DELETE FROM pefs_database.pef_group WHERE grp_id=?";
        $this->db->query(
            $sql,
            array($this->grp_id)
        );
    }
    /*
    * delete_group_assessor
    * delete assessor from database
    * @input gro_grp_id
    * @output 
    * @author Jirayut Saifah
    * @Create Date 2564-08-13
    */
    public function delete_group_assessor()
    {
        $sql = "DELETE FROM pefs_database.pef_group_assessor WHERE gro_grp_id=?";
        $this->db->query(
            $sql,
            array($this->gro_grp_id)
        );
    }
    /*
    * delete_group_nominee
    * delete nominee from database
    * @input grn_grp_id
    * @output 
    * @author Jirayut Saifah
    * @Create Date 2564-08-13
    */
    public function delete_group_nominee()
    {
        $sql = "DELETE FROM pefs_database.pef_group_nominee WHERE grn_grp_id=?";
        $this->db->query(
            $sql,
            array($this->grn_grp_id)
        );
    }
    /*
    * delete_group_nominee
    * delete nominee from database
    * @input grn_grp_id
    * @output 
    * @author Jirayut Saifah
    * @Create Date 2564-08-13
    */
    public function delete_group_schedule()
    {
        $sql = "DELETE FROM pefs_database.pef_group_schedule WHERE grd_grp_id=?";
        $this->db->query(
            $sql,
            array($this->grd_grp_id)
        );
    }

    /*
    * update_status_group
    * อัพเดตข้อมูล grp_status ใน database ตาราง pef_group
    * @input  grp_status, grp_id
    * @output -
    * @Author Phatchara Khongthandee and Pontakon Mujit 
    * @Create Date 2565-04-11
    * @Update Date 2565-04-12
    */
    function update_status_group()
    {
        $sql = "UPDATE pefs_database.pef_group
            SET grp_status = ?
        WHERE grp_id = ?";

        $this->db->query($sql, array($this->grp_status, $this->grp_id));
    }

    public function group_update()
    {
        $sql = " UPDATE pefs_database.pef_group as up
        SET up.grp_date = ? AND up.grp_year = ?
        WHERE up.grp_id = ? ";
        $this->db->query(
            $sql,
            array($this->grp_date, $this->grp_year, $this->grp_id)
        );
    }
}
