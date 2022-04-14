<?php
    /* 
    * M_pef_group_assessor
    * Model for 
    * @author Phatchara Khongthandee and 
    * @Create Date 2564-08-14  
    */
?>

<?php
include_once("Da_pef_performance_form.php");

class M_pef_performance_form extends Da_pef_performance_form
{
    function get_performance($nor_id, $id_assessor, $date)
    {
        $sql = "SELECT performance.per_id
        FROM  pefs_database.pef_performance_form as performance
        WHERE performance.per_emp_id = '$nor_id' AND performance.per_ase_id = '$id_assessor' AND performance.per_date ='$date'";
        $query = $this->db->query($sql);
        return $query;
    }

    function get_performance_detail($group_id, $date)
    {
        $sql = "SELECT performance.per_date, performance.per_emp_id, performance.per_ase_id 
        FROM  pefs_database.pef_performance_form AS performance
        INNER JOIN pefs_database.pef_group_nominee AS group_no
        ON performance.per_emp_id = group_no.grn_emp_id
        INNER JOIN pefs_database.pef_group AS gr
        ON group_no.grn_grp_id = gr.grp_id
        WHERE gr.grp_id = '$group_id' AND performance.per_date = '$date'";
        $query = $this->db->query($sql);
        return $query;
    }

    /*
	* get_performance_by_id
	* get 
	* @input  nominee id, assessor id
	* @output q and a, comment
	* @author  
	* @Create Date 2565-04-13 
    */
    function get_performance_by_id($nor_id, $id_assessor, $date)
    {
        $sql = "SELECT performance.per_q_and_a, performance.per_comment
        FROM  pefs_database.pef_performance_form as performance
        WHERE performance.per_emp_id = '$nor_id' AND performance.per_ase_id = '$id_assessor' AND performance.per_date ='$date'";
        $query = $this->db->query($sql);
        return $query;
    }
}