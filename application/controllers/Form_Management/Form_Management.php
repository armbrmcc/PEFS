<?php
/*
* MainCcontroller
* @input  -
* @output -
* @author Pontakon & Natthanit
* @Update Date 2565-01-25
*/

defined('BASEPATH') or exit('No direct script access allowed');
require_once(dirname(__FILE__) . "/../MainController.php");
class Form_Management extends MainController
{

    function show_form_management()
    {
        $this->load->model('M_pef_section', 'level');
        $data['level']=  $this->level->get_all_section()->result();
        $this->output('consent/v_form_management',$data);
    }


    function form_management_prosition()
    {

        $this->load->model('M_pef_section', 'level');
        $this->level->position_level_id = $this->input->post('seclevel'); 
        $data['pos'] =  $this->level->get_position_by_section()->result();
        $this->output('consent/v_form_management_prosition',$data);
    }


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
        //print_r($this->form->get_evaluation_form($postion)->result());
        // if($this->form->get_evaluation_form($postion)->result()!=NULL){
            $data['arr_form_num']=$this->form->get_form_by_id($postion)->result();
            $data['arr_form']=$this->form->get_evaluation_form($postion)->result();
        //     print_r("TU");
            $this->output('consent/v_form_management_detail_update',$data);
        // }else{
        //     print_r("FU");
        //     //$this->output('consent/v_form_management_detail',$data);
        // }
    }



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


    function form_management_insert()
    {
        $this->load->model('Da_pef_format_form', 'da_for');
        //print_r($_POST);
        $loop_insert= $this->input->post('allitem') ;
        for($i=0;$i<$loop_insert ;$i++){
            
            $this->da_for->for_item_id = $this->input->post('select_item'.$i);
            
            $this->da_for->for_des_id = $this->input->post('des'.$i); 
            $this->da_for->for_pos_id = $this->input->post('pos_id'); 
            //$this->da_for->for_pos_id = $this->input->post('weight0'); //ค่า weight มันอยู่ตารางรวมถ้าเปลี่ยน เปลี่ยนหมดเดี๋ยวมั่วเลยไม่ปรับนะ
            $this->da_for->insert_format_form();
        }
        
        redirect('Form_Management/Form_Management/show_form_management');  

    }

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
            //$this->da_for->for_pos_id = $this->input->post('weight0'); //ค่า weight มันอยู่ตารางรวมถ้าเปลี่ยน เปลี่ยนหมดเดี๋ยวมั่วเลยไม่ปรับนะ 
            $this->da_for->insert_format_form();
        }
        
        redirect('Form_Management/Form_Management/show_form_management');  

    }
    

    function form_management_detailsuscess()
    {
        print_r($_POST);

        //$this->output('consent/v_ form_management_detailsuscess');
    }
}