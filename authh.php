<?php
echo "<br><b>Question 1</b> <br><br>";
$email = $_GET['EMAIL'];
$password = $_GET['Password'];
echo($email);
echo "<br>";
echo($password);
echo "<br>";
if(empty($email)){
    echo "Email is required. <br>";
}
if(empty($password)){
    echo "Password is required";
}

echo "<br><b>Question 2</b> <br><br>";
$radio = $_GET['Radio_type'];
echo '  '.$_GET['Radio_type'];

echo "<br><br><b>Question 3</b> <br>";
$checkbox = $_GET['check'];
if(empty($checkbox)){
    echo "False";
}
if(!empty($checkbox)){
    echo "True <br>";
}

?>





