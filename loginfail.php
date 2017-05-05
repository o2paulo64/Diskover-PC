<?php 
	include 'head.php';
?>
<div class='container'>
	<div class='col-md-4'></div>
	<div class='col-md-4'>
		<div class="loginmodal-container" style="margin-top: 20px;">

			<h1>Authorized Login</h1><br>
			
			 
			<form class="form-group has-error" action='login.php' method='POST'>
					<input type='text' style='border-color: red; border-width: 2px;' name='username' placeholder='Username'>
					<input type='password' style='border-color: red; border-width: 2px;' name='password' placeholder='Password'>
					<br><center style='color: red;'>Wrong Username or Password</center></br>
					<input type='submit' name='login' class='login loginmodal-submit' value='Login'>
			</form>
			
			<div class='login-help'>
				<a href='about.php' id='linkss'>Contact administrators for login information</a>
			</div>
		</div>
	</div>
</div>