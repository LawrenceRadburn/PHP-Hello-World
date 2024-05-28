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

            echo "<h2>Variables</h2>";
            echo "Values can be declared inside of variables.";
            $myName = "Lawrence";
            echo " I've assigned my name to the variable, 'myName'. Below is an example of using a variable inside of a string.<br>";
            echo "Hello, my name is <strong>$myName.</strong><br>";
            echo "<br><strong>The var_dump Function</strong><br>";
            echo " The function var_dump() displays the inputted expression's type and value.<br>";
            echo "For example, we can use var_dump(myName) to display more information.<br><br>";
            echo var_dump($myName), "<hr>";

            echo "<h2>Assignment Operators</h2>";
            echo "Using assignment operators can save time when using arithmetic operators on operands<br>";
            echo "<h3>Operators</h3>";
            $x = 5;
            $y = 10;
            echo "Let x = 5", "<br><br>", "Let y = 10";
            echo "<h4>Addition</h4>";
            echo "Instead of writing x = x + y, we can use an assignment operator. <br>";
            echo "We'll write x += y, which simply means x = x + y.<br><br>";
            $addition_assignment = $x += $y;
            echo "x += y is:  ", $addition_assignment;
            echo "<br><br>The same syntax can be used for other arithmetic operations such as:<br><br>";
            echo "&#x2022 Subtraction<br>";
            echo "&#x2022 Multiplication<br>";
            echo "&#x2022 Division<br>";
            echo "&#x2022 Modulus/Remainder<br><hr>";

            echo "<h2>If Else Statements</h2>";
            echo "PHP supports if else statements";
            echo "<br><br>Here is an example:<br><br>";
            echo "a = 5<br><br>";
            echo "b = 5<br><br>";
            echo "if (a == b) {<br>";
            echo '&nbsp&nbsp&nbsp echo "Good Morning!";<br>';
            echo "}<br>";
            echo "else {<br>";
            echo '&nbsp&nbsp&nbsp echo "Good Night!";<br>';
            echo "}<br><br>";
            $a = 5;
            $b = 5;
            if ($a == $b) {
                echo "Good Morning!";
            }
        ?>
    </body>
</html>