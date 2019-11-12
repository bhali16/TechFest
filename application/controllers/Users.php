<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function index()
	{
		
	}

	public function registerUser()
	{

	}

	public function loginUser()
	{
		if($this -> input -> post("login_user"))
		{
			$email = $this -> input -> post("email");
			$password = $this -> input -> post("password");

			$result = 
			$this -> db -> select("*") 
			-> from("users") 
			-> where("email = '$email' and password = '$password'");
			$result = $this -> db -> get() -> result_array();

			if(count($result))
			{
				// user has logged in
				echo "logged in";
			}
			else echo "incorrect username or password";
			// print_r($result);
			// print_r($this->db->last_query());    


			// if(count($this -> db -> get() -> result_array()))
			// {
			// 	echo "you're logged in";
			// }else echo "wrong password";
		}
		$this -> load -> view("login_view");
	}

	public function participant()
	{
		$this -> load -> view("participant_view");
	}

}

/* End of file Users.php */
/* Location: ./application/controllers/Users.php */



 ?>