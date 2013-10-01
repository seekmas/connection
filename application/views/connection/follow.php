<span class="help-block">Input username or email</span>
<form class="form-inline" role="form" action="" method="post">

	<div class="form-group">
		<input class="form-control input-lg" name="keyword" type="text" />
	</div>

	<div class="form-group">
		<button type="submit" class="btn btn-default btn-lg" name="followByName" value="1">find guys to follow</button>
	</div>

</form>

<div class="page-header">

	<h4>Result List <small>find <?php echo count( $connection);?> people</small></h4>

</div>

<?php 
if( $connection)
foreach ($connection as $people) { ?>
<div class="list-group">
  <a href="#" class="list-group-item">
    <h4 class="list-group-item-heading">[ <?php echo $people['username'];?> ]</h4>
    <p class="list-group-item-text"><?php echo $people['email'];?></p>
  </a>
</div>
<?php }?>


<script>
$(function() {
	$( 'div.list-group').on('click' , function(){
		$('a.list-group-item').removeClass('active');
		$(this).find('a').addClass('active');
	});
});
</script>