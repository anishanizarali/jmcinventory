<div class="menu adminmenu">
  <?php
  echo "You are logged in as " . user('email');
  $logouturl = site_url('auth/logout');
  $inventoryurl = site_url('users/dashboard#inventory');
  $usersurl = site_url('users/dashboard#users');
  echo form_open();
  echo form_submit(array('type' => 'button', 'value' => 'Inventory Management', 'onClick' => "window.location.href='$inventoryurl'"));
  echo form_submit(array('type' => 'button', 'value' => 'User Management', 'onClick' => "window.location.href='$usersurl'"));
  echo form_submit(array('type' => 'button', 'value' => 'Log out', 'onClick' => "window.location.href='$logouturl'"));
  echo form_close();
  ?>
</div>
