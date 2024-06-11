<!-- resources/views/includes/header.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <title>EverStylish</title>
</head>
<body>
    <header>
        <div class="top-container">
            <div class="contact-info">
                <span><i class="fa-solid fa-phone"></i> 882188858</span>
                <span><i class="fa-regular fa-envelope"></i> care@everstylish.com</span>
            </div>
        </div>
       <div class="mid-container">
       <div class="logo">
            <img src="{{ asset('images/everstylish.png') }}" alt="EverStylish Logo">
        </div>
        <nav class="navigation">
            <ul>
                <li><a href="{{ url('/') }}">HOME</a></li>
                <li><a href="{{ url('/jewelery') }}">ALL JEWELRY</a></li>
                <li><a href="{{ url('/what_new') }}">WHAT'S NEW?</a></li>
                <li class="dropdown">
                    <a href="{{ url('/') }}">TYPE</a>
                    <ul class="dropdown-content">
                        <li><a href="{{ url('/type/rings') }}">Rings</a></li>
                        <li><a href="{{ url('/type/earrings') }}">Earrings</a></li>
                        <li><a href="{{ url('/type/neckpieces') }}">Neckpieces</a></li>
                        <li><a href="{{ url('/type/bangles-and-bracelets') }}">Bangles and Bracelets</a></li>
                        <li><a href="{{ url('/type/anklets') }}">Anklets</a></li>
                        <li><a href="{{ url('/type/hair-accessories') }}">Hair Accessories</a></li>
                        <li><a href="{{ url('/type/nosepins') }}">Nosepins</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="{{ url('/') }}">COLLECTION</a>
                    <ul class="dropdown-content">
                        <li><a href="{{ url('/type/rings') }}">Under 99</a></li>
                        <li><a href="{{ url('/type/earrings') }}">The Soft-Girl Essentials</a></li>
                        <li><a href="{{ url('/type/neckpieces') }}">The Light Weight Casuals</a></li>
                        <li><a href="{{ url('/type/bangles-and-bracelets') }}">The Executive Ensemble</a></li>
                        <li><a href="{{ url('/type/anklets') }}">The Campus Life Collection</a></li>
                        <li><a href="{{ url('/type/hair-accessories') }}">The Party Collection</a></li>
                        <li><a href="{{ url('/type/nosepins') }}">The Desi Girl Collection</a></li>
                        <li><a href="{{ url('/type/nosepins') }}">The Great Indian Wedding Collection</a></li>
                       
                    </ul>
                </li>
                <li><a href="{{ url('/sanjoya') }}">SANJOYA</a></li>
            </ul>
        </nav>
        <div class="user-actions">
            <a href="{{ url('/search') }}"><i class="fa-solid fa-magnifying-glass"></i></a>
            <div class="user-dropdown">
                <a href="/"><i class="fa-regular fa-circle-user"></i></a>
                <ul class="dropdown-content">
                    <li><a href="{{ url('/account') }}">My Account</a></li>
                    <li><a href="{{ url('/store-credit') }}">Store Credit</a></li>
                    <li><a href="{{ url('/wishlist') }}">My Wish List</a></li>
                    <li><a href="{{ url('/login') }}">Login/Signup</a></li>
                    <li><a href="{{ url('/orders') }}">My Orders</a></li>
                </ul>
            </div>
            <a href="{{ url('/wishlist') }}"><i class="fa-regular fa-heart"></i></a>
            <a href="{{ url('/cart') }}"><i class="fa-solid fa-cart-shopping"></i></a>
        </div>
       </div>
    </header>
</body>

</html>