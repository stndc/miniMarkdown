<?php

/*
STN
web: stn.tumblr.com
<<<<<<< HEAD
miniMarkdown v1.0.0
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
=======
miniMarkdown v2.x
*/

function minimarkdown($text) {

	//H1
	$text = preg_replace('/^# (.+)$/m', '<h1>$1</h1>', $text);

	//H2
	$text = preg_replace('/^## (.+)$/m', '<h2>$1</h2>', $text);

	//H3
	$text = preg_replace('/^### (.+)$/m', '<h3>$1</h3>', $text);

	//Italic
	$text = preg_replace('/\_(.+)\_/', '<em>$1</em>', $text);

	//Bold
	$text = preg_replace('/\*\*(.+)\*\*/', '<strong>$1</strong>', $text);
	
	//Code
	$text = preg_replace('/`(.+)`/', '<code>$1</code>', $text);
		
	//Positive
	$text = preg_replace('/\+\+(.+)\+\+/', '<span class="positive">$1</span>', $text);

	//Negative
	$text = preg_replace('/\-\-(.+)\-\-/', '<span class="negative">$1</span>', $text);

	//Image
	$text = preg_replace('/\!\[(.+)\]\((.+)\)/', '<img src="$2" alt="$1" />', $text);

	//Link
	$text = preg_replace('/\[(.+)\]\((.+)\)/', '<a href="$2">$1</a>', $text);

	//Email
	$text = preg_replace('/\[email\](.+)\[\/email\]/', '<a href="mailto:$1">$1</a>', $text);
>>>>>>> b66fddc (new version)

	return $text;
}

<<<<<<< HEAD
=======

// $text = '# H1
// ## H2
// ### H3
// _Italic_
// **Bold**
// `Code`
// ++Positive++
// --Negative--
// ![Alt](https://www.google.com/intl/en_ALL/images/logo.gif)
// [Google](https://www.google.com)
// [email](mailto:mail@mail.com)';
// echo minimarkdown($text);

>>>>>>> b66fddc (new version)
?>