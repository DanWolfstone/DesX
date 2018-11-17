

<body>
<title>Destiny X | Login </title>
<?php
session_start();


?>
<style>
.makeshiftbg {
	height: 100%;
	width: 100%;
	position: absolute;
	z-index: -1;
	background:url('http://i.imgur.com/k6CeY54.png') no-repeat center;
	background-size:cover;
    -webkit-filter: blur(13px);
    -moz-filter: blur(13px);
    -o-filter: blur(13px);
    -ms-filter: blur(13px);
    filter: blur(13px);
	
}
.OuterC {
	height: 450px;
    width: 325px;	 
	
   top: 25%;
    position: relative;
    margin: 0px auto;
	z-index: 0;
}
body {
	 color: #FFFFFF;
	 font-size: 25px;
}
InnerC {
	background-color: rgba(255, 255, 255, 0.2);
	background-size:cover;
    -webkit-filter: blur(20px);
    -moz-filter: blur(20px);
    -o-filter: blur(20px);
    -ms-filter: blur(20px);
    filter: blur(20px);
    position: absolute;  
    left:0;
    top: 0;
	
}
.l {
	font-size: 30;
	
}
.form-signin {
    max-width: 400px;
    padding: 19px 29px 29px;
    margin: 0 auto 20px;
    background-color: #fff;
    border: 1px solid #e5e5e5;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
    -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
    box-shadow: 0 1px 2px rgba(0,0,0,.05);
}
.clearfix {
  *zoom: 1;
}

.clearfix:before,
.clearfix:after {
  display: table;
  line-height: 0;
  content: "";
}

.clearfix:after {
  clear: both;
}

.hide-text {
  font: 0/0 a;
  color: transparent;
  text-shadow: none;
  background-color: transparent;
  border: 0;
}

.input-block-level {
  display: block;
  width: 100%;
  min-height: 30px;
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
          box-sizing: border-box;
}
html {
  font-size: 100%;
  -webkit-text-size-adjust: 100%;
      -ms-text-size-adjust: 100%;
}

a:focus {
  outline: thin dotted #333;
  outline: 5px auto -webkit-focus-ring-color;
  outline-offset: -2px;
}

a:hover,
a:active {
  outline: 0;
}
a {
  color: #0088cc;
  text-decoration: none;
}
.btnRegister {
	font-size: 12px; 
	color: black;
	text-align: left;
	
}
.btnLogin {
	-webkit-box-shadow:rgba(0,0,0,0.2) 0 1px 0 0;
	-moz-box-shadow:rgba(0,0,0,0.2) 0 1px 0 0;
	box-shadow:rgba(0,0,0,0.2) 0 1px 0 0;
	border-bottom-color:#333;
	border:1px solid #61c4ea;
	background-color:#7cceee;
	border-radius:5px;
	-moz-border-radius:5px;
	-webkit-border-radius:5px;
	color:#333;
	font-family:'Verdana',Arial,sans-serif;
	font-size:14px;
	text-shadow:#b2e2f5 0 1px 0;
	padding:5px;
	margin-top: 5px
}

	</style>
	<div class="makeshiftbg">
	</div>
<div class="OuterC">

	
	<form id="login" class="form-signin" action="" method="post">
        <h2 style="font-weight: bold; font-size: 26px; color: black;">Please sign in</h2>
        <input type="text" class="input-block-level" placeholder="Username" name="username">
        <input type="password" class="input-block-level" placeholder="Password" name="password">
        <p class="btnRegister">
 <br/><a href="register.php">Register</a> </p>
 <button class="btnLogin" type="submit" name="btnSend" value="Login">Sign in</button> 
		<br/>
		

      </form>
      <td>&nbsp;</td>

  <div id="wrap">
        <!-- start PHP code -->
        <?php

            mysql_connect("localhost", "orion105", "tJZD3rFJgECiHnPS") or die(mysql_error()); // Connect to database server(localhost) with username and password.
            mysql_select_db("orion105") or die(mysql_error()); // Select registration database.

            if(isset($_POST['username']) && !empty($_POST['username']) AND isset($_POST['password']) && !empty($_POST['password'])){
                $username = mysql_escape_string($_POST['username']);
                $password = mysql_escape_string(md5($_POST['password']));

                $search = mysql_query("SELECT username, password FROM login WHERE username='$username' AND password='$password'") or die(mysql_error()); 
                $match  = mysql_num_rows($search);
				if (!$match) 
					die("Login Failed <br/> Incorrect Username/Password. ");
				
				$_SESSION['user'] = $username;
				$_SESSION['login'] = true;
				if ($_SESSION['login'] == true) {
						header("Location: /index.php");
					}
            }
			

        ?>
    </div>
	</div>
        </div>
</body>