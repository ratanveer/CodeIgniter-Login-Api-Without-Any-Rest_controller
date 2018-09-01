<?php
defined('BASEPATH') OR exit('No direct script access allowed');


	
	 function get_status_message(){
			$statuss = array(
						100 => 'Continue',  
						101 => 'Switching Protocols',  
						200 => 'OK',
						201 => 'Created',  
						202 => 'Accepted',  
						203 => 'Non-Authoritative Information',  
						204 => 'No Content',  
						205 => 'Reset Content',  
						206 => 'Partial Content',  
						300 => 'Multiple Choices',  
						301 => 'Moved Permanently',  
						302 => 'Found',  
						303 => 'See Other',  
						304 => 'Not Modified',  
						305 => 'Use Proxy',  
						306 => '(Unused)',  
						307 => 'Temporary Redirect',  
						400 => 'Bad Request',  
						401 => 'Unauthorized',  
						402 => 'Payment Required',  
						403 => 'Forbidden',  
						404 => 'Not Found',  
						405 => 'Method Not Allowed',  
						406 => 'Not Acceptable',  
						407 => 'Proxy Authentication Required',  
						408 => 'Request Timeout',  
						409 => 'Conflict',  
						410 => 'Gone',  
						411 => 'Length Required',  
						412 => 'Precondition Failed',  
						413 => 'Request Entity Too Large',  
						414 => 'Request-URI Too Long',  
						415 => 'Unsupported Media Type',  
						416 => 'Requested Range Not Satisfiable',  
						417 => 'Expectation Failed',  
						500 => 'Internal Server Error',  
						501 => 'Not Implemented',  
						502 => 'Bad Gateway',  
						503 => 'Service Unavailable',  
						504 => 'Gateway Timeout',  
						505 => 'HTTP Version Not Supported');
			// return ($statuss[$this->_code])?$statuss[$this->_code]:$statuss[500];
		}
		function json_output($statusHeader,$response)
		{
			// $statusHeader = array
			// (
						// 100 => 'Continue',  
						// 101 => 'Switching Protocols',  
						// 200 => 'OK',
						// 201 => 'Created',  
						// 202 => 'Accepted',  
						// 203 => 'Non-Authoritative Information',  
						// 204 => 'No Content',  
						// 205 => 'Reset Content',  
						// 206 => 'Partial Content',  
						// 300 => 'Multiple Choices',  
						// 301 => 'Moved Permanently',  
						// 302 => 'Found',  
						// 303 => 'See Other',  
						// 304 => 'Not Modified',  
						// 305 => 'Use Proxy',  
						// 306 => '(Unused)',  
						// 307 => 'Temporary Redirect',  
						// 400 => 'Bad Request',  
						// 401 => 'Unauthorized',  
						// 402 => 'Payment Required',  
						// 403 => 'Forbidden',  
						// 404 => 'Not Found',  
						// 405 => 'Method Not Allowed',  
						// 406 => 'Not Acceptable',  
						// 407 => 'Proxy Authentication Required',  
						// 408 => 'Request Timeout',  
						// 409 => 'Conflict',  
						// 410 => 'Gone',  
						// 411 => 'Length Required',  
						// 412 => 'Precondition Failed',  
						// 413 => 'Request Entity Too Large',  
						// 414 => 'Request-URI Too Long',  
						// 415 => 'Unsupported Media Type',  
						// 416 => 'Requested Range Not Satisfiable',  
						// 417 => 'Expectation Failed',  
						// 500 => 'Internal Server Error',  
						// 501 => 'Not Implemented',  
						// 502 => 'Bad Gateway',  
						// 503 => 'Service Unavailable',  
						// 504 => 'Gateway Timeout',  
						// 505 => 'HTTP Version Not Supported'
			// );
			$ci =& get_instance();
			$ci->output->set_content_type('application/json');
			$ci->output->set_status_header($statusHeader);
			$ci->output->set_output(json_encode($response));
		}