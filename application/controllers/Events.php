<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Events extends CI_Controller {

	public function index()
	{
		echo "add events";
	}

	public function add_event()
	{
		// is asking user head?
			// show add event view
		$this -> load -> view("addevents_view.php");

		if($this -> input -> post('add_event_btn'))
		{
			// get form data
			$eventName = $this -> input -> post('event_name');
			$eventDesc = $this -> input -> post('event_desc');
			$eventHead = $this -> input -> post('event_head');

			$object = array("event_name" => $eventName, 
							"event_description" => $eventDesc,
							"event_head" => $eventHead
			);

			$this->db->insert('event', $object);

			echo "inserted";
		}
	}

	function singleEvent($id)
	{
		
		$this->db->select('*')
		->from('event')
		->where("id = $id");

		$event = $this -> db -> get()->result_array()[0];
		$this -> load -> view("singleevent_view", $event);

		
	}

	function eventHeadProfile()
	{
		$this -> load -> view("eventheadprofile_view");
	}


	function registerUser()
	{
		$this -> load -> view("participantregistration_view");
	}

}

/* End of file Events.php */
/* Location: ./application/controllers/Events.php */