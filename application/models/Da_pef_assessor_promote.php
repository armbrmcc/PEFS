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

class Da_pef_assessor_promote extends pefs_model
{

/*
    * update_status_group
    * อัพเดตข้อมูล grp_status ใน database ตาราง pef_group
    * @input  grp_status, grp_id
    * @output -
    * @Author Phatchara Khongthandee and Pontakon Mujit 
    * @Create Date 2564-08-21
    * @Update Date 2564-08-22
    */
    function update_status_assessor()
    {
        $sql = "UPDATE pefs_database.pef_assessor_promote
            SET asp_status = ?
        WHERE asp_id = ?";

        $this->db->query($sql, array($this->asp_status, $this->asp_id));
    }

    // *insert
    // *insert assessor in database
    // *@input ase_year,ase_emp_id,ase_gro_id
    // *@output -
    // *@author Apinya Phadungkit
    // *@Create Date 30/03/2022
    public function insert()
    {
        $sql = "INSERT INTO pefs_database.pef_assessor_promote(asp_name,asp_level,asp_type) 
                VALUES (?,?,?)";
        $this->db->query($sql, array($this->asp_name, $this->asp_level, $this->asp_type));
    }

}