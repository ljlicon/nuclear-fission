<?php
require_once '../config.php';
require_once '../functions.php';
/*
* 1 获取分类id，第几次获取，要获取多少条
 * 2 到数据库中查找对应的数据
 * 3 把数据返回给前台，让其生成结构
 */
$categoryId = $_POST['categoryId'];
$currentPage = $_POST['currentPage'];
$pageSize = $_POST['pageSize'];
$offset = ($currentPage-1)*$pageSize;
$connect = connect();
$sql="select p.id, p.title,p.content,p.created,p.views,p.likes,p.feature,c.`name`,u.nickname,
(select count(*) from comments where post_id = p.id ) as commentsCount
from posts p
left join categories c on c.id = p.category_id
left join users u on u.id = p.user_id
where p.category_id = {$categoryId}
order by p.created DESC
limit $offset,$pageSize;";
$postArr=query($connect,$sql);

$sqlCount="select count(*) postCount from posts where category_id = $categoryId";
$countArr=query($connect,$sqlCount);
$totalCount=$countArr[0]['postCount'];

$response = ["code"=>0, "msg"=>"操作失败"];
if($postArr){
	$response['code'] = 1;
	$response['msg'] = "操作成功";
	$response['data'] = $postArr;
	$response['totalCount'] = $totalCount;
}
header("content-type: application/json; charset=utf-8");
echo json_encode($response);

?>