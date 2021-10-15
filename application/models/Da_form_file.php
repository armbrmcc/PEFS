<!--
    Da_form_file
    database for file
    @input -
    @output -
    @author Phatchara
    Create date 22/7/2564 
    Update date 28/7/2564 
-->
<?php
include_once("ttps_model.php");

class Da_form_file extends ttps_model
{

    function construct()
    {
        parent::__construct();
    }

    // *update_approve
    // *update approve to database
    // *@input Supervisor_ID,Approve_Plant_ID
    // *@output -
    // *@author Jirayut Saifah
    // *@Create Date 19/07/2021

    public function insert_file()
    {
        $sql = "INSERT INTO ttps_database.form_file(fil_form_id,fil_layout_location,fil_plan_location) 
                VALUES (?,?,?)";

        $this->db->query($sql, array($this->fil_form_id, $this->fil_layout_location, $this->fil_plan_location));
    }
    // *insert_file
    // *insert file in database
    // *@input Layout_location,Plan_location
    // *@output -
    // *@author Jirayut Saifah
    // *@Create Date 19/07/2021

    public function update_file($id)
    {
        $sql = " UPDATE ttps_database.form_file
        SET fil_layout_location=?,fil_plan_location=?
        WHERE fil_form_id=$id;";
        $this->db->query($sql, array($this->fil_layout_location, $this->fil_plan_location));
    }
    // *update_file
    // *update file to database
    // *@input Layout_location,Plan_location
    // *@output -
    // *@author Jirayut Saifah
    // *@Create Date 19/07/2021
}