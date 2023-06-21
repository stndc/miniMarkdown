<?php

/**
*
* miniMarkdown
* author: STNDC
* web: https://stndc.github.io
* version: 2.0.x
* 
* @param string $text
* 
*/

function minimarkdown($text){

	// H1
	$text = preg_replace('/^# (.+)$/m', '<h1>$1</h1>', $text);

	// H2
	$text = preg_replace('/^## (.+)$/m', '<h2>$1</h2>', $text);

	// H3
	$text = preg_replace('/^### (.+)$/m', '<h3>$1</h3>', $text);

	// Italic
	$text = preg_replace('/\_(.+)\_/', '<em>$1</em>', $text);

	// Bold
	$text = preg_replace('/\*\*(.+)\*\*/', '<strong>$1</strong>', $text);

	// Code
	$text = preg_replace('/`(.+)`/', '<code>$1</code>', $text);

	// Positive
	$text = preg_replace('/\+\+(.+)\+\+/', '<span class="positive">$1</span>', $text);

	// Negative
	$text = preg_replace('/\-\-(.+)\-\-/', '<span class="negative">$1</span>', $text);

	// Image
	$text = preg_replace('/\!\[(.+)\]\((.+)\)/', '<img src="$2" alt="$1">', $text);

	// Link
	$text = preg_replace('/\[(.+)\]\((.+)\)/', '<a href="$2">$1</a>', $text);

	// Email
	$text = preg_replace('/\[email\](.+)\[\/email\]/', '<a href="mailto:$1">$1</a>', $text);

	return $text;

}

?>