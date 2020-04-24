<?php
  if(isset($_POST["submitButton"])) {
    echo "Form was Submitted";
  }
?>

<!DOCTYPE html>
<html>

<head>
  <title>Welcome to Leighton Movies</title>
  <Link rel="stylesheet" type="text/css" href="assets/style/style.css" />
</head>

<body>
  <div class="signInContainer">
    <div class="column">
      <form method="POST">
        <input type="text" name="firstName" placeholder="First Name" required>
        <input type="text" name="lastName" placeholder="Last Name" required>
        <input type="text" name="userName" placeholder="Username" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="email" name="email2" placeholder="Confirm Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="password" name="password2" placeholder="Confirm Password" required>
        <input type="submit" name="submitButton" value="SUBMIT">
      </form>
    </div>
  </div>
</body>

</html>