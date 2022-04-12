<?php
/* 
    * M_pef_group_nominee
    * Model for 
    * @author Phatchara Khongthandee and Ponprapai Atsawanurak
    * @Create Date 2565-03-04
    */
?>

<?php
include_once("Da_pef_group_nominee.php");

class M_pef_group_nominee extends Da_pef_group_nominee
{
    /*
	* get_nominee_detail
	* get 
	* @input  -
	* @output -
	* @author Phatchara Khongthandee and Ponprapai Atsawanurak
	* @Create Date 2565-03-03
    */
    public function get_nominee_detail($group_id)
    {
        $sql = "SELECT *
                    FROM pefs_database.pef_group_nominee AS groupno
                    INNER JOIN pefs_database.pef_group AS gr
                    ON groupno.grn_grp_id = gr.grp_id
                    INNER JOIN pefs_database.pef_group_assessor AS grass
                    ON gr.grp_id = grass.gro_grp_id
                    INNER JOIN pefs_database.pef_assessor AS ass
                    ON grass.gro_ase_id = ass.ase_id
                    INNER JOIN pefs_database.pef_assessor_promote AS promote
                    ON grass.gro_asp_id = promote.asp_id
                    INNER JOIN dbmc.employee
                    ON groupno.grn_emp_id = employee.Emp_ID
                    INNER JOIN dbmc.position AS position
                    ON groupno.grn_promote_to = position.Position_ID 
                WHERE gr.grp_id = $group_id";
        $query = $this->db->query($sql);
        return $query;
    } //คืนค่าข้อมูลรายละเอียดของ Nominee

    /*
	* get_nominee_by_id
	* get 
	* @input  -
	* @output -
	* @author Phatchara Khongthandee and Ponprapai Atsawanurak
	* @Create Date 2565-03-03
    */
    public function get_nominee_by_id($id_nominee)
    {
        $sql = "SELECT *
                    FROM pefs_database.pef_group_nominee AS groupno
                    INNER JOIN dbmc.employee
                    ON groupno.grn_emp_id = employee.Emp_ID 
                    INNER JOIN dbmc.position 
                    ON position.Position_ID = employee.Position_ID 
                    INNER JOIN dbmc.sectioncode 
                    ON sectioncode.Sectioncode = employee.Sectioncode_ID
                    INNER JOIN dbmc.company
                    ON employee.Company_ID = company.Company_ID
                    INNER JOIN dbmc.sectioncode AS section
                    ON section.Sectioncode = employee.Sectioncode_ID
                WHERE Emp_ID = groupno.grn_emp_id && groupno.grn_id = $id_nominee";
        $query = $this->db->query($sql);
        return $query;
    }

    public function get_nominee()
    {
        $sql = "SELECT *
                    FROM pefs_database.pef_group_nominee AS groupno
                    INNER JOIN dbmc.employee
                    ON groupno.grn_emp_id = employee.Emp_ID 
                    INNER JOIN dbmc.position 
                    ON position.Position_ID = employee.Position_ID 
                    INNER JOIN dbmc.sectioncode 
                    ON sectioncode.Sectioncode = employee.Sectioncode_ID
                    INNER JOIN dbmc.company
                    ON employee.Company_ID = company.Company_ID
                    INNER JOIN dbmc.sectioncode AS section
                    ON section.Sectioncode = employee.Sectioncode_ID
              ";
        $query = $this->db->query($sql);
        return $query;
    }

    /*
	* get_promote_to
	* get 
	* @input  -
	* @output -
	* @author Phatchara Khongthandee and Ponprapai Atsawanurak
	* @Create Date 2565-03-04
    */
    public function get_promote_to($id_nominee)
    {
        $sql = "SELECT *
                    FROM pefs_database.pef_group_nominee AS groupno
                    INNER JOIN dbmc.position AS position
                    ON groupno.grn_promote_to = position.Position_ID 
                WHERE groupno.grn_id = $id_nominee";

        $query = $this->db->query($sql);
        return $query;
    }

     /* Report
    * get_all_nominee
    * get data norminee
    * @input    -
    * @output   data of norminee
    * @author   Chakrit
    * @Create Date 2564-08-16
    */
    public function get_all_nominee()
    {
        $sql = "SELECT *
                FROM pefs_database.pef_group_nominee";
        $query = $this->db->query($sql);
        return $query;
    }
}