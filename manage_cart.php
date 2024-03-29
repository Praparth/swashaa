<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['Add_To_Cart'])) {
        // Store the referrer URL in a session variable
        $_SESSION['referrer'] = $_SERVER['HTTP_REFERER'];

        if (isset($_SESSION['cart'])) {
            $myItems = array_column($_SESSION['cart'], 'Item_Name');
            if (in_array($_POST['Item_Name'], $myItems)) {
                echo "<script>
                        alert('Item Already Added');
                        window.location.href='FORHIM.php';
                      </script>";
            } else {
                $count = count($_SESSION['cart']);
                $_SESSION['cart'][$count] = array(
                    'Item_Name' => $_POST['Item_Name'],
                    'Price' => $_POST['Price'],
                    'Quantity' => 1,
                );
                echo "<script>
                        alert('Item Added');
                      </script>";
            }
        } else {
            $_SESSION['cart'][0] = array(
                'Item_Name' => $_POST['Item_Name'],
                'Price' => $_POST['Price'],
                'Quantity' => 1,
            );
            echo "<script>
                    alert('Item Added');
                  </script>";
        }

        // Redirect back to the referrer URL stored in the session
        if (isset($_SESSION['referrer'])) {
            header("Location: " . $_SESSION['referrer']);
            exit;
        }
    }


    
if (isset($_POST['Remove_Item'])) {
    $removed = false;
    foreach ($_SESSION['cart'] as $key => $value) {
        if ($value['Items_Name'] == $_POST['Item_Name']) {
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
