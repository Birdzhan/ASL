<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost:8889/CodeIgniter/css/style.css " type="text/css" charset="utf-8">
    <link href="http://localhost:8889/CodeIgniter/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <title>Employee List</title>
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
    <h2 id="list">Employee List</h2>
    <div id="addemp"><a href="<?php echo site_url('employee/add') ?>">Add New Employee</a></div><br><br>
        <div>
        <table class="results">
           <tr>
               <th>ID</th>
               <th>Name</th>
               <th>Department</th>
               <th>Location</th>
               <th>Action</th>
           </tr>
            <tbody>
               <?php
                $i=1;
                    foreach ($row as $r) {
                        echo "<tr>
                            <td>$i</td>
                            <td>$r->name</td>
                            <td>$r->dep</td>
                            <td>$r->loc</td>
                            <td align='center'>
                            <a href='".site_url('employee/edit')."/$r->employee_id'>Update</a> | <a href='".site_url('employee/delete')."/$r->employee_id'>Delete</a>
                            </td>
                        </tr>";
                        $i++;
                    }
               ?>
            </tbody>
        </table>
        </div>
    <footer class="footer">
    </footer>

    <script src="http://localhost:8889/CodeIgniter/js/jquery.js"></script>
    <script src="http://localhost:8889/CodeIgniter/js/bootstrap.min.js"></script>

</body>
</html>

