<div class="page-header">
	<h3>register a account</h3>
</div>

<form class="col-md-6" action="" method="post">

	<input name="t" value="<?php echo $table;?>" type="hidden">

	<?php foreach ($fields as $field) {
			if( in_array( $field, array('id' , 'timecreated' , 'lastlogin' , 'salt')) )
				continue;
	?>
  		<div class="form-group">
    		<label for="<?php echo $field;?>"><?php echo $field;?></label>
			<input class="form-control" name="<?php echo $field;?>" id="<?php echo $field;?>" type="text" <?php if( 'username' === $field){?>autofocus<?php }?>/>
		</div>
	<?php }?>
	

	<button class="btn btn-success" name="register" value="1" type="submit">Start!</button>

</form>