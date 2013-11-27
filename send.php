 <?php
 
$to = $_POST['orangephils@gmail.com'];
$subject = "To OrangeApps";
$message = $_POST['message'];
$from = $_POST['name'];
$headers = "From:" . $from;
mail($to,$subject,$message,$headers);
echo "Mail Sent.";
 ?>