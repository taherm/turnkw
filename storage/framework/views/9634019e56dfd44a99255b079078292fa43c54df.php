<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Automatic Email</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body style="margin:0; padding:10px 0 0 0;" bgcolor="#F8F8F8">
    <table align="center" border="1" cellpadding="0" cellspacing="0" width="95%%">
        <tr>
            <td align="center">
                <table align="center" border="1" cellpadding="0" cellspacing="0" width="600" style="border-collapse: separate; border-spacing: 2px 5px; box-shadow: 1px 0 1px 1px #B8B8B8;" bgcolor="#FFFFFF">
                    <tr>
                        <td align="center" style="padding: 5px 5px 5px 5px;">
                            <a href="http://url-goes-here" target="_blank">
                                <img src="<?php echo e(asset('uploads/logo.jpg')); ?>" alt=" Logo" style="width:186px;border:0;" />
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td align="center">
                            <!-- Initial relevant banner image goes here under src-->
                            <img src="%s" alt="Image Banner" style="display: block;border:0;" height="100%%" width="600" />
                        </td>
                    </tr>
                    <tr>
                        <td bgcolor="#ffffff" style="padding: 40px 30px 40px 30px;">
                            <table border="1" cellpadding="0" cellspacing="0" width="100%%">
                                <tr>
                                    <td style="padding: 10px 0 10px 0; font-family: Avenir, sans-serif; font-size: 16px;">
                                        <h1>TurnKw Maintenance Mail</h1>
                                    </td>

                                    <td style="padding: 10px 0 10px 0; font-family: Avenir, sans-serif; font-size: 16px;">
                                        <p>Type: <?php echo e($data['type']); ?></p>
                                    </td>

                                    <td style="padding: 10px 0 10px 0; font-family: Avenir, sans-serif; font-size: 16px;">
                                        <p>Location: <?php echo e($data['location']); ?></p>
                                    </td>

                                    <td style="padding: 10px 0 10px 0; font-family: Avenir, sans-serif; font-size: 16px;">
                                        <p>Branch Manager Name: <?php echo e($data['branch_name']); ?></p>
                                    </td>

                                    <td style="padding: 10px 0 10px 0; font-family: Avenir, sans-serif; font-size: 16px;">
                                        <p>Branch Manager Number: <?php echo e($data['branch_no']); ?></p>

                                    </td>
                                    <td style="padding: 10px 0 10px 0; font-family: Avenir, sans-serif; font-size: 16px;">
                                        <p>Working Hours: <?php echo e($data['working_hours']); ?></p>

                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>


                </table>
            </td>
        </tr>
    </table>
</body>

</html>