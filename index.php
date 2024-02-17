<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php
        /*
        This
        is a 
        Multiline Comment
        */
    echo "PHP is a server scripting language, and a powerful tool for making dynamic and interactive Web pages. <br>";


    $a=123;
    $b=123;
    echo $a+$b;

    echo "\n";
    echo "<br>";

    ///if we add new line(\n) in body tag  without using <br> it will not add newline.
    
    

    $a=123;
    $A=123;
    echo $a+$A;

    echo "\n";
    echo "<br>";

    echo  "hello world <br>";


    $str1= "This is a String str1 <br>";
    echo $str1;
    echo str_word_count($str1);
    echo strrev($str1);
    echo strpos($str1 ,'String');
    echo str_replace('is','are',$str1);


    echo "<br>";
    echo "<br>";
    echo "<br>"; 


    //In PHP, a variable starts with the $ sign, followed by the name of the variable
    $x = 5;
    $y = "John";
    echo $x;
    echo "<br>";
    echo $y;

    //echo and print are more or less the same. They are both used to output data to the screen.
    // echo statement can be used with or without parentheses: echo or echo().
    echo "<h2>PHP is Fun!</h2>";
    echo "I'm about to learn PHP!<br>";
    echo "This ", "string ", "was ", "made ", "with multiple parameters.";

    //The print statement can be used with or without parentheses: print or print().
    print "<h2>PHP is Fun!</h2>";
    print "Hello world!<br>";
    print "I'm about to learn PHP!";


    //Strings in PHP are surrounded by either double quotation marks, or single quotation marks.
    echo "Hello";
    echo 'Hello';
    $x = "John";
    echo 'Hello $x';

    /* There are three main numeric types in PHP:
    Integer
    Float
    Number Strings
    In addition, PHP has two more data types used for numbers:

    Infinity
    NaN */
    $a = 5;
    $b = 5.34;
    $c = "25";
    var_dump($a);
    var_dump($b);
    var_dump($c);
    echo "<br>"; 
    //The pi() function returns the value of PI:
    echo(pi());

    echo "<br>"; 
    //The min() and max() functions can be used to find the lowest or highest value in a list of arguments:
    echo(min(0, 150, 30, 20, -8, -200));
    echo(max(0, 150, 30, 20, -8, -200));
    
    echo "<br>"; 
    //The abs() function returns the absolute (positive) value of a number:
    echo(abs(-6.7));


    //The if statement executes some code if one condition is true
    echo "<br>"; 
    echo "<br>"; 
    echo "<br>"; 


    $a = 50;
    $b = 10;
    if
    ($a == $b) {
    echo "1";
    } 
    elseif
    ($a > $b) {
    echo "2";
    } 
    else
    {
    echo "3";
    }


    //The switch statement is used to perform different actions based on different conditions.
        /* This is how it works:
        The expression is evaluated once
        The value of the expression is compared with the values of each case
        If there is a match, the associated block of code is executed
        The break keyword breaks out of the switch block
        The default code block is executed if there is no match*/
        echo "<br>"; 
        echo "<br>"; 
        echo "<br>"; 


    $favcolor = "white";

        switch ($favcolor) {
            case "red":
                echo "Your favorite color is red!";
                break;
            case "blue":
                echo "Your favorite color is blue!";
                break;
            case "green":
                echo "Your favorite color is green!";
                break;
            default:
                echo "Your favorite color is neither red, blue, nor green!";
        }

    //The real power of PHP comes from its functions.
    //PHP has more than 1000 built-in functions, and in addition you can create your own custom functions. 
    echo "<br>"; 
    echo "<br>"; 
    echo "<br>"; 
    echo "<br>"; 
    function bestfriend($fname) {
        echo " $fname is my close friend .<br>";
      }
      
      bestfriend("Aayush");
      bestfriend("Yashodhan");
      bestfriend("Vishvved");
      bestfriend("Sahil");
      bestfriend("Vinit");

?>
    

</body>
</html>