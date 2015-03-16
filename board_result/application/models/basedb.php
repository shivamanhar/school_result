<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class basedb extends CI_Model
    {
          
            public function can_login()
            {
                $this->db->where('userid', $this->input->post('usrid'));
                $this->db->where('password', md5($this->input->post('pass')));
                $query =$this->db->get('user_data');
                if($query->num_rows() == 1)
                {
                    return true;
                }
                else
                {
                    return false;
                }
            }
            public function user_check()
            {
                $this->db->where('userid', $this->input->post('email'));
                
                $query =$this->db->get('user_data');
                if($query->num_rows() == 1)
                {
                    return false;
                }
                else
                {
                    return true;
                }
            }
            
             public function roll_no()
            {
                $this->db->where('roll_no', $this->input->post('roll_no'));
                
                $query =$this->db->get('mark_data');
                if($query->num_rows() == 1)
                {
                          return false;
                }
                else
                {
                       return true;
                }
            }
            
             public function enrolment_no()
            {
                $this->db->where('enrolment_no', $this->input->post('enrolment_no'));
                
                $query =$this->db->get('mark_data');
                if($query->num_rows() == 1)
                {
                      return false;
                }
                else
                {
                  return true;
                }
            }
            
            public function registration($user_data)
            {
                $query = $this->db->insert('user_data' , $user_data);
            }
            public function mark_data($data)
            {
                $query = $this->db->insert('mark_data', $data);
            }
            public function get_data()
            {
                $get_row = $this->db->get('mark_data');
                  if ($get_row->num_rows()>0)
                {           
                    return $get_row->result();
                }
                else
                {
                    return false;
                }
            }
             public function get_result()
            {
                $this->db->where('roll_no', $this->input->post('roll_no'));
                $get_row = $this->db->get('mark_data');
                  if ($get_row->num_rows()>0)
                {           
                    return $get_row->result();
                }
                else
                {
                    return false;
                }
            }
            public function delete_result()
            {
                $this->db->where('roll_no', $this->input->post('roll_no'));
                $get_row = $this->db->delete('mark_data');
                if($get_row)
                {
                        return true;
                }
                else
                {
                        return false;
                }
                
            }
    }