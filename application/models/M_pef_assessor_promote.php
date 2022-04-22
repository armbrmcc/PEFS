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
                WHERE ase_emp_id = '$id_assessor'
                GROUP BY promote.asp_id";

        $query = $this->db->query($sql);
        return $query;
    }

            /*
	* get_promote_by_id_group
	* get position to promote list
	* @input  -
	* @output  position to promote all 
	* @author Pontakon M.
	* @Create date 2565-04-15
    */
    public function get_promote_by_id_group($id_group)
    {

        $sql = "SELECT asp_type FROM pefs_database.pef_group_assessor AS grass
        JOIN pefs_database.pef_assessor_promote AS promote
         ON grass.gro_asp_id =  promote.asp_id
    	WHERE grass.gro_grp_id =$id_group";    
        $query = $this->db->query($sql);
        return $query;
    }

    
        /*
	* get_id_max
	* get asp_id assessor promote
	* @input  -
	* @output asp_id
	* @author Phatchara Khongthandee and Ponprapai Atsawanurak and Apinya Phadungkit
	* @Create Date 2565-03-10 
	*/
    function get_id_max()
    {
        $sql = "SELECT MAX(asp_id) AS asp_id
        FROM pefs_database.pef_assessor_promote";

        $query = $this->db->query($sql);
        return $query;
    }



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

        $sql = "SELECT * FROM pefs_database.pef_assessor_promote AS asp 
                    INNER JOIN pefs_database.pef_assessor_position AS pos
                    ON asp.asp_id = pos.gap_asp_id
                    INNER JOIN pefs_database.pef_section AS section
                    ON asp.asp_level =  section.sec_level
                    INNER JOIN dbmc.position AS dpos
                    ON pos.gap_promote = dpos.Position_ID
                    WHERE asp.asp_id = pos.gap_asp_id
                    GROUP BY pos.gap_asp_id";
                
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
    public function get_assessor_list($id) //$มาจาก asp_id ที่ถูกส่งมาจากใน Controller
    {
        $sql = "SELECT * FROM pefs_database.pef_assessor AS ass
                    INNER JOIN dbmc.employee AS emp
                    ON ass.ase_emp_id = emp.Emp_ID
                    INNER JOIN dbmc.position AS pos
                    ON emp.Position_ID = pos.Position_ID
                    INNER JOIN pefs_database.pef_assessor_promote AS promote
                    ON ass.ase_asp_id =  promote.asp_id
                    INNER JOIN pefs_database.pef_section AS sec
                    ON promote.asp_level = sec.sec_level
                    WHERE promote.asp_id = $id";
                
        $query = $this->db->query($sql);
        return $query;
    }//คืนค่าข้อมูลกลุ่มการประเมินของกรรมการ

    
    /*
	* get_level
	* @input  id
	* @output  all 
	* @author  Apinya Phadungkit
	* @Create  Date 2565-03-04
    * @Update  Date 2565-03-04
    */
    public function get_level($id) //$มาจาก asp_id ที่ถูกส่งมาจากใน Controller
    {
        $sql = "SELECT * FROM pefs_database.pef_assessor_promote AS pro
                    INNER JOIN pefs_database.pef_section AS sec
                    ON pro.asp_level = sec.sec_level
                    WHERE pro.asp_id = $id";
                
        $query = $this->db->query($sql);
        return $query;
    }//คืนค่าข้อมูลกลุ่มการประเมินของกรรมการ

    /*
	* get_sec
	* @input  id
	* @output  all 
	* @author  Apinya Phadungkit
	* @Create  Date 2565-03-04
    * @Update  Date 2565-03-04
    */
    public function get_sec($id) //$มาจาก asp_id ที่ถูกส่งมาจากใน Controller
    {
        $sql = "SELECT asp_level FROM pefs_database.pef_assessor_promote AS pro
                    WHERE pro.asp_id = $id";
                
        $query = $this->db->query($sql);
        return $query;
    }//คืนค่าข้อมูลกลุ่มการประเมินของกรรมการ

}