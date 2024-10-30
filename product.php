<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="productt.css">
</head>
<body>
<header>
        <div class="navbar">
            <div class="logo">
                <a href="#"><img style="width:40px;height:40px;border-radius:50%;" src="images/uniconlogo.PNG" alt="">Uni-Con</a>
            </div>
            
            <nav>
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="product.php">Products</a></li>
                    <li><a href="payment.php">Payment</a></li>
                    
                    
                </ul>
            </nav>
            <div class="menu-toggle" id="mobile-menu">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </div>
    </header>
    <main>
        <h1>Products</h1>
        <div id="search-container">
            <input type="text" id="search" placeholder="Search products..." oninput="searchProducts()">
        </div>
        <div class="container">
            <div id="product-grid"></div>
            <div id="cart-items">
                <h2>Your Cart</h2>
                <div id="cart-contents"></div>
                <div>Total: $<span id="total">0.00</span></div>
                
            </div>
        </div>
    </main>
<script>
    const mobileMenu = document.getElementById('mobile-menu');
const navLinks = document.querySelector('nav ul');

mobileMenu.addEventListener('click', () => {
    console.log('toggle menu clicked');
    navLinks.classList.toggle('active');
    
});
</script>
    <script src="product.js"></script>
</body>
</html>
