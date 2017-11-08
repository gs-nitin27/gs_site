<?php
header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Headers: Content-Type, Content-Range, Content-Disposition, Content-Description');

$con = mysql_connect('localhost','getsport_gs',',WRI%yyw%;Z3');
if($con)
{
if($_REQUEST['token_id'] == 'dhs2016')
{	
  $selected = mysql_select_db('getsport_gs') or die("Could not select databasename");
 }
 else
 {
 echo "<h1>".'Unauthorized Access!'.'</h1>';die;
 }
 define('UPLOAD_DIR','../../getsportyportal/uploads/resources/');
 }
else
{
echo "could not connect";
} 

?>