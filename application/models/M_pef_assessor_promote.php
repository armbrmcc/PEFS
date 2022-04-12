<?php
    /* 
    * M_pef_assessor_promote
    * Model for 
    * @author Thitima Popila and Ponprapai Atsawanurak
    * @Create Date 2565-04-12
    */
?>

<?php
include_once("Da_pef_assessor_promote.php");

class M_pef_assessor_promote extends Da_pef_assessor_promote
{

/*
    * 
    * ดึงข้อมูลในระบบตาราง pef_assessor_promote
    * @input  gro_ase_id
    * @output -
    * @Author Thitima Popila 
    * @Create Date 2565-04-12
    * @Update Date 2565-04-12
    */
    function get_assessor_group_by_id($id_assessor)
    {
        $sql = "SELECT *
                FROM pefs_database.pef_assessor_promote AS promote
                INNER JOIN pefs_database.pef_group_assessor AS group_as
                ON promote.asp_id = group_as.gro_asp_id
                INNER JOIN pefs_database.pef_assessor AS assessor
                ON group_as.gro_asp_id = assessor.ase_id
                INNER JOIN pefs_database.pef_group AS group_ev
                ON group_as.gro_asp_id = group_ev.grp_position_group
                WHERE ase_emp_id = '$id_assessor'";

        $query = $this->db->query($sql);
        return $query;
    }
}