<?php
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("project");

echo "conected";

$a=$_POST["txt11"];
$b=$_POST["txt21"];
$c=$_POST["txt31"];
$d=$_POST["txt41"];
$e=$_POST["txt51"];

echo $a." ".$b." ".$c." ".$d." ".$e;

$sql="insert into signup values ('$a',$b,'$c','$d','$e')";
$res = mysql_query($sql);

if($res)
echo "insert succesful";

else
echo "Error";

?>