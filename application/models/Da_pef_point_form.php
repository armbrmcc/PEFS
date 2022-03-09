<?php
    /*
    * Da_pef_evaluation
    * add evaluation form to database 
    * @Author Phatchara Khongthandee and Pontakon Mujit 
    * @Create Date 2564-08-16
    */
?>

<?php
include_once("pefs_model.php");

class Da_pef_point_form extends pefs_model
{

    function construct()
    {
        parent::__construct();
    }

    /*
    * insert_point
    * เพิ่มข้อมูลลงใน database ตาราง pef_point_form
    * @input  ptf_point, ptf_date, ptf_row, ptf_ase_id, ptf_for_id, ptf_emp_id, ptf_per_id
    * @output -
    * @Author Phatchara Khongthandee and Pontakon Mujit 
    * @Create Date 2564-08-18
    * @Update Date 2564-08-19
    */
    function insert_point()
    {

        $sql = "INSERT INTO pefs_database.pef_point_form (
                ptf_point, 
                ptf_date, 
                ptf_round, 
                ptf_for_id, 
                ptf_per_id)

            VALUES (?,?,?,?,?)";

            for ($i= 0; $i < count($this->ptf_for_id);$i++){
                $this->ptf_round =  1 ;
                $this->db->query($sql, array($this->ptf_point[$i], $this->ptf_date, $this->ptf_round, $this->ptf_for_id[$i], $this->ptf_per_id));
            }
    }
}