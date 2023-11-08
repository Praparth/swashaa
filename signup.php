<?php
$showAlert = false;
$showError = false;
  if($_SERVER["REQUEST_METHOD"] == "POST") {     
   
    include 'part/_dbconnect.php';
    $username = $_POST["username"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];

    // $exists = false;

    // check whether this username Exists
    $existsql = "SELECT * FROM `users1` WHERE  username = '$username' ";
    $result = mysqli_query($conn , $existsql);
    $numExistRows = mysqli_num_rows($result);
    if ($numExistRows > 0){
        // $exists = TRUE;
        $showError = " Username Already Exists ";
    }
    else{
        // $exists = false;
    
        if(($password == $cpassword) ){
            $sql = "INSERT INTO `users1` ( `username`, `password`, `dt`) VALUES ( '$username', '$password', current_timestamp())";


            $result = mysqli_query($conn , $sql);
            if($result){
                $showAlert = true;
            }
            
        }
        else{
            $showError = "password do not match  ";
        }
    }    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup </title>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>

</head>
<body ng-app="">
    
<?php  require 'part/nav.php'  ?>
    <?php
    if($showAlert){
        echo'
         <div class="alert alert-success d-flex alert-dismissible fade show align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
            <div>
                Your Account is Now Created and you can login 
            </div>
       </div>';
    }
    if($showError){
        echo'
         <div class="alert alert-success d-flex alert-dismissible fade show align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
            <div>
                '.$showError.'
            </div>
       </div>';
    }

    ?>

    <div class="container">
        <!-- <form action="/LOGIN/signup.php " method="post" class="d-flex col-10 col-sm-4 flex-column mx-auto mt-5  mb-5">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" class="form-control" id="username" aria-describedby="emailHelp" require>
                
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password" require>
            </div>
            
            <div class="mb-3">
                <label for="cpassword" class="form-label">Confirm Password</label>
                <input type="password" name="cpassword" class="form-control" id="cpassword" require>
                <div id="emailHelp" class="form-text">Make Sure to Type the Same Password</div>
            </div>
            --><!--  
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div> -->
            <!-- <button type="submit" class="btn btn-warning">Submit</button>
        </form> -->
        <form action="/LOGIN/signup.php" method="post" name="myform"  class="d-flex col-10 col-sm-4 flex-column mx-auto mt-5 mb-5" novalidate>
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" name="username" class="form-control" id="username" pattern="[a-zA-Z' ']{1,}" aria-describedby="emailHelp" ng-model="username" required>
            <span ng-show="myform.$submitted || myform.username.$dirty">
                <span class="error" ng-show="myform.username.$error.pattern"> enter only chharcter not number </span>
                <span class="error" ng-show="myform.username.$error.required"> filed is empty </span>
            </span>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="password" ng-model="password" ng-minlength="3" ng-maxlength="10"  required>
            <span ng-show="myform.$submitted || myform.password.$dirty">
                <span class="error" ng-show="((myform.password.$error.minlength || myform.password.$error.maxlength) && myform.password.$dirty)"> enter min 3 char or max 10 can you enter </span>
                <span class="error" ng-show="myform.password.$error.required"> filed is empty </span>
            </span>
        </div>
        <div class="mb-3">
            <label for="cpassword" class="form-label">Confirm Password</label>
            <input type="password" name="cpassword" class="form-control" id="cpassword" ng-model="cpassword" ng-minlength="3" ng-maxlength="10" required>
            <span ng-show="myform.$submitted || myform.cpassword.$dirty">
                <span class="error" ng-show="((myform.cpassword.$error.minlength || myform.cpassword.$error.maxlength) && myform.cpassword.$dirty)"> enter min 3 char or max 10 can you enter </span>
                <span class="error" ng-show="myform.cpassword.$error.required"> filed is empty </span>
            </span>
            <div id="emailHelp" class="form-text">Make Sure to Type the Same Password</div>
        </div>
        <div class="alert alert-warning" ng-show="showError">
            Please fill in all fields and ensure that the passwords match.
        </div>
        <button type="submit" class="btn btn-warning">Submit</button>
        </form>

    </div>
    

    <?php  require 'part/footer.php'  ?>

    <script>
        var app = angular.module('signupApp', []);

        app.controller('signupController', function($scope) {
        $scope.username = '';
        $scope.password = '';
        $scope.cpassword = '';

        $scope.validateForm = function() {
            if (!$scope.username || !$scope.password || !$scope.cpassword || $scope.password !== $scope.cpassword) {
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