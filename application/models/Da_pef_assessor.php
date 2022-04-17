<?php
    /* 
    * Da_pef_assessor
    * Model for assessor
    * @author Phatchara Khongthandee and Ponprapai Atsawanurak and Apinya Phadungkit
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

    // *insert
    // *insert assessor in database
    // *@input ase_year,ase_emp_id,ase_gro_id,ase_sec_id
    // *@output -
    // *@author Apinya Phadungkit
    // *@Create Date 2565-03-30
    // *@Update Date 2565-04-18
    public function insert()
    {
        $sql = "INSERT INTO pefs_database.pef_assessor(ase_year,ase_emp_id,ase_gro_id,ase_sec_id) 
                VALUES (?,?,?,?)";
        $this->db->query($sql, array($this->ase_year, $this->ase_emp_id, $this->ase_gro_id, $this->ase_sec_id));
    }

    /*
	* delete
	* delete assessor in database
	* @input   ase_emp_id
	* @output  - 
	* @author  Apinya Phadungkit
	* @Create  Date 2565-04-11
    * @Update  Date 2565-04-18
    */
    public function delete()
    {
        $sql =
            "DELETE FROM pefs_database.pef_assessor
            WHERE ase_emp_id=?";
        $this->db->query($sql, array($this->ase_emp_id));
    }

}