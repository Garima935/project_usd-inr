<?php 
	class User_model extends CI_model{

	public function __construct(){
		$this->table ='user';
		$this->primary_key='user_id';
	}

	public function add_user($data)
	{
		return $this->db->insert($this->table,$data);
	}

	public function checkuser($data)
	{
		$this->db->select("*");
		$this->db->from($this->table);
		$this->db->where('email',$data['email']);
		$query=$this->db->get();
		return $query->row();
	}
}
?>