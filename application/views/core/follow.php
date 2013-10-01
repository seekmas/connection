<?php
$content = explode('---', $po['post_content']);
?>


<div class="panel panel-default">

	<div class="panel-body">

		<div class="col-md-3">
			

		</div>

		<div class="col-md-9">
		<blockquote>
			<p class="lead"><?php echo $content[0];?></p>
			<?php if( isset( $content[1])){?>
			<p><small><?php echo $content[1];?></small></p>
			<?php }?>
			<p class="text-right"><em><?php echo date('m-d Y h:i:s' , $po['timecreated'])?></em></p>
		</blockquote>
		</div>

	</div>

</div>

<hr/>

<div class="page-header">
	<h4>People Commit</h4>

	<form action="" method="post">
	<input name="poid" value="<?php echo $po['id'];?>" type="hidden" />
	<p><textarea class="attitude" name="follow_content"></textarea></p>
	<p><button name="comment" value="1" type="submit" class="btn btn-primary">Comment</button></p>
	</form>

</div>



<?php foreach ($comment_list as $comment) {?>

<div class="list-group">
  <div class="list-group-item">
    <div class="row" style="padding:10px;">


    <div class="col-md-1"><a href="#" class="thumbnail user_link"><img class="" src="<?php echo base_url('uploads/avatars/1.jpg');?>" width="80px"></a></div>

    <div class="col-md-11">
    	<p class="list-group-item-text"><?php echo $comment['follow_content'];?></p>
    	<p class="text-right"><small><?php echo date( 'Y-m-d h:i:s' , $comment['timecreated'] );?></small></p>
    </div>
	</div>
  </div>
</div>

<?php }?>