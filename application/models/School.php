<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class School extends CI_Model {

    public function insertToDB($name,$email,$password)
    {
        $data = ['name'=>$name,'email'=>$email,'password'=>md5($password),'status'=>1];
        if($data1 = $this->db->insert('register',$data))
        {
      
           $this->db->where('email',$email);
         
         return $this -> db ->get('register')->row_array();
        }
    }
    
    public function getVerification($email,$code)
    {
        $this->db->where('email',$email);
        $this->db->where('code',$code);
        $query = $this->db->get('verification');
        if($query->num_rows()==1)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    public function update($email)
    {
        $this->db->where('email',base64_decode($email));
        $data = ['active'=>1];
        if($this->db->update('register',$data))
        {
            return true;
        }
    }
    public function insertToVerification($email,$code)
    {
        $data = ['email'=>base64_encode($email),'code'=>$code];
        $this->db->insert('verification',$data);
    }
    public function deleteFromDB($code)
    {
        $this->db->where('code',$code);
        $this->db->delete('verification');
    }
    public function validate($email,$password)
    {
        $this->db->where('email',$email);
        $this->db->where('password',md5($password));
        $this ->db ->where('active',1);
        $query = $this->db->get('register');
        if ($query->num_rows()==1) {
            return $query->row_array();     
        }
        else{
            return false;
        }
    }
    public function insertToCategory($name,$category,$description,$new_name)
    {
        $data = ['name'=>$name,'category'=>$category,'description'=>$description,'image'=>$new_name,'uploader_email'=>$this->session->userdata('email')];
        if($this->db->insert('categories',$data))
        {
            return $data;
        }    
    }
    public function insertToCategory2($name,$description,$new_name)
    {
        $data = ['name'=>$name,'description'=>$description,'image'=>$new_name,'uploader_email'=>$this->session->userdata('email')];
        $this->db->insert('category',$data);
    }
    public function getAllCategories()
    {
        if($this->session->userdata('email') != $this->session->userdata('admin_email'))
        {
            $this->db->where('uploader_email',$this->session->userdata('email'));
            $this->db->order_by("name", "asc");
            return $this->db->get('category')->result_array();
        }
        else
        {
            $this->db->order_by("name", "asc");
            return $this->db->get('category')->result_array();
        }
    }
    public function getAllCategorie($limit,$offset)
    {
        if($this->session->userdata('email') != $this->session->userdata('admin_email'))
        {
            $this->db->where('uploader_email',$this->session->userdata('email'));
            $this->db->order_by("name", "asc");
            $this->db->limit($limit,$offset);
            return $this->db->get('category')->result_array();
        }
        else
        {
            $this->db->order_by("name", "asc");
            $this->db->limit($limit,$offset);
            return $this->db->get('category')->result_array();
        }  
    }
    public function getRows_category()
    {
        if($this->session->userdata('email') != $this->session->userdata('admin_email'))
        {
            $this->db->where('uploader_email',$this->session->userdata('email'));
            $query = $this->db->get('category');
            return $query->num_rows();
        }
        else
        {
            $query = $this->db->get('category');
            return $query->num_rows();
        }  
    }
    public function getCategory($id)
    {
        $this->db->where('id',$id);
        return $this->db->get('category')->row_array();
    }
    public function getCategories($id)
    {
        if($this->session->userdata('email') != $this->session->userdata('admin_email'))
        {
            $this->db->where('uploader_email',$this->session->userdata('email'));
            $this->db->where('category',$id);
            return $this->db->get('categories')->result_array();
        }
        else
        {
            $this->db->where('category',$id);
            return $this->db->get('categories')->result_array();  
        }   
    }
    public function insertToRegister($id,$name,$email,$phone,$new_name)
    {
        $this->db->where('id',$id);
        $data = ['id'=>$id,'name'=>$name,'email'=>$email,'phone'=>$phone];
        if($new_name != "")
        {
            $data['image']=$new_name;
        }
        $this->db->update('register',$data);
        return $data; 
    }
    public function getFromCategories($limit,$offset)
    {
        if($this->session->userdata('email') != $this->session->userdata('admin_email'))
        {
            $this->db->where('uploader_email',$this->session->userdata('email'));
            $this->db->order_by("name", "asc");
            $this->db->limit($limit,$offset);
            $query = $this->db->get('categories');
            return $query->result_array();
        }
        else
        {
            $this->db->order_by("name", "asc");
            $this->db->limit($limit,$offset);
            $query = $this->db->get('categories');
            return $query->result_array();
        }  
    }
    public function getFromCategorie()
    {
        $this->db->order_by("name", "asc");
        $query = $this->db->get('categories');
        return $query->result_array();
    }
    public function getRows()
    {
        if($this->session->userdata('email') != $this->session->userdata('admin_email'))
        {
            $this->db->where('uploader_email',$this->session->userdata('email'));
            $query = $this->db->get('categories');
        
            return $rows = $query->num_rows();
        }
        else
        {
            $query = $this->db->get('categories');
            return $rows = $query->num_rows();
        }
    }
    /*public function getRow($id,$name,$category)
    {
        $this->db->where('id',$id);
        $this->db->or_where('name',$name);
        $this->db->or_where('category',$category);
        $query = $this->db->get('categories');
        
        return $query->num_rows();
    }*/
    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('categories');
    }
    public function updateToCategories($id,$name,$category,$description,$new_name)
    {
        $this->db->where('id',$id);
        $data = ['id'=>$id,'name'=>$name,'category'=>$category,'description'=>$description];
        if($new_name != "")
        {
            $data['image']=$new_name;
        }
        $this->db->update('categories',$data);
    }
    public function getCategories_edit($id)
    {
        $this->db->where('id',$id);
        return $this->db->get('categories')->row_array();
    }
    public function delete_category($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('category');
    }
    public function getCategories_edit_category($id)
    {
        $this->db->where('id',$id);
        return $this->db->get('category')->row_array();
    }
    public function updateToCategory($id,$name,$description,$new_name)
    {
        $this->db->where('id',$id);
        $data = ['id'=>$id,'name'=>$name,'description'=>$description];
        if($new_name != "")
        {
            $data['image']=$new_name;
        }
        $this->db->update('category',$data);
    }
    public function password_change($id,$prev_password,$new_password)
    {
        
        if(md5($prev_password) == $this->session->userdata('password'))
        {    
            $this->db->where('id',$id);
            $data = ['password'=>md5($new_password)];
            $this->db->update('register',$data);
            return $data;
        }
        else
        {
            return false;
        }
    }
    public function searchFromCategories($id,$name,$category,$limit,$offset)
    {
        if(!empty($id))
        {
            $this->db->where('id',$id);
        }
        if(!empty($name))
        {
            $this->db->or_where('name',$name);
        }
        if(!empty($category))
        {
            $this->db->or_where('category',$category);
        }
        if(!empty($id) || !empty($name) || !empty($category))
        {
            if($this->session->userdata('email') != $this->session->userdata('admin_email'))
            {
                $this->db->where('uploader_email',$this->session->userdata('email'));
                $this->db->limit($limit,$offset);
                $query = $this->db->get('categories');
                if ($query->num_rows()>=1) 
                {
                    return $query->result_array();     
                }
                else
                {
                    return false;
                }
            }
            else
            {
                $this->db->limit($limit,$offset);
                $query = $this->db->get('categories');
                if ($query->num_rows()>=1) 
                {
                    return $query->result_array();     
                }
                else
                {
                    return false;
                }
            }
        }
        else
        {
            return false;
        }
    }
    public function getSearchRows($id,$name,$category)
    {
        
        if(!empty($id))
        {
            $this->db->where('id',$id);
        }
        if(!empty($name))
        {
            $this->db->or_where('name',$name);
        }
        if(!empty($category))
        {
            $this->db->or_where('category',$category);
        }
        if(!empty($id) || !empty($name) || !empty($category))
        {
            if($this->session->userdata('email') != $this->session->userdata('admin_email'))
            {
                $this->db->where('uploader_email',$this->session->userdata('email'));
                $query = $this->db->get('categories');
                if ($query->num_rows()>=1) 
                {
                    return $query->num_rows();     
                }
                else
                {
                    return false;
                }
            }
            else
            {
                $query = $this->db->get('categories');
                if ($query->num_rows()>=1) 
                {
                    return $query->num_rows();     
                }
                else
                {
                    return false;
                }
            }
        }
        else{
            return false;
        }
    }
    public function searchAllCategories($id,$name)
    {
        if(!empty($id))
        {
            $this->db->where('id',$id);
        }
        if(!empty($name))
        {
            $this->db->or_where('name',$name);
        }
        if(!empty($id) || !empty($name))
        {
            if($this->session->userdata('email') != $this->session->userdata('admin_email'))
            {
                $this->db->where('uploader_email',$this->session->userdata('email'));
                $query = $this->db->get('category');
                if ($query->num_rows()>=1) 
                {
                    return $query->result_array();     
                }
                else
                {
                    return false;
                }
            }
            else
            {
                $query = $this->db->get('category');
                if ($query->num_rows()>=1) 
                {
                    return $query->result_array();     
                }
                else
                {
                    return false;
                }
            }
        }
        else
        {
            return false;
        }
    }
    public function getSearchR($id,$name)
    {
        if(!empty($id))
        {
            $this->db->where('id',$id);
        }
        if(!empty($name))
        {
            $this->db->or_where('name',$name);
        }
        if(!empty($id) || !empty($name))
        {
            if($this->session->userdata('email') != $this->session->userdata('admin_email'))
            {
                $this->db->where('uploader_email',$this->session->userdata('email'));
                $query = $this->db->get('category');
                if ($query->num_rows()>=1) 
                {
                    return $query->num_rows();     
                }
                else
                {
                    return false;
                }
            }
            else
            {
                $query = $this->db->get('category');
                if ($query->num_rows()>=1) 
                {
                    return $query->num_rows();     
                }
                else
                {
                    return false;
                }
            }
        }
        else
        {
            return false;
        }
    }
    public function getUsers($limit,$offset)
    {
        $this->db->limit($limit,$offset);
        return $this->db->get('register')->result_array();
    }
    public function adminAccess($id,$email)
    {
        $this->db->where('id',$id);
        $data = ['admin_email'=>$email,'admin'=>1];
        $this->db->update('register',$data);
    }
    public function retriveAdminAccess($id)
    {
        $this->db->where('id',$id);
        $data = ['admin_email'=>"",'admin'=>0];
        $this->db->update('register',$data);
    }
    public function getuser_rows()
    {
        return $this->db->get('register')->num_rows();
    }
    public function searchUsers($id,$name,$email,$phone,$limit,$offset)
    {
        if(!empty($id))
        {
            $this->db->where('id',$id);
        }
        if(!empty($name))
        {
            $this->db->or_where('name',$name);
        }
        if(!empty($email))
        {
            $this->db->or_where('email',$email);
        }
        if(!empty($phone))
        {
            $this->db->or_where('phone',$phone);
        }
        if(!empty($id) || !empty($name) || !empty($email) || !empty($phone))
        {
            $this->db->limit($limit,$offset);
            $query = $this->db->get('register');
            if ($query->num_rows()>=1) 
            {
                return $query->result_array();     
            }
            else
            {
                return false;
            }   
        }
        else
        {
            return false;
        }
    }
    public function userSearchRows($id,$name,$email,$phone)
    {
        if(!empty($id))
        {
            $this->db->where('id',$id);
        }
        if(!empty($name))
        {
            $this->db->or_where('name',$name);
        }
        if(!empty($email))
        {
            $this->db->or_where('email',$email);
        }
        if(!empty($phone))
        {
            $this->db->or_where('phone',$phone);
        }
        if(!empty($id) || !empty($name) || !empty($email) || !empty($phone))
        {
            $query = $this->db->get('register');
            if ($query->num_rows()>=1) 
            {
                return $query->num_rows();     
            }
            else
            {
                return false;
            }   
        }
        else
        {
            return false;
        }
    }
    public function block_user($id)
    {
        $this->db->where('id',$id);
        $data = ['status'=>0];
        $this->db->update('register',$data);
    }
    public function unblock_user($id)
    {
        $this->db->where('id',$id);
        $data = ['status'=>1];
        $this->db->update('register',$data);
    }
    public function updateRegister($email)
    {
        $this->db->where('email',$email);
        if($this->session->userdata('status')==1)
        {
           $data = ['online'=>1];
            return $this->db->update('register',$data); 
        }
        
    }
    public function update_Register()
    {
        $this->db->where('email',$this->session->userdata('email'));
        $data = ['online'=>0];
        $this->db->update('register',$data);
    }

}