<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>TurnKw Careers Mail</h1>
    <p>From: <?php echo e($data['email']); ?></p>
    <p>Name: <?php echo e($data['name']); ?></p>
    <p>Position: <?php echo e($data['position']); ?></p>
    <p>Message: <?php echo e($data['message']); ?></p>
</body>

</html>