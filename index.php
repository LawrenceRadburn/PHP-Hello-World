<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Hello World</title>
    </head>
    <body>
        <h1>PHP Basics</h1>
        <?php
            echo "<strong>Echo</strong><br>";
            echo "Hello World!<br>"; // echo has no return value
            echo "This line was writted using PHP's language construct called echo.<br>";
            print "<br><strong>Print</strong><br>";
            print "Hello World!<br>";
            print "This line was written using PHP's language construct called print.<hr>";
            echo "<h2><strong>Variables</strong></h2>";
            echo "Values can be declared inside of variables.";
            $myName = "Lawrence";
            echo " I've assigned my name to the variable, 'myName'. Below is an example of using a variable inside of a string.<br>";
            echo "Hello, my name is <strong>$myName.</strong><br>";
            echo "<br><strong>The var_dump Function</strong><br>";
            echo " The function var_dump() displays the inputted expression's type and value.<br>";
            echo "For example, we can use var_dump(myName) to display more information.<br><br>";
            echo var_dump($myName);
        ?>
    </body>
</html>