<!--
    /* 
    * M_pef_group_assessor
    * Model for 
    * @author Phatchara Khongthandee and 
    * @Create Date 2564-08-14  
    */
-->
<?php
include_once("Da_pef_group_assessor.php");

class M_pef_group_assessor extends Da_pef_group_assessor
{
    public function get_group_assessor($group_id, $group_ass)
    {
        $sql = "SELECT * FROM pefs_database.pef_group_assessor AS grass
                    INNER JOIN pefs_database.pef_group AS gr
                    ON grass.gro_grp_id=  gr.grp_id
                WHERE grass.gro_grp_id = $group_id && gr.grp_id = $group_ass";
        $query = $this->db->query($sql);
        return $query;
    }//คืนค่าข้อมูลรายละเอียดของ Nominee ของกลุ่มการประเมิน

    public function get_group_assessor_all()
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