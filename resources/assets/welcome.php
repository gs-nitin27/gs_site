<?php
include('config1.php');
if($_POST['act'] == 'sendEmail')
{
$name = "Nitin";
$message = "Hi User";
$email=$_POST['email'];
if ($email == "")
{
$status = array('status' => 0, 'message' => 'Enter valid email');
echo json_encode($status);
}
else
{
$query = mysql_query("INSERT into `gs_visitor`(`id`,`email`,`date`) values('','$email',CURDATE())");
if($query)
{    
//print_r($query);
	//echo"<script>alert('Thanks For contacting us!');</script>";
$status = array('status' => 1, 'message' => 'Thanks For contacting us!');
echo json_encode($status); 
}
   require('class.phpmailer.php');
  $mail = new PHPMailer();
  $name = "devendra";
  $to='info@darkhorsesports.in';
  $from="info@darkhorsesports.in";
  $from_name=$name;
  $subject="EmailContact from darkhorsesports ";
  $body=$name.'has send us a message: '.$message;
 // global $error;
  $mail = new PHPMailer();  // create a new object
  $mail->IsSMTP(); // enable SMTP
  $mail->SMTPDebug = 1;  // debugging: 1 = errors and messages, 2 = messages only
  $mail->SMTPAuth = true;  // authentication enabled
  $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
  $mail->Host = 'smtp.gmail.com';
  $mail->Port = 465; 
  $mail->Username = "info@darkhorsesports.in"; 
  $mail->Password = "2016Darkhorse";            
  $mail->SetFrom($from, $from_name);
  $mail->Subject = $subject;
  $mail->Body = $body;
  $mail->AddAddress($to);
        if(!$mail->Send()) 
        {
        $error = 'Mail error: '.$mail->ErrorInfo; 
        return false;
        } 
        else 
        {
        $to1=$email;
        $from="info@darkhorsesports.in";
        $from_name="Getsporty";
        $subject="Welcome to Getsporty";
        $message="Thanks for showing interest in us. We'll intimate you soon!"; 
        $mail->SetFrom($from, $from_name);
        $mail->Subject =$subject;
        $mail->Body = $message;
        $mail->AddAddress($to1);
        $mail->Send();
        //print_r($mail->Send());
        return true;
      }
}
}
?>