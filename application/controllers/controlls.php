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
		$config['base_url'] = 'http://dndgroup.kr/controlls/portfolio';
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
		$this->load->view('about-us');
	}

    public function career()
    {
        $this->load->view('career');
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
		$this->sendEmail();
	}

    // 경고메세지만 출력
    private function alert($msg) {
        $CI =& get_instance();

        echo "<meta http-equiv=\"content-type\" content=\"text/html; charset=".$CI->config->item('charset')."\">";
        echo "<script type='text/javascript'> alert('".$msg."'); </script>";
        exit;
    }

	private function sendEmail()
	{
		$EmailFrom = Trim(stripslashes($_POST['Name']));
		$EmailTo = "dndgroup@daum.net";
		$Subject = "From website";
        $Name = Trim(stripslashes($_POST['Name']));
        $Email = Trim(stripslashes($_POST['Email']));
        $Message = Trim(stripslashes($_POST['Message']));

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
        if ($success) {
            print "<meta http-equiv=\"refresh\" content=\"0;URL=http://dndgroup.kr/controlls/contact/\">";
            $this->alert('메일 발송에 성공하였습니다.');
        }
        else {
            $this->alert('메일 발송에 실패하였습니다. \n 02-6207-9908로 문의 주세요');
        }

    }
}