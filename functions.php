<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Functions in PHP</title>
        <link rel="stylesheet" href="styles.css" type="text/css">
    </head>
    <body>
        <h1>Functions in PHP</h1>
        <?php
            echo "<p>Functions are named blocks of code that are design to create tasks or operations within the function. This can range from arithemtic, logic, returning values and more.</p>";
            echo "<h2>PHP's Built-in Functions</h2>";
            echo "<p>PHP has a built-in function that determines the length of the string.</p>";
            echo "<p>Below we have: </p>";
            echo "<p>stringLength = strlen(string)</p>";
            echo "<p>Now, we know the amount of characters in the word string is equal to 6.</p>";
            echo "<p>Here is what the function returns when it is called with echo</p><hr>";
            $stringLength = strlen("string");
            echo "<p>$stringLength</p><hr>";
        ?>
    </body>
</html>