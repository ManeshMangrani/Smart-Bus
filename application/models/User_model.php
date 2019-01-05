<?php 
class User_model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->database();
    }

    public function getList($order){
       return $this->db->order_by("user_id", $order)->get('user1')->result_array();
    }  

    public function getListvistors($count){
        if($count == 0){
            return $this->db->order_by("p_id", 'asc')->get('passenger')->result_array();
        }
        else{
            return $this->db->where("p_id", $count)->get('passenger')->result_array();
        }
    }

    public function getuser($user_id){
		return $this->db->where('user_id', $user_id)->get('user1')->result();     
    }
    public function getuser1($user_id){
        return $this->db->where('user_id', $user_id)->get('user1')->result_array();     
    }
    public function Add($user){
        $user['created_at'] = date("Y-m-d H:i:s");
        $this->db->insert('user', $user);
    }
    public function Get($id){
        return $this->db->where('user_id', $id)->get('user1')->row();
    }
    public function Edit($user){
        $this->db->where('user_id', $user['user_id'])->update('user1', $user);
    }
    public function delet($user){
        $this->db->where('user_id',$user['user_id'])->delete('user1');
    }
    public function getListrole(){
       return $this->db->get('role')->result_array();
    }
	public function viewTrips($id){
		return $this->db->where('trav_id',$id)->where('is_valid',1)->get('ticket')->result_array();
	}
	public function editProfile($d){
		$this->db->set('fname', $d['fname']);
		$this->db->set('lname', $d['lname']);
		$this->db->set('email', $d['email']);
		$this->db->set('cnic', $d['cnic']);
		$this->db->set('phone', $d['phone']);
		$this->db->set('address', $d['address']);
		$this->db->where('email',$d['email']);
		$this->db->update('user1');
	}
    public function getPassword($id){
        return $this->db->where('user_id',$id)->get('user1')->row();
    }
    public function changePassword($id,$pass){
        $this->db->set('password',$pass);
        $this->db->where('user_id',$id);
        $this->db->update('user1');
    }

    public function get_tracid_by_tid($tid){
        $sid = $this->db->select('schedule_id')->where('t_id',$tid)->get('ticket')->row();
        $busid = $this->db->select('bus_id')->where('schedule_id',$sid->schedule_id)->get('schedule')->row();
        $tracid = $this->db->select('tracker_id')->where('bus_id',$busid->bus_id)->get('bus')->row();
        return $tracid->tracker_id;
    }
}
?>
