<section id="contact" class="contact">
    <div class="container">
        <div class="section-header">
            <h2>Contact Us</h2>
            <p>Get in touch with us</p>
        </div>
        <div class="contact-container">
            <div class="contact-info">
                <div class="info-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <h3>Address</h3>
                    <p>123 Main Street, City, Country</p>
                </div>
                <div class="info-item">
                    <i class="fas fa-envelope"></i>
                    <h3>Email</h3>
                    <p><?php echo $contact_email; ?></p>
                </div>
                <div class="info-item">
                    <i class="fas fa-phone"></i>
                    <h3>Phone</h3>
                    <p><?php echo $phone_number; ?></p>
                </div>
            </div>
            <div class="contact-form">
                <form id="contact-form" action="process_form.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="name" placeholder="Your Name" required>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" placeholder="Your Email" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="subject" placeholder="Subject" required>
                    </div>
                    <div class="form-group">
                        <textarea name="message" placeholder="Your Message" required></textarea>
                    </div>
                    <button type="submit" class="btn">Send Message</button>
                </form>
            </div>
        </div>
    </div>
</section>
