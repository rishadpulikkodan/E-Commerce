<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if(! function_exists('return_privilage'))
{
	function return_privilage()
	{
		$user_privilage=['829'=>"admin",'852'=>"customer"];
		return $user_privilage;
	}
}



if(! function_exists('check_user'))
{
	function check_user()
	{
		$user = $this->session->userdata('user');
		if ($user) {
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}
}



if(! function_exists('strigToBinary'))
{
	function strigToBinary($string)
	{
				$characters = str_split($string);
				$binary = [];
				foreach ($characters as $character) 
				{
					$data = unpack('H*', $character);
					$binary[] = base_convert($data[1], 16, 2);
				}
				return implode(' ', $binary); 
	}
}

if(! function_exists('binaryToString'))
{
	function binaryToString($binary)
	{
				$binaries = explode(' ', $binary);
				$string = null;
				foreach ($binaries as $binary) 
				{
					$string .= pack('H*', dechex(bindec($binary)));
				}
				return $string; 
	}
}

if(! function_exists('timeToChar'))
{
	function timeToChar($time)
	{
		$len = strlen($time);

		$yy = substr($time,0,4);
		$mm = substr($time,5,2);
		$dd = substr($time,8,2);
		$hh = substr($time,11,2);
		$mmm = substr($time,14,2);
		$ss = substr($time,17,2);

		if($yy == "0000"){
			$val = "<text style='color:red;'>! untime</text>";
		}
		else{
			$val = $dd."-".$mm."-".$yy." ";
		}
		return $val;
	}
}

if(! function_exists('timeToCharh'))
{
	function timeToCharh($time)
	{
		$len = strlen($time);

		$yy = substr($time,0,4);
		$mm = substr($time,5,2);
		$dd = substr($time,8,2);
		$hh = substr($time,11,2);
		$mmm = substr($time,14,2);
		$ss = substr($time,17,2);

		if($yy == "0000"){
			$val = "<text style='color:red;'>! untime</text>";
		}
		else{
			// if($mmm = )
			$val = $dd."-".$mm."-".$yy." ".$hh.":".$mmm;
		}
		return $val;
	}
}
