<?php
if (isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['email']) && isset($_POST['message'])) {
	# code...
	if (!empty($_POST['name']) && !empty($_POST['phone']) && !empty($_POST['email']) && !empty($_POST['message'])) {
		# code...
		$vname = $_POST['name'];
		$vphone = $_POST['phone'];
		$vemail = $_POST['email'];
		$msg = $_POST['message'];

		$to =  "mdshahriar.khan@gmail.com , tasnimsadia16@gmail.com";
		//$subject = 'Client Message';
		$message = "Name: ".$vname. "\n" ."Company: ". $vphone;
		 
		$headers = "Message: ".$msg. "\n". "From: ".$vemail;
		
		

		if (!(filter_var($vemail, FILTER_VALIDATE_EMAIL))) {
			# code...
			echo "Kindly Provide Valid Email Address";
		}else{
			$body = $vname. "\n" .$vphone. "\n". $vemail ."\n". $msg;
			
			if(mail($to , $message, $headers)){
			 echo '<script language="javascript" type="text/javascript"> 
                alert("Your message has been sent successfully. ");
                window.location = "index.php#contact";
        </script>';
			}else{
				echo "Sorry! A problem occured";
			}
		}

	}else{
		echo '<script language="javascript" type="text/javascript"> 
                alert("All fields are required. ");
                window.location = "index.php#contact";
        </script>';
	}
}else{
	echo "Not Ok";
}
?>