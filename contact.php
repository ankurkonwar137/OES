<?php 
include './header.php';
?>

<div class="container-fluid">
    <div style="margin-top: 120px;">
        <div class="container">
            <div class="row g-4">
                <!-- Contact Form Column -->
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="form-wrapper">
                        <h1 class="title">Contact Us</h1>
                        <p class="subtitle">Got questions or comments?<br>Use the form below to get in touch.</p>
                        <form class="contact-form">
                            <div class="form-row">
                                <div class="form-column">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" id="name" placeholder="Your name" class="form-input" required>
                                </div>
                                <div class="form-column">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" id="email" placeholder="Your email" class="form-input" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-column">
                                    <label for="contact" class="form-label">Contact</label>
                                    <input type="tel" id="contact" placeholder="Your phone number" class="form-input" required>
                                </div>
                                <div class="form-column">
                                    <label for="subject" class="form-label">Subject</label>
                                    <input type="text" id="subject" placeholder="Subject" class="form-input" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-column">
                                    <label for="issue" class="form-label">Describe your issue</label>
                                    <textarea id="issue" placeholder="Describe your issue" rows="4" class="form-textarea" required></textarea>
                                </div>
                            </div>
                            <button type="submit" class="submit-button">Submit</button>
                        </form>
                    </div>
                </div>

                <!-- Map and Address Column -->
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="address-wrapper">
                        <h2>Our Location</h2>
                        <div class="address-details mb-4">
                            <h4>Office of Online Education & Skilling</h4>
                            <p>Research Building</p>
                            <p>Indian Institute of Technology Guwahati</p>
                            <p>Guwahati, Assam - 781039</p>
                            <p>Email: does@iitg.ac.in</p>
                            <p>Phone: +91-361-258XXXX</p>
                        </div>
                        <div class="map-container">
                            <iframe 
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3580.8901843175483!2d91.68683387609095!3d26.185098085128775!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375a5b3ba8ba263d%3A0x8018b33b3fe9f66f!2sResearch%20Building%2C%20IIT%20Guwahati!5e0!3m2!1sen!2sin!4v1708500408019!5m2!1sen!2sin" 
                                width="100%" 
                                height="450" 
                                style="border:0;" 
                                allowfullscreen="" 
                                loading="lazy" 
                                referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>  <br/>   

<?php include './footer.php'; ?>