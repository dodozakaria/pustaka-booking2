<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Latihan extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		//Codeigniter : Write Less Do More
	}

	function index()
	{
		echo "Anda Pusing ? Sama Saya Juga";
	}

}
