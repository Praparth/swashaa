<?php
$login = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'part/_dbconnect.php';
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "Select * from users1 where username='$username' AND password ='$password' ";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);

    if ($username == "parth" && $password == "2986") {
        header("location: adminpanel.php");
    } else {
        if ($num == 1) {
            $login = true;
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;
            header("location: index.php");
        } else {
            $showError = "invalid Credentials";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>
    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- Include Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- anguler js -->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
</head>
<body >

    
    <?php  require 'part/nav.php'  ?>
    <?php
    if ($login) {
        echo '
         <div class="alert alert-success d-flex alert-dismissible fade show align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
            <div>
                Your are logined in
            </div>
       </div>';
    }
    if ($showError) {
        echo '
         <div class="alert alert-warning d-flex alert-dismissible fade show align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
            <div>
                ' . $showError . '
            </div>
       </div>';
    }

    ?>

    <div class="container">
        <form action="/LOGIN/login.php" method="post" class="d-flex col-10 col-sm-4 flex-column mx-auto mt-5 mb-5" ng-controller="loginController" ng-submit="validateForm()">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" class="form-control" id="username" aria-describedby="emailHelp" ng-model="username" >
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password" ng-model="password" >
            </div>
            <div class="alert alert-warning" ng-show="showError">
                Username and password are required.
            </div>
            <button type="submit" class="btn btn-warning" ng-disabled="myForm.$invalid">Submit</button>

        </form>
    </div>

    <?php  require 'part/footer.php'  ?>

    <script>
        var app = angular.module('loginApp', []);

        app.controller('loginController', function ($scope) {
            $scope.username = ''; // Remove the space here
            $scope.password = ''; // Remove the space here

            $scope.validateForm = function () {
                if (!$scope.username || !$scope.password) {
                    $scope.showError = true;
                } else {
                    $scope.showError = false;
                    // Submit the form (you can add your form submission logic here)
                };
            };
        });
    </script>
</body>
</html>
