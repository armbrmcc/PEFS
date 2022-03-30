<?php
    /* 
    * M_pef_assessor
    * Model for 
    * @author Phatchara Khongthandee and Ponprapai Atsawanurak
    * @Create Date 2565-03-04
    */
?>

<?php
include_once("pefs_model.php");

class Da_pef_assessor extends pefs_model
{

    function construct()
    {
        parent::__construct();
    }

    public function insert()
    {
        $sql = "INSERT INTO pefs_database.pef_assessor(ase_year,ase_emp_id,ase_gro_id) 
                VALUES (?,?,?)";
        $this->db->query($sql, array($this->ase_year, $this->ase_emp_id, $this->ase_gro_id));
    }
    // *insert
    // *insert assessor in database
    // *@input ase_year,ase_emp_id,ase_gro_id
    // *@output -
    // *@author Apinya Phadungkit
    // *@Create Date 30/03/2022

}