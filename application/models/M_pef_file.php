<?php
    /* 
    * M_pef_file
    * Model for 
    * @author Phatchara Khongthandee and Ponprapai Atsawanurak
    * @Create Date 2565-03-12
    */
?>

<?php
include_once("Da_pef_file.php");

class M_pef_file extends Da_pef_file
{

    /*
	* get_file
	* get 
	* @input  -
	* @output -
	* @author Phatchara Khongthandee and Ponprapai Atsawanurak
	* @Create Date 2565-03-12
    */
    public function get_file_nominee()
    {
        $sql = "SELECT *
                FROM pefs_database.pef_file";
        $query = $this->db->query($sql);
        return $query;
    }

}