<?php
class UserModel extends CI_Model
{
    /**
     * @param User $user
     * @return void
     */    
    public function getUser($user)
    {
        $this->db->where('email', $user->getEmail());
        $query = $this->db->get("user");
        
        if(empty($query->result())) {
            echo ['error'=>['lemail' => 'User does\'nt exist']];exit;
        }
        $dbUser = $query->result()[0];
    
        if(password_verify($user->getPassword(), $dbUser->password))
        {
            return $dbUser;
        }
        return NULL;
    }

    /**
     * @param User $user
     * @return void
     */
    public function getRegisteredUser($user)
    {
        $this->db->where('email', $user->getEmail());
        $query = $this->db->get("user");
        $dbUser = $query->result()[0];
    }


    /**
     * @param User $user
     * @return void
     */
    public function insertUsers($user)
    {    
        $data = array(
            'name' => $user->getName(),
            'email' => $user->getEmail(),
            'password' => $user->getPassword()
        );
        
        return $this->db->insert('user', $data);
    }

    /**
     * @param array $id
     * @return void
     */
    public function updateUsers($id) 
    {
        $data=array(
            'title' => $this->input->post('title'),
            'description'=> $this->input->post('description')
        );
        if($id==0){
            return $this->db->insert('users',$data);
        }else{
            $this->db->where('id',$id);
            return $this->db->update('users',$data);
        }        
    }
}