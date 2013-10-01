<div class="panel-group" id="accordion">
  <div class="panel panel-default">
    
    <div class="panel-heading">
      <a data-toggle="collapse" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
      <h4 class="panel-title">
          click then got a target 
          <a href="#"><span class="label label-success" style="font-size:14px;line-height:30px;"><?php echo $object['object_name'];?></span></a>
      </h4>
      </a>
    </div>
    
    <div id="collapseOne" class="panel-collapse collapse">
      <div class="panel-body">
        <?php foreach ($objects as $obj) {?>
          <a href="<?php echo site_url('pills/object/'.$obj['object_name']);?>">
            <span class="label label-info" style="font-size:14px;line-height:30px;"><?php echo $obj['object_name'];?></span>
          </a>
        <?php }?>       
      </div>
    </div>
  </div>
</div>

<br/>