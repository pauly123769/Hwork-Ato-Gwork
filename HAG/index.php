<?php
	include ("app/header.php");
?>
                
                <div class="grid-container">
                    <div class="first card"></div>
                    <div class="card"></div>
                    <div class="card"></div>
                </div>
				<center><img class="logo_first" src="images/h1.jpg">
		<p class="text_logo">Welcome To the Health Advice Group</p>
		<p class="text">Choose an Option to get started</p>
		<img class="my" src="images/h2.jpg"></center>
	   <div class="buttons">

            <div class="action_btn">
				
			<a href="signup.html">
            <button  href="home.html" name="submit" class="sign_up" type="submit" value="Save" onclick="myFunction()">Sign up</button>
			</a>
			<a href="login.php">
            <button  href="login.php" name="submit" class="Login_in" type="submit" value="Cancel" onclick="myFunction2()">Login</button>
			</a>

            <p id="saved"></p>

            </div>

        </div>
<?php
	include ("footer.html");
?>