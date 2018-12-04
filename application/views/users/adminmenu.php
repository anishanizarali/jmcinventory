<div id="adminmenu">
  <?php
  $logouturl = site_url('auth/logout');
  echo form_open();
  echo form_submit(array('type' => 'button', 'value' => 'Log out', 'onClick' => "window.location.href='$logouturl'"));
  echo form_close();
  ?>
  <!--<p id="logoutam"><a href="<?php echo site_url('auth/logout'); ?>">Log out</a></p> -->
</div>
