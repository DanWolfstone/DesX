<?php
			session_start();

	
	

            mysql_connect("localhost", "orion105", "tJZD3rFJgECiHnPS") or die(mysql_error()); // Connect to database server(localhost) with username and password.
            mysql_select_db("orion105") or die(mysql_error()); // Select registration database.

            if(isset($_POST['username']) && !empty($_POST['username']) AND isset($_POST['password']) && !empty($_POST['password'])){
				
                $username = mysql_escape_string($_POST['username']);
                $password = mysql_escape_string(md5($_POST['password']));

                $search = mysql_query("insert into `login` set username=\"$username\", password=(\"$password\")") or die(mysql_error()); 
                $match  = mysql_affected_rows();
				if (!$match) 
					die("Registration Failed");
				    
					$_SESSION['login'] = true;
					$_SESSION['user'] = $username;
					if ($_SESSION['login'] == true) {
						header("Location: index.php");
					}
            }
			
			if ($_POST['task'] == 'save.profile')
				$fname = mysql_escape_string($_POST['name'])
				
        ?>