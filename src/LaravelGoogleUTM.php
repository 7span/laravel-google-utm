<?php

namespace Sevenspan\LaravelGoogleUTM;

class LaravelGoogleUTM 
{
	static public function add($link , $param = null ){
		$newLink = $link;
		
		if (strpos($newLink, '?') !== false) {
			$newLink .= '&';
		}else{
			$newLink .= '?';
		}
		
		if(is_array($param)){
			$newLink .= 'utm_source='.$param[0].'&utm_medium='.$param[1].'&utm_term='.$param[2].'&utm_content='.$param[3].'&utm_campaign='.$param[4];
		}else{
			$newLink .= 'ref='.$param;
		}
		return $newLink;
	}
}
