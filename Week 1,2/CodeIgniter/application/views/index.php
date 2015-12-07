<html>
<head>
    <link rel="stylesheet" href="http://localhost:8889/CodeIgniter/css/style.css " type="text/css" charset="utf-8">

</head>
<body>
<h2 align="center" style="text-align: center">Employee List</h2>
<button id="addemp"><a href="<?php echo site_url('employee/add') ?>">Add New Employee</a></button><br><br>
    <div>
    <table class="results">
       <tr align="center">
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
</body>
</html>
