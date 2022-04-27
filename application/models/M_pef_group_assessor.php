<?php
    /* 
    * M_pef_group_assessor
    * Model for pef_group_assessor
    * @author Phatchara Khongthandee 
    * @Create Date 2565-03-03
    */
?>

<?php
include_once("Da_pef_group_assessor.php");

class M_pef_group_assessor extends Da_pef_group_assessor
{
    /*
	* get_group_assessor
	* get 
	* @input  -
	* @output -
	* @author Phatchara Khongthandee and Ponprapai Atsawanurak
	* @Create Date 2565-03-03
    */
    public function get_group_assessor($group_id, $group_ass)
    {
        $sql = "SELECT * FROM pefs_database.pef_group_assessor AS grass
                    INNER JOIN pefs_database.pef_group AS gr
                    ON grass.gro_grp_id=  gr.grp_id
                WHERE grass.gro_grp_id = $group_id && gr.grp_id = $group_ass";
        $query = $this->db->query($sql);
        return $query;
    }//คืนค่าข้อมูลรายละเอียดของ Nominee ของกลุ่มการประเมิน

    /*
	* get_group_assessor_all
	* get data form pef_group_assessor, pef_group, pef_assessor_promote, pef_section
	* @input  -
	* @output  all 
	* @author  Thitima Popila
	* @Create  Date 2565-03-04
    * @Update  Date 2565-03-04
    */
    public function get_group_assessor_all()
    {

        $sql = "SELECT * FROM pefs_database.pef_group_assessor AS gas
                    INNER JOIN pefs_database.pef_assessor_promote AS asp
                    ON gas.gro_asp_id = asp.asp_id
                    INNER JOIN pefs_database.pef_section AS section
                    ON asp.asp_level =  section.sec_level
                    INNER JOIN pefs_database.pef_group AS gro
                    ON gas.gro_grp_id = gro.grp_id
                    INNER JOIN pefs_database.pef_assessor_position AS position
                    ON position.gap_asp_id = gas.gro_asp_id
                    INNER JOIN dbmc.position AS pos
                    ON position.gap_promote = pos.Position_ID
                    GROUP BY position.gap_asp_id";
                
        $query = $this->db->query($sql);
        return $query;
    }//คืนค่าข้อมูลกลุ่มการประเมินของกรรมการ

    /*
	* get_assessor_list
	* get data form ase_emp_id, Empname_eng, Empsurname_eng, Pos_shortName, Position_name
	* @input  -
	* @output  all 
	* @author  Apinya Phadungkit
	* @Create  Date 2565-03-04
    * @Update  Date 2565-03-04
    */
    public function get_assessor_list($id) //$มาจาก gro_ase_id ที่ถูกส่งมาจากใน Controller
    {
        $sql = "SELECT * FROM pefs_database.pef_group_assessor AS gass
                    INNER JOIN pefs_database.pef_assessor AS ass
                    ON gass.gro_ase_id = ass.ase_gro_id
                    INNER JOIN dbmc.employee AS emp
                    ON ass.ase_emp_id = emp.Emp_ID
                    INNER JOIN dbmc.position AS pos
                    ON emp.Position_ID = pos.Position_ID
                    INNER JOIN pefs_database.pef_assessor_promote AS promote
                    ON gass.gro_asp_id =  promote.asp_id
                    INNER JOIN pefs_database.pef_section AS sec
                    ON promote.asp_level = sec.sec_level
                    -- INNER JOIN dbmc.position AS pos
                    -- ON sec.sec_name = pos.Pos_shortName
                    
                    
                    WHERE gass.gro_ase_id = $id";
                
        $query = $this->db->query($sql);
        return $query;
    }//คืนค่าข้อมูลกลุ่มการประเมินของกรรมการ



    /*
	* get_group_all_assessor_by_id
	* get_group_all_assessor_by_id
	* @input  -
	* @output assessor ของกลุ่มการประเมิน
	* @author Pontakon M.
	* @Create date 2565-04-15
    */
    public function get_group_all_assessor_by_id($group_id)
    {
        $sql = "SELECT * FROM pefs_database.pef_group_assessor AS grass
        INNER JOIN pefs_database.pef_group AS gr
        ON grass.gro_grp_id=  gr.grp_id
        INNER JOIN pefs_database.pef_assessor AS ass
        ON grass.gro_ase_id = ass.ase_id
        INNER JOIN dbmc.employee AS employee
        ON ass.ase_emp_id = employee.Emp_ID
 
   		WHERE grass.gro_grp_id=  $group_id 
           GROUP BY  ass.ase_id";
        $query = $this->db->query($sql);
        return $query;
    }//คืนค่าข้อมูลรายละเอียดของ assessor ของกลุ่มการประเมิน
}