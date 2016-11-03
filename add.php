<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
<?php
include 'conn.php';
if($_POST['submit']){
	$sql ="insert into message(id,user,title,content,lastdata)values(null,'$_POST[user]','$_POST[title]','$_POST[content]',now())";
	mysql_query($sql);
	//页面跳转，实现方式为JavaScript
	$url="list.php";
	echo "<script language='javascript'type='text/javascript'>";
	echo "window.location.href='$url'";
	echo "</script>";
}
?>
<script type="text/javascript">
	function checkPost(){
		if (addForm.user.value=="") {
			alert("请输入用户名");
			addForm.user.focus();
			return false;
		}
		if(addForm.title.value.length<5){
			alert("标题不能少于5个字符");
			addForm.title.focus();
			return false;
		}
	}
</script>
<form name="addForm" method="post" action="add.php" onsubmit="return checkPost();">
	用户：<input type="text" name="user"/><br/>
	标题：<input type="text" name="title"/><br/>
	内容：<textarea name="content" rows="8" cols="30"></textarea><br/>
	<input type="submit" name="submit" value="提交"/>
</form>
</body>
</html>