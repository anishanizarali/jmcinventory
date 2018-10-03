<html>
    <body style="background-color:beige;"</body>
    <head>
    <h1 style="text-align:center; color:blue; "<title>Forgot Password</title></h1>
</head>
<body>
    <p style=" text-align:center; font-size:100%; color: crimson; "<?php
    if ($success) {
        echo '<p>Thank you. We have sent you an email with further instructions on how to reset your password.</p>';
    } else {
        echo form_open();
        echo form_label('Email Address', 'email') . '<br />';
        echo form_input(array('name' => 'email', 'value' => set_value('email'))) . '<br />';
        echo form_error('email');
        echo form_submit(array('type' => 'submit', 'value' => 'Reset Password'));
        echo form_close();
    }
    ?></p>

</body>
<p style="border:2px solid dodgerblue; text-align:center;"<p><a href="<?php echo site_url('auth/login'); ?>">Login</a></p>
</html>
