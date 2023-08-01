<?php
if (isset($_POST['submit'])) {
  // Retrieve form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $contact= $_POST['contact'];
  $message = $_POST['message'];

  

  // Connect to the database

  $conn = mysqli_connect("localhost", "root", "", "userdb");

  // Check the connection
  if (mysqli_connect_error()) {
    die("Database connection failed: " . mysqli_connect_error());
  }
  // Prepare and execute the database query
  
  $data = "INSERT INTO userdata(name,email,contact,message) VALUES('$name', '$email','$contact', '$message')";
  mysqli_query($conn, $data);

   //Check if the query was successful
   if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

  $conn->close();
}
?>
