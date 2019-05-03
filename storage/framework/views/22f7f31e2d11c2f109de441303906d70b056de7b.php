<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>TurnKw Maintenance Email</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body style="margin:0; padding:10px 0 0 0;" bgcolor="#F8F8F8">
    <table align="center" border="1" cellpadding="0" cellspacing="0" width="95%%">
        <tr>
            <td align="center">
                <table align="center" border="1" cellpadding="0" cellspacing="0" width="600" style="border-collapse: separate; border-spacing: 2px 5px; box-shadow: 1px 0 1px 1px #B8B8B8;" bgcolor="#FFFFFF">
                    <tr>
                        <td align="center" style="padding: 5px 5px 5px 5px;">

                            <img src="https://i.ibb.co/VBP84v2/logo.jpg" alt=" Logo" style="width:186px;border:0;" />
                        </td>
                    </tr>

                    <tr>
                        <td align="center">
                            <!-- Initial relevant banner image goes here under src-->
                            <p> <?php echo e(Carbon\Carbon::now()->toFormattedDateString()); ?> </p>
                        </td>
                    </tr>
                    <table border="1">
                        <tr>
                            <th>Type</th>
                            <th>Location</th>
                            <th>Branch Manager Name</th>
                            <th>Branch Manager Number</th>
                            <th>Working Hours</th>

                        </tr>
                        <tr>
                            <td align="center"><?php echo e($data['type']); ?></td>
                            <td align="center"><?php echo e($data['location']); ?></td>
                            <td align="center"><?php echo e($data['branch_name']); ?></td>
                            <td align="center"><?php echo e($data['branch_no']); ?></td>
                            <td align="center"><?php echo e($data['working_hours']); ?></td>

                        </tr>

                    </table>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>