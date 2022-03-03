<?php
	
	$name=$_POST['name'];
	$cname=$_POST['cname'];
	$emailid=$_POST['emailid'];
	$cnumber=$_POST['cnumber'];
	$product=$_POST['product'];
	$discription=$_POST['discription'];
	
	
	
	$email_from='abhijeetsutar44@gmail.com';
	$email_subject='New Enquiry';
	$email_body="Name : $name\n".
				"Company Name : $cname\n".
				"Company Email : $emailid\n".
				"Company Number : $cnumber\n".
				"Product : $product\n".
				"Description : $disription\n";
	
	$to="freshoverseas@outlook.com";
    mail($to,$email_subject;$email_body);
	
	header("Location: enquiry.html");
?>