<html>
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

        .card {
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
      
    </head>
    <body>
    
  </head>
  <body>
   
    <?php include "header.php"?> <!-- include header -->

    <div class="container py-5">
        <h1 class="text-center mb-5">Our Products</h1>
        
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            <!-- Product 1 -->
            <div class="col">
                <div class="card h-100">
                    <img src="images/gradcap.png" class="card-img-top product-img" alt="Product 1">
                    <div class="card-body">
                        <h5 class="card-title">Graduation Cap</h5>
                        <p class="card-text">Classic black graduation cap.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="price">$19.99</span>
                            <button class="btn btn-primary">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Product 2 -->
            <div class="col">
                <div class="card h-100">
                    <img src="images/gradgown.png" class="card-img-top product-img" alt="Product 2">
                    <div class="card-body">
                        <h5 class="card-title">Graduation Gown</h5>
                        <p class="card-text">Traditional black graduation gown</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="price">$49.99</span>
                            <button class="btn btn-primary">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Product 3 -->
            <div class="col">
                <div class="card h-100">
                    <img src="images/full" class="card-img-top product-img" alt="Product 3">
                    <div class="card-body">
                        <h5 class="card-title">Graduation Set (Cap + Gown)</h5>
                        <p class="card-text">Complete graduation set</p>    
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="price">$64.99</span>
                            <button class="btn btn-primary">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Product 4 -->
            <div class="col">
                <div class="card h-100">
                    <img src="https://us-tuna-sounds-images.voicemod.net/bd9fa7ea-160a-4538-87e3-55ea9186cdcc-1726071954371.jpg" class="card-img-top product-img" alt="Product 4">
                    <div class="card-body">
                        <h5 class="card-title">Steve</h5>
                        <p class="card-text">He is Steve.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="price">$129.99</span>
                            <button class="btn btn-primary">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Product 5 -->
            <div class="col">
                <div class="card h-100">
                    <img src="https://static.standard.co.uk/2025/04/10/11/17/Minecraft-Movies-Chicken-Jockey.webp?width=1200&auto=webp&quality=75" class="card-img-top product-img" alt="Product 5">
                    <div class="card-body">
                        <h5 class="card-title">Chicken Jockey</h5>
                        <p class="card-text">Baby zombie riding a chicken</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="price">$79.99</span>
                            <button class="btn btn-primary">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Product 6 -->
            <div class="col">
                <div class="card h-100">
                    <img src="https://static.wikia.nocookie.net/42581144-dc30-48cf-8cec-49d09700175f" class="card-img-top product-img" alt="Product 6">
                    <div class="card-body">
                        <h5 class="card-title">Kermit</h5>
                        <p class="card-text">this what i feeling rn</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="price">$39.99</span>
                            <button class="btn btn-primary">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <?php include "footer.php"?> <!-- include footer -->

      </body>
    </html>
</html>
