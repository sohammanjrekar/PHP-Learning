<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "hello";?></title>
</head>
<body>
<?php
// sumbit to database
$servername = "localhost";
$username = "root";
$password = "";
$database="contacts";

// create a connection
$conn = mysqli_connect($servername, $username, $password,$database);

// die if connection was not successful
if (!$conn) {
// die("sorry we failed to connect: " . mysqli_connect_error());
echo "fail";
} else {
    echo "connection is done<br>";
}
//sql query to be inserted
$sql="SELECT * FROM `contact us` WHERE `name` = 'soham'";
$result=mysqli_query($conn,$sql);

//find the numbr of records returned
$num=mysqli_num_rows($result);
echo $num ;
echo "<br>";

//display the rows retured by the sql query
if($num>0){
    // $i=0;
    // while($i<$num+1){       //mera code work
    // $row=mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    // $i++;
    // }


    //we can fetch in better way using the while loop
while($row=mysqli_fetch_assoc($result)){
    // echo var_dump($row); //ise array milta hai
    echo $row['sno']."hello".$row['name']."email:".$row['email']."thanks for".$row['consern']; //ise dat milta hai string me
    echo "<br>";
}
}

// usage of WHERE Clause to Update DAta
$sql="UPDATE `contact us` SET `name` = 'rohanUpdate' WHERE `sno` = 2";
$result=mysqli_query($conn,$sql);

if($result){
    echo "we Updated the record Successfully ";
}else{
    echo "we Updated the record failed";
}

// for know how many rows are affected or updated

$aff= mysqli_affected_rows($conn);
echo "<br>";
echo $aff;
echo "<br>";

//delete data in database
$sql="DELETE FROM `contact us` WHERE `sno` = 4";
$result=mysqli_query($conn,$sql);

if($result){
    echo "we Updated the record Successfully ";
}else{
    echo "we Updated the record failed";
}
$aff= mysqli_affected_rows($conn);
echo "<br>";
echo $aff;
echo "<br>";




?>
</html>



