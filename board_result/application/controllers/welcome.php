<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
ob_start();
session_start();
class Welcome extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url','file'));
		$this->load->model('basedb');
		$this->load->library("pagination");
		$this->load->library("form_validation");				
	}
	//for pdf convert
	function pdf_create($html, $filename='', $stream=TRUE) 
	{
		require_once("dompdf/dompdf_config.inc.php");
		$dompdf = new DOMPDF();
		$dompdf->load_html($html);
		$dompdf->render();
		if ($stream) {
		    $dompdf->stream($filename.".pdf");
		} else {
		    return $dompdf->output();
		}
	}
	/*function pdf()
	{
	     $this->load->helper(array('dompdf', 'file'));
	     // page info here, db calls, etc.     
	     //$html = $this->load->view('hello', $data, true);
	     $html = $this->load->view('hello','', true);
	     pdf_create($html, 'hello');
	}*/
	//end of pdf convert
     
public function banner()
{
	$this->load->view('banner');

}
public function tree()
{
	$this->load->view('tree');
}

	public function index()
	{
		
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('home');
		$this->load->view('footer');
	}
	public function about_us()
	{
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('about_us');
		$this->load->view('footer');
		
	}
	public function servies()
	{
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('servies');
		$this->load->view('footer');
	}
	public function file_upload()
	{
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('file_upload');
		$this->load->view('footer');
	}
	public function client()
	{
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('client');
		$this->load->view('footer');
	}
	public function contact()
	{
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('contact');
		$this->load->view('footer');
	}
	public function login()
	{
		if($this->session->userdata('is_logged_in'))
		{
			header('Location:result_form');
		}
		$this->form_validation->set_rules("userid", "Email ID","trim|required|xss_clean|callback_user_validation" );
		$this->form_validation->set_rules("pass", "Password" , "trim|required|xss_clean|md5");
		if($this->form_validation->run() == false)
		{
			$this->index();
		}
		else
		{
			$data = array(
				'userid' => $this->input->post('userid'),
				'is_logged_in' => 1
				      );
			$this->session->set_userdata($data);
			$this->result_form();
		}
	}
	public function user_validation()
	{
		if($this->basedb->can_login())
		{
			return true;
		}
		else
		{
			$this->form_validation->set_message('user_validation', 'Incurrect Username/ Password!');
			return false;
		}
	}
	public function user_check()
	{
		if($this->basedb->user_check())
		{
			return true;
		}
		else
		{
			$this->form_validation->set_message('user_check', 'User name already register!');
			return false;
		}
	}
	public function registration()
	{
		if($this->session->set_userdata('is_logged_in'))
		{
			redirect(base_url(), 'welcome/index');
		}
		else
		{
			$this->form_validation->set_rules('email','Email','tirm|required|xss_clean|valid_email|callback_user_check');
			$this->form_validation->set_rules('password',' Password','tirm|required|min_length[6]|matches[re_password]|md5');
			$this->form_validation->set_rules('re_password',' Re-password','tirm|required');
			if($this->form_validation->run() == false)
			{
				$this->index();
			}
			else
			{
				
				$data = array(
					'userid' => $this->input->post('email'),
					'password' =>$this->input->post('password') 
					      );
				
				$this->basedb->registration($data);
				$data = array(
					'userid' => $this->input->post('email'),
					'is_logged_in' => 1
					      );
				$this->session->set_userdata($data);
				$this->index();	
			}
		}
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url(),'welcome/index');
	}
	//certificate form
	public function result_form()
	{
		if($this->session->userdata('is_logged_in'))
		{
			
			$this->load->view('header');
			$this->load->view('admin_menu');
			$this->load->view('result_form');
			$this->load->view('footer');		
		}
		else
		{
			$this->index();			
		}					
	}
	//result find out
	public function get_result()
	{
		if($this->basedb->get_result())
			{
				$data['result'] = $this->basedb->get_result();
			$this->load->view('header');
			$this->load->view('menu');
			$this->load->view('get_result', $data);
			$this->load->view('footer');
			}
			else
			{
				$this->load->view('header');
				$this->load->view('menu');
				$data['error']= "sorry this roll no. not exist!";
				
				$this->load->view('error', $data);
				$this->load->view('footer');
			}
	}
	public function delete_form()
	{
		if($this->session->userdata('is_logged_in'))
		{
			$this->load->view('header');
			$this->load->view('admin_menu');
			$this->load->view('delete');
			$this->load->view('footer');
		}
		else
		{
			$this->index();
		}
	}
	
	//delete data in database
	public function delete_data()
	{
		if($this->session->userdata('is_logged_in'))
		{
			
			if($this->basedb->get_result())
			{
				if($this->basedb->delete_result())
				{
					
				$this->load->view('header');
				$this->load->view('admin_menu');
				$data['error']= "Data is successful delete!";				
				$this->load->view('error', $data);
				$this->load->view('footer');
				}
				else
				{
					$this->load->view('header');
				$this->load->view('admin_menu');
				$data['error']= "sorry this is not delete!";
				
				$this->load->view('error', $data);
				$this->load->view('footer');
				}
			}
			else
			{
				$this->load->view('header');
				$this->load->view('admin_menu');
				$data['error']= "sorry this roll no. not exist!";
				
				$this->load->view('error', $data);
				$this->load->view('footer');
			}
		}
		else
		{
			$this->index();
		}
		
	}
	public function marksheet_data()
	{
		if($this->session->userdata('is_logged_in'))
		{
			$this->form_validation->set_rules('center_no','center no','tirm|required|xss_clean');
			$this->form_validation->set_rules('school_no','school no','tirm|required|xss_clean');
			$this->form_validation->set_rules('enrolment_no','enrolment no','tirm|required|xss_clean|callback_enrolment_no');
			$this->form_validation->set_rules('school_cat','school private/reguler','tirm|required|xss_clean');
			$this->form_validation->set_rules('roll_no','roll no.','tirm|required|xss_clean|callback_roll_no');
			$this->form_validation->set_rules('name','name','tirm|required|xss_clean');
			$this->form_validation->set_rules('father','father','tirm|required|xss_clean');
			$this->form_validation->set_rules('mather','mather','tirm|required|xss_clean');
			$this->form_validation->set_rules('dob','dob','tirm|required|xss_clean');
			$this->form_validation->set_rules('school','school','tirm|required|xss_clean');
			$this->form_validation->set_rules('hindi','hindi','required|tirm|xss_clean');
			$this->form_validation->set_rules('math','math','required|tirm|xss_clean');
			$this->form_validation->set_rules('english','english','required|tirm|xss_clean');
			$this->form_validation->set_rules('sanskrit','sanskrit','required|tirm|xss_clean');
			$this->form_validation->set_rules('science_theory','science','required|tirm|xss_clean');
			$this->form_validation->set_rules('science_practical','required|science','tirm|xss_clean');
			$this->form_validation->set_rules('social_science','social science','required|tirm|xss_clean');
				
			if($this->form_validation->run() == false)
			{
				$this->result_form();
			}
			else
			{
			$total = $_POST['hindi']+$_POST['english']+$_POST['sanskrit']+$_POST['math']+$_POST['science_theory']+$_POST['science_practical']+$_POST['social_science'];
			$data = array(
				      'center_no'=>$_POST['center_no'],
			'school_no'=>$_POST['school_no'],
			'enrolment_no'=> $_POST['enrolment_no'],
			'school_cat'=> $_POST['school_cat'],
			'roll_no'=>$_POST['roll_no'],
			'name'=> $_POST['name'],
			'father'=>$_POST['father'],
			'mather'=> $_POST['mather'],
			'dob'=>$_POST['dob'],
			'school'=>$_POST['school'],
			'hindi_total'=>$_POST['hindi'],
			'english_total'=>$_POST['english'],
			'sanskrit_total'=>$_POST['sanskrit'],
			'math_total'=>$_POST['math'],
			'science_theory'=>$_POST['science_theory'],
			'science_practical'=>$_POST['science_practical'],
			'science_total'=>$_POST['science_theory']+$_POST['science_practical'],
			'social_total'=>$_POST['social_science'],
			'total'=>$total
				);
			$this->basedb->mark_data($data);
			$this->result_form();
			}
			
		}
		else
		{
			
			$this->index();
		}
	}
	public function enrolment_no()
	{
		if($this->basedb->enrolment_no())
		{
			return true;
		}
		else
		{
			$this->form_validation->set_message('enrolment_no', 'enrolment no already in database!');
			return false;
		}		
	}
	public function roll_no()
	{
		if($this->basedb->roll_no())
		{
			return true;
		}
		else
		{
			$this->form_validation->set_message('roll_no', 'roll no already in database!');
			return false;
		}
	}
	
	//html convert
	public function data_in_html()
	{
		if($this->session->userdata('is_logged_in'))
		{
			if($this->basedb->get_data())
			{
				$data['result'] = $this->basedb->get_data();
				$this->load->view('data_in_pdf',$data);			
				
			}
			else
			{
				echo "Data not insert in database !";
			}
		}
		else
		{
			$this->index();
		}
	}
	//pdf convert
	public function data_in_pdf()
	{
		if($this->session->userdata('is_logged_in'))
		{
			if($this->basedb->get_data())
			{
				$this->load->helper(array('dompdf', 'file'));
				$data['result'] = $this->basedb->get_data();
				$html = $this->load->view('data_in_pdf',$data, true);			
				pdf_create($html, 'data_in_pdf');
			}
			else
			{
				echo "Data not insert in database !";
			}
		}
		else
		{
			$this->index();
		}
	}
	//pdf
		
}
