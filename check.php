<?php
include 'simple_html_dom.php';
$url = $argv[4];
$html = file_get_html($url);
$current = trim($html->find($argv[1])[0]->plaintext);
$total = trim($html->find($argv[2])[0]->plaintext);
$title = trim($html->find($argv[3])[0]->plaintext);
echo $title . ':' . $current . '/' . $total;