<?php  
    session_start();

    require 'header.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['Add_To_Cart'])) {
            if (isset($_SESSION['cart'])) {
                $myItems = array_column($_SESSION['cart'], 'Item_Name');
                if (in_array($_POST['Item_Name'], $myItems)) {
                    echo "<script>
                            alert('Item Already Added');
                            // window.location.href='FORHIM.php';
                        </script>";
                } else {
                    $count = count($_SESSION['cart']);
                    $_SESSION['cart'][$count] = array(
                        'Item_Name' => $_POST['Item_Name'],
                        'Price' => $_POST['Price'],
                        'Quantity' => 1,
                    );
                    echo "<script>
                            alert('Item Added ');
                            // window.location.href='FORHIM.php';
                        </script>";
                }
            } else {
                $_SESSION['cart'][0] = array(
                    'Item_Name' => $_POST['Item_Name'],
                    'Price' => $_POST['Price'],
                    'Quantity' => 1,
                );
                echo "<script>
                        alert('Item Added ');
                        // window.location.href='FORHIM.php';
                    </script>";
            }
        }

        if (isset($_POST['Remove_Item'])) {
            $removed = false;
            foreach ($_SESSION['cart'] as $key => $value) {
                if ($value['Item_Name'] == $_POST['Item_Name']) {
                    unset($_SESSION['cart'][$key]);
                    $_SESSION['cart'] = array_values($_SESSION['cart']);
                    $removed = true;
                    break; // Exit the loop after removing the item
                }
            }

            if ($removed) {
                echo '<script>alert("Item Removed");</script>';
            } else {
                echo '<script>alert("Item not found in cart");</script>';
            }
            header('Location: addtocart.php');
            exit;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center border rounded btn btn-warning my-5">
                <h2>My Cart</h2>
            </div>

            <div class="col-lg-9 ">
                <table class="table table-light  table-striped">
                    <thead class="text-center">
                        <tr>
                            <th scope="col">Serial No.</th>
                            <th scope="col">Item Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php
                            $total = 0;
                            if(isset($_SESSION['cart'])) {
                                foreach($_SESSION['cart'] as $key => $value ) {
                                    $total = $total + $value['Price']; 
                                    $no = $key + 1;

                                    echo "
                                        <tr>
                                            <td>$no</td>
                                            <td>$value[Item_Name]</td>
                                            <td>$value[Price]</td>
                                            <td><input class='text-center' type='number' name='Quantity' value='$value[Quantity]' min='1' max='15'/></td>
                                            <td>
                                                <form action='manage_cart.php' method='POST'>
                                                    <button name='Remove_Item' class='btn btn-sm btn-outline-danger'> REMOVE </button> 
                                                    <input type='hidden' name='Item_Name' value='$value[Item_Name]' />
                                                </form>
                                            </td>
                                        </tr>
                                    ";
                                }
                            }
                        ?>
                    </tbody>
                </table>
            </div>

            <div class="col-lg-3">
                <div class="border bg-warning rounded p-4">
                    <h3>Total :</h3>
                    <h5 class="text-end" ><?php echo $total; ?></h5>
                    <br>
                    <form action="">
                        <button class="btn btn-light btn-block">Make Purchase</button>
                    </form>
                </div>
            </div>  
        </div>
    </div>
</body>
</html>
