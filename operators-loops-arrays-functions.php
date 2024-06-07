<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Operators, Loops, Arrays and Functions</title>
    <link rel="stylesheet" href="styles.css" type="text/css">
</head>
<body>
    <h1>Operators, Loops, Array and Functions</h1>
    
    <p>Our variables include: </p>
    <p>$number1 = 1;</p>
    <p>$number2 = 2;</p>
    <p>$number3 = $number1 + $number2</p><hr>
    
    <?php
    
        $number1 = 1;
        $number2 = 2;
        $name = "Lawrence Radburn";
        $city = "Ottawa";
        $college = "Algonquin College";
        $noProblem = "<p>Output: <br><mark>True. This if statement is working as intended.</mark></p>";
        $noProblemStatement = '"true and this if statement is working as intended."';
        $problem = "<p>Output: <br><mark>False. There is a problem with this if statement.</mark></p>";
        $problemStatement = '"condition is not true and there is a problem with this if statement."';
        
        
        echo "<h2>Logical Operators</h2><br>";
        
        echo "<h3>Using the and Operator</h3>";
        echo "<p>If the variable, number1 equals 1 and the variable number2 equals 2, then output ${noProblemStatement}</p>";
        echo "<p>Otherwise, output ${problemStatement}</p>";
        if ($number1 == 1 and $number2 == 2) {
            echo $noProblem;
        }
        else {
            echo $problem;
        }
        
        
        echo "<hr><h3>Using the OR Operator</h3>";
        echo "<p>If the variable, number1 equals 1, <bold>or</bold> if the variable number2 equals 2, then output ${noProblemStatement}</p>";
        echo "Otherwise, output, ${problemStatement}";
        if ($number1 == 1 OR $number2 == 2) {
            echo $noProblem;
        }
        else {
            echo $problem;
        }
        
        
        echo "<hr><h3>Using the XOR Operator</h3>";
        echo "<p>The XOR operator returns true if one or the other is true but not both. Therefore, if the variable, number1 does not equal 3, and if the variable number2 equals 2, then output ${noProblemStatement}</p>";
        echo "Otherwise, output, ${problemStatement}";
        echo "<p>This set of conditions returns true because only one condition is true, not both.</p>";
        if ($number1 == 3 XOR $number2 == 2) {
            echo $noProblem;
        }
        else {
            echo $problem;
        }
        
        
        echo "<hr><h3>Using the && Operator</h3>";
        echo "<p>The && operator has the same function as the 'and' operator. Thus, if the variable, number1 equals 1 and the variable number2 equals 2, then output ${noProblemStatement}</p>";
        echo "<p>Otherwise, output ${problemStatement}</p>";
        if ($number1 == 1 && $number2 == 2) {
            echo $noProblem;
        }
        else {
            echo $problem;
        }
        
        
        echo "<hr><h3>Using the || Operator</h3>";
        echo "<p>The || operator has the same function as the OR operator. Thus, If the variable, number1 equals 1, <bold>or</bold> if the variable number2 equals 2, then output ${noProblemStatement}</p>";
        echo "Otherwise, output, ${problemStatement}";
        if ($number1 == 1 OR $number2 == 2) {
            echo $noProblem;
        }
        else {
            echo $problem;
        }
        
        
        echo "<hr><h3>Using the ! Operator</h3>";
        echo "<p>The ! operator can also be referred to as the NOT operator. It returns true if the condition is NOT true.</p>";
        echo "<p>If the variable, number1 does not equal 0, then output ${noProblemStatement}</p>";
        echo "Otherwise, output, ${problemStatement}";
        if ($number1 !== 0) {
            echo $noProblem;
        }
        else {
            echo $problem;
        }
        
        echo "<h2><hr>Concatenation Operators</h2>";
        echo "<h3>Concatention</h3>";
        echo "<p>For the use of this section, I created the following variables:</p>";
        echo '<p>$name = "Lawrence Radburn"</p>';
        echo '<p>$city = "Ottawa"</p>';
        echo '<p>$college = "Algonquin College"</p>';
        echo "<p>Now, let's concatenate them all together into one sentence</p>";
        echo '<p>The echo statement will look like this: "Hello, my name is " . $name . "I live in " . $city . "and study at" $college . "."</p>';
        echo "<p>Result:</p>";
        echo "<p><mark>Hello, my name is " . $name . " and I live in " . $city . " and study at " . $college . ".</mark></p>";
        
        echo "<h3><br>Concatenation Assignment</h3>";
        echo "<p>We can use the concatenation assignment to assign one string to another.<p>";
        echo "<p>Let's say we had an introduction string, and a personal string.<p>";
        echo "<p>The introduction string includes one part of the highlighted string above</p>";
        echo '<p>$introduction = "Hello, my name is Lawrence from Ottawa."</p>';
        echo '<p>$personal = " I study at Algonquin College."</p>';
        echo "<p>We have to combine these the second string onto the fist using the concatenation assignment .=</p>";
        echo "<p>Because the frist string variable has been altered, we have to echo \$introduction to see the updated string.</p>";
        echo "<p>Here's how the result will look:</p>";
        
        $introduction = "Hello, my name is Lawrence from Ottawa. ";
        $personal = " I study at Algonquin College.";
        $introduction .= $personal;
        echo "<p><mark>$introduction</mark></p>";
        
        
        echo "<h2><hr>Switch Case Conditions</h2>";
        echo "<p>Let's assume the following</p>";
        echo "<p>Score 90-100 = Grade: A</p>";
        echo "<p>Score 80-89 = Grade: B</p>";
        echo "<p>Score 70-79 = Grade: C</p>";
        echo "<p>Score 60-69 = Grade: D</p>";
        echo "<p>Score Less than 60 = Grade: F</p>";
        
        echo "<h3>If Else If Statements</h3>";
        echo "<p>We can use if and else if statement to return and perform logic if conditions are true or not true. Defaults can be incorporated as well.</p>";
        echo "Before we run our if statement based on scores, we can initialize the value of score. Then, when we run our logic, we can confirm whether our if statement was created properly.</p>";
        echo "<p>Let's inititialize \$score with the value of 92</p>";
        echo "<p>\$score = 92</p>";
        
        $score = 92;
        
        echo "<p>We'll run our if statement with else if statements and return the output</p>:";
        echo "<p>running if statement....</p><br>";
        
        if ($score >=90) {
            $grade = "A";
            echo "<p><mark>Congratulations, your score of $score has earned you an $grade.</mark></p>";
        }
        else if ($score >= 80 && $score <= 89) {
            $grade = "B";
            echo "Congrats, your score of $score has earned you a $grade.";
        }
        else if ($score >= 70 && $score <= 79) {
            $grade = "C";
            echo "Good work. Your score of $score has earned you a $grade.";
        }
        else if ($score >=60 && $score <= 69) {
            $grade = "D";
            echo "Nice try. Your score of $score has earned you a $grade.";
        }
        else if ($score < 60) {
            $grade = "F";
            echo "Unfortunately, your score of $score has earned you an $grade.";
        }
        
        
        echo "<h3>Case Switch Statements</h3>";
        echo "<p>When several conditions are present, the switch statement can return conditional statements faster and help ensure your code looks clean.";
        echo "<p>The syntax for the switch statement is: </p>";
        
        echo '$expr = "Gold"';
        echo "switch (\$expr) {";
        echo 'case "Bronze":';
        echo '<br>echo "Not too shabby..."';
        echo "<br>break;";
        echo '<br>case "Silver":';
        echo '<br>echo "What a find!"';
        echo "<br>break;";
        echo '<br>case "Gold":';
        echo '<br>echo "We\'ve struck Gold!"';
        echo "<br>break;";
         
        echo "<p>running switch statement...</p>";
        
        switch ($score) {
            case $score >=90:
                $grade = "A";
                echo "<p><mark>Congratulations, your score of $score has earned you an $grade.</mark></p>";
                break;
            case $score >= 80 && $score <= 89:
                $grade = "B";
                echo "Congrats, your score of $score has earned you a $grade.";
                break;
            case $score >= 70 && $score <= 79:
                $grade = "C";
                echo "Good work. Your score of $score has earned you a $grade.";
                break;
            case $score >=60 && $score <= 69:
                $grade = "D";
                echo "Nice try. Your score of $score has earned you a $grade.";
                break;
            case $score < 60:
                $grade = "F";
                echo "Unfortunately, your score of $score has earned you an $grade.";
                break;
        }       
       
        
        
        echo "<h2><hr>Loops</h2>";
        echo "<h3While Loops</h3>";
        
        echo "<h3>While Loops</h3>";
        echo "<p>While Loops are a useful way to looping through conditions until the condition is met</p>";
        
        echo "<p>The syntax for the while loop is:</p>";
        echo 'do {<br>';
        echo '$beginning += 1;<br>';
        echo 'echo "$beginning"';
        echo "<br>}";
        echo '<br>while ($beginning < $ending)<br>';
        
        
        $beginning = 0;
        $ending = 10;
        
        echo "<p>running loop...</p>";
        
        do {
            $beginning += 1;
            echo "<br>$beginning";   
        }
        while ($beginning < $ending);
        
        
        echo "<h3>Do While Loops</h3>";
        echo "<p>Do While Loops are another invaluable tool for looping through conditions until the condition is met</p>";
        echo "<p>Importantly, the do while statement will return one value regardless of whether it is true or not.</p>";
        
        echo "<p>The syntax for the do while loop is:</p>";
        echo 'do {<br>';
        echo '$begin += 1;<br>';
        echo 'echo "$begin"';
        echo "<br>}";
        echo '<br>while ($begin < $finish)<br>';
        
        
        $begin = 0;
        $finish = 10;
        
        echo "<p>running loop...</p>";
        
        do {
            $begin += 1;
            echo "<br>$begin";   
        }
        while ($begin < $finish);
        
        
        echo "<h3>For Loops</h3>";
        echo "<p>Loops are an incredible tool to iterate through arrays or increment values as needed.<p>";
        echo "<p>In this example, I've initialized two variables with the values of 0 and 10.</p>";
        echo "<p>I will increment 0 until it has reached 10</p>";
        
        echo "<p>In this example, the variables are:</p>";
        echo '<p>$start = 0;</p>';
        echo '<p>$end = 10;</p>';
        
        echo "</p>The syntax for the for loop is:</p>";
        echo 'for ($start; $start < $end; $start++ {';
        echo '<br>    echo "$start"';
        echo "<br>}";
        
        $start = 0;
        $end = 10;
        
        echo "<p>running loop...</p>";
        
        for ($start; $start <= $end; $start++) {
            echo "<br>$start";
        }
        
        
        echo "<h2><hr>Arrays</h2>";
        echo "<h3>Indexed Arrays</h3>";
        echo "<p>Index arrays are ordered values that are assigned a 0 based value-based index. Consequently, the first item in an indexed array will be given the value of 0, and each subsequent element's index value will be incremented.</p>";
        echo "<p>The sytax for the indexed array of the Canadian provices is shown below</p>";
        
        echo '<p>$provinces = array)"Alberta, "British Columbia, "etc.");</p>';
        echo "<p>The syntax for our for each statement that loops through each index array element is as follows:</p>";
        echo 'for each ($provinces as $x) {<br>';
        echo 'echo "$x ";';
        echo "<br>}";
        echo "<br>";
        
        echo "<p>running foreach loop...</p>";
        
        $provinces = array("Alberta", "British Columbia", "Manitoba", "New Brunswick", "Newfoundland and Labrador", "Nova Scotia", "Ontario", "Prince Edward Island", "Quebec", "Saskatchewan");
        
        foreach ($provinces as $x) {
            echo "$x <br>";
        }
        
        echo "<h3>Array Functions</h3>";
        echo "<h4>count() function</h4>";
        echo "<p>By using the count() function on an array, we can return the number of elements inside the array";
        
        echo "The number of elements in our array is: ";
        echo count($provinces);
        echo "</p>";
        
        echo "<h3>Associative Array</h3>";
        echo "<p>Associative arrays typically contain various elements with key values pairs associated with them.</p>";
        echo "<p>For example, name=>Lawrence, lastName=>Radburn. Additionally, we can access these elements with their key name</p>";
        
        echo "<p>running foreach loop on associative array...</p>";
        
        $ter = array("Northwest Territories"=>1143793, "Yukon"=>474712, "Nunavut"=>1877778);
        foreach ($ter as $y => $z) {
            echo "$y: $z sq. km<br>";
        }
        
        echo "<h3>2-D Array</h3>";
        echo "<p>2-D Arrays have at least one additional array nested inside the outer array. This is particularily useful when there are subsets of information.</p>";
        
        $terAreaPop = array(
            array("Northwest Territories", 1143793, 41070),
            array("Yukon", 474712, 40232),
            array("Nunavut", 1877778, 36858)
        );
        for ($row = 0; $row < count($terAreaPop); $row++) {
            echo "<p><b>Province</b></p>";
            echo "<ul>";
                for ($col = 0; $col < count($terAreaPop[$row]); $col++) {
                echo "<li>".$terAreaPop[$row][$col]."</li>";
                }
            echo "</ul>";
        }
        
        
        echo "<h3>PHP's Built-in String Functions</h3>";
        echo "<p>PHP has several built-in string functions. We will go through nine of them</p>";
        echo '<p>First, we will use the following string: $string = "Life is good." ';
        
        echo '<p>$string = "Life is good."</p>';
        
        echo "<h4><hr>strlen()</h4>";
        echo "<p>strlen() returns the length of the string.</p>";
       
        
        $string = "Life is good.";
        $string2 = "Life is bad.";
        
        echo strlen($string);
        
        echo "<h4><hr>str_word_count()</h4>";
        echo "<p>str_word_count() counts the words in a string.</p>";
        
        echo str_word_count($string);
        
        echo "<h4><hr>strrev()</h4>";
        echo "<p>strrev() reverses a string.</p>";
        
        echo strrev($string);
        
        echo "<h4><hr>strpos()</h4>";
        echo "<p>strpo() searches for a text within a string.</p>";
        
        echo strpos($string, "good");
        
        echo "<h4><hr>str_replace()</h4>";
        echo "<p>str_replace() replaces text within a string.</p>";
        
        echo str_replace("good", "bad", $string);
        
        echo "<h4><hr>strtolower()</h4>";
        echo "<p>strtolower converts all characters to lowercase.</p>";
        
        echo strtolower($string);
        
        echo "<h4><hr>strtoupper()</h4>";
        echo "<p>strtoupper converts all characters to uppercase.</p>";
        
        echo strtoupper($string);
        
        echo "<h4><hr>ucfirst()</h4>";
        echo "<p>ucfirst converts the first character of a string to uppercase.</p>";
        
        echo ucfirst($string);
        
        echo "<h4><hr>ucwords()</h4>";
        echo "<p>ucwords converts the first character of each word in a string to uppercase.</p>";
        
        echo ucwords($string);
        
        echo "<h4><hr>strcmp()</h4>";
        echo "<p>strcmp compares two strings (case-sensitive)</p>";
        echo "<p>This function will return 1 if the fist string's value is less than the second string. Conversely, the function will return -1 if the second string's value is greater than the first</p>";
        echo "<p>If the value of the two strings are equal, the function will return 0</p>";
        
        echo strcmp($string, $string2);
        
        echo "<h3>Grades Function</h3>";
        echo "<p>Functions are used in PHP to create reusable blocks of code</p>";
        echo "<p>Below, I've created a function that will accept a value as an arugment and return a grade based on the value.</p>";
        echo "<p>Because it is a function, I can call the logic using the function name in other parts of the code</p>";
        echo "<p>Having dynamic code makes writting complex apps faster and less prone to error than hard coding</p>";
                   
        echo "<hr><p>initialGrades(85)</p>";
        echo "<p>Running function...</p>";
        
        function initialGrades($score) {
            if ($score >=90) {
                $grade = "A";
                echo "<p>Congratulations, your score of $score has earned you an $grade.</p>";
            }
            else if ($score >= 80 && $score <= 89) {
                $grade = "B";
                echo "<p><mark>Congrats, your score of $score has earned you a $grade.</mark></p>";
            }
            else if ($score >= 70 && $score <= 79) {
                $grade = "C";
                echo "Good work. Your score of $score has earned you a $grade.";
            }
            else if ($score >=60 && $score <= 69) {
                $grade = "D";
                echo "Nice try. Your score of $score has earned you a $grade.";
            }
            else if ($score < 60) {
                $grade = "F";
                echo "Unfortunately, your score of $score has earned you an $grade.";
                }       
            }
        echo initialGrades(85);
    ?>
    
</body>

