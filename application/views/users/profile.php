<div class="page-header">
  <h3>Focus <small>List the object that you are interested in | click to cancel the focused object</small></h3>
</div>

<?php foreach ($objects as $obj) {?>
	<a href="#"><span class="label label-info" style="line-height:30px;"><?php echo $obj['object_name'];?></span></a>
<?php }?>
<a href="#"> | more | </a>

	

<div class="page-header">
  <h3>Outline <small>Description your attitude</small></h3>
</div>

<ul class="nav nav-pills nav-justified">
  
  <li><a href="<?php echo site_url('userset/avatar');?>">Avatar</a></li>

  <li><a href="<?php echo site_url('userset/attitude');?>">Attitude</a></li>

  <li><a href="<?php echo site_url('userset/personaldescription');?>">PersonalDescription</a></li>

  <li><a href="<?php echo site_url('userset/groups');?>">Groups</a></li>

  <li><a href="<?php echo site_url('userset/belief');?>">Belief</a></li>

  <li><a href="<?php echo site_url('userset/habit');?>">Habit</a></li>

</ul>


<div class="page-header">
  <h3>Gallery <small></small></h3>
</div>


<div class="row">

<div class="col-md-3">
	<a href="#" class="thumbnail">
	<img src="<?php echo site_url('uploads/demo.jpg');?>">
	</a>
</div>

<div class="col-md-3">
	<a href="#" class="thumbnail">
	<img src="<?php echo site_url('uploads/demo.jpg');?>">
	</a>
</div>


<div class="col-md-3">
	<a href="#" class="thumbnail">
	<img src="<?php echo site_url('uploads/demo.jpg');?>">
	</a>
</div>

<div class="col-md-3">
	<a href="#" class="thumbnail">
	<img src="<?php echo site_url('uploads/demo.jpg');?>">
	</a>
</div>
</div>

<br>

<div class="row">
<div class="col-md-3">
	<a href="#" class="thumbnail">
	<img src="<?php echo site_url('uploads/demo.jpg');?>">
	</a>
</div>


<div class="col-md-3">
	<a href="#" class="thumbnail">
	<img src="<?php echo site_url('uploads/demo.jpg');?>">
	</a>
</div>


<div class="col-md-3">
	<a href="#" class="thumbnail">
	<img src="<?php echo site_url('uploads/demo.jpg');?>">
	</a>
</div>


<div class="col-md-3">
	<a href="#" class="thumbnail">
	<img src="<?php echo site_url('uploads/demo.jpg');?>">
	</a>
</div>

</div>

