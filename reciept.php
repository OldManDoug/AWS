<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX">
    <link rel="stylesheet" href="XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX">
    <link rel="stylesheet" href="XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX">
    <link rel="stylesheet" href="XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX">
</head>
<style>
    .container {
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .receipt {
        width: 400px;
        height: 400px;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        padding: 20px;
        text-align: center;
    }

    .receipt h1 {
        font-size: 24px;
        margin-bottom: 20px;
    }

    .receipt p {
        font-size: 16px;
        margin-bottom: 10px;
    }

    .receipt .btn {
        display: inline-block;
        padding: 10px 20px;
        background-color: #007bff;
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }

    .receipt .btn:hover {
        background-color: #0056b3;
    }
</style>

<body>
    <div class="container">
        <div class="receipt">
            <h1>Payment Receipt</h1>
            <p>Thank you for your payment!</p>
            <p>Amount: $<?php echo $_GET['payment-page-total-price'];
                            ?>
                            </p>
            <p>Paid with : <?php echo $_GET['payment-method'];
            ?>
            </p>
            <?php
            $dbc = mysqli_connect('localhost', 'root', '', 'GradShop');
            $result = mysqli_query($dbc, "SELECT * FROM payment");
             
        


// Get payment details from URL parameters
$amount = $_GET['payment-page-total-price'];
$payment_method = $_GET['payment-method'];
$payment_details = $_GET['payment-details'];

// Insert payment record into database
$query = "INSERT INTO payment (amount, payment_method, payment_date) 
          VALUES ('$amount', '$payment_method', '$payment_date')";
mysqli_query($dbc, $query);
?>                         
            <a href="homepage.php" class="btn">Back to Home</a>
        </div>
    </div>
</body>

</html>