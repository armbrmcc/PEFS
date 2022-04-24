<?php
    /* 
    * Da_pef_group_nominee
    * Model for pef_group_nominee
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
    * update_status_done
    * update status done to database
    * @input  grn_status_done, grn_emp_id
    * @output -
    * @Author Phatchara Khongthandee and Pontakon Mujit 
    * @Create Date 2565-04-11
    * @Update Date 2565-04-12   
    */
    function update_status_done()
    {
        $sql = "UPDATE pefs_database.pef_group_nominee
            SET grn_status_done = ?
        WHERE grn_emp_id = ?";

        $this->db->query($sql, array($this->grn_status_done, $this->grn_emp_id));
    }

      /*
    * update_status_result
    * update status result to database
    * @input  grn_status_result, grn_emp_id
    * @output -
    * @Author Phatchara Khongthandee and Pontakon Mujit 
    * @Create Date 2565-04-11
    * @Update Date 2565-04-12   
    */
    function update_status_result()
    {
        $sql = "UPDATE pefs_database.pef_group_nominee
            SET grn_status_result = ?
        WHERE grn_grp_id = ? AND grn_emp_id = ?";

        $this->db->query($sql, array($this->grn_status_result, $this->grn_grp_id, $this->grn_emp_id));
    }
}