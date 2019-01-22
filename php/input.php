<?php
$username=$_POST['username'];
$useremail=$_POST['useremail'];
$usertext=$_POST['usertext'];
echo $username."\n";
echo $useremail."\n";
echo $usertext."\n";
$name="_";
for ($i=0;strlen($useremail);$i++){
	if (substr($useremail,$i,1)!="@")
	  $name=$name.substr($useremail,$i,1);
	else break;
}
$filename=$_SERVER['DOCUMENT_ROOT']."/faberlic_info/basa/rec_".$username.$name.date("_d.m.y").".xml";
$incl=false;
$mode="w";
$fd=fopen($filename,$mode);
fwrite($fd,'<?xml version="1.0" encoding="UTF-8"?>');
$data="<rec> \n";
fwrite($fd,$data);
$data="<name>".$username."</name> \n";
fwrite($fd,$data);
$data="<email>".$useremail."</email> \n";
fwrite($fd,$data);
$data="<text \n>";
fwrite($fd,$data);
$data=$usertext." \n";
fwrite($fd,$data);
$data="</text \n>";
fwrite($fd,$data);
$data="</rec> \n";
fwrite($fd,$data);
fclose($fd);
?>
