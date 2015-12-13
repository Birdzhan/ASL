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
    <title>Update</title>
</head>
<body>
    <div id="content" style="height:790px">
        <div>
            <!-- Navigation -->
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
                                <a href="http://localhost:8889/CodeIgniter/index.php/employee">Employee list</a>
                            </li>
                            <li>
                                <a href="http://localhost:8889/CodeIgniter/index.php/email">Email</a>
                            </li>
                            <li>
                                <a href="#">Calendar</a>
                            </li>
                            <li style="padding-left: 650px">
                                <a href="#">Language</a>
                            </li>
                            <li style="padding-left: 50px">
                                <a href="http://localhost:8889/CodeIgniter/">Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <h2 align="center" style="padding-top: 50px">Update Employee</h2>
        <form method='post' action='<?php echo site_url('employee/save_update'); ?>'>
            <table  align="center">
                <tr>
                    <td>Employee ID :</td>
                    <td><input type="text" name="txtemployee_id" value="<?php echo $r->employee_id ?>"/></td>
                </tr>
                <tr>
                    <td>First Name :</td>
                    <td><input type="text" name="txtname" value="<?php echo $r->name ?>"/></td>
                </tr>
                <tr>
                    <td>Department :</td>
                    <td><input type="text" name="txtdep" value="<?php echo $r->dep ?>"/></td>
                </tr>
                <tr>
                    <td>Location :</td>
                    <td><input type="text" name="txtloc" value="<?php echo $r->loc ?>"/></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Save"/></td>
                </tr>
            </table>
        </form>
    </div>
<script src="http://localhost:8889/CodeIgniter/js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="http://localhost:8889/CodeIgniter/js/bootstrap.min.js"></script>

</body>

</html>