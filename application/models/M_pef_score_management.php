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
                    ON position.gap_promote = pos.Position_ID
                    GROUP by promote.asp_level";
                
        $query = $this->db->query($sql);
        return $query;
    }//คืนค่าข้อมูลกลุ่มการประเมินของกรรมการ
    public function get_score_management_list_date()
    {
        $sql = "SELECT grp_date,grp_id FROM pefs_database.pef_group";
                
        $query = $this->db->query($sql);
        return $query;
    }//คืนค่าข้อมูลกลุ่มการประเมินของกรรมการ
    /*
    * get_evaluation
    * get data for summary in performance form
    * @input    id
    * @output   -
    * @author   Niphat Kuhoksiw
    * @Create Date 2565-04-10
    * @Update Date 2565-04-14
    */
    function get_evaluation($id)
    {
        $sql = "SELECT *
			FROM pefs_database.pef_performance_form
			WHERE per_emp_id=$id
			";
        $query = $this->db->query($sql);
        return $query;
    }

    /*
    * get_group
    * get data for summary in gruop, section
    * @input    -
    * @output   -
    * @author   Niphat Kuhoksiw
    * @Create Date 2565-04-10
    * @Update Date 2565-04-14
    */
    function get_group()
    {
        $sql = "SELECT *
			FROM pefs_database.pef_group AS grp 
            INNER JOIN pefs_database.pef_section AS sec
            ON grp.grp_position_group = sec.sec_id
			WHERE grp_date = ?";
        $query = $this->db->query($sql, array($this->grp_date));
        return $query;
    }

    /*
    * get_group_by_id
    * get data for summary in group, section
    * @input    id
    * @output   -
    * @author   Niphat Kuhoksiw
    * @Create Date 2565-04-10
    * @Update Date 2565-04-14
    */
    function get_group_by_id($id)
    {
        $sql = "SELECT *
			FROM pefs_database.pef_group AS grp INNER JOIN pefs_database.pef_assessor_promote AS promote
            ON grp.grp_id=promote.asp_id
            INNER JOIN pefs_database.pef_assessor_position AS position
            ON promote.asp_id = position.gap_asp_id
            INNER JOIN dbmc.position AS pos
            ON position.gap_promote = pos.Position_ID
			WHERE grp_id=$id
			";
        $query = $this->db->query($sql);
        return $query;
    }

    /*
    * get_assessor
    * get data for summary in assessor
    * @input    id
    * @output   -
    * @author   Niphat Kuhoksiw
    * @Create Date 2565-04-10
    * @Update Date 2565-04-14
    */
    function get_assessor($id)
    {
        $sql = "SELECT *
			FROM pefs_database.pef_group_assessor 
			WHERE gro_grp_id=$id
			";
        $query = $this->db->query($sql);
        return $query;
    }

    /*
    * get_nominee
    * get data for summary in group_nominee, employee
    * @input    id
    * @output   -
    * @author   Niphat Kuhoksiw
    * @Create Date 2565-04-10
    * @Update Date 2565-04-14
    */
    function get_nominee($id)
    {
        $sql = "SELECT *
			FROM pefs_database.pef_group_nominee AS nom
            INNER JOIN dbmc.employee AS emp
            ON nom.grn_emp_id=emp.Emp_ID
			WHERE nom.grn_grp_id=$id
			";
        $query = $this->db->query($sql);
        return $query;
    }

    /*
    * get_nominee_by_id
    * get data for summary in group_nominee, performance_form
    * @input    id
    * @output   -
    * @author   Niphat Kuhoksiw
    * @Create Date 2565-04-10
    * @Update Date 2565-04-14
    */
    function get_nominee_by_id($id)
    {
        $sql = "SELECT *
			FROM pefs_database.pef_group_nominee AS nom 
            INNER JOIN pefs_database.pef_performance_form AS per
            ON nom.grn_emp_id=per.per_emp_id
           
			WHERE grn_emp_id=$id
			";
        $query = $this->db->query($sql);
        return $query;
    }

    /*
    * get_form
    * get data for summary in group_nominee, performance_form
    * @input    id
    * @output   -
    * @author   Niphat Kuhoksiw
    * @Create Date 2565-04-10
    * @Update Date 2565-04-14
    */
    function get_form($id)
    {
        $sql = "SELECT *
			FROM pefs_database.pef_group_nominee AS nom 
            INNER JOIN pefs_database.pef_performance_form AS per
            ON nom.grn_emp_id=per.per_emp_id
			WHERE grn_grp_id=$id
			";
        $query = $this->db->query($sql);
        return $query;
    }

    /*
    * get_ass_by_nor_id
    * get data assessor, group, nominee
    * @input    id
    * @output   get data assessor, group, nominee
    * @author   Niphat Kuhoksiw
    * @Create Date 2565-04-10
    * @Update Date 2565-04-14
    */
    public function get_ass_by_grp_id($id)
    {
        $sql = "SELECT * 
                FROM pefs_database.pef_assessor AS ass
                INNER JOIN pefs_database.pef_group_assessor AS gro
                ON ass.ase_emp_id = gro.gro_ase_id 
                INNER JOIN pefs_database.pef_group AS grp
                ON grp.grp_id = gro.gro_grp_id
                WHERE grp.grp_id = $id";
        $query = $this->db->query($sql);
        return $query;
    }

    /*
    * get_data_point_by_nor_id
    * get data point_form, nominee, group
    * @input    id
    * @output   get data point_form, nominee, group
    * @author   Niphat Kuhoksiw
    * @Create Date 2565-04-10
    * @Update Date 2565-04-14
    */
    public function get_data_point_by_grp_id($id)
    {
        $sql = "SELECT * 
                FROM pefs_database.pef_point_form AS poi
                INNER JOIN pefs_database.pef_performance_form AS pff
                ON poi.ptf_per_id = pff.per_id
                INNER JOIN pefs_database.pef_group_nominee AS grn
                ON grn.grn_emp_id = pff.per_emp_id
                INNER JOIN pefs_database.pef_group AS grp
                ON grp.grp_id = grn.grn_grp_id
                WHERE grp.grp_id = $id";
        $query = $this->db->query($sql);
        return $query;
    }
}