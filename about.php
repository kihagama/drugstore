<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="abo.css">
    

    <title>About Us - Uni-Con</title>
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
        <section class="hero" style="background:url('images/pexels-cottonbro-5722883.jpg') no-repeat center center/cover;">
            <div class="hero-text">
                <h2>Your Health, Our Commitment</h2>
                <p style="color:white;">Discover quality care and products at Uni-Con, your trusted pharmacy.</p>
            </div>
        </section>

        <section class="about-section">
            <h2>About Uni-Con</h2>
            <p>At Uni-Con, we believe in providing accessible healthcare to everyone. Our pharmacy is dedicated to ensuring that our customers receive high-quality medications and health products. We strive to create a warm and welcoming environment where our customers can feel comfortable and confident in their healthcare decisions.</p>
        </section>

        <section class="mission-section">
            <h2>Our Mission</h2>
            <p>Our mission is to improve the health and well-being of our community through quality pharmacy services and personalized care. We are committed to providing reliable information, expert advice, and compassionate service.</p>
        </section>
        <h2 class="ourteam">Meet Our Team</h2> 
        <section class="team-section">
           
            <div class="team-member">
                <img src="images/team-1.jpg" alt="Pharmacist Grace Lwasa">
                <h3>John Doe</h3>
                <p>Lead Pharmacist</p>
            </div>
            <div class="team-member">
                <img src="images/team-6.jpg" alt="Pharmacist Jane Atuhe">
                <h3>Jane Smith</h3>
                <p>Pharmacy Technician</p>
            </div>
            <div class="team-member">
                <img src="images/team-5.jpg" alt="Pharmacist Alex Kaliza">
                <h3>Alex Johnson</h3>
                <p>Customer Service Specialist</p>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Uni-Con. All rights reserved.</p>
    </footer>
    <script>
        const mobileMenu = document.getElementById('mobile-menu');
const navLinks = document.querySelector('nav ul');

mobileMenu.addEventListener('click', () => {
    
    navLinks.classList.toggle('active');
    
});
    </script>
</body>
</html>
