<?php
    /* 
    * M_pef_score_management
    * Model for 
    * @author Jaraspon Seallo and Nipat Kuhoksiw
    * @Create Date 2565-03-04
    */
?>

<?php
include_once("Da_pef_score_management.php");

class M_pef_score_management extends Da_pef_score_management
{
    public function get_score_management_list()
    {
        $sql = "SELECT * FROM pefs_database.pef_group_assessor AS gss
                    INNER JOIN pefs_database.pef_group AS gro
                    ON gss.gro_grp_id = gro.grp_id
                    INNER JOIN pefs_database.pef_assessor_promote AS promote
                    ON gss.gro_asp_id =  promote.asp_id
                    INNER JOIN pefs_database.pef_assessor_position AS position
                    ON promote.asp_id = position.gap_asp_id
                    INNER JOIN dbmc.position AS pos
                    ON position.gap_promote = pos.Position_ID";
                
        $query = $this->db->query($sql);
        return $query;
    }//คืนค่าข้อมูลกลุ่มการประเมินของกรรมการ

}