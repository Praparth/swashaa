<?php
    $insert = false;
    $update = false;
    $delete = false;

    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "users";
    $conn = mysqli_connect($server, $username, $password, $database);

   

    if (!$conn) {
        die("Error: " . mysqli_connect_error());
    }
    // delete the record
    if(isset($_GET['delete'])) {
        $sno = $_GET['delete'];
        $delete = true;
            $sql = "DELETE FROM `users1` WHERE `sno`=$sno";
            $result = mysqli_query($conn , $sql);

    }


        if($_SERVER['REQUEST_METHOD'] == 'POST'){

            if(isset($_POST['snoEdit'])){
                // update the record
                $sno = $_POST['snoEdit'];
                $username = $_POST['username'];
                $password = $_POST['password'];

                //sql query to be executed
                $sql = "UPDATE `users1` SET `username`='$username' , `password`='$password' WHERE  `sno`=$sno";
                $result = mysqli_query($conn , $sql);

                if($result){
                    // echo "the record has been update successfully <br>";
                    $update = true;
                }
                else{
                    echo "the record has been update successfully because of this error ".mysqli_error($conn);   
                }

            }
            else{

                $username = $_POST['username'];
                $password = $_POST['password'];

                //sql query to be executed
                $sql = "INSERT INTO `users1`(`username`, `password`) VALUES ('$username' , '$password')";
                $result = mysqli_query($conn , $sql);

                // add a new trip to  the trip table in hte database
                if($result){
                    // echo "the record has been insert successfully <br>";
                    $insert = true;
                }
                else{
                    echo "the record has been insert successfully because of this error ".mysqli_error($conn);   
                }
            }

        }    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    
</head>
<body>
<?php  require 'header.php'  ?>
    <!-- Edit modal -->
<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal">
    Edit Modal
</button> -->
<?php
    if($insert){
      echo  "<div class='alert alert-success alert-dismissible fade show' role='alert'>
        <strong>Success!</strong> You Notes are Inserted Successfully.
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
      </div>";
    }
    if($update){
        echo  "<div class='alert alert-success alert-dismissible fade show' role='alert'>
          <strong>Success!</strong> You Notes are Update Successfully.
          <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        </div>";
      }
    if($delete){
        echo  "<div class='alert alert-success alert-dismissible fade show' role='alert'>
          <strong>Success!</strong> You Notes are Delete Successfully.
          <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        </div>";
      }  
?>

<form action="" method="post" class="d-flex  flex-column mx-auto   mb-5 col-5 py-5" >
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">UserName</label>
    <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">ADD Notes</button>
</form>


<!---------------------------------------- update ------------------------------------------------> 
<!-- Modal -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="container">

        <form action="" method="post" class="d-flex  flex-column mx-auto mt-5  mb-5">
            <input type="hidden" name="snoEdit" id="snoEdit">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" class="form-control" id="usernameedit" aria-describedby="emailHelp" require>
                
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="text" name="password" class="form-control" id="passwordedit" require>
            </div>
          
            <button type="submit" class=" btn btn-warning"> update</button>
        
    </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>

    <div class="container my-4">
        <table id="Table" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th scope="col">S.No</th>
                    <th scope="col">UserName</th>
                    <th scope="col">Password</th>
                    <th scope="col">Date & Time</th>
                    <th scope="col">action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $sql = "SELECT * FROM `users1`";
                    $result = mysqli_query($conn, $sql);
                    $sno = 0;
                    while ($row = mysqli_fetch_assoc($result)) {
                        $sno = $sno + 1;
                        echo "
                            <tr>
                                <th scope='row'>". $sno . "</th>
                                <td>". $row['username']. "</td>
                                <td>". $row['password'] ."</td>
                                <td>". $row['dt'] ."</td>
                                <td>
                                <button class='edit btn btn-sm btn-primary' id=". $row['sno'].">Edit</button> 
                                <button class='delete btn btn-sm btn-primary' id=d". $row['sno'].">Delete</button>     
                                </td>
                            </tr>
                        ";
                    }
                    
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    
    <script>
        $(document).ready(function () {
            $('#Table').DataTable();
        });
    </script>
    
    <script>

        //----------------------------------- update ---------------------------------------
         edits = document.getElementsByClassName('edit');
    Array.from(edits).forEach((element) => {
      element.addEventListener("click", (e) => {
        console.log("edit ");
        tr = e.target.parentNode.parentNode;
        username = tr.getElementsByTagName("td")[0].innerText;
        password = tr.getElementsByTagName("td")[1].innerText;
        console.log(username, password);
        usernameedit.value = username;
        passwordedit.value = password;
        snoEdit.value = e.target.id;
        console.log(e.target.id);
        $('#editModal').modal('toggle');
      })
    })

    
        //-----------------------------------delete  ---------------------------------------
        deletes = document.getElementsByClassName('delete');
    Array.from(deletes).forEach((element) => {
      element.addEventListener("click", (e) => {
        console.log("delete ");
        sno = e.target.id.substr(1,);

        
        if(confirm("press a Button")){
            console.log("yes");
            window.location = `/LOGIN/adminpanel.php?delete=${sno}`; // chage the path
            // TODP : create a form  and use post request to submit a form
        }
        else{
            console.log("No");  
        }

      })
    })

    </script>

</body>
</html>
