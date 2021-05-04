<?php
    class Modules extends CI_Controller{
        public function loadpage(){
            $module = "loginpage";
            if(!file_exists(APPPATH.'views/modules/'.$module.'.php')){
                sho_404();
            }

            $data['title'] = "Security Login";
            $this->load->loadpage('templates/header');
            $this->load->loadpage('modules/'.$module,$data);
            $this->load->loadpage('templates/footer');


        }
    }