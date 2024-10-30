<?php
include 'connect.php'; // Include your connection script

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $total = mysqli_real_escape_string($conn, $_POST['total']);
    $paymentMethod = mysqli_real_escape_string($conn, $_POST['paymentMethod']);
    $products = mysqli_real_escape_string($conn, $_POST['products']); // New field for products

    // Insert payment and user details into the database
    $query = "INSERT INTO payments (username, email, amount, method, products) VALUES ('$username', '$email', '$total', '$paymentMethod', '$products')";
    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Payment processed successfully!'); window.location.href = 'product.php';</script>";
    } else {
        echo "<script>alert('Error processing payment.');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link rel="stylesheet" href="paymen.css">
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
<h1>Make Your Payment</h1>
<div class="cart-summary">
    <h2>Your Cart</h2>
    <div id="cart-items"></div>
    <div class="total-price">
        Total Price: $<span id="total">0.00</span>
    </div>
</div>

<!-- Payment form -->
<form action="payment.php" method="POST" id="payment-form">
    <div class="user-details">
        <h2>Enter Your Details</h2>
        <input type="text" name="username" id="username" placeholder="Username" required>
        <input type="email" name="email" id="email" placeholder="Email" required>
        <input type="hidden" name="total" id="hidden-total">
        <input type="hidden" name="products" id="hidden-products"> <!-- Hidden input for products -->
    </div>

    <div class="payment-methods">
        <h2>Select Payment Method</h2>
        <label>
            <input type="radio" name="paymentMethod" value="credit-card" checked>
            Credit Card
        </label><br>
        <label>
            <input type="radio" name="paymentMethod" value="paypal">
            PayPal
        </label><br>
        <label>
            <input type="radio" name="paymentMethod" value="bank-transfer">
            Bank Transfer
        </label><br>
    </div>
    <button type="submit" id="pay-button">Pay Now</button>
</form>

<script>
    const mobileMenu = document.getElementById('mobile-menu');
    const navLinks = document.querySelector('nav ul');
    const totalElement = document.getElementById('total');
    const hiddenTotalInput = document.getElementById('hidden-total');
    const hiddenProductsInput = document.getElementById('hidden-products');

    // Load and render cart from local storage
    let cart = JSON.parse(localStorage.getItem('cart')) || [];

    function renderCart() {
        const cartItemsDiv = document.getElementById('cart-items');
        cartItemsDiv.innerHTML = '';
        let total = 0;
        let products = []; // Array to store product details

        if (cart.length === 0) {
            cartItemsDiv.innerHTML = '<p>Your cart is empty.</p>';
        } else {
            cart.forEach(item => {
                const itemDiv = document.createElement('div');
                itemDiv.innerHTML = `${item.name} - $${item.price.toFixed(2)} x ${item.quantity} = $${(item.price * item.quantity).toFixed(2)}`;
                cartItemsDiv.appendChild(itemDiv);
                total += item.price * item.quantity;

                // Add product details to the products array
                products.push(`${item.name} - $${item.price.toFixed(2)} x ${item.quantity}`);
            });
        }
        
        // Update total display and hidden input values
        totalElement.textContent = total.toFixed(2);
        hiddenTotalInput.value = total.toFixed(2); // Set hidden input value for form submission
        hiddenProductsInput.value = products.join(", "); // Set products for form submission
    }

    mobileMenu.addEventListener('click', () => {
        navLinks.classList.toggle('active');
    });

    // Initial rendering of cart items
    renderCart();
</script>
</body>
</html>
