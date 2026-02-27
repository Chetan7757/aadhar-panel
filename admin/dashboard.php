<?php
session_start();
if(!isset($_SESSION['user_id'])){
    header("Location: ../login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Admin Dashboard</title>
<style>
body{
    font-family:Arial;
    background:#f4f4f4;
}
.box{
    width:400px;
    margin:100px auto;
    padding:20px;
    background:white;
    border-radius:10px;
    box-shadow:0 0 10px gray;
    text-align:center;
}
a{
    display:block;
    margin:10px;
    padding:10px;
    background:#007bff;
    color:white;
    text-decoration:none;
    border-radius:5px;
}
</style>
</head>
<body>

<div class="box">
<h2>Admin Dashboard</h2>

<a href="#">Print Aadhar</a>
<a href="#">Print History</a>
<a href="../logout.php">Logout</a>

</div>

</body>
</html>
