<?php
    /*
    * Da_pef_performance_form 
    * add evaluation form to database 
    * @author Phatchara Khongthandee and Pontakon Mujit
    * @Create Date 2565-03-09
    */
?>

<?php
include_once("pefs_model.php");

class Da_pef_performance_form extends pefs_model
{

    function construct()
    {
        parent::__construct();
    }

    /*
    * insert_performance_form
    * เพิ่มข้อมูลลงใน database ตาราง pef_performance_form
    * @input  per_q_and_a, per_comment, per_date, per_emp_id, per_ase_id
    * @output -
    * @author Phatchara Khongthandee and Pontakon Mujit 
    * @Create Date 2565-03-09
    * @Update Date 2565-03-10
    */
    function insert_performance_form()
    {
        $sql = "INSERT INTO pefs_database.pef_performance_form (
            per_q_and_a, 
            per_comment, 
            per_date, 
            per_emp_id, 
            per_ase_id) 
        
        VALUES (?,?,?,?,?)";

        $this->db->query($sql, array($this->per_q_and_a, $this->per_comment, $this->per_date, $this->per_emp_id, $this->per_ase_id));
    }//เพิ่มข้อมูล Q&A, Comment, Date(วันที่ประเมิน), รหัส Nominee, Assessor ที่ประเมิน

}