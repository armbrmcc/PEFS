<!--
    Da_schedule
    database for schedule module
    @input -
    @output -
    @author Phatchara
    Create date 22/7/2564 
    Update date 28/7/2564 
-->
<?php
include_once("ttps_model.php");

class Da_schedule extends ttps_model
{
    public $End_date;

    function construct()
    {
        parent::__construct();
    }

    // *insert_form
    // *insert form in database
    // *@input Emp_ID,Start_date,End_date,Requested_date,Item,Tell,Officer,Reason,Company_ID,Form_count
    // *@output -
    // *@author Jirayut Saifah
    // *@Create Date 17/07/2021

    public function insert_date()
    {
        $sql = "INSERT INTO ttps_database.schedule(sch_form_id,sch_start_date,sch_end_date) 
                VALUES (?,?,?)";
        $this->db->query($sql, array($this->sch_form_id, $this->sch_start_date, $this->sch_end_date));
    }

    // *update_form
    // *update form to database
    // *@input Emp_ID,Start_date,End_date,Requested_date,Item,Tell,Officer,Reason,Company_ID,Form_count
    // *@output -
    // *@author Jirayut Saifah
    // *@Create Date 18/07/2021
    public function update_date($id)
    {
        $sql = " UPDATE ttps_database.schedule
        SET sch_start_date=?,sch_end_date=?
        WHERE sch_form_id=$id;";
        $this->db->query($sql, array($this->sch_start_date, $this->sch_end_date));
    }

    /*
    * insert_schedule
    * insert data to schedule table
    * @input -
    * @output -
    * @author Nattkorn
    * @Create date 2564-07-19
    */
    public function insert_schedule()
    {
        $sql = "INSERT INTO ttps_database.schedule(sch_form_id,sch_start_date,sch_end_date) 
                VALUES (?,?,?)";
        $this->db->query($sql, array($this->sch_form_id, $this->sch_start_date, $this->sch_end_date));
    }
}
