<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>

<?php
    $section = $_GET['section'] ?? 'home';

    if($section == 'about-us'){

        include 'controller/aboutUsPage.php';
    }else if($section == 'contact-us'){

        include 'controller/contactUsPage.php';
    }else{

        include 'controller/homePage.php';
    }

?>

</body>
</html>