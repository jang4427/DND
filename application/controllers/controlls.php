<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Controlls extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

	public function initPaging()
	{
		$this->load->library('pagination');
		$config['base_url'] = 'http://127.0.0.1/controlls/portfolio';
		$config['total_rows'] = 20;
		$config['per_page'] = 5;

		$this->pagination->initialize($config);

		echo $this->pagination->create_links();
	}

	public function index()
	{
		$this->load->view('index');
	}

	public function about_us()
	{
        print_r('about_us');
		$this->load->view('about-us');
	}

	public function portfolio($iPage = 1)
	{
		$paging['paging'] = $this->initPaging();
		echo $paging['paging'];

		if($iPage == 1) {
			$this->load->view('portfolio-1-col', $paging);
		} else if($iPage == 2) {
			$this->load->view('portfolio-2-col', $paging);
		} else if($iPage == 3) {
			$this->load->view('portfolio-3-col', $paging);
		} else if($iPage == 4) {
			$this->load->view('portfolio-4-col', $paging);
		} else if($iPage == 5) {
			$this->load->view('portfolio-5-col', $paging);
		} else if($iPage == 6) {
			$this->load->view('portfolio-6-col', $paging);
		} else if($iPage == 7) {
			$this->load->view('portfolio-7-col', $paging);
		}

	}

	public function news()
	{
		$this->load->view('news-home-1');
	}

	public function contact()
	{
		$this->load->view('contact');
	}

	public function send()
	{
		error_log(print_r($this->input->post(), true));
		$this->sendEmail();
	}

	private function sendEmail()
	{
		$aInput = $this->input->post('name');
		error_log(print_r($aInput, true));

		$EmailFrom = "TEST";
		$EmailTo = "01692204427@naver.com";
		$Subject = "From website";
//$Name = Trim(stripslashes($_POST['Name']));
//$Email = Trim(stripslashes($_POST['Email']));
//$Message = Trim(stripslashes($_POST['Message']));
		$Name = trim(stripslashes('jang'));
		$Email = trim(stripslashes('01692204427@naver.com'));
		$Message = trim(stripslashes('kkkk'));

		error_log(print_r($_POST, true));
//		error_log(print_r($Name, true));
//		error_log(print_r($Email, true));
//		error_log(print_r($Message, true));
// validation
		$validationOK=true;
		if (!$validationOK) {
			print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
			exit;
		}

// prepare email body text
		$Body = "";
		$Body .= "Name: ";
		$Body .= $Name;
		$Body .= "\n";
		$Body .= "Email: ";
		$Body .= $Email;
		$Body .= "\n";
		$Body .= "Message: ";
		$Body .= $Message;
		$Body .= "\n";

// send email
		$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");
// redirect to success page
		if ($success){
			error_log('sucess');
//			print "<meta http-equiv=\"refresh\" content=\"0;URL=http://yourwebsite.com/\">";
		}
		else{
			error_log('fail');
		}
	}
}