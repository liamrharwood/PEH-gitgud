<?php
require_once("dbconn.php");

$user = $_GET['uid'];
$improvement = $_GET['iid'];
$page = $_GET['page'];

$sql = "INSERT INTO Likes (uid, iid) VALUES ($user, $improvement)";

executeSQL($conn, $sql);

echo "Like Added";

if($page == 'review'){
    header('Location: ../review.php');
} else {
    header('Location: ../idea.php?iid='.$improvement);
}
?>