<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome Page</title>
    <link rel="stylesheet" href="styles.css" type="text/css">
</head>
<body>
    <h1>Welcome Page</h1>
    
    <p>Welcome,
    <?php
    
        echo $_GET["name"];
    ?>

    <p>Thank you for signing up</p>
    <p>Your phone number is:
    
    <?php
        echo $_GET["phone"];
    ?></p>
        