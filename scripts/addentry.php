<?php

// Load Posted Values
$name=$_POST['mod_name'];
if ($name=="")
   return 0;

$version=$_POST['mod_version'];
if ($version=="")
   return 0;

$desc=$_POST['mod_desc'];
if ($desc=="")
   return 0;

//Tag
$tags_type=$_POST['mod_tag_type'];
if ($tags_type=="")
   return 0;

$tags_msc=$_POST['mod_tag_msc'];
if ($tags_msc=="")
   return 0;

$license=$_POST['mod_lic'];

$file=$_POST['mod_file'];
if ($file=="")
   return 0;

$depend=$_POST['mod_dep'];

$basename=$_POST['mod_base'];

//Load on_submit values 
$owner=$_SESSION['user'];
$date = date("F j, Y, g:i a");
$tags = "$tags_type,$tags_msc,";

mysql_query("INSERT INTO mods (name,version,owner,description,tags,likes,dislikes,license,file,depend,basename,date_released)
VALUES ('$name','$version','$owner','$desc','$tags',0,0,'$license','$file','$depend','$basename','$date')");
?>