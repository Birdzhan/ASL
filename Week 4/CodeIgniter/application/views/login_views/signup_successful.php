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
    <title>Create Accountt</title>
</head>
<body>
<div>
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <div type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </div>
<!--                <a class="navbar-brand" href="--><?php //echo base_url();?><!--">Login</a>-->
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
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
<div align="center" style="margin-top: 100px; font-size: 21px" class="alert alert-success">
    <strong>Your account has been created!</strong>
</div>
<h3 align="center">You can <?php echo anchor('login', 'Login Now.'); ?></h3>

<script src="http://localhost:8889/CodeIgniter/js/jquery.js"></script>
<script src="http://localhost:8889/CodeIgniter/js/bootstrap.min.js"></script>

</body>
</html>