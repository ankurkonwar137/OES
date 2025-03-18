<?php 
 include './header.php';
?>

    <div class="container-fluid">

        <!-- <div id="navbar-placeholder"></div> -->

        <div class="content-spacing"></div>

        <!-- Carousel Section -->
        <section class="carousel ">
            <div class="carousel-container">
                <div class="slide active">
                    <img src="assets/images/slider/OesNew2.png" alt="Online Learning">
                    <div class="caption">Transform Your Future with Digital Learning.</div>
                </div>
                <div class="slide">
                    <img src="assets/images/slider/culturalEvents.png" alt="Skill Development">
                    <div class="caption">The joyful cultural night</div>
                </div>
                <div class="slide">
                    <img src="assets/images/slider/AI_Con_New.jpg" alt="Team Work">
                    <!-- <div class="caption">Learn from Industry Experts</div> -->
                </div>
                <!-- <div class="slide">
                    <img src="assets/images/slider/ban4.jpeg" alt="Online Learning"> -->
                    <!-- <div class="caption">Transform Your Future with Digital Learning</div> -->
                <!-- </div> -->
                
            </div>

            <!-- Carousel Arrows -->
            <button class="prev" onclick="prevSlide()"></button>
            <button class="next" onclick="nextSlide()"></button>

            <!-- For Dot Carousel-->
            <!-- <div class="dots-container">
           
            </div> -->
        </section>

        <div class="container py-5">
            <div class="row align-items-stretch">
                <!-- About Us Column -->
                <div class="col-lg-8 col-md-7 mb-4 d-flex">
                    <div class="content-box h-100 w-100" id="about">
                        <h2>About OES</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    </div>
                </div>

                <!-- Notification Column -->
                <div class="col-lg-4 col-md-5 mb-4 d-flex">
                    <aside class="notification-panel h-100 w-100">
                        <h3 class="notification-title">Notifications</h3>
                        <div class="notification-content">
                            <marquee direction="up" scrollamount="2" behavior="scroll" class="notification-scroll" onmouseover="this.stop();" onmouseout="this.start();">
                                <a href="https://iitg.ac.in/acad/admission/online/" target="_blank" class="notification-item">📢 Online BSc (Hons) in AI</a>
                                <a href="#" class="notification-item">📢 Exam Date Announced</a>
                                <a href="#" class="notification-item">📢 New Course Available</a>
                                <a href="#" class="notification-item">📢 Announcement for new admission</a>
                                <a href="#" class="notification-item">📢 Workshop on Cyber-Security</a>
                            </marquee>
                            <div class="view-all">
                                <a href="./notification.php">View All</a>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
        
            <!-- <div class="content-spacing"></div> -->
        <!-- <div class="content-box">
            <h2>About</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        </div> -->
        
         <!-- for contact us -->
    <!-- <link rel="stylesheet" href="assets/css/contact.css"> -->
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

    <?php include './footer.php'; ?>
    
   