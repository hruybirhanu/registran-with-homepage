<?php
class Employeemodel extends CI_Controller {
	public function insertEmployee($data)
	{
	return $this->db->insert('employee',$data);
	}
    public function fetchEmployee()
	{
	$quary=$this->db->get('employee');
    return $quary->result();
	}
	public function editEmployee($id)
	{
	$quary=$this->db->get_where('employee',['id'=>$id]);
	return $quary->row();
	}
	public function updateEmployee($data,$id ){
		return $this->db->update('employee', $data, ['id'=>$id]);

	}
	public function delateemployee($id ){
		return $this->db->delete('employee', ['id'=>$id]);

	}
}
