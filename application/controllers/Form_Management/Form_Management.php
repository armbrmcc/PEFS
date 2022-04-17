<?php
/*
* MainCcontroller
* @input  -
* @output -
* @author Pontakon & Natthanit & Natthakon
* @Create Date 2565-01-25
* @Update Date 2565-04-08
*/

defined('BASEPATH') or exit('No direct script access allowed');
require_once(dirname(__FILE__) . "/../MainController.php");
class Form_Management extends MainController
{

        /*
	* show_form_management
	* display view form_management
	* @input  -
	* @output view form_management
    * @author Pontakon & Natthanit
    * @Create Date 2565-01-25
    * @Update Date 2565-04-08
    */
    function show_form_management()
    {
        $this->load->model('M_pef_section', 'level');
        $data['level']=  $this->level->get_all_section()->result();
        $this->output('consent/v_form_management',$data);
    }


    /*
	* form_management_prosition
	* display view form_management_prosition
	* @input  -
	* @output view form_management_prosition
    * @author Pontakon & Natthakon
    * @Create Date 2565-01-25
    * @Update Date 2565-04-08
    */
    function form_management_prosition()
    {

        $this->load->model('M_pef_section', 'level');
        $this->level->position_level_id = $this->input->post('seclevel'); 
        $data['pos'] =  $this->level->get_position_by_section()->result();
        $this->output('consent/v_form_management_prosition',$data);
    }

    /*
	* form_management_detail
	* display view form_management_detail
	* @input  -
	* @output view form_management_detail
    * @author Pontakon M.
    * @Create Date 2565-01-25
    * @Update Date 2565-04-08
    */
    function form_management_detail()
    {
        
        $postion =  $this->input->post('position'); 

        $this->load->model('M_pef_item_form', 'item');
        $this->load->model('M_pef_description_form', 'des');
        
        $this->item->pos_year =$this->input->post('pos_year'); 
        $this->item->pos_id =$postion;
        $this->des->pos_id =$postion;

        $data['arr_item'] = $this->item->get_item_form_by_id()->result();
        $data['arr_des'] = $this->des->get_description_form_by_id()->result();
        $data['pos_id']= $postion;
        $this->load->model('M_pef_format_form', 'form');
        $data['arr_form_num']=$this->form->get_form_by_id($postion)->result();
        $data['arr_form']=$this->form->get_evaluation_form($postion)->result();
        $this->output('consent/v_form_management_detail_update',$data);

    }


    /*
	* form_management_detail_update
	* display view form_management_detail but already have data
	* @input  -
	* @output view form_management_detail
    * @author Pontakon M.
    * @Create Date 2565-01-25
    * @Update Date 2565-04-09
    */
    public function form_management_detail_update()
    {   
        $postion = $this->input->post('position');
        $this->load->model('M_pef_item_form', 'item');
        $this->load->model('M_pef_description_form', 'des');
        $this->item->pos_id =$postion;
        $this->des->pos_id =$postion;
        $data['arr_item'] = $this->item->get_item_form_by_id()->result();
        $data['arr_des'] = $this->des->get_description_form_by_id()->result();
        $data['pos_id']= $postion; 
    }

    /*
	* form_management_insert
	* insert from in data 
	* @input  -
	* @output -
    * @author Pontakon M.
    * @Create Date 2565-01-25
    * @Update Date 2565-04-09
    */
    function form_management_insert()
    {
        $this->load->model('Da_pef_format_form', 'da_for');
        $loop_insert= $this->input->post('allitem') ;
        for($i=0;$i<$loop_insert ;$i++){   
            $this->da_for->for_item_id = $this->input->post('select_item'.$i);   
            $this->da_for->for_des_id = $this->input->post('des'.$i); 
            $this->da_for->for_pos_id = $this->input->post('pos_id'); 
            $this->da_for->insert_format_form();
        }
        redirect('Form_Management/Form_Management/show_form_management');  
    }

    /*
	* form_management_update
	* update from in data 
	* @input  -
	* @output -
    * @author Pontakon M.
    * @Create Date 2565-01-25
    * @Update Date 2565-04-09
    */
    function form_management_update()
    {
        $this->load->model('Da_pef_format_form', 'da_for');
        print_r($_POST);
        
        $this->da_for->for_pos_id = $this->input->post('pos_id'); 
        $this->da_for->delete_format_form();
        $loop_insert= $this->input->post('allitem') ;
        for($i=0;$i<$loop_insert ;$i++){
            $this->da_for->for_item_id = $this->input->post('select_item'.$i);
            $this->da_for->for_des_id = $this->input->post('des'.$i); 
            $this->da_for->for_pos_id = $this->input->post('pos_id'); 
            $this->da_for->insert_format_form();
        }
        redirect('Form_Management/Form_Management/show_form_management');  
    }

}