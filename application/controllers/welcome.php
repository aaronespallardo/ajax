<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function method_get(){


		$name = $_POST['value'];
		

		if($name=='katrina'){


			$this->load->view("input1");

		}else if($name=='hazel'){

			$this->load->view("input2");


		}else if($name=='malagday'){

			echo "input 3: <input type = 'text'></input>";

		}
		

		



	}


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */