<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            color: #333;
            background-color: #f4f4f4;
        }

        .hero {
            padding: 200px 30px;
            text-align: center;
            position: relative;
            color: white;
            overflow: hidden;
            font-family: 'Playfair Display', serif;
        }

        .hero-background {
            background-image: url('images/hppic1.jpg');
            background-size: cover;
            background-position: center;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -2;
        }

        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: black;
            opacity: 0.5;
            z-index: -1;
        }

        .hero-content {
            position: relative;
            padding: 30px;
        }

        .hero-content h2 {
            font-size: 3.5em;
            margin-bottom: 15px;
            font-weight: 700;
        }

        .hero-content p {
            font-size: 1.5em;
            margin-bottom: 30px;
            font-weight: 300;
            line-height: 1.6;
        }

        .hero-content button {
            background-color: darkblue;
            color: white;
            border: none;
            padding: 15px 30px;
            font-size: 1.2em;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            font-family: 'Open Sans', sans-serif;
        }

        .hero-content button:hover {
            background-color: #0056b3;
        }

        .reviews {
            padding: 60px 30px;
            text-align: center;
            border-top: 1px solid #ddd;
            border-bottom: 1px solid #ddd;
            background-color: #F2F0EF;
            overflow: hidden;
            position: relative;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
        }

        .reviews h2 {
            font-size: 2.8em;
            margin-bottom: 30px;
            font-family: 'Playfair Display', serif;
            color: darkblue;
        }

        .review-container {
            display: flex;
            white-space: nowrap;
            padding: 30px 0;
            animation: scrollReviews 15s linear infinite;
            padding-left: 20px;
        }

        .review-item {
            background-color: #f9f9f9;
            border: 1px solid #eee;
            padding: 25px;
            margin: 0 20px;
            border-radius: 8px;
            box-shadow: 0 3px 8px rgba(0, 0, 0, 0.06);
            flex-shrink: 0;
            min-width: 300px;
            text-align: left;
            transition: transform 0.2s ease-in-out;
        }

        .review-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
        }

        .review-item p {
            font-style: italic;
            color: #666;
            margin-bottom: 10px;
            line-height: 1.4;
        }

        .review-item cite {
            font-size: 1em;
            color: #444;
            font-weight: bold;
            display: block;
            margin-top: 10px;
            font-style: normal;
        }

        .review-item .rating {
            color: gold;
            font-size: 1.2em;
            margin-bottom: 5px;
        }

        .review-item .date {
            color: #777;
            font-size: 0.9em;
            margin-bottom: 5px;
            display: block;
        }

        @keyframes scrollReviews {
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(-100%);
            }
        }

        .benefits {
            padding: 60px 30px;
            background-color: #f9f9f9;
        }

        .benefits h2 {
            font-size: 2.5em;
            margin-bottom: 40px;
            font-family: 'Playfair Display', serif;
            text-align: center;
            color: darkblue;
        }

        .benefit-grid {
            display: flex;
            justify-content: space-around;
            align-items: center;
            flex-wrap: wrap;
        }

        .benefit-item {
            text-align: center;
            margin-bottom: 30px;
            flex-basis: calc(33% - 40px);
            max-width: 300px;
        }

        .benefit-icon-container {
            background-color: #e0f2f7;
            border-radius: 50%;
            padding: 20px;
            margin: 0 auto 15px;
            width: 80px;
            height: 80px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .benefit-icon-container img {
            max-width: 100%;
            max-height: 100%;
            display: block;
        }

        .benefit-item h3 {
            font-size: 1.5em;
            margin-bottom: 10px;
            color: #333;
        }

        .benefit-item p {
            color: #666;
            line-height: 1.4;
        }

        footer {
            background-color: darkblue;
            color: white;
            padding: 25px;
            text-align: center;
            margin-top: auto;
            font-size: 0.9em;
        }

        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&family=Playfair+Display:wght@400;700&display=swap');
    </style>
</head>
<body>

    <?php include "header.php" ?>

    <section class="hero">
        <div class="hero-background"></div>
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h2>Celebrating Your Achievements</h2>
            <p>Find everything you need for your graduation!</p>
            <a href="products.php" target="_blank"><button>Browse</button></a>
        </div>
    </section>

    <section class="reviews">
        <h2>What Our Graduates Are Saying</h2>
        <div class="review-container">
            <div class="review-item">
                <div class="rating">★★★★★</div>
                <cite>Afiq Hakimi</cite>
                <span class="date">05-03-25</span>
                <p>It was easy to place my order for my Son's graduation... Very pleased with the site.</p>
            </div>
            <div class="review-item">
                <div class="rating">★★★★☆</div>
                <cite>Mei Ling Tan</cite>
                <span class="date">04-10-24</span>
                <p>This website made preparing for graduation so much easier. They have everything you can think of, from caps and gowns to thank you cards.</p>
            </div>
            <div class="review-item">
                <div class="rating">★★★★★</div>
                <cite>Harvinder Singh</cite>
                <span class="date">12-01-25</span>
                <p>I found everything I needed for my graduation ceremony on this website. The prices were reasonable, and the checkout process was smooth.</p>
            </div>
        </div>
    </section>

    <section class="benefits">
        <h2>Our Benefits</h2>
        <div class="benefit-grid">
            <div class="benefit-item">
                <div class="benefit-icon-container">
                    <img src="images/ws.png" alt="Wide Selection">
                </div>
                <h3>Wide Selection</h3>
                <p>Wide selection of graduation products to meet all your needs.</p>
            </div>
            <div class="benefit-item">
                <div class="benefit-icon-container">
                    <img src="images/fs.png" alt="Fast Shipping">
                </div>
                <h3>Fast Shipping</h3>
                <p>Benefit from fast and reliable shipping to get your items on time.</p>
            </div>
            <div class="benefit-item">
                <div class="benefit-icon-container">
                    <img src="images/cs.png" alt="Customer Support">
                </div>
                <h3>Customer Support</h3>
                <p>Receive excellent customer support whenever you need assistance.</p>
            </div>
        </div>
    </section>

    <?php include "footer.php" ?>

</body>
</html>