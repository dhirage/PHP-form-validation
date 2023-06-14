<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP practice</title>
</head>
<body>
    <div class="container">
        <h1>this is my first php file for practice</h1>
            <?php
                define('PI', 3.14);
                echo "Hello World and i am printing my hello world by using php"; //single line comment for helo world
                /*
                    this is multiline comment
                    for hello world
                */
                //variables in php

                $variable1 = 34;
                $variable2 = 45;
                echo $variable1;
                echo $variable2;
                echo "<br>";
                echo $variable1 + $variable2; 
                // operators in php
                //arithmetic operators
                // add subtract multiply divide are arithmetic operators
                echo "<br>";
                echo "the value of variable1 + variable2 is ";
                echo $variable1 + $variable2;
                echo "<br>";
                //assignment operators                
                $newVar = $variable1;
                echo "the value of new variable is ";
                echo $newVar;
                echo "<br>";
                echo $newVar +=1;
                echo "<br>";
                // assigns operators (= += -=)
                // comparison operators (==!= > < >= <=) helps in comparison of the values 
                echo "the value of 1==3 is ";
                echo var_dump(1==3);
                echo "<br>";
                echo "the value of 1!=3 is ";
                echo var_dump(1!=3);
                echo "<br>";
                echo "the value of 1>=3 is ";
                echo var_dump(1>=3);
                echo "<br>";
                echo "the value of 1<=3 is ";
                echo var_dump(1<=3);
                echo "<br>";
                // vardump is used to show true value by comparing
                //increment/decrement operators 
                echo $variable1++;
                echo "<br>";
                echo $variable1;
                echo "<br>";
                echo $variable1--;
                echo "<br>";
                echo $variable1;
                echo "<br>";
                echo --$variable1;
                echo "<br>";
                echo $variable1;
                echo "<br>";
                echo ++$variable1;
                echo "<br>";
                echo $variable1;
                echo "<br>";
                //logical operators and (&&) or (||) xor (not-!)
                //and
                $myVar = (true and true);
                echo var_dump ($myVar);
                echo "<br>";
                $myVar = (false and true);
                echo var_dump ($myVar);
                echo "<br>";
                $myVar = (false and false);
                echo var_dump ($myVar);
                echo "<br>";
                //or
                $myVar = (true or false);
                echo var_dump ($myVar);
                echo "<br>";
                $myVar = (false or true);
                echo var_dump ($myVar);
                echo "<br>";
                //xor
                $myVar = (true xor false);
                echo var_dump ($myVar);
                echo "<br>";
                $myVar = (false xor false);
                echo var_dump ($myVar);
                echo "<br>";
            ?>

            <?php
            //datatypes in php
            echo "Datatypes <br>";
            //1. string
            $var ="this is a string";
            echo var_dump($var);
            echo "<br>";
            //2. integer
            $var = 67;
            echo var_dump($var);
            echo "<br>";
            //3. float
            $var = 67.7;
            echo var_dump($var);
            echo "<br>";
            //4. boolean
            $var = true;
            echo var_dump($var);
            echo "<br>";
            //5. array
            $var = array(1,2,3,4,5);
            echo var_dump($var);
            echo "<br>";
            //6. object
            echo "<br>";
            class Car {
                public $color;
                public $model;
                public function __construct($color, $model) {
                  $this->color = $color;
                  $this->model = $model;
                }
                public function message() {
                  return "My car is a " . $this->color . " " . $this->model . "!";
                }
              }
              
              $myCar = new Car("black", "Volvo");
              echo $myCar -> message();
              echo "<br>";
              $myCar = new Car("red", "Toyota");
              echo $myCar -> message();
                echo "<br>";
                echo PI;
            ?>
    </div>
</body>
</html>