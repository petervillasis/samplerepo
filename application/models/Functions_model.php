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

            $result = $this->db->get_where('useraccess', $data_collect)->row_array();

            if(!empty($result)){
                $this->session->set_flashdata('valid','valid');
                redirect(base_url());
            }else{
                $this->session->set_flashdata('invalid','invalid');
                redirect(base_url());
            }
                

        }

        public function savedetails(){
            
            $data_collect = array(

                'firstname' => $this->input->post('firstname',true),
                'middlename' => $this->input->post('middlename',true),
                'lastname' => $this->input->post('lastname',true),
                'email' => $this->input->post('email',true),
                'password' => $this->input->post('password',true)

            );

            $result = $this->db->insert('useraccess', $data_collect);
            $this->session->set_flashdata('save','save');
            redirect(base_url());

            

        }
    }
?>