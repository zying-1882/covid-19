<?php
$title = "Register";
function get_content(){

?>
<section id="loin">
<div class="container ">
	<h1 class="text-center">REGISTER</h1>
	<form method="POST" action="/controllers/auth/register.php" class="col-md-6 mx-auto py-5">
		<div class="mb-3 text3">
			<label>Firstname</label>
			<input type="text" name="firstname" class="form-control">
		</div>
		<div class="mb-3 text3">
			<label>Lastname</label>
			<input type="text" name="lastname" class="form-control">
		</div>
		<div class="mb-3 text3">
			<label>Username</label>
			<input type="text" name="username" class="form-control">
		</div>
		<div class="mb-3 text3">
			<label>Password</label>
			<input type="password" name="password" class="form-control">
		</div>
		<div class="mb-3 text3">
			<label>Confirm Password</label>
			<input type="password" name="password2" class="form-control">
		</div>
		<button class="btn btn-default btn3d" style="border: 1px solid white; background-color: #b8c2d6; color: white;">Submit</button>
		</div>
	</form>
</div>
</section>	



<?php
}
	require_once "../partials/layout.php";
 ?>