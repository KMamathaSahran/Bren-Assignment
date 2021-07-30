<?php
include_once 'database.php';
if(isset($_POST['save']))
{	 
	 $name = $_POST['first_name'];
	 $email = $_POST['email_id'];
	 $message = $_POST['text_message'];
	 $sql = "INSERT INTO contacts ( first_name, email_id, text_message)
	 VALUES ('$name','$email','$message')";
	 if (mysqli_query($conn, $sql)) {
		include_once 'admin.php';
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>