<?php
    class Modules extends CI_Controller{
        
        public function loadpage(){

            $module = "loginpage";
            
            if(!file_exists(APPPATH.'views/modules/'.$module.'.php')){
                show_404();
            }

            $data['title'] = "Security Login";
            
            $this->load->view('templates/header');
            $this->load->view('modules/'.$module, $data);
            $this->load->view('templates/modal');
            $this->load->view('templates/footer');

        }

        public function validatelogin(){

            $result = $this->Functions_model->checkdetails();

        }

        public function saveregistration(){

            $result = $this->Functions_model->savedetails();

        }
    }
?>