<?php $this->load->module('layout/property/header');?>

	<div class="container">

		<div class="col-md-3">
			
			<?php $this->load->module('page/leftcommon/default_page');?>
		
		</div>

		<div class="col-md-9">

			<?php echo $template['body'];?>

		</div>
</div>

<?php $this->load->module('layout/property/footer');?>