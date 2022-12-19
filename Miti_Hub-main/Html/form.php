<?php
  // Connect to the database
  $db = mysqli_connect('hostname', 'username', 'password', 'database_name');

  // Check for form submission
  if (isset($_POST['submit'])) {
    // Get form data
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $phonenumber = mysqli_real_escape_string($db, $_POST['phonenumber']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    

    // Validate form data
    if (empty($name) || empty($email) || empty($password)) {
      echo "All fields are required.";
    } else {
      // Insert data into the database
      $query = "INSERT INTO users (name, email, phonenumber, password) VALUES ('$name', '$email', '$password')";
      mysqli_query($db, $query);
      echo "Registration successful.";
    }
  }
?>
