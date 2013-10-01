<div class="page-header">
	<h3>user login</h3>
</div>

<form class="col-md-6" action="" method="post">
	<input name="t" value="<?php echo $table;?>" type="hidden">

  	<div class="form-group">	
    	<label for="username">Username</label>
		<input class="form-control" name="username" id="username" type="text" />
	</div>

  	<div class="form-group">
    	<label for="username">Password</label>
		<input class="form-control" name="password" id="password" type="password" />
	</div>

  	<div class="form-group">
		<input name="remember_password" type="checkbox"> Remember me
	</div>

	<button class="btn" name="login" value="1">Start Hobbies</button>

</form>