<?php 
class Message_model extends CI_Model{

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->database();
    }

    public function getList($order){
       return $this->db->order_by("m_id", $order)->get('message')->result_array();
    }  
    public function getmessage($id){
		return $this->db->where('m_id', $id)->get('message')->row();     
    }
    public function add($message){
        $this->db->insert('message', $message);
        return $this->db->select('m_id')->order_by('m_id','desc')->limit('1')->get('message')->row();
    }
    public function delet($id){
        $this->db->where('m_id',$id)->delete('message');
    }
}
?>
