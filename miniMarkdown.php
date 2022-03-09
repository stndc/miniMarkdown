<?php

/*
STN
miniMarkdown v0.6.0
*/

function minimarkdown($text) {
	//H3 Tag
	$pattern = '/(\*\*(.*?)\*\*)/';
	$replace = '<h3>${2}</h3>';
	$text = preg_replace($pattern, $replace, $text);

	//Italic
	$pattern = '/(_(.*?)_)/';
	$replace = '<em>${2}</em>';
	$text = preg_replace($pattern, $replace, $text);

	//Bold
	$pattern = '/(\*(.*?)\*)/';
	$replace = '<strong>${2}</strong>';
	$text = preg_replace($pattern, $replace, $text);
	
	//Code
	$pattern = '/(\`(.*?)\`)/';
	$replace = '<span style="background-color: #EEEEEE; font-family: monospace; font-size: 1rem; color: #2D333B; padding: .4rem .5rem;">${2}</span>';
	$text = preg_replace($pattern, $replace, $text);

	//Positive
	$pattern = '/(\+(.*?)\+)/';
	$replace = '<span style="background-color: #DDFFDD; font-size: 1rem; color: #2D333B;">${2}</span>';
	$text = preg_replace($pattern, $replace, $text);

	//Negative
	$pattern = '/(\~(.*?)\~)/';
	$replace = '<span style="background-color: #FFDDDD; font-size: 1rem; color: #2D333B;">${2}</span>';
	$text = preg_replace($pattern, $replace, $text);

	return $text;
}

?>