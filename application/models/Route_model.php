<?php 
class Route_model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->database();
    }

    public function getList($order){
       return $this->db->order_by("route_id", $order)->get('route')->result_array();
    }

    public function getspecroute($id){
        $schedule = $this->db->where('schedule_id',$id)->get('schedule')->row();
        $route_info = $this->db->where('route_id',$schedule->route_id)->get('route')->row(); 
        //$que = "select * from route where route_id = (select route_id from schedule where schedule_id = '$id')";
        //$data = $this->db->query($que);
        return $route_info;
    }
    
    public function getroute($route_id){
		//return $this->db->where('route_id', $route_id)->get('route')->result_array();
        $que = "select * from route where route_id = '$route_id'";
        $data = $this->db->query($que);
        return $data;
    }
    public function Add($route){
        $route['source'] = strtoupper($route['source']);
        $route['destination'] = strtoupper($route['destination']);
        $route['stops'] = strtoupper($route['stops']);
        $route['created_at'] = date("Y-m-d H:i:s");
        $this->db->insert('route', $route);  
    }
    public function Edit($route){
        $this->db->where('route_id', $route['route_id'])->update('route', $route);
    }
    public function delet($route){
        $this->db->where('route_id',$route['route_id'])->delete('schedule');
        $this->db->where('route_id',$route['route_id'])->delete('route');
    }
    public function Get($id){
        return $this->db->where('route_id', $id)->get('route')->row();
    }
    public function getspec($id){
        $data = $this->db->where('route_id', $id)->get('route')->row();
        $d['route_id'] = $data->route_id;
        $d['source'] = $data->source;
        $d['destination'] = $data->destination;
        $d['stops'] = $data->stops;
        $d['km'] = $data->km;
        $d['departure'] = $data->departure;
        $d['arrival'] = $data->arrival;
        $d['day'] = $data->day;
        $d['fare'] = $data->fare;
        $d['created_at'] = $data->created_at;
        return array('info'=>$d);
    }

    public function get_where($source,$dest)
    {
        return $this->db->get_where('route',array('source'=>$source,'destination'=>$dest))->row_array();

    }

    public function getcity(){
        return $this->db->get('city')->result_array();
    }
}

?>
