<!DOCTYPE html>
<html>
<head>
	<title>e-banking</title>
	<script>
		function fun1()
		{
			document.getElementById("over").innerHTML=" &#8594;";
		}
		function fun2()
		{
			document.getElementById("over").innerHTML="";
		}
	</script>
	<style>
		html,body
		{
			width:100%;
			margin-top: 0%;
			margin-left: 0%;
			background-color: #EBF5FB;
		}
		div.welcome
		{

		    background-color:#2E86C1;
		    font-weight: 400;
			padding:0.5%;
			color:white;
			text-align: center;
            font-family:segoe UI;
            font-size: 20px;
		}
		button.login
		{
			cursor:pointer;
			margin-top: 5%;
			background-color:#2E86C1;
			color: #E5E8E8;
			font-size: 18px;
			font-family: arial;
			padding:1%;
			border-radius: 5px;
			border:none;
		}
         button.login:hover
         {
         	box-shadow:0px 15px 10px -15px #111;
         	transition: 0.5s;
         }
		 div.ses2
		 {
			 font-size: 25px;
			 color: darkslategray;
			 margin-top: 6%;
			 padding: 1%;
			 font-family:Courier new;
			 background-color: cornflowerblue;
		 }
         img.adv
         {
         	margin-top: 1%;
         	width: 60%;
			border-radius: 5px;
         }
    input[type="submit"]
	{
		cursor: pointer;
		background-color:#2E86C1;
		position:absolute;
		margin-left: 70%;
		margin-top: -2.4%;
		border: none;
		outline: none;
		font-family: segoe UI;
		font-size: 18px;
		color:white;
		border-radius: 4px;
		padding: 0.5% 3% 0.5% 3%;
	}
	form.admin
	{
		position: absolute;
		
	}
	</style>
</head>
<body>
<img src="images\logo1.png" height="100" width="200">
<form action="{{url('adminpage')}}"><input type="submit" name="admin" value="Admin">
</form>
<div class="welcome">Welcome to  you in e-banking</div>
<center><img src="images\adv1.jpg" alt="image not found" height="340" class="adv"></center>
<form action="{{url('logim')}}" target="_blank">
	<center><button class="login" onmouseover="fun1()" onmouseout="fun2()">Continue to login<span id="over" style="font-weight: bold; font-size: 20px;"></span></button></center>


</form>
<div class="ses2"><span style="color:red;">*</span> features</div>
<div style="background-color: rgba(0, 0, 0, 0.6); font-size: 18px; padding-bottom: 2%;color: white; font-family: Courier New; padding-top: 2%; padding-left: 2%; margin-bottom:0.5%; margin-top: 0.5%;">Provided with ICT equipment such as notebooks and internet connection, the user can access anywhere anytime.
	<br> (e.g. home, hotspots zone, workplace and so forth)
It required basic software from PC such as Internet explorer which allows users to sign-in into their e-banking services from the websites
.<br> All transactions done through website will store in banker server from internet.<br>
Banking services are ready can anytime.
<br> Users can print the bank statement or check the transaction history or observe the incoming fund anytime.
</div>
<footer style="font-family:Segoe UI;  text-align: center; color:white; background-color:grey; font-size: 22px; padding:0.6%; margin-top:2%;">
	Personal <span style="color:orange;">e</span>-banking pvt. limited &#x24B8; 2019</footer>
</body>
</html>