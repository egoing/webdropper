<?php
include 'simple_html_dom.php';
$url = $argv[1];
$html = file_get_html($url);
$output = '';
for($i=2; $i<count($argv); $i++){
  if(substr($argv[$i], 0, 2) === '-t') {
    $output .= substr($argv[$i], 2);
  } else {
    $output .= trim($html->find($argv[$i])[0]->plaintext);
  }
}
echo $output;