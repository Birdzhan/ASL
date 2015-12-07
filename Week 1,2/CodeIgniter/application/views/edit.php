<html>
<head>

</head>
<body>
<h2 align="center">Update Employee</h2>
<form method='post' action='<?php echo site_url('employee/save_update'); ?>'>
    <table border="5" cellspacing="5" cellpadding="2" width="250" align="center">
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
</body>
</html>