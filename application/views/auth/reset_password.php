<html>
    <body style="background-color:beige;"</body>
<head>
<h1 style="text-align:center; color:blue; "<title>Reset Password</title><h1>
</head>
<body>

	<p><a href="<?php echo site_url('auth/login'); ?>">Login</a></p>

	<p style=" text-align:center; font-size:100%; color: crimson; "<?php 
	if($success){
		echo '<p>You have successfully reset your password.</p>';
	} else {
	    echo form_open(); 
	    echo form_label('Password', 'password') .'<br />';
	    echo form_password(array('name' => 'password', 'value' => set_value('password'))) .'<br />';
	    echo form_error('password');
	    echo form_label('Confirm Password', 'password_conf') .'<br />';
	    echo form_password(array('name' => 'password_conf', 'value' => set_value('password_conf'))) .'<br />';
	    echo form_error('password_conf');
	    echo form_submit(array('type' => 'submit', 'value' => 'Save New Password'));
	    echo form_close();
    }
    ?></p>

</body>
<p style="border:2px solid dodgerblue; text-align:center;"><a href="<?php echo site_url('auth/login'); ?>">Login</a></p>
</html>
