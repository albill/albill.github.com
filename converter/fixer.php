<?php
require_once 'markdownify_extra.php';
$md = new Markdownify_Extra;
//$content = file_get_contents($argv[1]);
mysql_connect("127.0.0.1", "USERNAME", "PASSWORD") or die(mysql_error());
mysql_select_db("openbuddha");
$query = "SELECT * FROM b1_posts WHERE post_status = 'publish' AND post_type = 'post'";
$result = mysql_query($query);
while($arr = mysql_fetch_array($result)){
$slug = strtolower(str_replace(array(' ','/'),'-',$arr['post_title']));
$slug = str_replace(array('"',':','*'),'',$slug);
$title = str_replace(array('"',':','*'),'',$arr['post_title']);
$time = strtotime($arr['post_date']);
$date = date('Y-m-d-',$time);
$name = $date.$slug.'.html';
$myFile = '_posts/'.$name;
$fh = fopen($myFile, 'w') or die("can't open file");
$header = "--- 
wordpress_id: ".$arr['ID']."
layout: post
title: ".$title."
date: ".$arr['post_date']."
wordpress_url: ".$arr['guid']."
---
";
fwrite($fh, $header);
fwrite($fh, $md->parseString($arr['post_content']));
echo "Wrote ".$arr['post_title']."\n";
}
?>
