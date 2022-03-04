<!--
    /* 
    * M_pef_group_assessor
    * Model for 
    * @author Phatchara Khongthandee and 
    * @Create Date 2564-08-14  
    */
-->
<?php
include_once("Da_pef_group_nominee.php");

class M_pef_group_nominee extends Da_pef_group_nominee
{
    public function get_group_nominee_detail($group_id)
    {
        $sql = "SELECT *
            FROM pefs_database.pef_group_nominee AS groupno
            INNER JOIN pefs_database.pef_group AS gr
            ON groupno.grn_grp_id = gr.grp_id
            INNER JOIN dbmc.employee
            ON groupno.grn_emp_id = employee.Emp_ID
            INNER JOIN dbmc.position 
            ON position.Position_ID = employee.Position_ID 
        WHERE gr.grp_id = $group_id";
        $query = $this->db->query($sql);
        return $query;
    }
}