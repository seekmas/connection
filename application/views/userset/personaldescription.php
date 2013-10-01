<div class="panel panel-default">
<div class="panel-body">

<div class="col-md-6">

<?php foreach ($columns as $col) {

	if( $col === 'id')
		continue;

?>

	<div class="form-group col-xs-8">
  		
  		<label class="control-label" for="text_<?php echo $col;?>"><?php echo $col;?></label>
  		
  		<input name="<?php echo $col;?>" type="text" class="form-control" id="text_<?php echo $col;?>">
	
	</div>

<?php }?>


</div>


<div class="col-md-6">


	<div class="form-group col-xs-8">
  		
  		<label class="control-label" for="text_realname">Realname</label>
  		
  		<input name="Realname" type="text" class="form-control" id="text_realname">
	
	</div>

	<div class="form-group col-xs-8">
  		
  		<label class="control-label" for="text_realname">Gender</label>
  		
  		<select class="form-control">
  			<option>保密</option>
  			<option>先生</option>
  			<option>女士</option>
  		</select>
	
	</div>


	<div class="form-group col-xs-8">

  		<label class="control-label" for="text_birthday">Birthday</label>
  		
  		<input name="Birthday" type="text" class="form-control datetimepicker" id="text_birthday">
	
	</div>

</div>

</div>
</div>