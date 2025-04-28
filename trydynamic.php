<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="icon.png" />
    <style>
        /* Your existing styles */
    </style>
</head>
<body>  
    <header>
        <h1 class="text-center">Payment</h1>
        <address>Something</address>
    </header>

    <main class="payment-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="mb-4"><b style="font-size:35px; padding-bottom:20px;">Order Summary</b></h2>
                    <div id="payment-page-cart" class="mb-4">
                        <form id="payment-form" method="post" action="checkout.php">
                           
<?php
//need a DB

// Get cart items from session or database
$cart_items = [
    [
        'name' => 'Grad Hat red color',
        'image' => 'class1.jpeg',
        'price' => 150.00,
        'quantity' => 2
    ],
    [
        'name' => 'Black-draped Gown 130cm',
        'image' => 'class1.jpg', 
        'price' => 300.00,
        'quantity' => 1
    ],
    [
        'name' => 'Diploma Custom color Hood',
        'image' => 'class1.jpg',
        'price' => 180.00,
        'quantity' => 2
    ],
    [
        'name' => '#E79F6D Gold colored tassel',
        'image' => 'exhibition1.jpg',
        'price' => 10.00,
        'quantity' => 1
    ]
];
echo "<table class='table'>";
echo "<thead>";
// Generate table rows dynamically
foreach($cart_items as $item) {
    echo "<tr data-unit-price=\"{$item['price']}\">";
    echo "<td scope=\"col\"><img src=\"{$item['image']}\" alt=\"\" width=\"100\" height=\"100\" style=\"margin-right:10px;\">{$item['name']}</td>";
    echo "<td scope=\"col\" class=\"qty\"><input type=\"number\" value=\"{$item['quantity']}\" class=\"form-control qty-input\" min=\"0\"></td>";
    echo "<td scope=\"col\" class=\"subtotal\">RM {$item['price']}</td>";
    echo "</tr>";
}
?>

