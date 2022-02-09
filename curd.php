<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
    <title>Hello, world!</title>
</head>

<body>
    <!-- Button trigger modal -->
    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal">
edit Modal
</button> -->

    <!-- Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLable" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLable">edit this note</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span aria-label="true">&times;</span></button>
                </div>
                <div class="modal-body">

                    <form action="/soham/curd.php" method="post">
                        <div class="mb-3">
                            <input type="hidden" name="snoEdit" id="snoEdit">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="titleEdit" aria-describedby="emailHelp" name="titleEdit">
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">DESCRIPTION</label>
                            <textarea class="form-control" id="descriptionEdit" name="descriptionEdit" cols="30" rows="6"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">update note</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <?php
    $insert = false;
    // sumbit to database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "notes";

    // create a connection
    $conn = mysqli_connect($servername, $username, $password, $database);



    if(isset($_GET['delete'])){
            $sno = $_GET['delete'];
            $sql ="DELETE FROM `notes` WHERE `notes`.`sno` = $sno";
            $result = mysqli_query($conn, $sql);
    }
    // die if connection was not successful
    if (!$conn) {
        die("sorry we failed to connect: " . mysqli_connect_error());
    }
    if ($_SERVER['REQUEST_METHOD']) {
        if (isset($_POST['snoEdit'])) {
            // echo "yes";

            // update  the records
            $sno = $_POST['snoEdit'];
            $title = $_POST['titleEdit'];
            $description = $_POST['descriptionEdit'];
            $sql = "UPDATE `notes` SET `title`='$title',`description`='$description' WHERE `notes`.`sno`=$sno";
            $result = mysqli_query($conn, $sql);
        } 
        else {
            $title = $_POST['title'];
            $description = $_POST['description'];

            //sql query to be inserted
            $sql = "INSERT INTO `notes` (`title`, `description`) VALUES ('$title', '$description')";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                $insert = true;
            } else {
                echo '<div class="alert alert-danger" role="alert">
  fail</div>';
            }
        }
    }
    ?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">CURD</a>
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
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <?php
    if ($insert) {
        echo '<div class="alert alert-success" role="alert">
          successfully done</div>';
    }
    ?>
    <div class="container my-5">
        <h2>Add notes</h2>

        <form action="/soham/curd.php" method="post">
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" aria-describedby="emailHelp" name="title">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">DESCRIPTION</label>
                <textarea class="form-control" id="description" name="description" cols="30" rows="6"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
    <div class="container my-4">
        <table class="table" id="myTable">
            <thead>
                <tr>
                    <th scope="col">S.no</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM `notes`";
                $result = mysqli_query($conn, $sql);
                $sno = 0;
                while ($row = mysqli_fetch_assoc($result)) {
                    $sno = $sno + 1;
                    echo " <tr>
        <td scope='row'>" . $sno . "</td>
        <td>" . $row['title'] . "</td>
        <td>" . $row['description'] . "</td>
        <td><button class='edit btn btn-sm btn-primary' id=" . $row['sno'] . ">EDIT</button>  <button class='delete btn btn-sm btn-primary' id=d". $row['sno'].">DELETE</button>
        </td>
      </tr>";
                    // echo $row['sno']."title".$row['title']."Description".$row['description'];
                    // echo "<br>";
                }



                //INSERT INTO `notes` (`sno`, `title`, `description`, `tstamp`) VALUES ('1', 'add soham', 'i am indian ',current_timestamp());
                ?>
            </tbody>
        </table>

    </div>


    <script src="//cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">

    </script>

    <script>
        edits = document.getElementsByClassName('edit');
        Array.from(edits).forEach((element) => {
            element.addEventListener("click", (e) => {
                console.log("edit", );
                tr = e.target.parentNode.parentNode;
                title = tr.getElementsByTagName("td")[1].innerText;
                description = tr.getElementsByTagName("td")[2].innerText;
                console.log(title, description);
                titleEdit.value = title;
                descriptionEdit.value = description;
                snoEdit.value = e.target.id;
                console.log(e.target.id);
                $("#editModal").modal('toggle'); //show modal
            })
        })

        deletes = document.getElementsByClassName('delete');
        Array.from(deletes).forEach((element) => {
            element.addEventListener("click", (e) => {
                console.log("edit", );
                sno=e.target.id.substr(1,);
                if(confirm("Press a button!")){
                    console.log("yes");
                    window.location=`/soham/curd.php?delete=${sno}`;
                }
                else{
                    console.log("no");
                }
            })
        })
    </script>
</body>

</html>