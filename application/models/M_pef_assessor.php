<?php
/* 
    * M_pef_assessor
    * Model for 
    * @author Phatchara Khongthandee and Ponprapai Atsawanurak
    * @Create Date 2565-03-03
    */
?>

<?php
include_once("Da_pef_assessor.php");

class M_pef_assessor extends Da_pef_assessor
{

    public function __construct()
    {
        parent::__construct();
    }

    /*
	* get_assessor_by_id
	* get 
	* @input  $id_assessor
	* @output -
	* @author Phatchara Khongthandee and Ponprapai Atsawanurak
	* @Create Date 2565-03-03
    */
    public function get_assessor_by_id($id_assessor)
    {
        $sql = "SELECT * FROM pefs_database.pef_assessor AS ass
                    INNER JOIN dbmc.employee AS emp
                    ON ass.ase_emp_id = emp.Emp_ID 
                WHERE  ass.ase_id = '$id_assessor'";
        $query = $this->db->query($sql);
        return $query;
    }
    public function get_sec_by_ase()
    {
        $sql = "SELECT * FROM pefs_database.pef_assessor_promote GROUP BY ";
        $query = $this->db->query($sql);
        return $query;
    } //คืนค่าข้อมูลของกรรมการ

    /*
	* get_assessor_by_id
	* get 
	* @input  $id_assessor
	* @output -
	* @author Phatchara Khongthandee and Ponprapai Atsawanurak
	* @Create Date 2565-03-03
    */
    public function get_assessor_by_year()
    {
        $sql =
            "SELECT *
        FROM pefs_database.pef_assessor AS ass
        INNER JOIN dbmc.employee AS emp
        ON ass.ase_emp_id = emp.Emp_ID 
        INNER JOIN dbmc.position AS pos
        ON emp.Position_ID = pos.Position_ID
        INNER JOIN dbmc.sectioncode AS sec
        ON sec.Sectioncode = emp.Sectioncode_ID
         WHERE ass.ase_year=? AND ass.ase_sec_id=?
       ";
        $query = $this->db->query($sql, array($this->ase_year, $this->ase_sec_id));
        return $query;
    }
    public function get_assessor_by_group()
    {
        $sql =
            "SELECT *
                FROM pefs_database.pef_group_assessor 
                WHERE  gro_grp_id=?
           ";
        $query = $this->db->query($sql, array($this->gro_grp_id));
        return $query;
        //     $sql =
        //         "SELECT *
        // FROM dbmc.employee
        // WHERE Emp_ID = '00009'";
        //     $query = $this->db->query($sql, array($this->Emp_ID));
        //     return $query;
    }

    /*
	* get_assessor_detail
	* get 
	* @input  $ass_id
	* @output -
	* @author Phatchara Khongthandee and Ponprapai Atsawanurak
	* @Create Date 2565-03-03
    */
    public function get_assessor_detail($group_id)
    {
        $sql = "SELECT * FROM pefs_database.pef_assessor AS ass
                    INNER JOIN pefs_database.pef_group_assessor AS grass
                    ON ass.ase_gro_id = grass.gro_id
                    INNER JOIN pefs_database.pef_group AS gr
                    ON grass.gro_grp_id=  gr.grp_id
                    -- INNER JOIN pefs_database.pef_group_schedule AS schedu
                    -- ON gr.grp_id = schedu.grd_grp_id
                    INNER JOIN pefs_database.pef_assessor_promote AS promote
                    ON grass.gro_asp_id =  promote.asp_id
                    -- INNER JOIN pefs_database.pef_assessor_position AS position
                    -- ON promote.asp_id = position.gap_asp_id
                    WHERE  gr.grp_id = '$group_id'";
        $query = $this->db->query($sql);
        return $query;
    } //คืนค่าข้อมูลรายละเอียดของกรรมการ

    public function get_relsult_list($ass_id)
    {
        $sql = "SELECT * FROM pefs_database.pef_assessor AS ass
                    INNER JOIN pefs_database.pef_group_assessor AS grass
                    ON ass.ase_gro_id = grass.gro_ase_id
                    INNER JOIN pefs_database.pef_group AS gr
                    ON grass.gro_grp_id=  gr.grp_id
                    INNER JOIN pefs_database.pef_group_schedule AS schedu
                    ON gr.grp_id = schedu.grd_grp_id
                WHERE  ass.ase_emp_id = '$ass_id'";
        $query = $this->db->query($sql);
        return $query;
    } //คืนค่าข้อมูลรายละเอียดผลการประเมินของกรรมการ

    /*
* get_name_emp
* get name
* @input  -
* @output - 
* @author Apinya Phadungkit
* @Create Date 2565-03-30
*/
    public function get_name_emp()
    {
        $sql =    "SELECT *
    FROM dbmc.employee
    WHERE Emp_ID = ?";
        $query = $this->db->query($sql, array($this->Emp_ID));
        return $query;
    }
}
?>