<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        header {
            display: flex;
            align-items: center;
            padding: 15px 30px;
            border-bottom: 1px solid #d0d0d0;
            background: linear-gradient(to bottom, #ffffff, #f9f9f9); /* Subtle gradient */
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            box-shadow: 0 1px 5px rgba(0, 0, 0, 0.03);
        }

        .logo {
            margin-right: 30px;
        }

        .logo a {
            display: block;
        }

        .logo img {
            max-height: 65px;
            transition: transform 0.3s ease;
        }

        .logo img:hover {
            transform: scale(1.03);
        }

        nav {
            flex-grow: 1;
        }

        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: space-evenly;
            align-items: center;
        }

        nav ul li a {
            text-decoration: none;
            color: #333;
            font-size: 1.1em;
            padding: 10px 18px;
            border-radius: 5px;
            position: relative;
            overflow: hidden;
            z-index: 1;
            transition: color 0.3s ease;
        }

        nav ul li a::before {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 2px;
            background-color: darkblue;
            transform: scaleX(0);
            transform-origin: bottom left;
            transition: transform 0.3s ease;
            z-index: -1; 
        }

        nav ul li a:hover {
            color: darkblue;
            background-color: transparent;
        }

        nav ul li a:hover::before {
            transform: scaleX(1);
        }

        nav ul li.cart1 {
            width: 30px;
            height: auto;
            transition: none;
            transform: none;
        }

        nav ul li.cart1:hover {
            transition: none;
            transform: none;
        }

        nav ul li img.cart2 {
            width: 30px;
            height: auto;
            transition: none;
            transform: none;
        }

        nav ul li img.cart2:hover {
            transition: none;
            transform: none;
        }
    </style>
</head>
<body>

    <header>
        <div class="logo">
            <a href="homepage.php"><img src="images/logo.jpg" alt="Gradshop Logo"></a>
        </div>
        <nav>
            <ul>
                <li><a href="products.php">Products</a></li>
                <li><a href="aboutus.php">About Us</a></li>
                <li><a href="#">Promotions</a></li>
                <li class="cart1"><a href="payment.php"><img src="images/cart.png"alt="Shopping Cart" class="cart2"></a></li>
            </ul>
        </nav>
    </header>

    </body>
</html>