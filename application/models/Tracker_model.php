<?php 
class Tracker_model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->database();
    }

    public function getList(){
       return $this->db->order_by("tracker_id", "desc")->get('tracker1')->result_array();
    }

    public function getspec($id){
        $data = $this->db->where('tracker_id', $id)->get('tracker1')->row();
        $d['tracker_id'] = $data->tracker_id;
        $d['Area'] = $data->Area;
        $d['position'] = $data->position;
        $d['created_at'] = $data->created_at;
        return array('info'=>$d);
    }
}
?>
