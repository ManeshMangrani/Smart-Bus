<?php 
class Bus_model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->database();
    }

    public function getList($order){
       return $this->db->order_by("bus_id", $order)->get('bus')->result_array();
    }  
    public function getbus($bus_id){
		return $this->db->where('bus_id', $bus_id)->get('bus')->row();     
    }
    public function Add($bus){
        $bus['created_at'] = date("Y-m-d H:i:s");
        unset($bus['cam_id1']);
        $this->db->insert('bus', $bus);
    }
    public function add_t(){
        $data['position'] = "NULL";
        $this->db->insert('tracker',$data);
    }
    public function Add_c1($cam){
        $this->db->insert('camera', $cam);
    }
    public function Add_c2($cam){
        $this->db->insert('camera', $cam);
    }
    public function get_tc(){
        $d0 = $this->db->select('tracker_id')
        ->order_by('tracker_id',"desc")
        ->limit(1)
        ->get('tracker')
        ->row_array();
        $d1 = $this->db->select('cam_id')
        ->order_by('cam_id',"desc")
        ->limit(2)
        ->get('camera')
        ->row_array();

        return array('data'=>$d0,'d'=>$d1);
    }
    public function Get($id){
        return $this->db->where('bus_id', $id)->get('bus')->row();
    }
    public function Edit($bus){
        $this->db->where('bus_id', $bus['bus_id'])->update('bus', $bus);
    }
    public function delet($bus){
        $this->db->where('bus_id',$bus['bus_id'])->delete('schedule');
        $this->db->where('bus_id',$bus['bus_id'])->delete('bus');
    }
    public function getspec($id){
        $data = $this->db->where('bus_id', $id)->get('bus')->row();
        $d['bus_id'] = $data->bus_id;
        $d['regs_no'] = $data->regs_no;
        $d['seats'] = $data->seats;
        $d['class'] = $data->class;
        $d['des'] = $data->des;
        $d['created_at'] = $data->created_at;
        $d['tracker_id'] = $data->tracker_id;
        $d['cam_id'] = $data->cam_id;
        return array('info'=>$d);
    }
    public function gettracker(){
        $d0 = $this->db->select('tracker_id')->where('`tracker_id` NOT IN (SELECT `tracker_id` FROM `bus`)', NULL, FALSE)->get('tracker')->result();
        $list = [];
        foreach ($d0 as $k) {
            $data['tracker_id'] = $k->tracker_id;
            array_push($list, $data);
        }
        return array('d0' => $list);
    }
    public function getcam(){
        $d0 = $this->db->select('tracker_id')
        ->where('`tracker_id` NOT IN (SELECT `tracker_id` FROM `bus`)')
        ->limit(1)
        ->get('tracker')
        ->row_array();
        $d1 = $this->db->select('cam_id')
        ->where('`cam_id` NOT IN (SELECT `cam_id` FROM `bus`)')
        ->get('camera')
        ->result_array();
        foreach ($d1 as $k) {
            if($k['cam_id'] % 2 != 0){
                $d1['cam_id'] = $k['cam_id'];
                return array('data1' => $d0,'data'=> $d1);
            }
        }
    }
}
?>
