
<h1 style="margin-top: 10%">Create Account</h1>
<div id="createacc">
    <fieldset id="field1">
        <legend>Personal Information</legend>

        <?php
            echo form_open('login/create_member');
            echo form_input('first_name', set_value('first_name', 'First Name'));
            echo form_input('last_name', set_value('last_name', 'Last Name'));
            echo form_input('email', set_value('email', 'Email Address'));
        ?>
    </fieldset>
    <fieldset id="field2">
        <legend>Login Info</legend>

        <?php

            echo form_input('username', set_value('username', 'Username'));
            echo form_input('password', set_value('password', 'Password'));
            echo form_input('password_confirm', set_value('password_confirm', 'Password Confirm'));
            echo form_submit('submit', 'Create Account');
        ?>

        <?php echo validation_errors('<p class="error">'); ?>

        <h3 style="text-align: center"> <?php echo anchor('login', 'Cancel'); ?></h3>

    </fieldset>
</div>