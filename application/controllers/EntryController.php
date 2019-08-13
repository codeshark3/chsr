<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class EntryController extends CI_Controller{
public function __construct() { 
      parent::__construct(); 
      $this->load->library("session");
      $this->load->model('entry_model');    
   }   

  
   		public function index(){
  			$this->load->view('includes/header');
            $this->load->view('includes/sidebar');
            $this->load->view('entries/index');
            $this->load->view('includes/footer');

   		}

public function fetch()
               {
               $fetch = $this->entry_model->make_datatables();
               $data = array();
               foreach($fetch as $row){
                $sub_array =array();
                  $sub_array[] = $row->id;
                $sub_array[] = $row->service_department;
                $sub_array[] = $row->asset_no;
                $sub_array[] = $row->equipment_type;
                $sub_array[] = $row->user_department;
                $sub_array[] = $row->nature_of_request;
                $sub_array[] = $row->name;
                $sub_array[] = $row->position;
                $sub_array[] = $row->number;
                $sub_array[] =  '<button type="button" name="update" id="'.$row->id.'" class="btn btn-info btn-xs update">Update</button>';
                $sub_array[] =  '<button type="button" name="delete" id="'.$row->id.'" class="btn btn-danger btn-xs">Delete</button>';
                $data[] = $sub_array;
               }

               $output  = array(
                "draw" => intval($_POST["draw"]),
               "recordsTotal" => $this->entry_model->get_all_data(),
               "recordsFiltered" => $this->entry_model->get_filtered_data(),
               "data"  => $data
            );

          
            echo json_encode($output);

}

  

function fetch_single_user(){
  $output = array();
  $this->load->model("entry_model");
  $data = $this->entry_model->fetch_single_user($_POST["id"]);
  foreach ($data as $row) {
    $output['service_department'] = $row->service_department;
    $output['asset_no'] = $row->asset_no;
    $output['equipment_type'] = $row->equipment_type;
    $output['user_department'] = $row->user_department;
    $output['nature_of_request'] = $row->nature_of_request;
    $output['name'] = $row->name;
    $output['position'] = $row->position;
    $output['number'] = $row->number;
  }
  echo json_encode($output);
}

    function create(){
          if($_POST["action"] == "Add")
          {
            $insert_data = array(
                'service_department'    =>  $this->input->post('service_department'),
                'asset_no'              =>  $this->input->post('asset_no'),
                'equipment_type'        =>  $this->input->post('equipment_type'),
                'user_department'       =>  $this->input->post('user_department'),
                'nature_of_request'     =>  $this->input->post('nature_of_request'),      
                'name'                  =>  $this->input->post('name'),
                'position'              =>  $this->input->post('position'),
                'number'                =>  $this->input->post('number')        

            );

            $this->load->model('entry_model');    
            $this->entry_model->insert_data($insert_data);
            $this->session->set_flashdata('entry_created','New Entry Created Successfully ');
           }


           if($_POST["action"] == "Edit"){
            $updated_data = array(
             'service_department'    =>  $this->input->post('service_department'),
                'asset_no'              =>  $this->input->post('asset_no'),
                'equipment_type'        =>  $this->input->post('equipment_type'),
                'user_department'       =>  $this->input->post('user_department'),
                'nature_of_request'     =>  $this->input->post('nature_of_request'),      
                'name'                  =>  $this->input->post('name'),
                'position'              =>  $this->input->post('position'),
                'number'                =>  $this->input->post('number')        
            );

            $this->load->model('entry_model');    
            $this->entry_model->update_data($this->input->post('id'),$updated_data);
            $this->session->set_flashdata('entry_created','Entry Updated Successfully ');

           }
        }

        // public function create(){
           
        //    //form validation rules
        
        //     $this->form_validation->set_rules('service_department', 'Department', 'required');
        //     $this->form_validation->set_rules('asset_no','Asset Number','required');
        //     $this->form_validation->set_rules('equipment_type','Equipment Type','required');
        //     $this->form_validation->set_rules('user_department','Department','required');
        //     $this->form_validation->set_rules('nature_of_request','Ward','required');
        //     $this->form_validation->set_rules('name',' Name','required');
        //     $this->form_validation->set_rules('position','Position','required');
         
        //     $this->form_validation->set_rules('number','Telephone Number','required');
      
     
            
        //     if($this->form_validation->run() === FALSE){
        //     $this->load->view('includes/header');
        //     $this->load->view('includes/sidebar');
        //     $this->load->view('entries/create');
        //     $this->load->view('includes/footer');

        //     } else {
        //        $this->load->model('entry_model');    

        //         $this->entry_model->create_entry();
        //        redirect('EntryController/index');
        // //           $this->session->set_flashdata('entry_created','New Entry Created Successfully ');
        //    }
            
        // }


        public function print(){
          
            $this->load->view('includes/print');
       

        }


    }   
