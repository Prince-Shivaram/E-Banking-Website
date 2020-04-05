<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<script>
		function show()
		{
			var a = document.getElementById("pw");
			var b = document.getElementById("rpw");
			if(a.type == "password" || b.type == "password")
			{
				a.type = "text";
				b.type = "text";
			}
			else
			{
				a.type = "password";
				b.type = "password";
			}
		}
	</script>
	<style>
		body,html
		{
		
			width: 100%;
			margin-top: 0%;
			margin-left: 0%;
		}
		select
		{
			font-size: 16px;
			padding: 1% 3% 1% 3%;
			color:black;
		}
		input
		{
			padding: 1% 3% 1% 3%;
			font-size: 16px;
			font-family: times new roman;
		}
		option
		{
			font-size: 16px;
			color: black;
			border-radius: 2px;
		}
		table
		{
			border:1px solid darkgray;
			border-radius: 5px;
			margin-top: 1%;
			padding:1%;
			color:  black;
			font-family: Segoe UI;
			font-weight: normal;
			padding: 1% 6% 1% 6%;
		}
		input
		{
			border-radius: 2px;
			border:1px solid gray;
			background-color: transparent;
		}
		div.head
		{
		
			text-align: center;
			color: white;
			
            font-weight:400; 
			font-size: 18px;
            font-family:Segoe UI;
		    background-color:#2E86C1;
			background-color:;
			padding: 0.5%;
		}
		input[type="submit"]
		{
		background-color:#2E86C1;
		font-size: 16px;
		padding: 0.8% 8% 1.2% 8%;
		color:white;
		font-family:segoe UI; 
		outline: none;
		border: none;
		cursor: pointer;
		}
		img.banner
		{
			margin-top: 2%;
		}
	</style>
</head>
<body>
	
	<div class="head">Welcome Dear customer</div>
	<center>
<table cellpadding="6">
<form action="{{url('users')}}" method="POST">
	{{ csrf_field() }}
		<tr><td>Account number </td><td><input type="text" name="account"></td></tr>
		<tr><td>CIF number </td><td><input type="text" name="cif"></td></tr>
		<tr><td>Create username</td><th><input type="text"  name="user_id"></th></tr>
		<tr><td>Create password</td><th><input type="password" id="pw" name="wd"></th></tr>
                    <tr><td>Re-enter password</td><th><input type="password" id="rpw" name="rwd"></th></tr>
                    <tr><td></td><td><input type="checkbox" onclick="show()" name="chk">show password</td></tr>
		<tr><th colspan="2" align="right"><br><input type="submit" name="submit1" value="Register"></th></tr>
	</form> 
</table>
<img class="banner" src="user.png" alt="not found" height="300" width="1000">
</center>
</body>
</html>