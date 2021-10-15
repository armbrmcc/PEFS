<?php
/*
* M_approval
* Model approve form
* @input  id
* @output - 
* @author Apinya Phadungkit
* @Create Date 2564-7-18
* @Update Date 2564-7-28
*/
?>

<?php
defined('BASEPATH') or exit('No direct script access allowed');

include_once('Da_approval.php');

class M_approval extends Da_approval
{

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
    * Function get_history_approve
    * @input  $id
    * @output -
    * @author Apinya Phadungkit
    * @Create Date 2564-7-18
    * @Update Date 2564-7-28
    */
    function get_history_approve($id)
    {
        $sql = "SELECT *
                FROM ttps_database.approval AS app
                INNER JOIN dbmc.employee AS emp
                ON  app.app_supervisor_id = emp.Emp_ID
                WHERE app.app_form_id = $id";
        $query = $this->db->query($sql);
        return $query;
    } //get_history_approve ใช้ดูประวัติว่าหัวหน้างานคนไหนเป็นผู้อนุมัติแบบฟอร์ม

    /*
    * Function get_history_approve_hr
    * @input  $id
    * @output -
    * @author Apinya Phadungkit
    * @Create Date 2564-7-18
    * @Update Date 2564-7-28
    */
    function get_history_approve_hr($id)
    {
        $sql = "SELECT *
                FROM ttps_database.approval AS app
                INNER JOIN dbmc.employee AS emp
                ON  app.app_hr_id = emp.Emp_ID
                WHERE app.app_form_id = $id";
        $query = $this->db->query($sql);
        return $query;
    } //get_history_approve_hr ใช้ดูประวัติว่า HR คนไหนเป็นผู้อนุมัติแบบฟอร์ม

    /*
    * Function update_app
    * @input  - 
    * @output -
    * @author Apinya Phadungkit
    * @Create Date 2564-7-18
    * @Update Date 2564-7-28
    */
    function update_app()
    {
        $sql = "UPDATE ttps_database.approval AS app
                SET app.app_hr_date = CURRENT_TIMESTAMP() , app.app_hr_id = ?
                WHERE app.app_form_id = ? ";
        $this->db->query($sql, array($this->app_hr_id, $this->app_form_id));
    } //update_app อัพเดทข้อมูลวันที่ hr ทำการอนุมัติแบบฟอร์มในตาราง approval

    /*
    * Function update_app_plant
    * @input  - 
    * @output -
    * @author Apinya Phadungkit
    * @Create Date 2564-7-18
    * @Update Date 2564-7-28
    */
    function update_app_plant()
    {
        $sql = "UPDATE ttps_database.approval AS app
                SET app.app_approval_plant_date = CURRENT_TIMESTAMP()
                WHERE app.app_form_id = ? ";
        $this->db->query($sql, array($this->app_form_id));
    } //update_app_plant อัพเดทข้อมูลวันที่ plant ทำการอนุมัติแบบฟอร์มในตาราง approval

}
