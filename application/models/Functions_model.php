<?php
    class Functions_model extends CI_model{

        public function __construct(){

            $this->load->database();

        }

        public function checkdetails(){

            $data_collect = array(

                'email' => $this->input->post('email', true),
                'password' => $this->input->post('password', true)

        );

            $result = $this->db->get_where('useraccess', $data_collect);

            if($result->num_rows() == 1){
                $this->session->set_flashdata('valid','valid');
                redirect(base_url());
            }else{
                $this->session->set_flashdata('invalid','invalid');
                redirect(base_url());
            }
                

        }
    }
?>