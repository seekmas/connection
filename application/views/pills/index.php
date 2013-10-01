<?php $this->load->module('page/topcommon/down_list');?>

<div class="alert alert-info">
    <strong> @Type in ! </strong> Everything worth to share
</div>
<?php var_dump( $current_object);?>
<form action="" method="post">

	<p><textarea id="attitude" name="news"><?php if( isset( $current_object)){?>@<?php echo $current_object['object_name'];?><?php }?></textarea></p>
	<p><button class="btn btn-primary" name="post_status" value="1">Posts</button></p>

</form>

<hr/>

<div id="news_stream">
  <?php foreach ($post_list as $post) {?>
  <div class="panel panel-default  mot-article">
  <div class="panel-body">
    <?php
    $pills = preg_split('/---/', $post['post_content']);
    ?>
    <h3 class="mot-title"><?php echo strip_tags( $pills[0]);?> </h3>
    <h4 class="mot-text">
      
      <?php if( isset( $pills[1])){?>
      <pre><small>    <?php echo strip_tags( trim( $pills[1]));?></small></pre>
      <?php }?>
      
    </h4>

    <div class="panel panel-default ">
        <div class="panel-body row">

          <div class="col-md-5" style="margin-left:5px;margin-right:5px;">
          <a href="<?php echo site_url('core/follow/'.$post['id']);?>"><span class="label label-info">Follow</span></a>
          <a href="<?php echo site_url('core/save/'.$post['id']);?>"><span class="label label-info">Save</span></a>
          <a href="<?php echo site_url('core/commit/'.$post['id']);?>"><span class="label label-info">Commit</span></a>
          <a href="<?php echo site_url('core/share/'.$post['id']);?>"><span class="label label-info">Share</span></a>
          <a href="<?php echo site_url('core/up/'.$post['id']);?>"><span class="label label-info">Up</span></a>
          </div>

          <div class="col-md-6">
            
          <a href="#" class="user_link" data-origin="<?php echo $post['uid'];?>">
            <img src="<?php echo site_url('uploads/demo.gif');?>" width="25px">
            <?php echo $post['username'];?>
          </a>

          <span class="label label-primary">Published in <?php echo date( 'Y-m-d h:i:s' , $post['timecreated'] );?></span>

          <a href="<?php echo site_url('core/up/'.$post['id']);?>"><span class="label label-default">Remove</span></a>

          </div>

        </div>
      </div>
    </div>
    
  </div>
  <?php }?>
</div>