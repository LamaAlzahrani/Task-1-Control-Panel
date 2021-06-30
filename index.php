<?php

  $db_host = 'localhost';
  $db_user = 'root';
  $db_password = '';
  $db_db = 'db';

  $connection = mysqli_connect($db_host, $db_user, $db_password, $db_db );

  if(mysqli_connect_errno()):
    printf("Failed Connection: %s\n", mysqli_connect_errno());
    exit();
  endif;

$m1 = $_POST['m1'];
$m2 = $_POST['m2'];
$m3 = $_POST['m3'];
$m4 = $_POST['m4'];
$m5 = $_POST['m5'];
$m6 = $_POST['m6'];


if(isset($_POST['save'])){
    echo "<br>";

    $my_query = "";

    $my_query = "select * from motors WHERE 1 ";
    $result = mysqli_query($connection, $my_query);

    $my_query = "INSERT INTO motors (m1, m2, m3, m4, m5, m6) VALUES ('$m1', '$m2', '$m3', '$m4', '$m5', $m6)";
    $result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "Added successfuly!";
    }
    else{
        echo "ERROR ! <br>";
    }

}else if(isset($_POST['run'])) {
    echo "<br>";

    $my_query = "";

    $my_query = "select * from motors WHERE 1 ";
    $result = mysqli_query($connection, $my_query);

    $my_query = "INSERT INTO motors (m1, m2, m3, m4, m5, m6,Rbutton) VALUES ('$m1', '$m2', '$m3', '$m4', '$m5', $m6,1)"; 
    $result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "Added successfuly!";
    }
    else{
        echo "ERROR! <br>";
    }

}


?>