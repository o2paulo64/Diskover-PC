<?php 
	include 'head.php';
?>
<div class='container'>
	<div class='col-md-4'></div>
	<div class='col-md-4'>
		<div class="loginmodal-container" style="margin-top: 20px;">

			<h1>Authorized Login</h1><br>
			<form action='login.php' method='POST'>
				<input type='text' name='username' placeholder='Username'>
				<input type='password' name='password' placeholder='Password'>
				<input type='submit' name='login' class='login loginmodal-submit' value='Login'>
			</form>
			<div class='login-help'>
				<a href='about.php' id='linkss'>Contact administrators for login information</a>
			</div>
		</div>
	</div>
</div>