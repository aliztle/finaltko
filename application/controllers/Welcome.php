<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('train','AT');
	}

	public function index()
	{
		$result['AT'] = $this->AT->select_all();
		$this->load->view('add_train',$result);
	}
	public function add_datatrain()
	{
		$train_data = array(
			't_id' => $this->input->post("train_box"),
			'ton_id' => $this->input->post("ton_id"),
			'rach_id' => $this->input->post("huay_id"),
			'out_id' => $this->input->post("p_id"),
			'status' => $this->input->post("status"),
		);
		$ton_data = array(
			'ton_id' => $this->input->post("ton_id"),
			'ton_station' => $this->input->post("ton_station"),
			'time_out' => $this->input->post("ton_timeout"),
		);
		$rach_data = array(
			'rach_id' => $this->input->post("huay_id"),
			'rach_to' => $this->input->post("huay_to"),
			'rach_out' => $this->input->post("huay_timeout"),
		);
		$endways_data = array(
			'out_id'=> $this->input->post("p_id"),
			'out_station' => $this->input->post("p_station"),
			'time_to'=> $this->input->post("p_time"),
		);
		
		if($this->input->post("ton_id")!= "" && $this->input->post("ton_station")!== ""){
			$this->AT->ton_insert($ton_data);
			$this->AT->huayrach_insert($rach_data);
			$this->AT->ptang_insert($endways_data);
			$this->AT->train_insert($train_data);
			$result['AT'] = $this->AT->select_all();
			$this->load->view('view_train',$result);
		}else {
			echo "ไม่เชื่อมต่อ";
		}
	}
	public function showTrain()
	{
		$result['AT'] = $this->AT->select_all();
		$this->load->view('view_train',$result);
	}
}
