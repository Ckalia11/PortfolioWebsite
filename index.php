<?php
  // The global $_POST variable allows you to access the data sent with the POST method by name
  // To access the data sent with the GET method, you can use $_GET
  $email = htmlspecialchars($_POST['email']);
  $subject  = htmlspecialchars($_POST['subject']);
  $message  = htmlspecialchars($_POST['message']);
  echo  $email, ' ', $subject, ' ', $message;
?>