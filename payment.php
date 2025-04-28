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
      
    </header>

    <main class="payment-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="mb-4"><b style="font-size:35px; padding-bottom:20px;">Order Summary</b></h2>
                    <div id="payment-page-cart" class="mb-4">
                        <form id="payment-form" method="post" action="checkout.php">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col" class="table-header">Product</th>
                                        <th scope="col" class="qty">Quantity</th>
                                        <th scope="col" class="subtotal">Subtotal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    
                                    
                                    ?>
                                    <tr data-unit-price="150.00">
                                        <td scope="col"><img src="class1.jpeg" alt="" width="100" height="100" style="margin-right:10px;">Grad Hat red color &#343;</td>
                                        <td scope="col" class="qty"><input type="number" value="2" class="form-control qty-input" min="0"></td>
                                        <td scope="col" class="subtotal">RM 150.00</td>
                                    </tr>
                                    <tr data-unit-price="300.00">
                                        <td scope="col"><img src="class1.jpg" alt="" width="100" height="100" style="margin-right:10px;"> Black-draped Gown 130cm🎉</td>
                                        <td scope="col" class="qty"><input type="number" value="1" class="form-control qty-input" min="0"></td>
                                        <td scope="col" class="subtotal">RM 300.00</td>
                                    </tr>
                                    <tr data-unit-price="180.00">
                                        <td scope="col"><img src="class1.jpg" width="100" height="100" style="margin-right:10px;">Diploma Custom color gHood🌙</td>
                                        <td scope="col" class="qty"><input type="number" value="2" class="form-control qty-input" min="0"></td>
                                        <td scope="col" class="subtotal">RM 180.00</td>
                                    </tr>
                                    <tr data-unit-price="10.00">
                                        <td scope="col"><img src="exhibition1.jpg" alt="" width="100" height="100" style="margin-right:10px;"> #E79F6D Gold colored tassel </td>
                                        <td scope="col" class="qty"><input type="number" value="1" class="form-control qty-input" min="0"></td>
                                        <td scope="col" class="subtotal">RM 10.00</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="2"></td> 
                                        <td id="payment-page-total-price" class="text-end"><b>Total Price: RM 0.00</b></td>
                                    </tr>
                                </tfoot>
                            </table>

                            <div class="mb-3">
                                <button type="button" class="btn btn-primary" onclick="calculateTotal()">Calculate</button>
                                <input type="submit" class="btn btn-primary" value="Submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
 </main>

    <script>
        function calculateTotal() {
    let total = 0;
    const rows = document.querySelectorAll('tbody tr'); // Target all product rows

    rows.forEach(row => {
        const unitPrice = parseFloat(row.getAttribute('data-unit-price'));
        const qtyInput = row.querySelector('.qty-input');
        const subtotalCell = row.querySelector('.subtotal');
        
        const quantity = parseInt(qtyInput.value) || 0;
        const subtotal = quantity * unitPrice;

        subtotalCell.textContent = `RM ${subtotal.toFixed(2)}`; // Update row subtotal
        total += subtotal;
    });

    document.getElementById('payment-page-total-price').innerHTML = 
        `<b>Total Price: RM ${total.toFixed(2)}</b>`;
}
    </script>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>&copy; 2025 TARUMT GradShop</p>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
