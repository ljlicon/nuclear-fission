<?php
function connect(){
    $connect = mysqli_connect(DB_HOST, DB_USER, DB_PWD, DB_NAME);
    return $connect;
}
function query($connect,$sql){

    $result=mysqli_query($connect,$sql);
    return fetch($result);
}
function fetch($result){
    $Arr = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $Arr[] = $row;
    }
    return $Arr;
}

function checkLogin(){
	// 要使用session，就一定要先开启session
  session_start();
  // 先完成登录的验证 - 除了登录页面，都需要做登录的验证
  // 1 没有isLogin 这个key， 或有isLogin, 但是值跟我们在登录的时候的不一样
  if (!isset($_SESSION['isLogin']) || $_SESSION['isLogin'] != 1){
    header("location: login.php");
  }
}
?>