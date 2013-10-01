<?php $this->load->module('layout/property/header');?>

	<div class="container">

		<div class="col-md-3">
		<div class="panel panel-primary">

			<div class="panel-heading">
          		<h3 class="panel-title">Modify</h3>
        	</div>

			<div class="panel-body">
			
			<ul class="nav nav-pills nav-stacked">
  
  				<li><a href="<?php echo site_url('userset/avatar');?>">Avatar</a></li>

  				<li><a href="<?php echo site_url('userset/attitude');?>">Attitude</a></li>

 	 			<li><a href="<?php echo site_url('userset/personaldescription');?>">PersonalDescription</a></li>

  				<li><a href="<?php echo site_url('userset/groups');?>">Groups</a></li>

  				<li><a href="<?php echo site_url('userset/belief');?>">Belief</a></li>

  				<li><a href="<?php echo site_url('userset/habit');?>">Habit</a></li>
			</ul>
		
			</div>
		
		</div>
		
		</div>

		<div class="col-md-9">


			<ol class="breadcrumb">
  				<li><a href="<?php echo site_url('pills/index');?>">Home</a></li>
  				<li><a href="<?php echo site_url('users/profile');?>">User Modify</a></li>
 				<li class="active"><?php echo ucwords( $this->uri->segment(2));?></li>
			</ol>


			<?php echo $template['body'];?>

		</div>
</div>


<?php $this->load->module('layout/property/footer');?>


