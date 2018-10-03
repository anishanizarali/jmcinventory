<html>
    <body style="background-color:beige;"</body>
    <head>
    <h1 style="text-align:center; color:blue; "<title>Login</title></h1>

</head>
<body>

    <p style=" text-align:center; font-size:100%; color: crimson; "<?php
    if ($error)
        echo '<p class="error">' . $error . '</p>';
    echo form_open();
    echo form_label('Email Address', 'email') . '<br />';
    echo form_input(array('name' => 'email', 'value' => set_value('email'))) . '<br />';
    echo form_error('email');
    echo form_label('Password', 'password') . '<br />';
    echo form_password(array('name' => 'password', 'value' => set_value('password'))) . '<br />';
    echo form_error('password');
    echo form_label('Is Mobile?', 'ismobile') . '<br />';
    echo form_checkbox(array('name' => 'ismobile'), 1) . '<br />';
    echo form_submit(array('type' => 'submit', 'value' => 'Login'));
    echo form_close();
    ?></p>  

    <p style="border:2px solid dodgerblue; text-align:center;"><a href="<?php echo site_url('auth/signup'); ?>
                                                                  ">Sign Up</a> | <a href="<?php echo site_url('auth/forgot'); ?>"
                                                                  >Forgot Password?</a></p>

</body>
</html>
