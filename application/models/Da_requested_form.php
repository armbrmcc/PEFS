<?php
include_once("ttps_model.php");


class Da_requested_form extends ttps_model
{
    // ----------------Da_ttp_licence----------------

    // Table Name:ttps_database.requested_form
    // Describtion:Requested Form
    // @author:Jirayut
    // @Create Date:16/07/2021
    function construct()
    {
        parent::__construct();
    }
    public function insert_form()
    {
        $sql = "INSERT INTO ttps_database.requested_form(req_emp_id,req_start_date,req_end_date,req_requested_date,req_item,req_tel,req_reason,req_company_id,req_form_count,req_status,req_plant_id) 
                VALUES (?,?,?,?,?,?,?,?,?,?,?)";
        $this->db->query($sql, array($this->req_emp_id, $this->req_start_date, $this->req_end_date, $this->req_requested_date, $this->req_item, $this->req_tel, $this->req_reason, $this->req_company_id, $this->req_form_count, $this->req_status, $this->req_plant_id));
    }
    
    // *insert_date
    // *insert date in database
    // *@input Form_ID,Start_date,End_date
    // *@output -
    // *@author Jirayut Saifah
    // *@Create Date 29/07/2021
    public function update_form($id)
    {
        $sql = " UPDATE ttps_database.requested_form
        SET req_emp_id=?,req_start_date=?,req_end_date=?,req_requested_date=?,req_item=?,req_tel=?,req_reason=?,req_company_id=?,req_form_count=?
        WHERE req_form_id=$id;";
        $this->db->query($sql, array($this->req_emp_id, $this->req_start_date, $this->req_end_date, $this->req_requested_date, $this->req_item, $this->req_tel, $this->req_reason, $this->req_company_id, $this->req_form_count));
    }
   

    public function check_out()
    {
        $sql =
            " UPDATE ttps_database.requested_form
        SET req_status=?
        WHERE req_form_id=?;";
        $this->db->query($sql, array($this->req_status, $this->req_form_id));
    }
    // *check_out
    // *update status in database
    // *@input Status
    // *@output -
    // *@author Jirayut Saifah
    // *@Create Date 20/07/2021

    public function status_print()
    {
        $sql =
            " UPDATE ttps_database.requested_form
        SET req_print_status=?
        WHERE req_form_id=?;";
        $this->db->query($sql, array($this->req_print_status, $this->req_form_id));
    }
    public function status_update($k)
    {
        $sql =
            " UPDATE ttps_database.requested_form
        SET req_status=1
        WHERE req_form_id=$k ";
        $this->db->query($sql, array($this->req_status, $this->req_form_id));
    }
    // *status_print
    // *update status in database
    // *@input print_status
    // *@output -
    // *@author Jirayut Saifah
    // *@Create Date 20/07/2021

    // ----------------Da_ttp_renewal----------------
    public $End_date;
    /*
    * update
    * update end date to database
    * @input End_date,Form_ID
    * @output End_date update
    * @author Nattkorn
    * @Create date 2564-07-19
    */
    function update()
    {
        $sql = "UPDATE ttps_database.requested_form 
        SET req_end_date = ?
        WHERE req_form_id = ?";
        $this->db->query($sql, array($this->req_end_date, $this->req_form_id));
    }
    /*
    * update_form
    * update Form_count
    * @input -
    * @output -
    * @author Nattkorn
    * @Create date 2564-07-19
    */
    public function update_form_renewal()
    {
        $sql = " UPDATE ttps_database.requested_form as up
        SET up.req_form_count = ?
        WHERE req_form_id = ?";
        $this->db->query($sql, array($this->req_form_count, $this->req_form_id));
    }
    /*
    * update_status
    * update Status
    * @input -
    * @output -
    * @author Nattkorn
    * @Create date 2564-07-19
    */
    public function update_status()
    {
        $sql = " UPDATE ttps_database.requested_form as up
        SET up.req_status = ?
        WHERE req_form_id = ?";
        $this->db->query($sql, array($this->req_status, $this->req_form_id));
    }


    // ----------------Da_ttp_approve_form----------------
    
    /*
    * Function update_form
    * @input  -   
    * @output -
    * @author Apinya Phadungkit
    * @Create Date 2564-7-18
    * @Update Date 2564-7-28
    */
    function update_form_sup()
    {
        $sql = "UPDATE ttps_database.requested_form AS req
                SET req.req_status = ?
                WHERE req.req_form_id = ? "; 
        $this->db->query($sql, array($this->req_status,$this->req_form_id));
    } //update_form อัพเดทสถานะของฟอร์มที่ถูกยกเลิกโดยหัวหน้างาน

    /*
    * Function update_form
    * @input  -   
    * @output -
    * @author Apinya Phadungkit
    * @Create Date 2564-7-18
    * @Update Date 2564-7-28
    */
    function update_form_approve()
    {
        $sql = "UPDATE ttps_database.requested_form AS req
                SET req.req_status = ? , req.req_hr_no = ?
                WHERE req.req_form_id = ? ";
        $this->db->query($sql, array($this->req_status, $this->req_hr_no, $this->req_form_id));
    } //อัพเดทสถานะของฟอร์มที่ถูกยกเลิกโดย HR

    /*
    * Function update_form_plant
    * @input  -   
    * @output -
    * @author Apinya Phadungkit
    * @Create Date 2564-7-18
    * @Update Date 2564-7-28
    */
    function update_form_plant()
    {
        $sql = "UPDATE ttps_database.requested_form AS req
                SET req.req_status = ? 
                WHERE req.req_form_id = ? ";
        $this->db->query($sql, array($this->req_status, $this->req_form_id));
    } //อัพเดทสถานะของฟอร์มที่ถูกยกเลิกโดย Plant

}
