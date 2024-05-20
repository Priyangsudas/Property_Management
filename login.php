<?php
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("project");

$a=$_POST["txt1"];
$b=$_POST["txt2"];

$sql="select * from signup where email='$a' and UPassword='$b'";
$res=mysql_query($sql);

$k=0;
if($res)
{
	while(mysql_fetch_array($res))
	{
		$k=1;
	}
}

if($k==1)
echo "Login succesfull";
else
echo "Login Unsuccesful";