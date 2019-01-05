<?php 
class Schedule_model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->database();
    }

    public function getList($order){
       return $this->db->order_by("schedule_id", $order)->get('schedule')->result_array();
    }    
    public function Get($id){
        $d2 = $this->db->where('schedule_id', $id)->get('schedule')->row();
        $d['schedule_id'] = $d2->schedule_id;
        $d['route_id'] = $d2->route_id;
        $d['bus_id'] = $d2->bus_id;
        return array('d2'=> $d);
    }


    public function Edit($schedule){
        $this->db->where('schedule_id', $schedule['schedule_id'])->update('schedule', $schedule);
    }
    public function delet($schedule){
        $this->db->where('schedule_id',$schedule['schedule_id'])->delete('schedule');
    }
    public function Add($schedule){
        $schedule['created_at'] = date("Y-m-d H:i:s");
        $this->db->insert('schedule', $schedule);
    }   
    public function availroutebus(){
        $d0 = $this->db->select('route_id,source,destination,departure')->get('route')->result();
        $list = [];
        foreach ($d0 as $k) {
            $data['route_id'] = $k->route_id;
            $data['source'] = $k->source;
            $data['destination'] = $k->destination;
            $data['departure'] = $k->departure;
            array_push($list, $data);
        }
        $d1 = $this->db->select('bus_id,regs_no')->where('`bus_id` NOT IN (SELECT `bus_id` FROM `schedule`)', NULL, FALSE)->get('bus')->result();
        $list1 = [];
        foreach ($d1 as $k1) {
            $data1['bus_id'] = $k1->bus_id;
            $data1['regs_no'] = $k1->regs_no;
            array_push($list1, $data1);
        }
        return array('d0'=>$list,'d1'=>$list1);



    }

    // public function get_where($route_id,$bd)
    // {
    //     // return $this->db->get_where('schedule',array('route_id'=>$route_id, 'bus_time >=' $bd))->row_array();

    //      return $this->db->select('*')
    //     ->from('schedule')     
    //     ->where('schedule.route_id', $route_id)     
    //     ->where('schedule.bus_time >=', $bd." 00:00:00")
    //     ->where('schedule.bus_time <=', $bd." 23:59:59")
    //     ->get()->result();

    // }

    public function getavailablebuses($ticket)
    {
        if($ticket['busdate'] == date("Y-m-d")){
            return $this->db->select('*')
            ->from('schedule')
            ->join('route', 'route.route_id = schedule.route_id')
            ->where('route.source',$ticket['source'])
            ->where('route.destination',$ticket['dest'])
            ->where('route.departure >=', date('H:i:s', strtotime('+1 hour')))
            ->order_by('departure','asc')
            ->get()->result();}
        else{
            return $this->db->select('*')
            ->from('schedule')
            ->join('route', 'route.route_id = schedule.route_id')
            ->where('route.source',$ticket['source'])
            ->where('route.destination',$ticket['dest'])
            ->order_by('departure','asc')
            ->get()->result();
        }
    }

      public function Getbyid($id){

       $data =  $this->db->select('*')
        ->from('schedule')   
        ->join('route', 'route.route_id = schedule.route_id')
        ->where('schedule.schedule_id', $id)
        ->get()->result();
        $data = json_encode($data);
        $data = json_decode($data,true);
        return $data[0];
    }
    
}
?>
