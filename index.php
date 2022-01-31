
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

// $age = 5;
    // // switch case 
    // switch ($age) {
    //   case 12:
    //     echo "you are 12 ";
    //     break;

    //   case 48:
    //     echo "you are 48 ";
    //     break;

    //   case 5:
    //     echo "you are 5 ";
    //     break;

    //   default:
    //     echo "you are none ";
    //     break;
    // }
    // echo "<br>";
    // loops in php
    // 1) while loops
    // $i = 0;
    // while ($i < 5) {
    //   echo $i + 1;
    //   echo "<br>";
    //   $i++;
    // }

    // 2) For loops
    // for($i=1;$i<6;$i++)
    // {
    //   echo "the number is $i <br>";
    // }

    // 3) do while loop (minimun once runs)
    // $i=60;
    // do{
    //   echo "the number is $i <br>";
    //   $i++;
    // }while($i<6);

    // 4) for each loop
    // $arr = array("banana", "haric", "bread");
    // foreach ($arr as $i) {
    //   echo "$i <br>";
    // }



    //  functions
    // function processMarks($marksarr){
    //   $sum=0;
    //   foreach ($marksarr as $k){
    //     $sum = $sum + $k;
    //   } 
    //   return $sum;
    // }
    // $sohams=[51,75,48,12];
    // $summark = processMarks($sohams);
    // echo $summark;


    // echo "welcome to world of dates <br>";
    // $d = date("d S l D Y , g:i A");
    // echo "Todays date is $d <br>";

    // prints something like :Monday 8th of August 2005 03:12:46 PM
    // echo date("l js \of F Y h:i:s A");

    // prints : july 1,2000 is on a saturday
    // echo "<br> july 1,2000 is on a ".date("l" ,mktime(0,0,0,7,1,2000));

  
  // $arr =array('this','that','what');
  // echo $arr[0];
  // echo $arr[1];
  // echo $arr[2];

// associative arrays
// $favcol=array(
// 'soham'=> "red",
// 'mohan'=> "blue",
// 'raj'=>'green');

// echo $favcol['soham'];
// foreach($favcol as $key => $value){
//   echo "Favorite color of $key is $value <br>";
// }

// multi dimensional array
$multi=array(
    array(2,5,4,6),array(4,8,9,5),array(8,5,9,6)
  );
  // echo $multi[1][2];
  // echo var_dump($multi);
  for($i=0;$i<count($multi);$i++){
    for($j=0;$j<count($multi[$i]);$j++){
       echo $multi[$i][$j];
       echo "  ";
    }
    echo "<br>";
  }
  
// scope anad local global vars
$a=65; //global variable
function mark(){
  $a=5;  //local variable
  global $a; //use global keyword for access global variable
  // when global variable can permanet change in function
  echo $a;
}
mark();


// GET and POST 
   // if ($_SERVER['REQUEST_METHOD']) {
   //   $email = $_POST['email'];
   //   $password = $_POST['password'];
 
   //   echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
   //   <strong>SUCCESS!</strong> Your email' . $email . '   and password ' . $password . '  has been submitted successful.
   //   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
   // </div>';
   //submit these to a database 
   // } 
  // ways to connect to a MYSQL Database
  // 1) MYSQLi extension
  // 2) PDO       

  // connecting to the Database
  $servername = "localhost";
  $username = "root";
  $password = "";

  // create a connection
  $conn = mysqli_connect($servername, $username, $password);

  // die if connection was not successful
  // if (!$conn) {
  //   die("sorry we failed to connect: " . mysqli_connect_error());
  // } else {
  //   echo "connection is done";
  // }

  // create   database
$sql="CREATE DATABASE dbSoham7";
$result=mysqli_query($conn,$sql);
// echo "<br>";
// echo var_dump($result);


// check forthe database creation success
if($result){
echo "the db was created successfully";
}
else{
echo "the db was not crated".mysqli_error($conn);
}

    ?>
