<?php 

include "dbconnect.php";

function login($userName, $Password){
    $conn=connect();
    $sql =$conn->prepare("SELECT * FROM users WHERE userName=? and Password=?");
    $sql->bind_param("ss",$userName, $Password);
    $sql->execute();
    $result=$sql->get_result();
    return $result->num_rows === 1 ;
}
function searchUser($userName){
    $conn=connect();
    $sql =$conn->prepare( "SELECT * FROM `users` WHERE userName = ?");
    $sql->bind_param("s",$userName);
    $sql->execute();
    $result=$sql->get_result();
    return $result->fetch_assoc();
}

?>