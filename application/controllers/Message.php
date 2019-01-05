<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Message extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('message_model','MessageModel');
		$this->load->library('email');
	}

	public function lists()
	{
		$this->OnlyAdmin();
		$info = $this->MessageModel->getList('desc');
		$this->loadView('message/list', array('info'=> $info), true);
	}

	public function reply_loader(){
		$this->OnlyAdmin();
		$info = $this->MessageModel->getmessage($this->input->post('m_id'));
		$this->loadView('edit/message',array('info'=>$info),true);
	}

	public function reply(){}

	public function add(){
		$this->MessageModel->add($this->input->post());
	/*	$id = $this->MessageModel->add($this->input->post());
		$subject = "Your query submitted at Smart bus with ID-.".$id->m_id;
		$body = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
				<html xmlns="http://www.w3.org/1999/xhtml">
					<body>
						<table cellspacing="0" cellpadding="0" width="100%" bgcolor="#ebebeb">
							<tbody>
								<tr>
									<td><img src="<?php echo PATH; ?>/images/backgrounds/background-02-1920x950.jpg" height="300" width="100%"></td>
								</tr>
							</tbody>
						</table>
						<table style="padding-left:25%; padding-right:25%; border-left: 2px solid #e6e6e6; border-right: 2px solid #e6e6e6;" cellspacing="0" cellpadding="25" width="">
							<tr>
								<td style="background-color: #ffffff; border-top: 0px solid #000000; text-align: left; height: 50px;" align="center"><p><span style="margin-bottom: 10px; font-size: 20px; font-weight: normal; color: #494a48; font-family: arial; line-height: 110%;">Greetings,<br>
									Welcome to Smart-Travel! We are excited to have you as part of our membership.
									Membership is a lifelong journey and we look forward to helping you start yours.<br>
									As a member of Smart-Travel, you will enjoy many unique benefits. Please see our upcoming news so we can explain these benefits and how you can get more.<br>
									We look forward to see you there in near future!<br><br>
									Please let us know if you have any questions about your membership.<br>
									Best wishes,<br>
									Team Smart-Travel<br><br> Electronicaly generated mail.PLZ don not reply.</span></p>
								</td>
							</tr>
						</table>
					</body>
				</html>';
			//mail($to,$subject,$txt,$headers); 
			$result = $this->email->from('k142226@nu.edu.pk')->reply_to('mangrani@smartbus.pk')->to($this->input->post('email'))->subject($subject)->message($body); */
         	if($this->email->send()){
         		redirect('index.php/Welcome/index');
         	}
         	else
         		redirect('index.php/Welcome/index');
	}

	public function del(){
		$this->OnlyAdmin();
		if($this->input->post()){
		$this->MessageModel->delet($this->input->post());
		redirect('index.php/message/lists');}
	}
}?>