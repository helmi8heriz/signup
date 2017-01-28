<?php

include 'conncet.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $username = $_POST['username'];
  $email = $_POST['email'];
  $passwored = $_POST['passwored'];

  $add = "INSERT INTO `mail` (`username`, `email`, `password`, `admin`) VALUES ('$username', '$email', '$passwored', '0')";

  if (mysqli_query($sql, $add)) {

    $to = $email;
    $subject = "My subject";
    $txt = " hello " . $username . " plason click in the link: " . "emailh.000webhostapp.com/hello.php?username=" . $username . "&email=" . $email . "&passwored=" . $passwored;
    $headers = "From: helmi@example.com" . "\r\n" .
    "CC: somebodyelse@example.com";

    mail($to,$subject,$txt,$headers);


  } else {
      echo "Error: " . $add . "<br>" . mysqli_error($sql);
  }
}
?>
 <form action="index.php" method="POST">
<input type="text" name="username" placeholder="username" /><br />
<input type="email" name="email" placeholder="email" /><br />
<input type="password" name="passwored" placeholder="passwored" /><br />
<input type="submit" name="submitE" value="sign up" />
</form>
<?php mysqli_close($sql); ?>
