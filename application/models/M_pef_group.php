<?php
/* 
    * M_pef_assessor
    * Model for 
    * @author Phatchara Khongthandee and Ponprapai Atsawanurak
    * @Create Date 2565-03-04
    */
?>

<?php
include_once("Da_pef_group.php");

class M_pef_group extends Da_pef_group
{
    /*
	* get_group_evaluation
	* get 
	* @input  -
	* @output -
	* @author Phatchara Khongthandee and Ponprapai Atsawanurak
	* @Create Date 2565-03-03
    */
    public function get_group_evaluation($ass_id)
    {
        $sql = "SELECT * FROM pefs_database.pef_group AS gr
                    INNER JOIN pefs_database.pef_group_assessor AS grass
                    ON gr.grp_id = grass.gro_grp_id
                    INNER JOIN pefs_database.pef_assessor AS ass
                    ON grass.gro_ase_id = ass.ase_id
                    INNER JOIN pefs_database.pef_assessor_promote AS promote
                    ON grass.gro_asp_id = promote.asp_id
                    INNER JOIN pefs_database.pef_assessor_position AS position
                    ON promote.asp_id = position.gap_asp_id
                    WHERE  ass.ase_emp_id = '$ass_id'";
        $query = $this->db->query($sql);
        return $query;
    } //คืนค่าข้อมูลรายละเอียดของกลุ่มการประเมิน
    function get_group_id()
    { //check User_login and Pass_login in database
        $sql = "SELECT *
			FROM pefs_database.pef_group 
			ORDER BY pefs_database.pef_group.grp_id DESC LIMIT 1 
			";
        $query = $this->db->query($sql);
        return $query;
    } //end  
    function get_group()
    { //check User_login and Pass_login in database
        $sql = "SELECT *
			FROM pefs_database.pef_group AS grp
            INNER JOIN pefs_database.pef_section AS sec
            ON grp.grp_position_group = sec.sec_level
			ORDER BY grp.grp_date DESC  
			";
        $query = $this->db->query($sql);
        return $query;
    } //end  

    /* Report
    * get_year
    * get data group in year
    * @input    -
    * @output   data group in year
    * @author   Chakrit
    * @Create Date 2565-04-10
    */
    public function get_year()
    {
        $sql = "SELECT *
                FROM pefs_database.pef_group
                GROUP BY YEAR(grp_date) ";
        $query = $this->db->query($sql);
        return $query;
    }

    /* Report
    * get_data_year
    * get data section, group, nominee, position in year
    * @input    -
    * @output   get data section, group, nominee, position in year
    * @author   Chakrit
    * @Create Date 2565-04-10
    */
    public function get_data_year($year)
    {
        $sql = "SELECT *
                FROM pefs_database.pef_group AS grp
                INNER JOIN pefs_database.pef_group_nominee AS grn
                ON grp.grp_id = grn.grn_grp_id
                INNER JOIN pefs_database.pef_section AS sec
                ON sec.sec_id = grp.grp_position_group
                INNER JOIN dbmc.position AS pos
                ON pos.Position_ID = grn.grn_promote_to
                WHERE YEAR(grp_date) = $year 
                ORDER BY sec.sec_id";
        $query = $this->db->query($sql);
        return $query;
    }

    /* Report
    * get_data_by_id
    * get data section, group, nominee, position, employee, scetion_code, company
    * @input    -
    * @output   get data section, group, nominee, position, employee, scetion_code, company
    * @author   Chakrit
    * @Create Date 2565-04-11
    */
    public function get_data_by_id()
    {
        $sql = "SELECT * 
                FROM pefs_database.pef_group AS grp
                INNER JOIN pefs_database.pef_group_nominee AS grn
                ON grp.grp_id = grn.grn_grp_id
                INNER JOIN pefs_database.pef_section AS sec
                ON sec.sec_id = grp.grp_position_group
                INNER JOIN dbmc.employee AS emp
                ON emp.Emp_ID = grn.grn_emp_id
                INNER JOIN dbmc.position AS pos
                ON pos.Position_ID = emp.Position_ID
                INNER JOIN dbmc.sectioncode AS scode
                ON emp.Sectioncode_ID = scode.Sectioncode
                INNER JOIN dbmc.company AS com
                ON emp.Company_ID = com.Company_ID
                WHERE sec.sec_id = ?";
        $query = $this->db->query($sql, array($this->sec_id));
        return $query;
    }

    /* Report
    * get_emp_by_id
    * get data group, nominee, section, employee, position, section_code, company
    * @input    -
    * @output   get data group, nominee, section, employee, position, section_code, company
    * @author   Chakrit
    * @Create Date 2565-04-11
    */
    public function get_emp_by_id()
    {
        $sql = "SELECT * 
                FROM pefs_database.pef_group AS grp
                INNER JOIN pefs_database.pef_group_nominee AS grn
                ON grn.grn_grp_id = grp.grp_id
                INNER JOIN pefs_database.pef_section AS sec
                ON sec.sec_id = grp.grp_position_group
                INNER JOIN dbmc.employee AS emp
                ON emp.Emp_ID = grn.grn_emp_id
                INNER JOIN dbmc.position AS pos
                ON pos.Position_ID = emp.Position_ID
                INNER JOIN dbmc.sectioncode AS scode
                ON emp.Sectioncode_ID = scode.Sectioncode
                INNER JOIN dbmc.company AS com
                ON emp.Company_ID = com.Company_ID
                WHERE grn.grn_id = ?";
        $query = $this->db->query($sql, array($this->grn_id));
        return $query;
    }
}
