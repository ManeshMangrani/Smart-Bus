<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pdf extends MY_Controller {


	/**
	 * Example: DOMPDF
	 *
	 * Documentation:
	 * http://code.google.com/p/dompdf/wiki/Usage
	 *
	 */
	public function selection(){
		$this->loadView('pdf/selection_ticket',null,true);
	}

	public function user_selection(){
		$this->loadView('pdf/selection_user',null,true);
	}


	public function user(){
		$this->load->database();
		$this->load->library('dompdf_gen');
		if($this->input->post('user1') == 0){
			$a = $this->db->order_by('user_id','asc')->get('user1')->result_array();
			$html = $a;
			$output = $this->load->view('pdf/user',['html'=>$html],true);
			$this->dompdf->load_html($output);
			$this->dompdf->render();
			$this->dompdf->stream("All-Users.pdf");
		}
		else if($this->input->post('user1') == 1){
			$a = $this->db->order_by('p_id','asc')->get('passenger')->result_array();
			$html = $a;
			$output = $this->load->view('pdf/visitor',['html'=>$html],true);
			$this->dompdf->load_html($output);
			$this->dompdf->render();
			$this->dompdf->stream("All-Visitors.pdf");
		}
	}


	public function part_user(){
		$this->load->database();
		$this->load->library('dompdf_gen');
		if($this->input->post('type') == 1){
			$a = $this->db->where('user_id',$this->input->post('id'))->get('user1')->result_array();
			$html = $a;
			$output = $this->load->view('pdf/user',['html'=>$html],true);
			$this->dompdf->load_html($output);
			$this->dompdf->render();
			$this->dompdf->stream($this->input->post('id')."-User.pdf");
		}
		else if($this->input->post('type') == 2){
			$a = $this->db->where('p_id',$this->input->post('id'))->get('passenger')->result_array();
			$html = $a;
			$output = $this->load->view('pdf/visitor',['html'=>$html],true);
			$this->dompdf->load_html($output);
			$this->dompdf->render();
			$this->dompdf->stream($this->input->post('id')."-Visitors.pdf");
		}
	}


	public function ticket() {
		$dates = $this->input->post();
	    $this->load->database();
	    $this->load->library('session');
	    $aa = $this->db->where('created_at >=',$dates['sdate'])->where('created_at <=',$dates['ldate'])->get('ticket')->result_array();
		$a = array(
			'sdate' => $dates['sdate'],
			'ldate' => $dates['ldate']
		);
		$this->session->set_userdata($a);
		$html = $aa;
		$output = $this->load->view('pdf/test',['html'=>$html],true);
		$this->load->library('dompdf_gen');
		$this->dompdf->load_html($output);
		$this->dompdf->render();
		$this->dompdf->stream("All-Tickets.pdf");
	}


	public function bus() {
	    $this->load->database();
	    $aa = $this->db->order_by('bus_id','asc')->get('bus')->result_array();
		$html = $aa;
		$output = $this->load->view('pdf/bus',['html' => $html],true);
		$this->load->library('dompdf_gen');
		$this->dompdf->load_html($output);
		$this->dompdf->render();
		$this->dompdf->stream("All-Buses.pdf");
	}


	public function city() {
	    $this->load->database();
	    $aa = $this->db->order_by('city_id','asc')->get('city')->result_array();
		$html = $aa;
		$output = $this->load->view('pdf/city',['html' => $html],true);
		$this->load->library('dompdf_gen');
		$this->dompdf->load_html($output);
		$this->dompdf->render();
		$this->dompdf->stream("All-Cities.pdf");
	}


	public function offer() {
	    $this->load->database();
	    $aa = $this->db->order_by('o_id','asc')->get('offer')->result_array();
		$html = $aa;
		$output = $this->load->view('pdf/offer',['html' => $html],true);
		$this->load->library('dompdf_gen');
		$this->dompdf->load_html($output);
		$this->dompdf->render();
		$this->dompdf->stream("All-Offers.pdf");
	}


	public function route() {
	    $this->load->database();
	    $aa = $this->db->order_by('route_id','asc')->get('route')->result_array();
		$html = $aa;
		$output = $this->load->view('pdf/route',['html' => $html],true);
		$this->load->library('dompdf_gen');
		$this->dompdf->load_html($output);
		$this->dompdf->render();
		$this->dompdf->stream("All-Routes.pdf");
	}

	public function schedule() {
	    $this->load->database();
	    $aa = $this->db->order_by('schedule_id','asc')->get('schedule')->result_array();
		$html = $aa;
		$output = $this->load->view('pdf/schedule',['html' => $html],true);
		$this->load->library('dompdf_gen');
		$this->dompdf->load_html($output);
		$this->dompdf->render();
		$this->dompdf->stream("All-Schedules.pdf");
	}


	public function ticket_print() {
	    $this->load->library('session');
		$output = $this->load->view('pdf/ticket',null,true);
		$this->load->library('dompdf_gen');
		$this->dompdf->load_html($output);
		$this->dompdf->render();
		$this->dompdf->stream("Smart-Travel Ticket.pdf");
	}
}
