<?php

if (strtolower($_SERVER['REQUEST_METHOD']) === 'options') {
         header('Access-Control-Allow-Origin: ' . $_SERVER['HTTP_ORIGIN']);
         header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
         header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Range, Content-Disposition, Content-Type, Authorization');
         header('Access-Control-Allow-Credentials: true');
        echo 'Allowed';
        exit;
}

// header("Access-Control-Allow-Origin: *");
// header('Access-Control-Allow-Headers: Content-Type, Content-Range, Content-Disposition, Content-Description');

$con = mysql_connect('localhost','root','');
if($con)
{
 
 $selected = mysql_select_db('getsport_staging') or die("Could not select databasename");
 define('UPLOAD_DIR_JOB','../staging/uploads/job/'); 
 define('UPLOAD_DIR_EVENT','../staging/uploads/event/');
 define('UPLOAD_DIR_TOUR','../staging/uploads/tournament/');
 define('UPLOAD_DIR','../staging/uploads/profile/'); 
 define('IMAGE_URL','http://staging.getsporty.in/uploads/profile/');
 define('CHANGE_PASSWORD','http://getsporty.in/user_var/index.php');

}
else
{
echo "could not connect";
} 
?> 
