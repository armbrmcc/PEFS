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

class Da_pef_group_nominee extends pefs_model
{

    function construct()
    {
        parent::__construct();
    }

    
    /*
    * update_status_group
    * อัพเดตข้อมูล grp_status ใน database ตาราง pef_group
    * @input  grp_status, grp_id
    * @output -
    * @Author Phatchara Khongthandee and Pontakon Mujit 
    * @Create Date 2564-08-21
    * @Update Date 2564-08-22
    */
    function update_status_done()
    {
        $sql = "UPDATE pefs_database.pef_group_nominee
            SET grn_status_done = ?
        WHERE grn_emp_id = ?";

        $this->db->query($sql, array($this->grn_status_done, $this->grn_emp_id));
    }

}