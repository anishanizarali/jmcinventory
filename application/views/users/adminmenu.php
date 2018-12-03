<div id="adminmenu">
  <?php
  echo form_open();
  echo form_submit(array('type' => 'button', 'value' => 'Log out', 'onClick' => "window.location.href='http://localhost/jmcinventory/auth/logout'"));
  echo form_close();
  ?>
  <!--<p id="logoutam"><a href="<?php echo site_url('auth/logout'); ?>">Log out</a></p> -->
</div>
