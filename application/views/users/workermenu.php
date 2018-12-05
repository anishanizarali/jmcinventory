<div class="menu workermenu">
  <?php
  echo "You are logged in as " . user('email');
  $logouturl = site_url('auth/logout');
  echo form_open();
  echo form_submit(array('type' => 'button', 'value' => 'Log out', 'onClick' => "window.location.href='$logouturl'"));
  echo form_close();
  ?>
</div>
