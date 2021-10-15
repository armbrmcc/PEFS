<?php
/*
* Da_approval
* Model Approve Form
* @input  - 
* @output - 
* @author Apinya Phadungkit
* @Create Date 2564-7-18
* @Update Date 2564-7-28
*/
?>

<?php
defined('BASEPATH') or exit('No direct script access allowed');

include_once('ttps_model.php');

class Da_approval extends ttps_model
{
    public $app_reject_reason; //ตัวแปรเพื่อมารับค่า เหตุผลที่ปฏิเสธแบบฟอร์มคำขออนุญาต

    /*
    * Function __construct
    * @input  -   
    * @output -
    * @author Apinya Phadungkit
    * @Create Date 2564-7-18
    * @Update Date 2564-7-28
    */
    function __construct()
    {
        parent::__construct();
    } //__construct

    /*
    * Function update_reject
    * @input  -   
    * @output -
    * @author Apinya Phadungkit
    * @Create Date 2564-7-18
    * @Update Date 2564-7-28
    */
    function update_reject()
    {
        $sql = "UPDATE ttps_database.approval AS app
                SET app.app_reject_reason = ?
                WHERE app.app_form_id = ? ";
        $this->db->query($sql, array($this->app_reject_reason, $this->app_form_id));
    } //เพิ่มเหตุผลในการปฏิเสธลงในตาราง approval

    // *update_form
    // *update form to database
    // *@input Emp_ID,Start_date,End_date,Requested_date,Item,Tell,Officer,Reason,Company_ID,Form_count
    // *@output -
    // *@author Jirayut Saifah
    // *@Create Date 18/07/2021
    public function insert_approve()
    {
        $sql = "INSERT INTO ttps_database.approval(app_form_id,app_supervisor_id,app_approve_plant_id) 
                VALUES (?,?,?)";
        $this->db->query($sql, array($this->app_form_id, $this->app_supervisor_id, $this->app_approve_plant_id));
    }

    // *insert_approve
    // *insert approval in database
    // *@input Supervisor_ID,Approve_Plant_ID
    // *@output -
    // *@author Jirayut Saifah
    // *@Create Date 18/07/2021

    public function update_approve($id)
    {
        $sql = " UPDATE ttps_database.approval
        SET app_supervisor_id=?,app_approve_plant_id=?
        WHERE app_form_id=$id;";
        $this->db->query($sql, array($this->app_supervisor_id, $this->app_approve_plant_id));
    }

    
}
