<html>
<head>
    <link rel="stylesheet" href="http://localhost:8889/CodeIgniter/css/style.css " type="text/css" charset="utf-8">

</head>
<body>
<h2 align="center">Add New Employee</h2>
<form method='post' action='<?php echo site_url('employee/save'); ?>'>
    <table class="add" border="5" cellspacing="3" cellpadding="2" width="250" align="center">
        <tr>
            <td>Name</td>
            <td><input type="text" name="txtname"/></td>
        </tr>
        <tr>
            <td>Department</td>
            <td><input type="text" name="txtdep"/></td>
        </tr>
        <tr>
            <td>Location</td>
            <td><input type="text" name="txtloc"/></td>
        </tr>
    </table>
            <button class="addbtn"><input type="submit" value="Save"/></button>

</form>
</body>
</html>