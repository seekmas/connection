<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">About me - <?php echo $user['username'];?></h3>
    </div>
    
    <div class="panel-body">
    	<ul class="nav nav-pills nav-stacked">
        	<li><a href="#"><span class="label label-primary">Follows</span> | 3560</a></li>
        	<li><a href="#"><span class="label label-primary">Friends</span> | 120</a></li>
            <li><a href="#"><span class="label label-primary">Specials</span> | 1</a></li>
        	<li><a href="#"><span class="label label-primary">Your Fans</span> | 3601</a></li>
        	<li <?php if( 'profile' === $this->uri->segment(2)){?>class="active"<?php }?>>
                <a href="<?php echo site_url('users/profile');?>"><span class="label label-primary">User Modify</span></a>
            </li>
        </ul>
    </div>
</div>


<div class="list-group">
    <a href="<?php echo site_url('pills/index');?>" class="list-group-item<?php if( $this->uri->segment(2) === 'index'){?> active <?php }?>">
        My Status
    </a>

    <a href="<?php echo site_url('pills/hotdiscussion');?>" class="list-group-item<?php if( $this->uri->segment(2) === 'hotdiscussion'){?> active <?php }?>">
        Hot Discussion
    </a>

    <a href="<?php echo site_url('pills/focus');?>" class="list-group-item<?php if( $this->uri->segment(2) === 'focus'){?> active <?php }?>">
        Friends & Focus
    </a>

    <a href="<?php echo site_url('pills/publicmedia');?>" class="list-group-item<?php if( $this->uri->segment(2) === 'publicmedia'){?> active <?php }?>">
        Public Media
    </a>


</div>