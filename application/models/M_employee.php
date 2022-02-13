<?php
include_once("Da_employee.php");

class M_employee extends Da_employee
{

    // Table Name:ttps_database.requested_form
    // Describtion:Requested Form
    // @author:Jirayut
    // @Create Date:16/07/2021



    /**
     * This function returns all the employees in the database
     * 
     * @return An object of type PDOStatement.
     */
    public function get_employee()
    {
        $sql =
            "SELECT *
                FROM dbmc.employee ";
        $query = $this->db->query($sql);
        return $query;
    }

    // *get_employee
    // *get form form database
    // *@input Emp_ID
    // *@output requested form if Emp_ID = $id and Status=4
    // *@author Jirayut Saifah
    // *@Create Date 27/01/2021

}