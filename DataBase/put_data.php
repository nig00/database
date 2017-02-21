<?php



$con = mysqli_connect('localhost','test','test1','test');







if(!empty($_REQUEST))

{
	$temp = @$_REQUEST['temp'];



	$ecg = @$_REQUEST['ecg'];



	$hebt = @$_REQUEST['hebt'];

	

	



    $query = "INSERT INTO `put_data` (`temp`, `ecg`, `hebt`) VALUES ('".$hebt."', '".$ecg."' ,'".$temp."')";


	

		$header  = "MIME-Version: 1.0\r\n";

 		$header .= "Content-type: text/html; charset: utf8\r\n";

		mail($to, $subject, $message,$header);

	}
}



?>



