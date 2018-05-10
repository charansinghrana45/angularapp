<?php defined('BASEPATH') OR exit('No direct script access allowed');

/*
|------------------------------------------------------------------------------
| Mail Settings
|------------------------------------------------------------------------------
|
*/
$config['mail'] = [

	'protocol' =>  'smtp',
	'smtp_host' => 'smtp.mailtrap.io',
	'smtp_port' => '2525',
	'smtp_user' => 'e75b98b0846c7f',
	'smtp_pass' => 'e4220da9d36fda',
	'crlf' => "\r\n",
	'newline' => "\r\n",
	'smtp_crypto' => 'tls',
	'wordwrap' => TRUE

];