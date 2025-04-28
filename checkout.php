<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="icon.png" />
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: rgba(255, 205, 175, 0.24) !important;
    color: #333;
}

header {
    background-color: #E79F6D;
    color: #fff;
    padding: 20px;
    text-align: center;
    margin-top: -40px;
}

.footer {
    background-color: #E79F6D;
    color: #fff;
    padding: 20px 0;
    text-align: center;
}

.footer p {
    margin-bottom: 10px;
}

main {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    max-width: 800px;
    margin: 0 auto;
    margin-bottom: 100px;
}

.form-control {
    height: 50px;
    font-size: 20px;
    padding: 10px; /* Adjusted padding for better appearance */
}

#payment-page-total-price {
    text-align: right;
}

.subtotal {
    text-align: right;
}

.qty {
    text-align: right;
        }
    </style>
</head>

<body>
    <header>
        <h1 class="text-center">Payment</h1>
    </header>
    <main class="payment-content">
        <!-- Payment Form -->
         <form action="payment.php" method="get">
              <div>
    <!--How to get the otherpayment, i want the calculateTotaL to pass to here? -->
    
              </div>
         </form>

         <!--delivery one form maybe?-->
        <form id="payment-form" method="post" action="reciept.php" target="_blank">
            <div class="mb-3">
                <!-- Payment method selection  send to the database-->
                <label class="form-label">Select Payment Method</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="payment-method" id="ewallet" value="E-wallet">
                    <label class="form-check-label" for="ewallet">
                        E-wallet
                        <img src="images/tng_logo.png" alt="ewallet" width="20px" height="20px">
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="payment-method" id="creditcard" value="Credit card">
                    <label class="form-check-label" for="creditcard">
                        Credit card
                        <img src="images/mastercard_logo.png" alt="card" width="30px" height="20px">
                    </label>
                </div>
            </div>
            <div class="mb-3" id="ewallet-field" style="display: none;">
                <!-- E-wallet -->
                <label for="phone-num" class="form-label">Enter Your Phone Number</label>
                <input type="tel" name="phone-num" id="phone-num" class="form-control" placeholder="xxx-xxx xxxx" required disabled>
            </div>
            <div class="mb-3" id="creditcard-field" style="display: none;">
                <!-- Credit card -->
                <label for="card-num" class="form-label">Credit Card Number</label>
                <input type="number" name="card-num" id="card-num" class="form-control" pattern="[0-9]{13,16}" maxlength="16" placeholder="xxxx-xxxx-xxxx-xxxx" required disabled>
                <label for="expiry-date" class="form-label">Expiration Date</label>
                <input type="text" id="expiry-date" name="expiry-date" class="form-control" placeholder="MM/YY" required disabled>
                <label for="cvv" class="form-label">CVV</label>
                <input type="number" id="cvv" name="cvv" class="form-control" placeholder="123" required disabled>
                <label for="cardholder-name" class="form-label">Cardholder Name</label>
                <input type="text" id="cardholder-name" name="cardholder-name" class="form-control" required disabled>
            </div>
            <div class="mb-3">
                <input type="submit" value="Process Payment" class="btn btn-primary" />
            </div>
        </form>
    </main>
    <!--When submit, should it pass out to another page or can just print from PG itself done payment and then go home-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function validateForm() {
        // Add onsubmit handler to the form
document.getElementById('payment-form').onsubmit = function(e) {
    // Prevent default form submission
    e.preventDefault();
    
    // Check if payment method is selected
    var paymentMethod = document.querySelector('input[name="payment-method"]:checked');
    if (!paymentMethod) {
        alert("Please select a payment method.");
        return false;
    }

    // Validate e-wallet fields
    if (paymentMethod.value === "E-wallet") {
        var phoneNumber = document.getElementById('phone-num').value;
        if (phoneNumber.trim() === "") {
            alert("Please enter your phone number.");
            return false;
        }
    }

    // Validate credit card fields 
    if (paymentMethod.value === "Credit card") {
        var cardNumber = document.getElementById('card-num').value;
        var expiryDate = document.getElementById('expiry-date').value;
        var cvv = document.getElementById('cvv').value;
        var cardholderName = document.getElementById('cardholder-name').value;

        if (cardNumber.trim() === "" || expiryDate.trim() === "" || 
            cvv.trim() === "" || cardholderName.trim() === "") {
            alert("Please fill in all credit card details.");
            return false;
        }
    }

    // If validation passes, submit the form
    this.submit();
    document.write("<h2>Your payment has been processed successfully.</h2>" + 
                  "<p>Your package will arrive in 3 days</p>");
                    var paymentMethod = document.querySelector('input[name="payment-method"]:checked');
            if (!paymentMethod) {
                alert("Please select a payment method.");
                return false;
            }
            if (paymentMethod.value === "E-wallet") {
                var phoneNumber = document.getElementById('phone-num').value;
                if (phoneNumber.trim() === "") {
                    alert("Please enter your phone number.");
                    return false;
                }
            } else if (paymentMethod.value === "Credit card") {
                var cardNumber = document.getElementById('card-num').value;
                var expiryDate = document.getElementById('expiry-date').value;
                var cvv = document.getElementById('cvv').value;
                var cardholderName = document.getElementById('cardholder-name').value;
                if (cardNumber.trim() === "" || expiryDate.trim() === "" || cvv.trim() === "" || cardholderName.trim() === "") {
                    alert("Please fill in all credit card details.");
                    return false;
                }
            }
            // If all validations pass then submit the form
            document.getElementById('payment-form').submit();
            if( document.getElementById('payment-form').submit()
            ){
document.write("<h2> Your payment has been processsed successfully. <br/> "+"<p>Your package will arrive in 3 days</p>");
            }else{
           alert("Are you sure you want to pay the amount specified");
            }
        }

        // Show or hide payment method fields based on selection
        document.querySelectorAll('input[name="payment-method"]').forEach(function (radio) {
            radio.addEventListener('change', function () {
                if (this.value === 'E-wallet') {
                    document.getElementById('ewallet-field').style.display = 'block';
                    document.getElementById('creditcard-field').style.display = 'none';
                    // Enable E-wallet input field
                    document.getElementById('phone-num').removeAttribute('disabled');
                    // Disable Credit card input fields
                    document.getElementById('card-num').setAttribute('disabled', 'true');
                    document.getElementById('expiry-date').setAttribute('disabled', 'true');
                    document.getElementById('cvv').setAttribute('disabled', 'true');
                    document.getElementById('cardholder-name').setAttribute('disabled', 'true');
                } else if (this.value === 'Credit card') {
                    document.getElementById('ewallet-field').style.display = 'none';
                    document.getElementById('creditcard-field').style.display = 'block';
                    // Enable Credit card input fields
                    document.getElementById('card-num').removeAttribute('disabled');
                    document.getElementById('expiry-date').removeAttribute('disabled');
                    document.getElementById('cvv').removeAttribute('disabled');
                    document.getElementById('cardholder-name').removeAttribute('disabled');
                    // Disable E-wallet input field
                    document.getElementById('phone-num').setAttribute('disabled', 'true');
                }
            });
        });
    }
    </script>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <?php include './footer.php'; ?>
            <div class="row">
                <div class="col-lg-12">
                    <p>&copy; 2025 GradShop of <TARea>TAR</TARea></p>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>