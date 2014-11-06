<?php

/**
* @author W-Shadow
* @url http://w-shadow.com/
* @copyright 2008
*/
error_reporting(E_ALL);

require_once 'includes/summarizer.php';
require_once 'includes/html_functions.php';

$summarizer = new Summarizer();

if (!empty($_POST['text'])){
//echo '<pre>';
$text = $_POST['text'];

//replace some Unicode characters with ASCII
$text = normalizeHtml($text);
//generate the summary with default parameters
$rez = $summarizer->summary($text);
//print_r($rez);

//$rez is an array of sentences. Turn it into contiguous text by using implode().
$summary = implode(' ',$rez);
//echo '</pre>';
}
if(!empty($summary)) echo $summary;
//echo "Chandan Singh";
?>
