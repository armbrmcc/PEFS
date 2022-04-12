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

}