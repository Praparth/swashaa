<?php
session_start();

// Define your product array here (similar to what you have in your original code)
$products = array(
    array(
        'Item_Name' => 'TUSHITA MANGALSUTRA',
        'Price' => 799.99,
        'Image_URL' => 'https://www.swashaa.com/cdn/shop/files/TushitaMangalsutraDisha-M-Styling-19-07-202309copy-1_540x.jpg?v=1690028513',
    ),
    array(
        'Item_Name' => 'ROOP MANGALSUTRA',
        'Price' => 899.99,
        'Image_URL' => 'https://www.swashaa.com/cdn/shop/files/RoopMangalsutraDisha-M-Styling-19-07-202311copy-1_360x.jpg?v=1690867720',
    ),
    // Add more product entries as needed
);

// Get the sorting preference from the form
if (isset($_POST['sort_order'])) {
    $sort_order = $_POST['sort_order'];

    // Sort the product array based on the selected preference
    if ($sort_order == 'low_to_high') {
        usort($products, function ($a, $b) {
            return $a['Price'] - $b['Price'];
        });
    } elseif ($sort_order == 'high_to_low') {
        usort($products, function ($a, $b) {
            return $b['Price'] - $a['Price'];
        });
    }
}

// Include the header and HTML content here

// Display the sorted products
foreach ($products as $product) {
    // Render product listings using the $product array
    // You can generate HTML for each product here
    echo '<div>';
    echo '<img src="' . $product['Image_URL'] . '" alt="' . $product['Item_Name'] . '" width="100%">';
    echo '<p>' . $product['Item_Name'] . '<br>';
    echo 'Price: Rs. ' . $product['Price'] . '</p>';
    // Add more HTML as needed
    echo '</div>';
}

// Include the footer here
?>
