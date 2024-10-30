<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl.css">
    <title>Uni-Con</title>
</head>
<body>
    <header>
        <div class="navbar">
            <div class="logo">
                <a href="#"> <img style="width:40px;height:40px;border-radius:50%;" src="images/uniconlogo.PNG" alt="">Uni-Con</a>
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
    <section>
    <div class="hero-section">
    <div class="hero-content">
        <h1>Your Trusted Online Drugstore</h1>
        <p>Get your medications delivered right to your doorstep.</p>
        <a href="product.php" class="btn">Shop Now</a>
    </div>
    <div class="hero-image">
        <img style="width:600px; height:300px" src="images/hero_1.jpg" alt="Pharmacy products">
    </div>
</div>

    </section>
    <section class="features-section">
        <h2>Discover Our Key Features</h2>
        <div class="features-container">
            <div class="feature-card">
                <img src="images/ferenc-horvath-i8MPup8TIFs-unsplash.jpg" alt="Feature 1">
                <h3>Wide Selection</h3>
                <p>Choose from a variety of medications and health products.</p>
            </div>
            <div class="feature-card">
                <img src="images/claudio-schwarz-4H9xt2DNgNc-unsplash.jpg" alt="Feature 2">
                <h3>Fast Delivery</h3>
                <p>Get your orders delivered quickly and safely to your door.</p>
            </div>
            <div class="feature-card">
                <img src="images/national-cancer-institute-NNpo-liY5aU-unsplash.jpg" alt="Feature 3">
                <h3>Expert Advice</h3>
                <p>Consult with licensed pharmacists for personalized guidance.</p>
            </div>
            <div class="feature-card">
                <img src="images/pexels-pixabay-164425.jpg" alt="Feature 4">
                <h3>Secure Shopping</h3>
                <p>Your privacy and security are our top priorities.</p>
            </div>
        </div>
    </section>
    <section class="services-section" id="services">
        <h2>Our Services</h2>
        <div class="services-container">
            <div class="service-card">
                <h3>Prescription Delivery</h3>
                <p>Get your prescriptions delivered right to your home.</p>
            </div>
            <div class="service-card">
                <h3>Online Consultations</h3>
                <p>Speak with our pharmacists for advice and consultations.</p>
            </div>
            <div class="service-card">
                <h3>Medication Reminders</h3>
                <p>Stay on track with personalized medication reminders.</p>
            </div>
            <div class="service-card">
                <h3>Health Resources</h3>
                <p>Access a wealth of information about medications and health.</p>
            </div>
        </div>
    </section>
    <section class="testimonials-section">
        <h2>What Our Customers Say</h2>
        <div class="testimonials-container">
            <div class="testimonial-card">
                <p>"Great service! My prescription was delivered quickly and safely."</p>
                <h4> Sarah N.</h4>
            </div>
            <div class="testimonial-card">
                <p>"I love the online consultations. The pharmacist was very helpful!"</p>
                <h4> francis K.</h4>
            </div>
            <div class="testimonial-card">
                <p>"Fast delivery and excellent customer service. Highly recommend!"</p>
                <h4> Charity R.</h4>
            </div>
            <div class="testimonial-card">
                <p>"The health resources are invaluable. I've learned so much!"</p>
                <h4> Michael S.</h4>
            </div>
        </div>
    </section>
    <section class="cta-section">
        <div class="cta-content">
            <h2>Ready to Get Started?</h2>
            <p>Join thousands of satisfied customers and enjoy hassle-free access to medications.</p>
            <div class="cta-buttons">
                <a href="product.php" class="cta-btn">Buy now</a>
                <a href="payment.php" class="login-btn">Payment</a>
            </div>
        </div>
        <div class="cta-image">
            <img style="height:300px;width:500px;" src="images/bg_1.jpg" alt="Happy Customer">
        </div>
    </section>
    <section class="team-section">
        <h2>Meet Our Team</h2>
        <div class="team-container">
            <div class="team-member">
                <img src="images/team-1.jpg" alt="Team Member 1">
                <h3>Adones Rukundo</h3>
                <p>Pharmacist</p>
                <p>Dedicated to providing the best care and advice for our customers.</p>
            </div>
            <div class="team-member">
                <img src="images/team-5.jpg" alt="Team Member 2">
                <h3>Ismael Kihagama</h3>
                <p>Customer Service</p>
                <p>Ensuring a smooth experience for every customer interaction.</p>
            </div>
            <div class="team-member">
                <img src="images/team-2.jpg" alt="Team Member 3">
                <h3>Emily Mbeiza</h3>
                <p>Healthcare Advisor</p>
                <p>Providing expert advice on medications and health services.</p>
            </div>
            <div class="team-member">
                <img src="images/team-6.jpg" alt="Team Member 4">
                <h3>Racheal Musene</h3>
                <p>Logistics Coordinator</p>
                <p>Managing efficient delivery and inventory processes.</p>
            </div>
        </div>
    </section>
    <section class="faq-section" id="faqs">
        <h2>Frequently Asked Questions</h2>
        <div class="faq-container">
            <div class="faq-item">
                <div class="faq-question" onclick="toggleAnswer(this)">
                    <h3>What is your return policy?</h3>
                    <span class="arrow">+</span>
                </div>
                <div class="faq-answer">
                    <p>You can return any unopened products within 30 days for a full refund.</p>
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question" onclick="toggleAnswer(this)">
                    <h3>Do you offer online consultations?</h3>
                    <span class="arrow">+</span>
                </div>
                <div class="faq-answer">
                    <p>Yes, we offer online consultations with our licensed pharmacists.</p>
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question" onclick="toggleAnswer(this)">
                    <h3>How can I track my order?</h3>
                    <span class="arrow">+</span>
                </div>
                <div class="faq-answer">
                    <p>You can track your order using the tracking link sent to your email.</p>
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question" onclick="toggleAnswer(this)">
                    <h3>What payment methods do you accept?</h3>
                    <span class="arrow">+</span>
                </div>
                <div class="faq-answer">
                    <p>We accept all major credit cards, PayPal, and Apple Pay.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="contact-section" id="contact">
        <h2>Contact Us</h2>
        <div class="contact-container">
            <div class="contact-info">
                <h3>Get in Touch</h3>
                <p>If you have any questions, feel free to reach out to us!</p>
                <p><strong>Email:</strong> ismaelkihagama@gmail.com</p>
                <p><strong>Phone:</strong> =+256700750061</p>
            </div>
            <div class="contact-form">
    <h3>Send Us a Message</h3>
    <form action="send_email.php" method="post">
        <input type="text" name="name" placeholder="Your Name" required>
        <input type="email" name="email" placeholder="Your Email" required>
        <textarea name="message" placeholder="Your Message" rows="4" required></textarea>
        <button type="submit">Submit</button>
    </form>
