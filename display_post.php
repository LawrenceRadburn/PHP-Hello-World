<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Display Post</title>
    <link rel="stylesheet" href="styles.css" type="text/css">
</head>
<body>
    <h1>Display Post Page</h1>
    
    <p>Greetings,
    <?php
    
        echo $_POST["name"];
    ?>

    <p>Thank you for signing up</p>
    <p>Your phone number is:
    
    <?php
        echo $_POST["phone"];
    ?></p>
        