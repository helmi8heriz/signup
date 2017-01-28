
<?php

include 'conncet.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {

    $user = $_GET['username'];
    $mail = $_GET['email'];
    $pass = $_GET['passwored'];

  $select = "SELECT `id`, `username`, `email`, `password`, `admin` FROM `mail` WHERE username = '$user' AND email = '$mail' AND password = '$pass'
AND admin = 0;";
$result = mysqli_query($sql, $select);

if (mysqli_num_rows($result) > 0) {

  $updet = "UPDATE `mail` SET `admin`= 1 WHERE username = '$user'" ;

if (mysqli_query($sql, $updet)) {
  echo "email is good";
} else {
  echo "Error updating record: " . mysqli_error($sql);
}


} else {
    echo "404";
}
}else{

  echo "404";
}
mysqli_close($sql);
