<!doctype html>
<html lang="en">
		<head>
				<meta charset="UTF-8">
				<title>会员管理系统</title>
				<style>
					.main{
							width: 80%;
							margin:0 auto;
							text-align: center;
					}
					h2{font-size: 20px}
					h2 a{color：navy; text-decoration:none; margin-right:15px}
					h2 a:last-child{margin-right:0}
					h2 a:hover{color:brown; text-decoration:underline}
					.current{color: brown}
				</style>
		</head>
<body>
	<div class="main">
			<h1>会员注册管理系统</h1>
			<h2>
					<a href="index.php">首页</a>
					<a href="singup.php" class="current">会员注册</a>
					<a href="login.php">会员登陆</a>
					<a href="modify.php">个人资料修改</a>
					<a href="admin.php">后台管理</a>
			</h2>
			<form action="postReg.php" method="post">
				<table align="center" border="1" style="border-collapse: collapse" cellpadding="10" cellpadding=“0”>
					<tr>
						<td align="right">用户名</td>
						<td align="left"><input name="username"></td>
					</tr>
					<tr>
						<td align="right">密码</td>
						<td align="left"><input type="password" name="pw"></td>
					</tr>
					<tr>
						<td align="right">确认密码</td>
						<td align="left"><input type="password" name="cpw"></td>
					</tr>
					<tr>
						<td align="right">性别</td>
						<td align="left">
							<input name="sex" type="radio" checked value="1">男
							<input name="sex" type="radio" value="0">女
						</td>
					</tr>
					<tr>
						<td align="right">爱好</td>
						<td align="left">
							<input name="fav[]" type="checkbox" value="听音乐">听音乐
							<input name="fav[]" type="checkbox" value="玩游戏">玩游戏
							<input name="fav[]" type="checkbox" value="学习">学习
						</td>
					</tr>
					<tr>
						<td align="right"><input type="submit" value="提交"></td>
						<td align="left">
							<input type="reset" value="重置">
						</td>
					</tr>
				</table>
			</form>
	</div>
</body>
</html>
