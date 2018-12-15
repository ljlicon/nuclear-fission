<?php
require_once '../../config.php';
require_once '../../functions.php';
session_start();
$userId=$_SESSION['user_id'];
$conn=connect();
$sql="select * from users where id='{$userId}'";
$res=query($conn,$sql);
// print_r($res);
$response=["code"=>0,"mes"=>'获取失败'];
if($res){
    $response['code']=1;
    $response['mes']='操作成功';
    $response['avatar']=$res[0]['avatar'];
    $response['nickname']=$res[0]['nickname'];
}
header("content-type:application/json; charset=utf-8;");
echo json_encode($response);
?>