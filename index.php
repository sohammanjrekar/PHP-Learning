
<?php
        // echo "hello";
        // variable are containers for storingg information
        // starts with a $
        // variables are case sensetive
        // cannot start with a number
        // must start with a letter or an underscore character
        // can only contain alphanumeric characters and underscores

        
        // $income=200;
        // echo "this guy is $name and his income is Rs $income<br>";
        // echo " $name is good boy"

        // php datatypes
        /*
        1) string
        string is sequeses of character
        2) integer
        3) float
        4) boolean
        5) object
        6) array
        7) null
        */
    //  1)string
        $name="harry";
        echo " $name is good boy";
        echo "<br>";
    //  2) integer
        echo 5+95;
        echo "<br>";
    //  3)float
        echo 1.2+6.3;
        echo "<br>";
    //  4) boolean
        $x=true;
        $y=false;
        echo $x;
        echo "<br>";
        echo $y;  //false show only blank line  hence use var_dump for show false
        echo "<br>";
        echo var_dump($x);
        echo "<br>";
        echo var_dump($y);
        echo "<br>";

    //  5) object-inbstances of classes
    // employee is a class ---> harry can be one object


    //6)  Array - use to store multiple values in a single varaible
    $friends= array("rohan","shubham","skills","larry");
    echo var_dump($friends);
    echo "<br>";
    echo $friends[0];
    echo "<br>";

    //null
    $name=NULL;
    echo var_dump($name);
    echo "<br>";

    // string
    $soham = "soham is good";
    echo strlen($soham);
    echo "<br>";
    echo "the length of my string is ".strlen($soham);
    echo "<br>";
    // . is used for join two string or anything
    echo "soham is "." good boy";
    echo "<br>";

    // count words in string
    echo str_word_count($soham);
    echo "<br>";

    // strrev is used to reverse string
    echo strrev($soham);
    echo "<br>";

    // srtpos used to serch word in string
    echo strpos($soham,"is");
    echo "<br>";

    // for replace any word in string
    echo str_replace("soham","rohan",$soham);
    echo "<br>";

    // repeat karo any srting many times
    echo str_repeat($soham ,3);
    echo "<br>";

    echo rtrim("  this is good    "); //trim right side
    echo "<br>";
    echo ltrim("   this is good    ");//trim left side 
    echo "<br>";

    // opearators  in php
    $a=45;
    $b=8;

    // 1) arithmetic operators
    echo $a+$b;
    echo "<br>";
    echo "for a+b the result is ".($a+$b)."<br>";
    echo "for a-b the result is ".($a-$b)."<br>";
    echo "for a*b the result is ".($a*$b)."<br>";
    echo "for a/b the result is ".($a/$b)."<br>";
    echo "for a%b the result is ".($a%$b)."<br>";

    // 2) assignment operators
    $x=$a;
    // $x+=6;
    // $x-=6;
    // $x*=6;
    // $x/=6;
    echo "for x the result is ".($x)."<br>";

    // 3) comparison operators
    $x=7;
    $y=9;
    echo "for x == y ,the result is ";
    echo var_dump($x==$y)."<br>";
    echo var_dump($x<$y)."<br>";
    echo var_dump($x>$y)."<br>";
    echo var_dump($x<>$y)."<br>";
    echo "<br>";
    // 4) logical operators
    $m=true;
    $n=false;
    echo var_dump($m and $n)."<br>"; //and
    echo var_dump($m or $n)."<br>";  //or
    echo var_dump(!$m)."<br>"; //not


    $a=50;
    $b=9;
    // if else contion
    if($a>70){
        echo "a is grater than 70";
            }
            elseif($a==50){
        echo "a is equal than 70";
            }
        else{
        echo "a is not greater than 70";
            }
    echo "<br>";



    ?>
