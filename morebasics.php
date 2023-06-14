<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP more basics</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .container{
            max-width: 80%;
            border: 2px solid red;
            background-color: rgb(241, 241, 241);
            text-align: center;
            margin-left: 180px;
            margin-top: 4px;

        }
    </style>
</head>
<body>
    <div class="container">
        <?php

        //conditional statements if-else explained

        echo "<h1>this is a new line</h1>";
        echo "<br>";
        ?>
        <?php
        echo "<h5>I am a student. Can i got to the party?</h5>";
        echo "<br>";
        $age =10;
        if($age>18){
            echo "you can go to the party";
        }
        else if($age==10){
            echo "you are too young for the party";
        }
        else{
            echo "you cannot go to the party";
        }
        echo "<br>";
        //arrays in  php
        $languages =array("python","php","c++", "nodejs");
        echo $languages[0];
        echo"<br>";
        echo count($languages);
        echo"<br>";

        //loops in php
        $a=0;
         while ($a<=10){
                echo "<br>the value of a is: ";
                echo $a;
                $a++;
         }
            echo "<br>";
        //iterating arrays in php using while loops
        $a=0;
         while ($a< count($languages)){
                echo "<br>the value of languages is: ";
                echo $languages[$a];
                $a++;
         }
            echo "<br>";

        //do while loop
        $a=0;
        do{
            echo "<br>the value of a is: ";
            echo $a;
            $a++;
        }while($a<=10);
        //another do while
        echo "<br>";
        $a=0;
        do{
            echo "<br>the value of languages is: ";
            echo $languages[$a];
            $a++;
        }while($a<count($languages));
        echo "<br>";
        //for loop
        for($a=0;$a<=10;$a++){
            echo "<br>the value of a for loop is: ";
            echo $a;
        }
        echo "<br>";
        //for each loop
        foreach($languages as $value){
            echo "<br>the value of languages for each loop is: ";
            echo $value;
        }
        echo "<br>";

        //functions in php

        function print5(){
            echo "<br>five";
        }
        print5();
        print5();
        print5();
        echo"<br>";

        function print_number($number){
            echo "<br>your number is ";
            echo $number;
        }
        print_number(45);
        print_number(455);
        print_number(450);
        echo"<br>";

        //strings in php

        $str = "this is a string evolved";
        echo $str;
        echo"<br>";
        $lenn = strlen($str);
        echo "the length of this string is " .$lenn . " thank you <br>" ;
        // echo $lenn;
        echo"<br>";
        //word counts
        echo "the number of words in this string is " .str_word_count($str) . " thank you <br>" ;
        echo"<br>";
        //reversing a string
        echo "the reverse of this string is " .strrev($str) . " thank you <br>" ;
        echo"<br>";
        //searching for a specific text within a string
        echo "the position of the word string in this string is " .strpos($str,"evolved") . " thank you <br>" ;
        echo"<br>";
        //replacing a specific text within a string
        echo "the replaced string is " .str_replace("string","string but",$str) . " thank you <br>" ;
        echo"<br>";
        //constants in php
        //define(name, value, case-insensitive)
        define('PI',3.14);
        echo PI;
        echo"<br>";
        //using constants in classes   
        class myclass{
            const PI = 3.14;
        }
        echo myclass::PI;
        echo"<br>";

        ?>
        
    </div>
</body>
</html>