<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Gradshop</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
            line-height: 1.6;
        }

        #about-container {
            max-width: 1200px;
            margin: 80px auto;
            padding: 60px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            border-radius: 16px;
            background-color: #fff;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.07);
            transition: box-shadow 0.3s ease-in-out;
        }

        #about-container:hover {
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
        }

        #about-text {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        h2 {
            color: #2c3e50;
            font-size: 2.5rem;
            margin-bottom: 25px;
            line-height: 1.2;
        }

        p {
            margin-bottom: 20px;
            font-size: 1.1rem;
            line-height: 1.8;
        }

        a {
            color: #007bff;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        a:hover {
            color: #0056b3;
            text-decoration: underline;
        }

        .about-image {
            width: 100%;
            height: auto;
            border-radius: 12px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.08);
            object-fit: cover;
        }

        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
            text-align: center;
            padding: 15px 0;
        }

        nav ul li {
            display: inline-block;
            margin: 0 20px;
        }

        nav a {
            color: #f8f9fa;
            text-decoration: none;
            font-weight: 400;
            transition: color 0.3s ease;
        }

        nav a:hover {
            color: #ffffff;
            text-decoration: none;
        }

        @media (max-width: 992px) {
            #about-container {
                grid-template-columns: 1fr;
                text-align: center;
                padding: 40px;
                gap: 40px;
            }

            #about-text {
                align-items: center;
            }

            .about-image {
                max-width: 80%;
                margin: 0 auto;
            }
        }

        @media (max-width: 576px) {
            #about-container {
                padding: 30px 20px;
            }

            h2 {
                font-size: 2.2rem;
                margin-bottom: 15px;
            }

            p {
                font-size: 1rem;
            }

            nav ul li {
                margin: 0 10px;
            }
        }
    </style>
</head>
<body>
    <?php include "header.php" ?>
    <div id="about-container">
        <div id="about-text">
            <h2>Our Story</h2>
            <p>Gradshop started in 2019 in the vibrant town of Tanjung Bungah, Penang, with one simple mission — to make graduation unforgettable.</p>
            <p>We know what it feels like to cross that stage — the pride, the relief, the joy. That’s why we create keepsakes that don’t just look good, but <strong>mean</strong> something. Whether it’s a custom stole, a framed diploma, or a thoughtful gift, each piece celebrates your journey and the people who helped you get there.</p>
            <p>We’re not just a shop. We’re your biggest cheerleaders, honoring milestones with heart.</p>
        </div>
        <img src="images/aboutus.jpg" alt="Graduation Celebration" class="about-image">
    </div>
    <?php include "footer.php" ?>
</body>
</html>