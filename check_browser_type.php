<?php
	function chkMobile() 
	{
		global $k3;
		$browserAccept = $_SERVER['HTTP_ACCEPT'];
		$userAgent =  strtolower($_SERVER['HTTP_USER_AGENT']);
		if(stripos("SKT11", $userAgent) || stripos("skt", $browserAccept) || stripos("wml", $browserAccept))
		{
			$k3[is_mobile] = true;
			return "wml";
		}
		elseif(preg_match('/(lgtel|mobile|[^A]skt|nokia|sony|ipod|iphone|android|blackberry|symbianos|samsung|lg-|opera mobi|up.browser|up.link|mmp|smartphone|midp|ppc|sch\-m[0-9]+)/i',$userAgent)) 
		{
			$k3[is_mobile] = true;
			return "smartphone";
		}
		else 
		{
			$k3[is_mobile] = false;
			return  "pc";
		}
	}
?>