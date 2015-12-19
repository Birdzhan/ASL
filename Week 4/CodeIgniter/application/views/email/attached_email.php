<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="http://localhost:8889/CodeIgniter/css/style.css " type="text/css" charset="utf-8">
    <link href="http://localhost:8889/CodeIgniter/css/bootstrap.min.css" rel="stylesheet">
    <title>Email</title>
</head>
<body>
<div>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <div type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </div>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="http://localhost:8889/CodeIgniter/index.php/site/members_area">Home</a>
                    </li>
                    <li>
                        <a href="http://localhost:8889/CodeIgniter/index.php/employee">Employee list</a>
                    </li>
                    <li>
                        <a href="http://localhost:8889/CodeIgniter/index.php/email">Email</a>
                    </li>
                    <li>
                        <a href="http://localhost:8889/CodeIgniter/index.php/mycal/display/">Calendar</a>
                    </li>
                    <li style="padding-left: 600px">
                        <a href="http://localhost:8889/CodeIgniter/index.php/gallery">Gallery</a>
                    </li>
                    <li style="padding-left: 5px">
                        <a href="http://localhost:8889/CodeIgniter/">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
    <div id="attached_email">

        <?php echo form_open('email/send'); ?>

        <?php $name_data = array(
            'name' => 'name',
            'id' => 'name',
            'value' => set_value('name')
        );
        ?>
        <p><label for="name">Name: </label><?php echo form_input($name_data); ?></p>
        <p><label for="name">Email Address: </label><input type="text" name="email" id="email" value="<?php echo set_value('email'); ?>"></p>

        <p><?php echo form_submit('submit', 'Submit'); ?></p>

        <?php echo form_close(); ?>

        <?php echo validation_errors('<p class="error"></p>'); ?>
    </div>
<footer class="footer">
</footer>

<script src="http://localhost:8889/CodeIgniter/js/jquery.js"></script>
<script src="http://localhost:8889/CodeIgniter/js/bootstrap.min.js"></script>

</body>
</html>
