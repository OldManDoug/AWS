<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Playfair+Display:wght@400;700&display=swap');

    footer {
        font-family: 'Montserrat', sans-serif;
        background-color: #2c3e50;
        color: #ecf0f1;
        padding: 50px 20px;
        text-align: center;
        margin-top: auto;
        font-size: 0.95em;
    }

    .footer {
        max-width: 1250px;
        margin: 0 auto;
    }

    .footer-content {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
        gap: 40px;
    }

    .footer-section {
        flex: 1 1 250px;
        text-align: left;
    }

    .footer-section h4 {
        margin-bottom: 20px;
        border-bottom: 2px solid rgba(255, 255, 255, 0.2);
        padding-bottom: 8px;
        font-weight: 600;
        font-family: 'Playfair Display', serif;
    }

    .footer-section a {
        color: #ecf0f1;
        text-decoration: none;
        display: block;
        margin-bottom: 10px;
        transition: color 0.3s ease;
    }

    .footer-section a:hover {
        color: #95a5a6;
    }

    .map-container {
        width: 100%;
        margin-top: 30px;
    }

    .map-container iframe {
        width: 100%;
        height: 350px;
        border: 0;
        border-radius: 12px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    .newsletter-form {
        margin-top: 25px;
    }

    .newsletter-form input[type="email"] {
        padding: 12px;
        border: 1px solid rgba(255, 255, 255, 0.15);
        border-radius: 6px;
        width: 70%;
        max-width: 280px;
        margin-right: 15px;
        background-color: rgba(255, 255, 255, 0.05);
        color: #ecf0f1;
    }

    .newsletter-form button {
        padding: 12px 20px;
        margin-top: 15px;
        border: none;
        border-radius: 6px;
        background-color: #3498db;
        color: white;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .newsletter-form button:hover {
        background-color: #2980b9;
    }

    .message-box {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: white;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        z-index: 1000;
        display: none;
        text-align: center;
    }

    .message-box button {
        margin-top: 15px;
        padding: 10px 20px;
        border: none;
        background-color: #3498db;
        color: white;
        border-radius: 6px;
        cursor: pointer;
    }

    .message-box p {
        color: #333;
        font-size: 1.1em;
    }

    @media (max-width: 768px) {
        .footer-content {
            flex-direction: column;
            align-items: center;
        }

        .footer-section {
            text-align: center;
        }
    }
</style>

<footer>
    <div class="footer">
        <div class="footer-content">
            <div class="footer-section">
                <h4>Quick Links</h4>
                <a href="homepage.php">Home</a>
                <a href="products.html">Products</a>
                <a href="aboutus.php">About Us</a>
            </div>

            <div class="footer-section">
                <h4>Contact Us</h4>
                <p>Email: Gradshop@gmail.com</p>
                <p>Phone: 012-431-0191</p>
                <p>Address: 77, Lorong Lembah Permai 3, 11200 Tanjung Bungah, Pulau Pinang</p>
            </div>

            <div class="footer-section">
                <h4>Newsletter</h4>
                <div class="newsletter-form">
                    <input type="email" id="newsletterEmail" placeholder="Enter your email">
                    <button onclick="subscribeNewsletter()">Subscribe</button>
                </div>
            </div>
        </div>

        <div class="map-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3974.116901578918!2d100.28110771431723!3d5.466667035465455!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x304ac34834e8f3c3%3A0xf1d20294981b1831!2s77%20Lorong%20Lembah%20Permai%203%2C%20Tanjung%20Bungah%2C%20Penang!5e0!3m2!1sen!2smy!4v1681234567890!5m2!1sen!2smy" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>
    <div class="message-box" id="msgBox">
        <p id="msgBoxText"></p>
        <button onclick="closeMsgBox()">OK</button>
    </div>
</footer>

<script>
    function subscribeNewsletter() {
        const emailInput = document.getElementById('newsletterEmail');
        const email = emailInput.value.trim();
        const msgBox = document.getElementById('msgBox');
        const msgBoxText = document.getElementById('msgBoxText');

        if (!isValidEmail(email)) {
            msgBoxText.textContent = 'Please enter a valid email address.';
            msgBox.style.display = 'block';
            return;
        }

        msgBoxText.textContent = 'Thank you for subscribing!';
        msgBox.style.display = 'block';
        emailInput.value = '';
    }

    function closeMsgBox() {
        document.getElementById('msgBox').style.display = 'none';
    }

    function isValidEmail(email) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }
</script>