
<?php 
	session_start();
?>

	<html>
	<head>
	
	<style>
	.bodyLogged {
		width: 230px;
		height: 85px;		
	}
	.XA {
		color: #008080;
	}
	.contentBX {
	background-color: #464646;
    font-size: 24px;
    width: 230px;
    height: 85px;
	color: #C3C3D3;
	padding: 4px;
	padding-top: 10px;

	}
	.hr {
	border-width: 2px;
	border-color: red;
	border-style: solid; 
	padding: 0px;
	}
	.line{
	height: 20px;


	}
	.right {
	float: right;
	width: 15px;
	margin: 0;
	padding: 3;
	color: white;
	}
	.left {
	float: left;
	width: 15px;
	margin: 0;
	padding: 3;
	color: white;
	}
	.center {
	float: center;
	width: 15px;
	margin: 0;
	padding: 3;
	color: white;
	}
	.menu-item {
		text-align: left;
		font-size: 14px;
		display: inline;
		margin-left: 9px;
		padding: 3px;
		
	}



	</style>
	</head>
	<body class="BodyLogged">
	
	<img src="http://i.imgur.com/Vxcrhsu.png" height="32px" width="32" style="overflow:hidden; display: none;"/>

		<div class="contentBX">

			<div style="max-height:32px; max-width: 32px; overflow: hidden; display:inline;">
				<?php 
				 echo $_SESSION['profpic'];
				?>
				
			</div>
				<span style="text-align: right; font-size:24px;">//
				<?php echo $_SESSION['user']; ?>
				</span>
			  
			  
			  <hr class="hr" />
			  <div class="line">
				<div class="menu-item">
			  <a href="index.php" style="color: #008080;"><img src="http://i.imgur.com/1gdi93R.png" /></a> 
				</div>
				<div class="menu-item">
			  <a href="/c/chat.php" style="color: #008080;"> Chat </a>
				</div>
				<div class="menu-item" style="float: right; display: inline;">
			  <form method="POST" action="logout.php" >
			  <input type="submit"  value="logout" name="logoutbutton">
				</div>
				</form>
				<div class="menu-item"  >
				profile
			  
				</div>
				</div>
		  </div>
		</body>
 </html>