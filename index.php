<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">php</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<div class="container my-6">
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
</div>
    <!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted">
  <!-- Section: Social media -->
  <section
    class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
  >
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>Get connected with us on social networks:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>Company name
          </h6>
          <p>
            Here you can use rows and columns to organize your footer content. Lorem ipsum
            dolor sit amet, consectetur adipisicing elit.
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Products
          </h6>
          <p>
            <a href="#!" class="text-reset">Angular</a>
          </p>
          <p>
            <a href="#!" class="text-reset">React</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Vue</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Laravel</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Useful links
          </h6>
          <p>
            <a href="#!" class="text-reset">Pricing</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Settings</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Orders</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Help</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Contact
          </h6>
          <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            info@example.com
          </p>
          <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
          <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2021 Copyright:
    <a class="text-reset fw-bold" href="https://mdbootstrap.com/">MDBootstrap.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
</body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>