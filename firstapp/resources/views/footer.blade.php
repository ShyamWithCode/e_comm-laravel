<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/footer.css">
    <title>Footer Example</title>
</head>
<body>
    <footer>
    <div class="contact-info">
        <p><a href=""><i class="fa-solid fa-phone"></i> care@everstylish.com</a></p>
        <p><a href=""><i class="fa-regular fa-envelope"></i> +91 88821 88858</a></p>
    </div>
    <div class="categories">
        <h4>Categories</h4>
        <ul>
            <li><a href="#">All Jewellery</a></li>
            <li><a href="#">Rings</a></li>
            <li><a href="#">Earrings</a></li>
            <li><a href="#">Neckpieces</a></li>
            <li><a href="#">Bracelets and Anklets</a></li>
        </ul>
    </div>
    <div class="information">
        <h4>Information</h4>
        <ul>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Contact Us</a></li>
            <li><a href="#">Terms & Conditions</a></li>
            <li><a href="#">Delivery & Returns</a></li>
            <li><a href="#">Privacy Policy</a></li>
        </ul>
    </div>
    <div class="quick-links">
        <h4>Quick Links</h4>
        <ul>
            <li><a href="#">My Account</a></li>
            <li><a href="#">Orders Tracking</a></li>
            <li><a href="#">Questions?</a></li>
        </ul>
    </div>
    <div class="newsletter">
        <h5>Subscribe to our newsletter and get updates on latest designs and sales.</h5>
        <input type="email" placeholder="Your email address" />
        <button>Subscribe</button>
        <div class="payment-methods">
            <img src="{{ asset('images/payment.png') }}" alt="Visa">
        </div>
    </div>
</footer>

</body>
</html>
