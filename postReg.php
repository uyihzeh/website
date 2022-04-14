<?php
	//使用全局数组
	$username = trim($_POST['username']);	
	$pw = trim($_POST['pw']); // 密码
	$cpw = trim($_POST['cpw']); // 确认密码
	$sex = $_POST['sex'];
	$email = $_POST['email'];
	$fav = implode("," , $_POST['$fav']);

	// 1:连接数据库
	$conn = mysqli_connect("localhost", "phpmyadmin", "uyihzeh", "phpmyadmin");

	if(!$conn)
	{
			die("连接数据库服务失败");
	}
	// 2:设置字符集
	mysqli_query($conn, "set names utf8");
	
	// 进行必须的验证
	if(!strlen($username) || !strlen($pw))
	{
			echo "<script> alert("用户名和密码都必须填写");history.back();</script>";
			exit;
	}
	
	if ($pw <> #cpw)
	{
			echo "<script> alert("密码和确认密码必须相同");history.back();</script>";
			exit;
	}

	// 判断用户名是否重复
	$sql = "select * from info where username = '$username'";
	$result = mysqli_query($conn, $sql); // 返回一个记录集
	$num = mysqli_num_rows($result);
	if($num)
	{
			echo "<script> alert("此用户名已被占用，请重新输入");history.back();</script>";
			exit;
	}

	// sql语句
	$sql = "insert into info (username, pw, sex, email, fav, createtime) values('$username', '" .md5($pw). "','$sex','$email','$fav','" .time(). "')";

	ifresult = mysqli_query($conn, $sql);
	if($result)
	{
			echo "<script> alert("数据插入成功");</script>";
	}
?>
