<?php defined('BASEPATH') or die("no direct access allowed.");


if(!function_exists('is_user_loggedin'))
{

	function is_user_loggedin()
	{
		$ci = & get_instance();

		if($ci->session->userdata('logged_in'))
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}
}