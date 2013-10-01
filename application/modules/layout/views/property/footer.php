  <div class="navbar-fixed-bottom">
      <div class="container" align="center">
        2013-2013 @ mot studio {memory_usage} {elapsed_time}
      </div>
  </div>
      
    <script src="<?php echo base_url('public/bootstrap/js/jquery-1.9.1.js');?>"></script>
    <script src="<?php echo base_url('public/bootstrap/js/bootstrap.min.js');?>"></script>
    <script src="<?php echo base_url('public/fseditor/jquery.fseditor-min.js');?>"></script>
    <script src="<?php echo base_url('public/grumble/js/jquery.grumble.min.js?v=7');?>"></script>
    <script src="<?php echo base_url('public/time-picker/js/bootstrap-datetimepicker.min.js');?>"></script>
  	<script src="<?php echo site_url('public/mot/adjust.js');?>"></script>
    <?php if( 'pills' === $this->uri->segment(1)) {?>
    <script src="<?php echo site_url('public/mot/fceditor.js');?>"></script>
    <?php }?>
</body>
</html>