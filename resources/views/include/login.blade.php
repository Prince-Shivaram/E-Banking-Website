<!DOCTYPE html>
<html>
<head>
	<title>home</title>
	<script type="text/javascript">
	var myWin;
	function fn1()
	{

		myWin = window.open("{{url('forgot_id')}}","MYNAME", "width=500 height=400");
	}
</script>
	<style>
		body,html
		{
			height: 100%;
			width: 100%;
			margin-top: 0%;
			margin-left: 0%;
			background-color: #F4F6F7;
		}
		table{
			position: absolute;
			border: 1px solid lightgrey;
			box-shadow: 5px 5px 5px lightgray;
			border-radius: 5px;
			margin-top: 5%;
			margin-left: 25%;
			font-family: arial;
			font-weight: bold;
			color: #2E86C1;
			
		}

		div.head
		{
			font-size: 20px;
			font-family: arial;
			text-align: center;
			color: #F7F9F9;
			background-color:#2E86C1;
			padding: 0.5%;
		}
		
		a.help
		{
			color: #17A589;
			text-decoration: none;
		}
		.help:hover
		{
			text-decoration: underline;
			transition: 05s;
			color: #7DCEA0;
		}
		input
		{
			padding:2%;
			border:solid 1px lightblue;
			outline:none;
			background-color: white;
		}
	
		img.logo
		{
			position: relative;
		}
		span.error
		{
			position: absolute;
			text-align: center;
			font-family: 'Courier New', Courier, monospace;
			color:blue;
			text-align: center;
			width: 100%;
			margin-top: 2%;
		}
		table.t2
		{
			padding-top:1%;
			color:#2874A6;
			margin-left: 55%;
			border-top:  1px solid lightgrey;
			border-bottom: 1px solid lightgrey;
			border-right:none;
			border-left:none;
			border-radius: 0px;
			padding-left: 3%;
			padding-right: 3%;
			box-shadow:0px 15px 10px -15px #111; 
		}
	</style>
</head>
<body>
	
		
	<img class="logo" src="images\logo1.png" height="100" width="200">
	<?php echo "<span style='color:#21618C;font-family:verdana; font-weight:bold;float:right;margin-top:2%;margin-right:4%;'>".date("d-M-Y")."</span>" ?>
	<div class="head">Personal banking</div>

	@if ($message = Session::get('warning'))
        <span class="error">{{$message}}</span>
        @endif
                @if($errors->any())
                @foreach($errors->all() as $error)
			<span class="error">{{$error}}</span>
			
                @endforeach
                @endif
<form action="{{url('admins')}}" method="POST">
	{{ csrf_field() }}
		<table cellpadding="8">
			<tr><th colspan="2" style="background-color: lightgrey;color:blue;">&#128274; &nbsp;Enter your credentials</th></tr>
			<tr><td>User name</td><td><input type="text" name="user_id"></td></tr>
			<tr><td>Password</td><td><input type="Password" name="PWD"></td></tr>
			<tr><td></td><td><input type="checkbox" name="remember"> <span style="color:black;font-weight: normal;">Remember Username</span></td></tr>
			<tr><th colspan="2">
				<input type="submit" onclick="gh()" name="submit" value="Log-in &#8594;" style="background-color:#2E86C1; padding:5px; outline: none;border:none; color: #F4F6F7; border-radius: 3px;"></th></tr>
		</table>
	</form>
<table cellpadding="0" class="t2">
	<tr><th style="color:#CB4335; font-weight: bold;">May i help you <span style="color:#F8C471;">?</span></th></tr>
<tr><th><span style="font-size:35px;">&#9758; </span><a href="{{url('newuser')}}" class="help">New user <span style="color:#F8C471;">?</span></a></th></tr>
<tr><th><span style='font-size:35px;'>&#9758; </span><a href="" onclick="window.open('{{url('passreset')}}','myname','height=500 width=700')" class="help">Forgot Password <span style="color:#F8C471;">?</span></a></th></tr>
	<tr><th><span style='font-size:35px;'>&#9758; </span><a href="#" class="help" onclick="fn1()">Forgot user name <span style="color:#F8C471;">?</span></a></th></tr>
	<tr><th><a href="#" class="help">Contact Us &#128241;</a></th></tr>
</table>
<center><img src="banner3.jpg" height="300" width="1000" alt="not found" style="margin-top:24%;"></center>
</body>
</html>