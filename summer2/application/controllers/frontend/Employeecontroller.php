<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Employeecontroller extends CI_Controller {
	public function employee()
	{   $this->load->view('template/header');
         
		$this->load->model('Employeemodel'); 
		$data['employee']=$this->Employeemodel->fetchemployee(); 
		$this->load->view('frontend/employee',$data);
		$this->load->view('template/footer');  
		//$this->load->database('employee',$data);	
	}
	public function create()
	{
       $this->load->view('template/header');
        $this->load->view('frontend/create'); 
		$this->load->view('template/footer');  
	}
	public function store()
	{
		//$this->load->database('employee');
		//$this->load->library('form_validation');
	   // $this->form_validation->set_rules('first_name', 'Firstname', 'required');
        //$this->form_validation->set_rules('last_name', 'lastname', 'required');
		//$this->form_validation->set_rules('id', 'Firstname', 'required');
		//$this->form_validation->set_rules('sex', 'Firstname', 'required');
		//$this->form_validation->set_rules('adress', 'Firstname', 'required');
		//$this->form_validation->set_rules('email', 'Firstname', 'required');
		

		//if($this->form_validation->run())
		//{
			$data=[
				'first_name'=>$this->input->post('first_name'),
				'last_name'=>$this->input->post('last_name'),
				'phoneNo'=>$this->input->post('phoneNo'),
				'id'=>$this->input->post('id'),
				'sex'=>$this->input->post('sex'),
				'adress'=>$this->input->post('adress'),
				'email'=>$this->input->post('email')
			   ];
			   $this->load->model('Employeemodel');
			   $this->Employeemodel->insertEmployee($data);


			  // $session->setFlashdata('status', 'Employeedata inserted sessusfully');

			   redirect(base_url('employee'));
			   //$this->employee();
		//}
		//else{
			//$this->create();
			//redirect(base_url('employee/add'));
		} 
	//}
	public function edit($id)
	{

		$this->load->view('template/header');
        $this->load->model('Employeemodel'); 
		$data['employee']=$this->Employeemodel->editEmployee($id);
        $this->load->view('frontend/edit',$data); 
		$this->load->view('template/footer');
		  
	}
	public function update($id)
	{
			$data=[
				'first_name'=>$this->input->post('first_name'),
				'last_name'=>$this->input->post('last_name'),
				'phoneNo'=>$this->input->post('phoneNo'),
				'id'=>$this->input->post('id'),
				'sex'=>$this->input->post('sex'),
				'adress'=>$this->input->post('adress'),
				'email'=>$this->input->post('email')
			   ];
        $this->load->model('Employeemodel'); 
	    $this->Employeemodel->updateEmployee($data,$id);
	
		redirect(base_url('employee')); 
	}
	public function delate($id)
	{
		$this->load->model('Employeemodel'); 
	    $this->Employeemodel->delateemployee($id);
		redirect(base_url('employee'));   
	}
	 }
