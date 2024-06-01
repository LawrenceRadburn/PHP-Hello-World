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
            echo "<h3>strlen()</h3>";
            echo "<p>PHP has a built-in function that determines the length of the string.</p>";
            echo "<p>Below we have: </p>";
            echo "<p>stringLength = strlen(string)</p>";
            echo "<p>Now, we know the amount of characters in the word string is equal to 6.</p>";
            echo "<p>Here is what the function returns when it is called with echo</p>";
            $stringLength = strlen("string");
            echo "<hr><p>$stringLength</p><hr>";

            echo "<h3>str_word_count()</h3>";
            echo "<p>Another built-in function that PHP posseses is str_word_count(). With it, you can retrieve the number of words in a string</p>";
            echo "<p>For example, say we have the string, 'Hello World'. We know there are two words in the string 'Hello World'.</p>";
            echo "<p>Thus, our function will look as follow: </p>";
            echo "<p> strWordCount = str_word_count('Hello World')</p>";
            $strWordCount = str_word_count("Hello World");
            echo "<hr><p>$strWordCount</p><hr>";  
        ?>
    </body>
</html>