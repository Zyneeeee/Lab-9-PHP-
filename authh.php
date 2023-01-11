<?php
//Question 1


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
//Question 2
echo "<br><b>Question 2</b> <br><br>";
$radio = $_GET['Radio_type'];
echo '  '.$_GET['Radio_type'];

//Question 3
echo "<br><br><b>Question 3</b> <br>";
$checkbox = $_GET['check'];
if(empty($checkbox)){
    echo "False";
}
if(!empty($checkbox)){
    echo "True <br>";
}
//Question 4
echo "<br><b>Question 4</b> <br><br>";
function sortArray($array, $sortType)
{  
    if ($sortType == "ASC") {
        sort($array);
    }
    if ($sortType == "DES") {
        rsort($array);
    }
    echo "<br>";
    foreach ($array as $k) {
        echo "$k";
        echo " , ";
    }
}
$a = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12);
sortArray($a, "DES");
//Question 5
echo "<br><b>Question 5</b> <br><br>";
if ($_GET['Radio_type'] == "First") {
    $random_number_array = range(0, 100);
    shuffle($random_number_array);
    echo "Random Array: ";
    foreach ($random_number_array as $a) {
        echo "$a,";
    }
    echo "</br>";
    echo "Sorted Array: ";
    sortArray($random_number_array, "DES");
}


//Question 6
echo "<br><b>Question 6</b> <br><br>";
if ($_GET['Radio_type'] == "Second") {
    echo "<br>Activity6</br>";
    $limit_random_array_values = range(0, 100);
    shuffle($limit_random_array_values);
    $random_array_value = array_slice($limit_random_array_values, 0, 100);
    echo "<pre>";
    print_r($random_array_value);
    echo "</pre>";
    reset($random_array_value);
    echo "<pre>";
    print_r($random_array_value);
    echo "</pre>";
}






?>
