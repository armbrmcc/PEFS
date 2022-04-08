<?php
    /*
    * Score Management
    * Controller for Score Management module
    * @author Jaraspon Seallo and Nipat 
    * @Create Date 2565-01-26
    */
?>

<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once(dirname(__FILE__) . "/../MainController.php");

//Start class Score Management
class Score_management extends MainController
{

    public function __construct()
    {
        parent::__construct();
    }

    /*
	* show_score_management_list
	* display view Score Management list
	* @input  -
	* @output  Score Management list
	* @author  Jaraspon Seallo
	* @Create  Date 2565-01-23
    */
    public function show_score_management_list()
    {
        $this->load->model('M_pef_score_management', 'psm');
        $data['as_group'] = $this->psm->get_score_management_list()->result();
        $data['as_group_date'] = $this->psm->get_score_management_list_date()->result();
     
    for ($i=0; $i < count($data["as_group"]) ; $i++) { 
        $a=array();
        for ($j=0; $j < count($data["as_group_date"]) ; $j++) {
        //   $date_sql =  $data['as_group'][$i]
        // var_dump($data["as_group_date"][$j]->grp_date);
        // echo "<pre/>";
       
    
     
            if($data["as_group_date"][$j]->grp_id == $data["as_group"][$i]->gap_id){
                // var_dump($data['as_group_date'][$j] );
           
                array_push($a,$data['as_group_date'][$j]);
            
                $data_all[$i] = [
                    'data' =>$data['as_group'][$i],
                    'date' =>  $a 
                ];
            }
        }
    }
    
    $data['data_all'] = $data_all;

//  echo "<pre>";
 
//  var_dump($data["data_all"]);
//  echo "</pre>";
//  echo "<br/>";
//  echo "<pre>";
 
//  var_dump($data_all);
//  echo "</pre>";
//  echo "<br/>";
// var_dump($data["as_group"][0]);
// var_export($data);

        $this->output('consent/v_score_management', $data);
    } //show_score_management_list

    public function show_score_management_detail()
    {
        $this->output('consent/v_score_management_detail');
    } //show_score_management_list
}//End class Score_management