</div>

        </div>
        <div class="map-container">
            <h3>Our Location</h3>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31833.516056123403!2d30.661278915475186!3d-0.6053014505117511!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19a1b550f88d5f81%3A0xb15de91c0d166e04!2sMbarara%2C%20Uganda!5e0!3m2!1sen!2sus!4v1617199101451!5m2!1sen!2sus"
                width="100%"
                height="300"
                style="border:0;"
                allowfullscreen=""
                loading="lazy"></iframe>
        </div>
    </section>
    <section>
    <footer class="footer-section">
        <div class="footer-container">
            <div class="footer-info">
                <h3>About Us </h3>
                <p>Your trusted source for medications and health advice. <a style="color:blue; font:tahom" href="about.php">Read More</a></p>
            </div>
            <div class="footer-links">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#faqs">FAQs</a></li>
                    <li><a href="#contact">Contact Us</a></li>
                    
                </ul>
            </div>
            <div class="footer-contact">
                <h3>Contact Us</h3>
                <p>Email: ismaelkihagama@gmail.com</p>
                <p>Phone: +256700750061</p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 Uni-con pharmacy. All rights reserved. Developed by Ismael K</p>
        </div>
    </footer>
    </section>

    
    <script src="script.js"></script>
    
    
</body>
</html>
