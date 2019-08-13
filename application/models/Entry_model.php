<?php
    class Entry_model extends CI_Model{
        public function __construct(){
           $this->load->database();
            $this->load->helper('url_helper');
        }
      

var $table = "entries";
// var $select_column = array("id","service_department","asset_no","equipment_type","user_department","nature_of_request","name","position","number");
// var $order_column = array(null,"service_department","asset_no",null,null,"nature_of_request","name","position","number");

var $select_column = array("id","service_department","asset_no","equipment_type","user_department","nature_of_request","name","position","number");
var $order_column = array(null,"service_department","asset_no",null,null,"nature_of_request","name","position","number");

public function make_query(){
  $this->db->select($this->select_column);
  $this->db->from($this->table);
  if(isset($_POST["search"]["value"]))
  {
    $this->db->like("service_department", $_POST["search"]["value"]);
    $this->db->or_like("asset_no", $_POST["search"]["value"]);
     $this->db->or_like("user_department", $_POST["search"]["value"]);
   $this->db->or_like("nature_of_request", $_POST["search"]["value"]);
  
  }

  if(isset($_POST["order"]))
  {
    $this->db-order_by($this->order_column[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
  }else{
    $this->db->order_by("id", "DESC");
      }
}


public function make_datatables(){
  $this->make_query();
  if($_POST['length'] != -1)
  {
    $this->db->limit($_POST['length'], $_POST['start']);
  }
 $query = $this->db->get();
 
  return $query->result();

}

public function get_filtered_data(){
  $this->make_query();
  $query = $this->db->get();
  return $query->num_rows();
}

 public function get_all_data(){
  $this->db->select("*");
  $this->db->from($this->table);
  return $this->db->count_all_results();
}



//////////////////////////////////////////////////////////////////////////////////////
        public function create_entry(){
             $asset_no = url_title($this->input->post('asset_no'));

            $data = array(
                'service_department' =>$this->input->post('service_department'),
                'asset_no' =>$this->input->post('asset_no'),
                'equipment_type' =>$this->input->post('equipment_type'),
                'user_department' =>$this->input->post('user_department'),
                'nature_of_request' =>$this->input->post('nature_of_request'),      
                'name' =>$this->input->post('name'),
               
                'position' =>$this->input->post('position'),
                'number' =>$this->input->post('number')  

            );
            return $this->db->insert('entries',$data);
        }

   
   public function insert_data($data){
    $this->db->insert('entries',$data);
   }
  public function update_data($id,$data){
    $this->db->where("id",$id);
    $this->db->update('entries',$data);
   }

        function fetch_single_user($id)
        {
          $this->db->where("id",$id);
          $query = $this->db->get('entries');
          return $query->result();
        }

  }




//             var $table = "entries";
// var $select_column = array("id","service_department","asset_no","equipment_type","user_department","nature_of_request","name","position","number");
// var $order_column = array(null,"service_department","asset_no",null,null,"nature_of_request","name","position","number");

// public function make_query(){
//   $this->db->select($this->select_column);
//   $this->db->from($this->table);
//   if(isset($_POST["search"]["value"]))
//   {
//     $this->db->like("service_department", $_POST["search"]["value"]);
//     $this->db->or_like("asset_no", $_POST["search"]["value"]);
//      $this->db->or_like("user_department", $_POST["search"]["value"]);
//    $this->db->or_like("nature_of_request", $_POST["search"]["value"]);
  
//   }

//   if(isset($_POST["order"]))
//   {
//     $this->db-order_by($this->order_column[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
//   }else{
//     $this->db->order_by("id", "DESC");
//       }
// }


// public function make_datatables(){
//   $this->make_query();
//   if($_POST['length'] != -1)
//   {
//     $this->db->limit($_POST['length'], $_POST['start']);
//   }
//  $query = $this->db->get();
 
//   return $query->result();

// }

// public function get_filtered_data(){
//   $this->make_query();
//   $query = $this->db->get();
//   return $query->num_rows();
// }

//  public function get_all_data(){
//   $this->db->select("*");
//   $this->db->from($this->table);
//   return $this->db->count_all_results();
// }

