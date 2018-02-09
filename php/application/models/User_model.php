<?php

/**
 * Created by PhpStorm.
 * User: apple
 * Date: 18/1/11
 * Time: 上午10:40
 */
class User_model extends CI_Model
{

    public function add($name){
        $this->db->insert('test',array(//数据库表名
            'username'=>$name
        ));
        return $this->db->affected_rows();//返回受影响的函数
    }
	public function user_list(){
		$query=$this->db->get('test');
		//$query = $this -> db -> get_where("test",array('username'=>'sjy'));
		
		return $query->result();
	}
	public function del_user($id){
        $this->db->delete('test', array('id' => $id));
        return $this->db->affected_rows();
    }
     public function get_user_by_id($id){
        $query = $this->db->get_where('test', array('id' => $id));
        return $query->row();
    }

    public function update($id,$name){
        $this->db->where('id', $id);
        $this->db->update('test', array(
            "username" => $name,
        ));
        return $this->db->affected_rows();
    }
}