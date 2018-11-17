<html>
<?php
session_start();
if ($_SESSION['login'] == true) {
	echo "You're already logged in!";
}

?>
<body>
<p>
Choose wisely, you can't change your name once you've set it
</p>
    <form id="register" action="registersc.php" method="post">
        <p>
          <label for="username">Username:</label>
          <span stlyle="border-color: #C3C3C3; border: ridge; border-width: 2px;"><input type="text" name="username" id="username"/></span>
        </p>
        <p>
          <label for="password">Password:</label>
          <input type="password" name="password" id="password" />
        </p>

        <p>
		  <input type="hidden" task="register" value="register" />
          <input type="submit" name="btnSend" value="register" class="submit_button" />

        </p>
      </form>
</body>
<?php

        ?>
<html>