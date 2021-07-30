<html>
<body>

<a href="index.html"><button>Back</button></a>
<?php 
include_once 'database.php';
$query = "SELECT * FROM contacts";

echo "<h1>contacts List</h1>";

echo '<table border="3" cellspacing="4" cellpadding="4"> 
      <tr> 
          <td> <font face="Arial"><b>Name</b></font> </td> 
          <td> <font face="Arial"><b>Email-Id</b></font> </td> 
          <td> <font face="Arial"><b>Message</b></font> </td> 
          
      </tr>';

if ($result = $conn->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $first_name = $row["first_name"];
        $email_id = $row["email_id"];
        $text_message = $row["text_message"];
        

        echo '<tr> 
                  <td>'.$first_name.'</td> 
                  <td>'.$email_id.'</td> 
                  <td>'.$text_message.'</td> 
                 
              </tr>';
    }
    $result->free();
} 



?>

</body>
</html>




















