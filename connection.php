<?php
$server = 'localhost';
$username = 'root';
$password = '';
$db = 'crud';

$conn = mysqli_connect($server,$username,$password,$db);
if ($conn) {
    ?><script>alert('Connection Successfull');</script><?php
} else {
    ?><script>alert('!!!Opps!!!Connection Unsuccessfull');</script><?php
}

?>
