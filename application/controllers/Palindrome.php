<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT, GET, POST, DELETE");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
class Palindrome extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
    public function index(){
        $this->load->view('view-palindrome');
    }
}