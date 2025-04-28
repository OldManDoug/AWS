<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
            line-height: 1.6;
        }

        #modal-product-img {
            display: block;      /* Makes the image a block-level element */
            margin: auto;  /* Centers the image horizontally */
            max-width: 100%;     /* Ensures the image doesn’t exceed the modal’s width */
            height: auto;        /* Maintains the image's aspect ratio */
            max-height: 200px;   /* Adjust the height to your needs */
        }

        .card {
            border: 1px solid rgba(0, 0, 0, 0.1); 
            transition: transform 0.3s;
            height: 90%;
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        .product-img {
            height: 200px;
            object-fit: contain;
            background-color: #f8f9fa;
        }
        .price {
            font-weight: bold;
            color: #0d6efd;
        }
    </style>
    
    <script>
        function openModal(title, imgSrc, price, sizeRequired, description) {

            document.getElementById('modal-product-price-raw').value = price;
            // Set the modal content dynamically
            document.getElementById('modal-product-title').innerText = title;
            document.getElementById('modal-product-img').src = imgSrc;
            document.getElementById('modal-product-price').innerText = `$${price}`;
            document.getElementById('modal-product-description').innerText = description || 'No description available for this product.';
            
            // Update hidden form fields
            document.getElementById('form-product-title').value = title;
            document.getElementById('form-product-price').value = price; // Raw decimal
            document.getElementById('form-product-img').value = imgSrc;

            // Conditionally show or hide the size selection form


            // yeah this check is having issues the line 
            const sizeSelection = document.getElementById('size-selection');
    if (sizeRequired) {
        sizeSelection.style.display = 'block';
        document.getElementById('size').value = 'S'; // Reset to Small
    } else {
        sizeSelection.style.display = 'none';
    }
        }



        function testData() {
    // Get data from the modal
    const product = {
        title: document.getElementById('modal-product-title').innerText,
        price: parseFloat(document.getElementById('modal-product-price-raw').value),
        size: document.getElementById('size').value || "N/A",  // Only if size exists
        quantity: document.getElementById('quantity').value,
    };

    // Log to console (Press F12 to see)
    console.log("📦 Data being passed:", product);

    // Optional: Show an alert with the data
    alert(`TEST DATA:\n
        Title: ${product.title}\n
        Price: ${product.price}\n
        Size: ${product.size}\n
        Quantity: ${product.quantity}
    `);
}



    </script>
</head>
<body>
    
<?php include "header.php"?> <!-- include header -->

    <div class="container py-5">
        <h1 class="text-center mb-5">Our Products</h1>
        
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            <!-- Product 1 -->
            <div class="col">
                <div class="card h-100">
                    <img src="images/gradcap.png" class="card-img-top product-img" alt="Graduation Cap">
                    <div class="card-body">
                        <h5 class="card-title">Graduation Cap</h5>
                        <p class="card-text">Classic black graduation cap.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="price">$19.99</span>
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#productModal" 
                                onclick="openModal('Graduation Cap', 'images/gradcap.png', 19.99, true, 'A classic black graduation cap, perfect for your big day')">View More</button>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Product 2 -->
            <div class="col">
                <div class="card h-100">
                    <img src="images/gradgown.png" class="card-img-top product-img" alt="Graduation Gown">
                    <div class="card-body">
                        <h5 class="card-title">Graduation Gown</h5>
                        <p class="card-text">Traditional black graduation gown</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="price">$49.99</span>
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#productModal" 
                                onclick="openModal('Graduation Gown', 'images/gradgown.png', 49.99, true, 'A traditional black gown designed for elegance and comfort')">View More</button>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Product 3 -->
            <div class="col">
                <div class="card h-100">
                    <img src="images/fullgrad.jpg" class="card-img-top product-img" alt="Graduation Set">
                    <div class="card-body">
                        <h5 class="card-title">Graduation Set (Cap + Gown)</h5>
                        <p class="card-text">Complete graduation set</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="price">$64.99</span>
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#productModal" 
                                onclick="openModal('Graduation Set', 'images/fullgrad.jpg', 64.99, true, 'Everything you need to shine at graduation in one bundle')">View More</button>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Product 4 -->
            <div class="col">
                <div class="card h-100">
                    <img src="images/gradbouquet.jpg" class="card-img-top product-img" alt="Steve">
                    <div class="card-body">
                        <h5 class="card-title">Flower Bouquet</h5>
                        <p class="card-text">A beautiful bouquet</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="price">$29.99</span>
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#productModal" 
                                onclick="openModal('Steve', 'images/gradbouquet.jpg', 29.99, false, 'A stunning bouquet to celebrate your achievements in style')">View More</button>
                        </div>
                    </div>  
                </div>
            </div>
            
            <!-- Product 5 -->
            <div class="col">
                <div class="card h-100">
                    <img src="images/gradmug.jpg" class="card-img-top product-img" alt="Chicken Jockey">
                    <div class="card-body">
                        <h5 class="card-title">Grad Mug</h5>
                        <p class="card-text">Ceramic mug with your name</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="price">$14.99</span>
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#productModal" 
                                onclick="openModal('Chicken Jockey', 'images/gradmug.jpg', 14.99, false, 'A personalized ceramic mug to cherish your graduation memories (uses registered name)')">View More</button>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Product 6 -->
            <div class="col">
                <div class="card h-100">
                    <img src="images/gradhood.jpg" class="card-img-top product-img" alt="Kermit">
                    <div class="card-body">
                        <h5 class="card-title">Grad Hoodie</h5>
                        <p class="card-text">A cozy hoodie.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="price">$39.99</span>
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#productModal" 
                                onclick="openModal('Kermit', 'images/gradhood.jpg', 39.99, false, 'A soft, cozy hoodie to keep you warm while celebrating your success (uses year enrolled of Grad)')">View More</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for Product Details -->
    <div class="modal fade" id="productModal" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="productModalLabel">Product Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form id="cartForm" action="checkout.php" method="POST">
                <div class="modal-body">

                <input type="hidden" id="form-product-title" name="product_title">
                    <input type="hidden" id="form-product-price" name="product_price">
                    <!-- Product Image -->
                    <img src="" id="modal-product-img" class="img-fluid mb-3" alt="Product Image">
                    <h5 id="modal-product-title">Product Title</h5>
                    <p id="modal-product-description">Product Description</p>
                    <p id="modal-product-price" class="price">Product Price</p>

                    <input type="hidden" id="modal-product-price-raw" value="">

                    <!-- Size Selection (Only shows when required) -->
                    <div id="size-selection" style="display: block;">
                        <div class="mb-3">
                            <label for="size" class="form-label">Size</label>
                            <select class="form-select" id="size" name="product_size">
                                <option value="S">Small</option>
                                <option value="M">Medium</option>
                                <option value="L">Large</option>
                                <option value="XL">Extra Large</option>
                            </select>
                        </div>
                    </div>

                    <!-- Quantity and View More Form -->
                    <div class="mb-3">
                        <label for="quantity" class="form-label">Quantity</label>
                        <input type="number" class="form-control" id="quantity" name="quantity" value="1" min="1">
                    </div>

                     <!-- <button type="submit" class="btn btn-success">Add to Cart</button> -->
                    <!-- probably working??? -->
                    <button type="submit" class="btn btn-success" onclick="testData()"> Add to Cart </button>
                </div>
            </form>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>

    <?php include "footer.php"?> <!-- include footer -->

</body>
</html>
