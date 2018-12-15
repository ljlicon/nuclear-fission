<?php
if(isset($_GET['logout']) && $_GET['logout'] == 1){
  $_SESSION['isLogin'] = '';
  header("location:login.php");
  die;
}
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <meta charset="utf-8">
  <title>Sign in &laquo; Admin</title>
  <link rel="stylesheet" href="../static/assets/vendors/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="../static/assets/css/admin.css">
</head>
<body>
  <div class="login">
    <form class="login-wrap">
      <img class="avatar" src="../static/assets/img/default.png">
      <!-- 有错误信息时展示 -->
      <div class="alert alert-danger" style="display:none;">
        <strong>错误！</strong> <span id="mes">用户名或密码错误！</span> 
      </div>
      <div class="form-group">
        <label for="email" class="sr-only">邮箱</label>
        <input id="email" type="email" class="form-control" placeholder="邮箱" autofocus>
      </div>
      <div class="form-group">
        <label for="password" class="sr-only">密码</label>
        <input id="password" type="password" class="form-control" placeholder="密码">
      </div>
      <span class="btn btn-primary btn-block">登 录</span>
    </form>
  </div>
  <!-- 验证用户输入密码 -->
  <script src="../static/assets/vendors/jquery/jquery.js"></script>
  <script>
//  收集表单数据
// 验证数据的有效性
// ajax发送请求到后端API文件
// ajax返回后判断：
// 如果成功跳转到index.php
// 如果失败：提示用户名/密码错误
        $(function(){
        $(".btn").on("click",function(){
            var email=$("#email").val();
            var password=$("#password").val();
            var reg=/^\w+[@]\w+[.]\w+$/;
            var pwreg=/\w{6,10}/;
            // console.log('eee');
        if(!reg.test(email)){
          $("#mes").text("您输入的邮箱有误，请重新输入");
          $(".alert").show();
          return;
        };
            // if(!pwreg.test(password)){
            //   $("#mes").text("您输入的密码有误，请重新输入");
            //           $(".alert").show();
            //           return;
            // }
            $.ajax({
              type:"POST",
              data:{email:email,password:password},
              url:"./api/_userLogin.php",
              success : function(res){
                // console.log(result.code);
                if( res.code == 1){
                //跳转到后台首页
                // console.log(707);
                location.href ='index.php';
              }
              else{
                $("#mes").text("用户名或密码错误！");
                $(".alert").show();
              }
            }
            });
          })
        })
  </script>
</body>
</html>
