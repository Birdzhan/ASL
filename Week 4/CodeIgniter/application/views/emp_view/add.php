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
    <title>Add new</title>
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
<h2 id="addnew">Add New Employee</h2>
<form id="add" method='post' action='<?php echo site_url('employee/save'); ?>'>
    <table>
        <tr>
            <td>Name</td>
            <td class="field"><input type="text" name="txtname"/></td>
        </tr>
        <tr>
            <td>Department</td>
            <td class="field"><input type="text" name="txtdep"/></td>
        </tr>
        <tr>
            <td>Location</td>
            <td class="field"><input type="text" name="txtloc"/></td>
        </tr>
    </table><br><br>
            <div class="addbtn"><input type="submit" value="Save"/></div>
</form>
<footer class="footer">
</footer>

<script src="http://localhost:8889/CodeIgniter/js/jquery.js"></script>
<script src="http://localhost:8889/CodeIgniter/js/bootstrap.min.js"></script>

</body>
</div>
</html>
