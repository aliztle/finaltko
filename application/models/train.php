<?php defined('BASEPATH') OR exit('No direct script access allowed');
class train extends CI_Model {
	function __construct(){
        parent::__construct();
    }
    function train_insert($train_data){
		$this->db->insert('train_n',$train_data);
	} 
    function ton_insert($ton_data){
		$this->db->insert('tontang',$ton_data);
	} 
	function huayrach_insert($rach_data){
		$this->db->insert('huayrach',$rach_data);
	}
	function ptang_insert($endways_data){
		$this->db->insert('endways',$endways_data);
    }

    function select_all(){
        $this->db->select('*');
        $this->db->from('train_n');
        $this->db->join('tontang','tontang.ton_id = train_n.ton_id', 'left');
        $this->db->join('huayrach','huayrach.rach_id = train_n.rach_id', 'left');
        $this->db->join('endways','endways.out_id = train_n.out_id', 'left');
        $this->db->order_by('endways.time_to','ASC');
        $query = $this->db->get();
        return $query->result();
    }
}