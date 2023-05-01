<?php
session_start();
echo session_id();
if (isset($_SESSION['counter'])) {
    # code...
    $_SESSION['counter']++;
} else {
    $_SESSION['counter'] = 1;
}
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    You have Visited page <?php echo $_SESSION['counter'] ?> time
</body>

</html>