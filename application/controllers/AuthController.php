<?php 
    class AuthController extends CI_Controller{
        public function login(){
           // $data['title'] = "Login";
       // $this->load->view('templates/header'/*,$data*/);
            $this->load->view('auth/login');
            $this->load->view('includes/footer');

        }
        public function login_validation(){
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $this->form_validation->set_rules('email','email', 'required');
            $this->form_validation->set_rules('password','Password', 'required');
            if ($this->form_validation->run() == FALSE) {
                $this->session->set_flashdata('errorMessage','<div class="alert alert-danger">' . validation_errors() . '</div>');
                redirect(base_url('login'));

            }else {

                $this->load->model('auth_model');
                $verify_login = $this->auth_model->login($email);
                if ($verify_login) {
                    $hash_password = $verify_login->password;
                    $hash = password_verify($password,$hash_password);
                    if ($hash) {
                        $userdata = array( 
                         'id' => "$verify_login->id",
                            'email' => "$verify_login->email",
                            'account_type' => "$verify_login->account_type",
                            'logged_in' => TRUE
                            
                            );
                        $this->session->set_userdata($userdata);
                         //$this->session->set_userdata('logged_in','true');
                       
                        $this->session->set_flashdata('logged_in','Login Successful, Welcome ');
                        //use this to show and unshow approval button
                        if ($this->session->userdata('account_type') == "Admin") {
                            
                            redirect(base_url('accounts'));
                        }else if ($this->session->userdata('account_type') == "Admin") {
                            redirect(base_url('dashboard'));
                        }else if ($this->session->userdata('account_type') == "User") {
                            redirect(base_url('entries'));
                        }else if ($this->session->userdata('account_type') == "Technician") {
                            redirect(base_url('admin_dashboard'));
                        }
                    }else {
                        $this->session->set_flashdata('invalid','INCORRECT LOGIN NAME AND PASSWORD PLEASE RE-ENTER!');
                    redirect(base_url('login'));
                    }}
                else {
                    $this->session->set_flashdata('invalid','INCORRECT LOGIN NAME AND PASSWORD PLEASE RE-ENTER!');
                    redirect(base_url('login'));
                }
            }



        }

             public function logout() {
           // $data = array('id','email','logged_in','account_type');
          
           
            $this->session->unset_userdata('id');
            $this->session->unset_userdata('email');
            $this->session->unset_userdata('logged_in');
            $this->session->unset_userdata('account_type');
           // $this->session->sess_destroy();
            $this->session->set_flashdata('logged_out','Logged Out Successfully');
            redirect(base_url('login'));
        }

         public function accounts () {
            $data['page'] = 'accounts';
            $this->load->model('auth_model');
            $data['accountsList'] = $this->auth_model->display_accounts();
            $this->load->view('includes/header',$data);
           $this->load->view('includes/sidebar');
            $this->load->view('admin/accounts',$data);
            $this->load->view('includes/footer');
        }
 


 public function register_account() {
        $this->form_validation->set_rules('email', 'Email', 'required|min_length[5]');
        $this->form_validation->set_rules('Password', 'Password', 'required|min_length[8]');
        $this->form_validation->set_rules('repeat_password', 'Repeat Password', 'required|matches[Password]');
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('errorMessage', '<div class="alert alert-danger"> '.validation_errors() . '</div>');
            redirect(base_url('accounts'));
        }else {
            //$this->load->model('database');
            $this->load->model('auth_model');
            
            $email = $this->input->post('email');
            $password = $this->input->post('Password');
            $account_type = $this->input->post('account_type');
            $created_by = 'admin';
            $exec = $this->auth_model->insert_account($username,$password,$account_type,$created_by);
            if ($exec) {
                $this->session->set_flashdata('successMessage', '<div class="alert alert-success">Account Created Successfully</div>');
                redirect(base_url('accounts'));
            }else {
                $this->session->set_flashdata('errorMessage', '<div class="alert alert-danger">Opps... Something Went Wrong Please Try Again.</div>' );
            }

        }
    }
    
    /*check username exists
    function check_username_exists($username){
        $this->form_validation->set_message('check_username_exists', 'That username is already taken. Please choose a different one.');
        if($this->accounts_model->check_username_exists($username)){
            return true;

        }else{
                    return false;
        }
    }*/

    public function delete($id){
        $this->load->model('auth_model');
        $exec = $this->auth_model->delete_account($id);
        if ($exec) {
            $this->session->set_flashdata('successMessage', '<div class="alert alert-success">Account Deleted Successsfully</div>');
            redirect(base_url('accounts'));
        }else {
            $this->session->set_flashdata('errorMessage', '<div class="alert alert-danger">Opps... Something Went Wrong Please Try Again.</div>' );
        }
}      
}