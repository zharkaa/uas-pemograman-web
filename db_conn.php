<?php


$sname = "localhost";
$uname = "root";
$password = "";

$db_name = "book_collection";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
    echo "Connection failed!";
}


// 000webhost db config
// $sname = "localhost";
// $uname = "id20896015_book";
// $password = "P@ssword123";

// $db_name = "id20896015_book_collection";

// $conn = mysqli_connect($sname, $uname, $password, $db_name);

// if (!$conn) {
//     echo "Connection failed!";
// }

?>