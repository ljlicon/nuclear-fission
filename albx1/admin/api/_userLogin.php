<?php
require '../../config.php';
require '../../functions.php';
$email=$_POST["email"];
$password=$_POST["password"];
$connect=connect();
$sql="SELECT * from  users WHERE email='$email' and `password`='$password' and `status`='activated'";
// print_r($sql);
$res=query($connect,$sql);
// print_r($res);
$response =["code"=>0,"mes"=>'操作失败'];

if($res){
    // $response=["code"=>1,"mes"=>'操作成功'];
    session_start();
 	$_SESSION['isLogin'] = 1;
    $_SESSION['user_id'] = $res[0]['id'];
    
    $response['code']=1;
    $response['mes']='登录成功';
    }
header("content-type:application/json; charset=utf-8");
echo json_encode($response);
?>