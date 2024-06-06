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
        
        
        
       
        
        
        
        
    ?>
    
</body>

